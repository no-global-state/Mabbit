<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\IssueRequest;
use App\Issue;
use App\Tag;

/**
 * This controller handles all issue actions
 */
final class Issues extends BaseController
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Displays a a grid with issues
     * 
     * @return string
     */
    public function displayGridAction()
    {
        return view('grid', [
            'records' => Issue::latest('id')->paginate(5)
        ]);
    }

    /**
     * Displays an issue by its associated id
     * 
     * @param string $id Issue's id
     * @return string
     */
    public function viewAction($id)
    {
        $issue = Issue::findOrFail($id);

        return view('view', [
            'issue' => $issue
        ]);
    }

    /**
	 * Displays all issues
	 * 
	 * @return string
	 */
    public function addViewAction()
    {
        return view('add', [
            'tags' => Tag::lists('name', 'id')
        ]);
    }

    /**
     * Adds a new issue
     * 
     * @param \App\Http\Requests\IssueRequest $request
     * @return void
     */
    public function addAction(IssueRequest $request)
    {
        // Add the issue itself
        $model = Issue::create($request->all());

        // Add its tags
        $model->tags()->attach($request->input('tag_list'));

        \Session::flash('status', 'The issue has added updated successfully');

        return redirect()->action('Issues@displayGridAction');
    }

    /**
     * Displays issue's edit form
     * 
     * @param $id The issue id
     * @return string
     */
    public function editViewAction($id)
    {
        $issue = Issue::findOrFail($id);

        return view('edit', [
            'model' => $issue,
            'tags' => Tag::lists('name', 'id')
        ]);
    }

    /**
     * Updates an issue
     * 
     * @param App\Http\Requests\IssueRequest $request
     * @return void
     */
    public function editAction(IssueRequest $request)
    {
        $input = $request->all();

        $model = Issue::findOrFail($input['id']);
        $model->update($input);

        $tags = $request->input('tag_list', []);

        // Add its tags
        $model->tags()->sync($tags);

        \Session::flash('status', 'The issue has been updated successfully');

        return redirect()->action('Issues@displayGridAction');
    }
}
