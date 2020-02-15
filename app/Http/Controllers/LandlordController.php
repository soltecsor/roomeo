<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addons;
use App\Price;
use App\Process;
use App\Reason;

class LandlordController extends Controller
{    
    public function index(){
        $reasons = Reason::all();
        $prices = Price::all();
        $process = Process::all();
        $addons = Addons::all();

        return view('portal.landlord', compact('reasons', 'prices', 'process', 'addons'));
    }
    public function reasons(){
        $reasons = Reason::all();

        return view('edit.reasons', compact('reasons'));
    }

    public function edit_reason(Request $request){
        $reasons = Reason::all();

        $idreason = $request->input("id_reason");
        $reason = Reason::find($idreason);
        $reason->reasons_title = ($request->input("reasons_title"));
        $reason->reasons_description = ($request->input("reasons_description"));

        if ($reason->save()) {
            flash('Reason updated successfully')->success();
            return redirect(url('/reasons'));
        } else {
            flash('Error updating Reason')->error();
            return redirect(url('/reasons'));
        }
    }
    public function created_reason(Request $request){
        $reason = new Reason;
        $reason->reasons_title = ($request->input("reasons_title"));
        $reason->reasons_description = ($request->input("reasons_description"));

        if ($reason->save()) {
            flash('Reason updated successfully')->success();
            return redirect(url('/reasons'));
        } else {
            flash('Error updating Reason')->error();
            return redirect(url('/reasons'));
        }
    }

    public function reasons_destroy($id)
    {
        $reason = Reason::findOrFail($id);
        if ($reason->delete()) {
            flash('Reason delete successfully')->success();
            return redirect(url('/feedbacks'));
        } else {
            flash('Error delete Reason')->error();
            return redirect(url('/feedbacks'));
        }
    }

    public function prices(){
        $prices = Price::all();

        return view('edit.prices', compact('prices'));
    }

    public function edit_price(Request $request){
        $prices = Price::all();

        $idprice = $request->input("id_price");
        $price = Price::find($idprice);
        $price->prices_title = ($request->input("prices_title"));
        $price->prices_value = ($request->input("prices_value"));
        $price->prices_description = ($request->input("prices_description"));
        $price->prices_button = ($request->input("prices_button"));

        if ($price->save()) {
            flash('Price updated successfully')->success();
            return redirect(url('/prices'));
        } else {
            flash('Error updating Price')->error();
            return redirect(url('/prices'));
        }
    }
    public function created_price(Request $request){
        $price = new Price;
        $price->prices_title = ($request->input("prices_title"));
        $price->prices_value = ($request->input("prices_value"));
        $price->prices_description = ($request->input("prices_description"));
        $price->prices_button = ($request->input("prices_button"));

        if ($price->save()) {
            flash('Price updated successfully')->success();
            return redirect(url('/prices'));
        } else {
            flash('Error updating Price')->error();
            return redirect(url('/prices'));
        }
    }

    public function prices_destroy($id)
    {
        $price = Price::findOrFail($id);
        if ($price->delete()) {
            flash('Price delete successfully')->success();
            return redirect(url('/prices'));
        } else {
            flash('Error delete Price')->error();
            return redirect(url('/prices'));
        }
    }

    public function processes(){
        $processes = Price::all();

        return view('edit.process', compact('processes'));
    }

    public function edit_process(Request $request){
        $processes = Process::all();

        $idprocess = $request->input("id_process");
        $process = Process::find($idprocess);
        $process->process_title = ($request->input("process_title"));
        $process->process_description = ($request->input("process_description"));
        if($request->hasFile('process_img')){
            $process_img = $request->file('process_img');
            $filename = time(). '.' . $process_img->getClientOriginalExtension();
            Image::make($process_img)->resize(128,128)->save( public_path('/portal/assets/images/ico/'. $filename));

            $process->process_img = $filename;
        }

        if ($process->save()) {
            flash('Process updated successfully')->success();
            return redirect(url('/processes'));
        } else {
            flash('Error updating Process')->error();
            return redirect(url('/processes'));
        }
    }
    public function created_process(Request $request){
        $process = new Process;
        $process->process_title = ($request->input("process_title"));
        $process->process_description = ($request->input("process_description"));
        if($request->hasFile('process_img')){
            $process_img = $request->file('process_img');
            $filename = time(). '.' . $process_img->getClientOriginalExtension();
            Image::make($process_img)->resize(128,128)->save( public_path('/portal/assets/images/ico/'. $filename));

            $process->process_img = $filename;
        }

        if ($process->save()) {
            flash('Process updated successfully')->success();
            return redirect(url('/processes'));
        } else {
            flash('Error updating Process')->error();
            return redirect(url('/processes'));
        }
    }

    public function process_destroy($id)
    {
        $process = Process::findOrFail($id);
        if ($process->delete()) {
            flash('Process delete successfully')->success();
            return redirect(url('/processes'));
        } else {
            flash('Error delete Process')->error();
            return redirect(url('/processes'));
        }
    }

}
