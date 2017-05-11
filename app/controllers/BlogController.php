<?php

use App\models\Blog;
use App\models\BlogImage;
use App\models\BlogVideo;


class BlogController extends \BaseController {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::orderBy('created_at', 'desc')->get();

		return $blogs;
	}

	/**
	 * Return blog add view
	 *
	 * @return mixed
	 */
	public function blogAdd(){
		return \View::make('admin.pages.blog.add');
	}

	/**
	 * Return blog lists view
	 *
	 * @return mixed
	 */
	public function blogList(){
		return \View::make('admin.pages.blog.list');
	}


	/**
	 * Return blog details view
	 *
	 * @return mixed
	 */
	public function details($id)
	{

		$blog = Blog::with('images')->findOrFail($id);

		return \View::make('admin.pages.blog.details', array('blog'=> $blog));
	}

    public function detailsClient($id)
    {
        $blog = Blog::with('images')->findOrFail($id);

        return \View::make('website.pages.blog.read', array('blog'=> $blog));
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        ini_set('memory_limit','256M');


		$blog = new Blog();
		$blog->title = \Input::get('title');
		$blog->subtitle = \Input::get('subtitle');
		$blog->content = \Input::get('content');
		$blog->youtube_link = \Input::get('youtube_link');

		$blog->save();


		$files = \Input::file('file')['images'];


		foreach( $files as $file){
			$image = new BlogImage();
			$image->blog_id = $blog->id;


			$destination = 'uploads/blogs/images/';
			$imageName = str_random() . '.' . $file['files']->getClientOriginalExtension();

//			$file['files']->move(public_path() . $destination, $imageName);
            Image::make($file['files'])->save($destination.$imageName, 75);

			$image->image = $imageName;

			$image->save();
		}

//		if(array_key_exists('videos', \Input::file('file')['videos'])) {
//            $videos = \Input::file('file')['videos'];
//            foreach ($videos as $video) {
//                $vid = new BlogVideo();
//                $vid->blog_id = $blog->id;
//
//
//                $destination = 'uploads/blogs/videos/';
//                $videoName = str_random() . '.' . $video['videos']->getClientOriginalExtension();
//                $video['videos']->move(public_path() . $destination, $videoName);
//                // Image::make($file['files'])->resize(1200, 800)->save($destination.$imageName);
//
//                $vid->video = $videoName;
//
//                $vid->save();
//            }
//        }

		return $blog;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::with('images', 'videos')->findOrFail($id);

		return $blog;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updated($id)
	{
		$blog = Blog::findOrFail($id);

		$rules = [
				'title' => 'required|max:255',
				'content' => 'required',
		];

		$validator = \Validator::make(Input::all(), $rules);

		if($validator->passes()) {

            $blog->title = \Input::get('title');
            $blog->subtitle = \Input::get('subtitle');
            $blog->content = \Input::get('content');
            $blog->youtube_link = \Input::get('youtube_link');

			$blog->update();

			return $blog;
		}

		return ($validator->messages());
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blog = Blog::find($id);

		$blog->delete();

	}



	public function deleteImage($id)
	{
		$image = BlogImage::find($id);
		$image->delete();
	}

	public function addImage($blogId){
        ini_set('memory_limit','256M');
		$image = new BlogImage();

		$image->blog_id = $blogId;

		$image->image = \Input::file('file');



		$destination = 'uploads/blogs/';
		$imageName = str_random() . '.' . $image->image->getClientOriginalExtension();

//        \Input::file('image')->move(public_path() . $destination, $imageName);
		Image::make($image->image)->resize(1200, 800)->save($destination.$imageName);

		$image->image = $imageName;

		$image->save();

		return $image;

	}
}
