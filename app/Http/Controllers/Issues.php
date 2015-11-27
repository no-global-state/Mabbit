<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\IssueRequest;
use Illuminate\Http\Request;
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
     * Applies a filter
     * 
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function filterAction(Request $request)
    {
        $filter = $request->input('filter');

        \Session::put('filter', $filter);
        \Session::flash('status', 'The filter has been updated');

        // Indicate success
        return '1';
    }

    /**
     * Displays a a grid with issues
     * 
     * @return string
     */
    public function displayGridAction()
    {
        $filter = \Session::get('filter');

        switch ($filter) {
            case 'solved':
                $model = Issue::fetchLatests(true);
            break;

            case 'non-solved':
                $model = Issue::fetchLatests(false);
            break;

            default:
                $filter = 'all';
                $model = Issue::fetchLatests();
        }

        return view('grid', [
            'records' => $model->paginate(5),
            'filters' => [
                'all' => 'Show all',
                'solved' => 'Show only solved',
                'non-solved' => 'Show only non-solved'
            ],
            'filter' => $filter
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add', [
            'tags' => Tag::lists('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\IssueRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(IssueRequest $request)
    {
        // Add the issue itself
        $model = Issue::create($request->all());

        // Add its tags
        $model->tags()->attach($request->input('tag_list'));

        \Session::flash('status', 'The issue has added updated successfully');

        return redirect()->action('Issues@displayGridAction');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $issue = Issue::findOrFail($id);

        return view('edit', [
            'model' => $issue,
            'tags' => Tag::lists('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \App\Http\Requests\IssueRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IssueRequest $request, $id)
    {
        $input = $request->all();

        $model = Issue::findOrFail($id);
        $model->update($input);

        $tags = $request->input('tag_list', []);

        // Add its tags
        $model->tags()->sync($tags);

        \Session::flash('status', 'The issue has been updated successfully');

        return redirect()->action('Issues@displayGridAction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Issue::destroy($id);

        \Session::flash('status', 'The issue has been removed successfully');
        return '1';
    }
}
