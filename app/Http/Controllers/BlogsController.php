<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Blog;
use App\Http\Requests;

use App\Http\Requests\BlogRequest;

use App\Http\Controllers\Controller;

//use Illuminate\Http\Requests\StoreBlogsRequest;

class BlogsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show01', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function edit(Blog $blog)
    {

        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @return Response
     */

    public function store(BlogRequest $request)
    {
        $input = Input::all();
        Blog::create( $input );

        return Redirect::route('blogs.index')->with('message', 'Blog created');
    }

    public function update(Blog $blog)
    {
        $input = array_except(Input::all(), '_method');
        $blog->update($input);

        return Redirect::route('blogs.show', $blog->slug)->with('message', 'Blog updated.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return Redirect::route('blogs.index')->with('message', 'Blog deleted.');
    }


}
