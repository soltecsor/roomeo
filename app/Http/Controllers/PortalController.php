<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Service;
use App\About;
use App\Feedback;
use App\Terms;
use Intervention\Image\Facades\Image;

class PortalController extends Controller
{    
    public function index(){
        $banners = Banner::all();
        $services = Service::all();
        $abouts = About::all();
        $feedbacks = Feedback::all();

        return view('portal', compact('banners', 'services', 'abouts', 'feedbacks'));
    }
    public function feedbacks(){
        $feedbacks = Feedback::all();

        return view('edit.feedback', compact('feedbacks'));
    }
    public function home_edit($id){
        $banner = Banner::find($id);
        $service = Service::find($id);
        $about = About::find($id);

        return view('edit.homeportal', compact('banner', 'service', 'about'));
    }
    public function edit_banner(Request $request){
        $idbanner = $request->input("id_banner");
        $banner = Banner::find($idbanner);
        $banner->home_title_one = ($request->input("home_title_one"));
        $banner->home_title_two = ($request->input("home_title_two"));
        $banner->home_boxtitle = $request->input("home_boxtitle");
        $banner->home_boxsubtitle = $request->input("home_boxsubtitle");
        $banner->home_boxphone = $request->input("home_boxphone");


        if ($banner->save()) {
            flash('Banner updated successfully')->success();
            return redirect(url('/homeportal_edit', compact('banner')));
        } else {
            flash('Error updating banner')->error();
            return redirect(url('/homeportal_edit', compact('banner') ));
        }
    }
    public function edit_service(Request $request){
        $idservice = $request->input("id_service");
        $service = Service::find($idservice);
        $service->title = $request->input("title");
        if($request->hasFile('icon_one')){
            $icon_one = $request->file('icon_one');
            $filename = time(). '.' . $icon_one->getClientOriginalExtension();
            Image::make($icon_one)->resize(128,128)->save( public_path('/portal/assets/images/ico/'. $filename));

            $service->icon_one = $filename;
        }
        $service->service_one_title	 = ($request->input("service_one_title"));
        $service->service_one_description = $request->input("service_one_description");
        if($request->hasFile('icon_two')){
            $icon_two = $request->file('icon_two');
            $filename = time(). '.' . $icon_two->getClientOriginalExtension();
            Image::make($icon_two)->resize(128,128)->save( public_path('/portal/assets/images/ico/'. $filename));

            $service->icon_two = $filename;
        }
        $service->service_two_title = $request->input("service_two_title");
        $service->service_two_description = $request->input("service_two_description");
        if($request->hasFile('icon_three')){
            $icon_three = $request->file('icon_three');
            $filename = time(). '.' . $icon_three->getClientOriginalExtension();
            Image::make($icon_three)->resize(128,128)->save( public_path('/portal/assets/images/ico/'. $filename));

            $service->icon_three = $filename;
        }
        $service->service_three_title = $request->input("service_three_title");
        $service->service_three_description = $request->input("service_three_description");
        if($request->hasFile('icon_four')){
            $icon_four = $request->file('icon_four');
            $filename = time(). '.' . $icon_four->getClientOriginalExtension();
            Image::make($icon_four)->resize(128,128)->save( public_path('/portal/assets/images/ico/'. $filename));

            $service->icon_four = $filename;
        }
        $service->service_four_title = $request->input("service_four_title");
        $service->service_four_description = $request->input("service_four_description");

        if ($service->save()) {
            flash('Services updated successfully')->success();
            return redirect(url('/homeportal_edit', compact('service')));
        } else {
            flash('Error updating Services')->error();
            return redirect(url('/homeportal_edit', compact('service') ));
        }
        
    }
    public function edit_about(Request $request){
        $feedbacks = Feedback::all();

        $idabout = $request->input("id_about");
        $about = About::find($idabout);
        $about->about_title_one = ($request->input("about_title_one"));
        $about->about_title_two = ($request->input("about_title_two"));
        $about->about_description = ($request->input("about_description"));
        $about->about_button = ($request->input("about_button"));

        if ($about->save()) {
            flash('About updated successfully')->success();
            return redirect(url('/homeportal_edit', compact('about')));
        } else {
            flash('Error updating About')->error();
            return redirect(url('/homeportal_edit', compact('about') ));
        }
    }
    public function edit_feedback(Request $request){
        $feedbacks = Feedback::all();

        $idfeedback = $request->input("id_feedback");
        $feedback = Feedback::find($idfeedback);
        $feedback->feedbacks_stars = ($request->input("feedbacks_stars"));
        $feedback->feedbacks_comment_title = ($request->input("feedbacks_comment_title"));
        $feedback->feedbacks_comment_description = ($request->input("feedbacks_comment_description"));
        $feedback->feedbacks_client_name = ($request->input("feedbacks_client_name"));
        $feedback->feedbacks_client_function = ($request->input("feedbacks_client_function"));

        if ($feedback->save()) {
            flash('Feedback updated successfully')->success();
            return redirect(url('/feedbacks'));
        } else {
            flash('Error updating Feedback')->error();
            return redirect(url('/feedbacks'));
        }
    }
    public function created_feedback(Request $request){
        $feedback = new Feedback;
        $feedback->feedbacks_stars = ($request->input("feedbacks_stars"));
        $feedback->feedbacks_comment_title = ($request->input("feedbacks_comment_title"));
        $feedback->feedbacks_comment_description = ($request->input("feedbacks_comment_description"));
        $feedback->feedbacks_client_name = ($request->input("feedbacks_client_name"));
        $feedback->feedbacks_client_function = ($request->input("feedbacks_client_function"));
        $feedback->feedbacks_client_avatar = 'avatar.png';

        if ($feedback->save()) {
            flash('Feedback updated successfully')->success();
            return redirect(url('/feedbacks'));
        } else {
            flash('Error updating Feedback')->error();
            return redirect(url('/feedbacks'));
        }
    }
    public function delete_feedback(Request $request)
    {
        $feedback = Feedback::findOrFail($request->id_feedback);
        if ($feedback->delete()) {
            flash('Review delete successfully')->success();
            return redirect(url('/feedbacks'));
        } else {
            flash('Error delete Review')->error();
            return redirect(url('/feedbacks'));
        }
    }
    public function index_terms(){
        $terms = Terms::all();

        return view('portal.terms', compact('terms'));
    }
    public function terms_edit($id){
        $term = Terms::find($id);

        return view('edit.terms', compact('term'));
    }
    public function edit_term(Request $request){
        $terms = Terms::all();

        $idterm = $request->input("id_term");
        $term = Terms::find($idterm);
        $term->terms_title = ($request->input("terms_title"));
        $term->terms_description = ($request->input("terms_description"));

        if ($term->save()) {
            flash('Terms updated successfully')->success();
            return redirect(url('/edit_terms', compact('term')));
        } else {
            flash('Error updating Terms')->error();
            return redirect(url('/edit_terms', compact('term') ));
        }
    }
}
