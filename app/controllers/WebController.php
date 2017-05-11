<?php

use App\models\Cover;
use App\models\Blog;
use App\models\Gallery;
use App\models\Section;
use App\models\Project;
use App\models\Job;

class WebController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Home');
        })->orderBy('id', 'asc')->get();

        $career = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->where('name', 'section2')->with('images')->orderBy('id', 'asc')->get();

        $logo = Cover::where('type', 'logo')->get();

        $blogs = Blog::with('images')->orderBy('created_at', 'desc')->get();

        return \View::make('website.pages.index', array('sections' => $sections, 'logo' => $logo, 'blogs' => $blogs, 'career' => $career));
    }

    public function about()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Klinika');
        })->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.about', array('logo' => $logo, 'sections' => $sections));
    }

    public function gallery()
    {
        $images  = Gallery::get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.gallery', array('logo' => $logo, 'images' => $images));
    }



    public function doctors()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();

        $jobs = Job::orderBy('created_at', 'desc')->get();
        return \View::make('website.pages.doctors', array('logo' => $logo, 'sections' => $sections, 'jobs' => $jobs));
    }


    public function art()
    {
        $sections  = Section::where('name', 'art')->first();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.art', array('logo' => $logo, 'sections' => $sections));
    }

    public function dermatologjia()
    {
        $sections  = Section::where('name', 'dermatologjia')->first();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.dermatologjia', array('logo' => $logo, 'sections' => $sections));
    }

    public function gjinekologjia()
    {
        $sections  = Section::where('name', 'gjinekologjia')->first();

        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.gjinekologjia', array('logo' => $logo, 'sections' => $sections));
    }

    public function laboratori()
    {
        $sections  = Section::where('name', 'L_Biokimik')->first();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.laboratori', array('logo' => $logo, 'sections' => $sections));
    }

    public function lindjet()
    {
        $sections  = Section::where('name', 'lindjet')->first();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.lindjet', array('logo' => $logo, 'sections' => $sections));
    }

    public function neonatologjia()
    {
        $sections  = Section::where('name', 'neonatologjia')->first();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.neonatologjia', array('logo' => $logo, 'sections' => $sections));
    }


}
