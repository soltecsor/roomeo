<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class UserController extends Controller
{

    public function form_novo_usuario()
    {
        //Carrega o formulario para criar um novo usuario
        $roles = Role::all();

        return view("forms.form_novo_usuario")->with("roles", $roles);
    }
    public function form_novo_role()
    {
        //Carrega o formulario para criar um novo rol
        $roles = Role::all();

        return view("forms.form_novo_role")->with("roles", $roles);
    }
    public function form_novo_permissao()
    {
        //Carrega o formulario para criar uma nova permissao

        $roles = Role::all();
        $permissoes = Permission::all();

        return view("forms.form_novo_permissao")->with("roles", $roles)->with("permissoes", $permissoes);
    }
    public function listar_usuarios()
    {
        //Retorna uma lista de usuarios paginados de 100 em 100
        $usuarios = User::paginate(100);

        return view("user.listar_usuarios")->with("usuarios", $usuarios);
    }
    public function criar_usuario(Request $request)
    {
        //Cria um novo usuario no sistema
        $regras = [
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users',
        ];

        $mensagens = [
            'password.min' => 'Password must be at least 8 characters.',
            'email.unique' => 'The email is already registered in the system.',
        ];

        $validator = Validator::make($request->all(), $regras, $mensagens);
        if ($validator->fails()) {
            flash('User validation error.')->error();
            return redirect(url('/listar_usuarios'))
                ->withErrors($validator->errors());
        }
        $usuario = new User;
        $usuario->name = strtoupper($request->input("nome") . " " . $request->input("apelido"));
        $usuario->nome = strtoupper($request->input("nome"));
        $usuario->apelido = strtoupper($request->input("apelido"));
        $usuario->telefone = $request->input("telefone");
        $usuario->email = $request->input("email");
        $usuario->password = bcrypt($request->input("password"));


        if ($usuario->save()) {
            flash('User successfully created!')->success();
            return redirect(url('/listar_usuarios'));
        } else {
            flash('Error creating user.')->error();
            return redirect(url('/form_novo_usuario'));
        }
    }
    public function criar_rol(Request $request)
    {
        $rol = new Role;
        $rol->name = $request->input("name");
        $rol->slug = $request->input("slug");
        $rol->description = $request->input("descripcion");
        if ($rol->save()) {
            flash('Successfully created User Type')->success();
            return redirect(url('/form_novo_role'));
        } else {
            flash('Error creating user type.')->error();
            return redirect(url('/form_novo_role'));
        }
    }
    public function criar_permissao(Request $request)
    {

        $permissao = new Permission;
        $permissao->name = $request->input("permissao_nome");
        $permissao->slug = $request->input("permissao_slug");
        $permissao->description = $request->input("permissao_descripcion");
        if ($permissao->save()) {
            flash('Permission successfully created')->success();
            return redirect(url('/form_novo_permissao'));
        } else {
            flash('Error creating permission.')->error();
            return redirect(url('/form_novo_permissao'));
        }
    }
    public function agregar_permiso(Request $request)
    {
        $roleid = $request->input("rol_sel");
        $idper = $request->input("permiso_rol");
        $rol = Role::find($roleid);
        $rol->assignPermission($idper);

        if ($rol->save()) {
            flash('Successfully aggregated permission')->success();
            return redirect(url('/form_novo_permissao'));
        } else {
            flash('Error aggregating permission.')->error();
            return redirect(url('/form_novo_permissao'));
        }
    }
    public function form_editar_usuario($id)
    {   
        $usuario = User::find($id);
        $roles = Role::all();
        return view("forms.form_editar_usuario")->with("usuario", $usuario)
            ->with("roles", $roles);
    }
    public function editar_usuario(Request $request)
    {

        $idusuario = $request->input("id_usuario");
        $usuario = User::find($idusuario);
        $usuario->name = strtoupper($request->input("nome"));
        $usuario->apelido = strtoupper($request->input("apelido"));
        $usuario->telefone = $request->input("telefone");

        if ($request->has("rol")) {
            $rol = $request->input("rol");
            $usuario->revokeAllRoles();
            $usuario->assignRole($rol);
        }

        if ($usuario->save()) {
            flash('User updated successfully')->success();
            return redirect(url('/listar_usuarios'))
                ->with("idusuario", $idusuario);
        } else {
            flash('Error updating user')->error();
            return redirect(url('/form_editar_usuario'));
        }
    }
    public function buscar_usuario(Request $request)
    {
        $dato = $request->input("dato_buscado");
        $usuarios = User::where("name", "like", "%" . $dato . "%")->orwhere("apelido", "like", "%" . $dato . "%")->paginate(100);
        return view('user.listar_usuarios')->with("usuarios", $usuarios);
    }
    public function apagar_usuario(Request $request)
    {  
        $idusuario = $request->input("id_usuario");
        $usuario = User::find($idusuario);

        if ($usuario->delete()) {
            flash('User deleted successfully')->success();
            return redirect(url('/listar_usuarios'));
        } else {
            flash('Error deleting user')->error();
            return redirect(url('/listar_usuarios'));
        }
    }
    public function editar_acesso(Request $request)
    {   
        $idusuario = $request->input("id_usuario");
        $usuario = User::find($idusuario);
        $usuario->email = $request->input("email");
        $usuario->password = bcrypt($request->input("password"));
        if ($usuario->save()) {
            flash('User access successfully changed!')->success();
            return redirect(url('/listar_usuarios'))->with("idusuario", $idusuario);
        } else {
            flash('Error changing user access.')->error();
            return redirect(url('/listar_usuarios'));
        }
    }
    public function agregar_rol($idusu, Request $request)
    {
        $idrol = $request['role'];
        $usuario = User::find($idusu);
        $usuario->assignRole($idrol);
        $usuario = User::find($idusu);
        $rolesasignados = $usuario->getRoles();
        return redirect('/home');
    }
    public function apagar_rol($idusu, Request $request)
    {
        $idrol = $request['role'];
        $usuario = User::find($idusu);
        $usuario->revokeRole($idrol);
        $rolesasignados = $usuario->getRoles();
        return redirect('/home');
    }
    public function form_excluir_usuario($id)
    {
        $usuario = User::find($id);
        return view("confirmacoes.form_excluir_usuario")->with("usuario", $usuario);
    }
    public function apagar_permiso($idrole, $idper)
    {
        $role = Role::find($idrole);
        $role->revokePermission($idper);
        $role->save();
        flash('Permission successfully removed')->success();
        return redirect(url('/listar_usuarios'));
    }
    public function excluir_rol(Request $request)
    {   
        $idrole = $request->input("id_role");
        $role = Role::find($idrole);
        $role->delete();

        flash('User Type successfully removed')->success();
        return redirect(url('/home'));
    }
    public function profile(){
        $user = Auth::user();
        $avatar = User::find($user->id);
        return view('user.profile')->with('avatar',$avatar->avatar);
    }
    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/images/uploads/'. $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

            flash('User image changed!')->success();
            return view('user.profile');
        }else{
            flash('Error changing image!')->error();
            return view('user.profile');
        }

        
    }

    public function edit_profile(Request $request){
        
        if($request->hasFile('avatar')){
            $user = User::find($request->id_user);
            $avatar = $request->file('avatar');
            $filename = time(). '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(128,128)->save( public_path('/images/uploads/'. $filename));
            $user->avatar = $filename;
            $user->save();

            if ($avatar) {
                flash('Services updated successfully')->success();
                return view('user.profile')->with('avatar', $filename);
            } else {
                flash('Error updating Services')->error();
                return redirect(url('/profile'));
            }
        }else{
            return redirect(url('/profile'));
        }
    }

    public function logoff(){
        Auth::logout();
        return redirect(url('/login'));
    }
}
