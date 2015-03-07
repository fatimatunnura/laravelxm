<?php namespace App\Http\Controllers;

use App\Voter;
use App\Candidate;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CandidatesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function index(Voter $voter)
    {
        return view('voters.index', compact('voter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function create(Voter $voter)
    {
        return view('candidates.create', compact('voter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @return Response
     */
    public function show(Voter $voter, Candidate $candidate)
    {
        return view('candidates.show', compact('voter', 'candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @return Response
     */
    public function edit(Voter $voter, Candidate $candidate)
    {
        return view('candidates.edit', compact('voter', 'candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @return Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @return Response
     */

    public function store(Voter $voter)
    {
        $input = Input::all();
        $input['voter_id'] = $voter->id;
        Task::create( $input );

        return Redirect::route('voters.show', $voter->id)->with('Voter added.');
    }

    public function update(Voter $voter, Candidate $candidate)
    {
        $input = array_except(Input::all(), '_method');
        $candidate->update($input);

        return Redirect::route('voters.candidates.show', [$voter->id, $candidate->id])->with('message', 'Result updated');
    }

    public function destroy(Voter $voter, Candidate $candidate)
    {
        $candidate->delete();

        return Redirect::route('voters.show', $voter->id)->with('message', 'Candidate  deleted.');
    }

}