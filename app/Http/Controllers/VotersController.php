<?php namespace App\Http\Controllers;

use App\Voter;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VotersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $voters = Voter::all();
        return view('voters.index',
            compact('voters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('voters.create');
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
    public function show(Voter $voter)
    {
        return view('voters.show', compact('voter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function edit(Voter $voter)
    {
        return view('voters.edit', compact('voter'));
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

    public function store()
    {
        $input = Input::all();
        Voter::create( $input );

        return Redirect::route('voters.index')->with('message', 'Voter Added');
    }

    public function update(Voter $voter)
    {
        $input = array_except(Input::all(), '_method');
        $voter->update($input);

        return Redirect::route('voters.show', $voter->id)->with('message', 'Voter added');
    }

    public function destroy(Voter $voter)
    {
        $voter->delete();

        return Redirect::route('voters.index')->with('message', 'Voter deleted');
    }

}
 