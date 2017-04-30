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

    public function catering()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Catering');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.catering', array('logo' => $logo, 'sections' => $sections));
    }

    public function consulting()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Consulting');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.consulting', array('logo' => $logo, 'sections' => $sections));
    }

    public function chocolate()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Chocolate');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.chocolate', array('logo' => $logo, 'sections' => $sections));
    }



    public function about()
    {
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.about', array('logo' => $logo));
    }


    public function career()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();

        $jobs = Job::orderBy('created_at', 'desc')->get();
        return \View::make('website.pages.career', array('logo' => $logo, 'sections' => $sections, 'jobs' => $jobs));
    }

    public function news()
    {
        $blogs = Blog::with('images')->orderBy('created_at', 'desc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.news', array('logo' => $logo, 'blogs' => $blogs));
    }

    public function contact()
    {
        $sections  = Section::whereHas('page', function ($q) {
            $q->where('name', 'Career');
        })->with('images')->orderBy('id', 'asc')->get();
        $logo = Cover::where('type', 'logo')->get();
        return \View::make('website.pages.contact', array('logo' => $logo, 'sections' => $sections));
    }





}
