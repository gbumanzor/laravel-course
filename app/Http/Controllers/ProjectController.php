<?php

namespace App\Http\Controllers;

use App\Mail\messageReceived;
use App\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ProjectController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return Application|Factory|View
  */
  public function index()
  {
      $projects = Project::paginate();
      return view('projects.index', compact('projects'));
  }

    /**
     * Store a newly created resource in storage.
     *
     * @return string
     */
  public function store(Request $request)
  {
      $title = request('title');
      $slug = str_replace(' ', '-', strtolower($title));

      Project::create([
          'title' => request('title'),
          'description' => request('description'),
          'slug' => $slug
      ]);

      return redirect()->route('projects.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return Application|Factory|View
  */
  public function show(Project $project)
  {
    return view('projects.show', ['project' => $project]);
  }

/**
 * Create a new resource.
 *
 * @return Application|Factory|View
 */
  public function create() {
      return view('projects.create');
  }
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
  public function update(Request $request, $id)
  {
    //
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
  public function destroy($id)
  {
    //
  }
}
