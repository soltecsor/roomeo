<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institutional;
use App\Team;
use Intervention\Image\Facades\Image;

class InstitutionalController extends Controller
{
    public function index(){
        $institutionals = Institutional::all();
        $teams = Team::all();
    
        return view('portal.about', compact('institutionals', 'teams'));
    }
    public function edit_instutional($id){
        $institutional = Institutional::find($id);
        $team = Team::find($id);

        return view('edit.about', compact('institutional', 'team'));
    }
    public function edit_institution(Request $request){
        $idinstitutional = $request->input("id_institutional");
        $institutional = Institutional::find($idinstitutional);
        $institutional->inst_title = ($request->input("inst_title"));
        $institutional->inst_subtitle = ($request->input("inst_subtitle"));
        $institutional->inst_description = $request->input("inst_description");
        
        if($request->hasFile('inst_title_img')){
            $inst_title_img = $request->file('inst_title_img');
            $filename = time(). '.' . $inst_title_img->getClientOriginalExtension();
            Image::make($inst_title_img)->save( public_path('/portal/assets/images/about/'. $filename));

            $institutional->inst_title_img = $filename;
        }


        if ($institutional->save()) {
            flash('Institutional updated successfully')->success();
            return redirect(url('/edit_instutional', compact('institutional')));
        } else {
            flash('Error updating Institutional')->error();
            return redirect(url('/edit_instutional', compact('institutional') ));
        }
    }
    public function edit_team(Request $request){
        $idteam = $request->input("id_team");
        $team = Team::find($idteam);
        $team->team_title = ($request->input("team_title"));
        $team->team_subtitle = ($request->input("team_subtitle"));
        $team->team_member_one_name = $request->input("team_member_one_name");
        $team->team_member_one_function = $request->input("team_member_one_function");
        $team->team_member_one_description = $request->input("team_member_one_description");        
        if($request->hasFile('team_member_one_img')){
            $team_member_one_img = $request->file('team_member_one_img');
            $filename = time(). '.' . $team_member_one_img->getClientOriginalExtension();
            Image::make($team_member_one_img)->save( public_path('/portal/assets/images/team/'. $filename));

            $team->team_member_one_img = $filename;
        }
        $team->team_member_two_name = $request->input("team_member_two_name");
        $team->team_member_two_function = $request->input("team_member_two_function");
        $team->team_member_two_description = $request->input("team_member_two_description");
        if($request->hasFile('team_member_two_img')){
            $team_member_two_img = $request->file('team_member_two_img');
            $filename = time(). '.' . $team_member_two_img->getClientOriginalExtension();
            Image::make($team_member_two_img)->save( public_path('/portal/assets/images/team/'. $filename));

            $team->team_member_two_img = $filename;
        }


        if ($team->save()) {
            flash('Team updated successfully')->success();
            return redirect(url('/edit_instutional', compact('team')));
        } else {
            flash('Error updating Team')->error();
            return redirect(url('/edit_instutional', compact('team') ));
        }
    }
}