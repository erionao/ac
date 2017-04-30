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
        })->with('images')->orderBy('id', 'asc')->get();

        $career = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->where('name', 'section2')->with('images')->orderBy('id', 'asc')->get();

        $logo = Cover::where('type', 'logo')->get();

        $blogs = Blog::with('images')->orderBy('created_at', 'desc')->limit(3)->get();

        return \View::make('website.pages.index', array('section' => $sections, 'logo' => $logo, 'blogs' => $blogs, 'career' => $career));
    }

    public function gallery()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Catering');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.gallery', array('logo' => $logo, 'sections' => $sections));
    }

    public function about()
    {
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.about', array('logo' => $logo));
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
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Consulting');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.art', array('logo' => $logo, 'sections' => $sections));
    }

    public function dermatologjia()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Chocolate');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.dermatologjia', array('logo' => $logo, 'sections' => $sections));
    }

    public function gjinekologjia()
    {
        $blogs = Blog::with('images')->orderBy('created_at', 'desc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.gjinekologjia', array('logo' => $logo, 'blogs' => $blogs));
    }

    public function laboratori()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.laboratori', array('logo' => $logo, 'sections' => $sections));
    }

    public function lindjet()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.lindjet', array('logo' => $logo, 'sections' => $sections));
    }

    public function neonatologjia()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.services.neonatologjia', array('logo' => $logo, 'sections' => $sections));
    }


}
