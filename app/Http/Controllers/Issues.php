<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\IssueRequest;
use App\Issue;

/**
 * This controller handles all issue actions
 */
final class Issues extends BaseController
{
	/**
     * Displays a a grid with issues
	 */
	public function displayGridAction()
	{
		return view('grid', [
			'records' => Issue::latest('id')->paginate(5)
		]);
	}

	/**
	 * Displays all issues
	 */
	public function addViewAction()
	{
		return view('add');
	}

	/**
	 * Adds a blog's entity
	 */
	public function addAction(IssueRequest $request)
	{
		Issue::create($request->all());
		\Session::flash('status', 'The issue has added updated successfully');

		return redirect()->action('Issues@displayGridAction');
	}

	/**
	 * @param $id The issue id
	 */
	public function editViewAction($id)
	{
		$issue = Issue::findOrFail($id);
		return view('edit', [
			'model' => $issue
		]);
	}

	/**
	 * Updates the issue
	 */
	public function editAction(IssueRequest $request)
	{
		$input = $request->all();

		$model = Issue::findOrFail($input['id']);
		$model->update($input);

		\Session::flash('status', 'The issue has been updated successfully');

		return redirect()->action('Issues@displayGridAction');
	}
}
