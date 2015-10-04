<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\IssueRequest;
use App\Models\IssueModel;

/**
 * This controller handles all issue actions
 */
final class Issue extends BaseController
{
	/**
     * Displays a a grid with issues
	 */
	public function displayGridAction()
	{
		return view('grid', [
			'records' => IssueModel::all()
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
		IssueModel::create($request->all());
		\Session::flash('status', 'The issue has added updated successfully');

		return redirect()->action('Issue@displayGridAction');
	}

	/**
	 * @param $id The issue id
	 */
	public function editViewAction($id)
	{
		$issue = IssueModel::findOrFail($id);
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

		$model = IssueModel::findOrFail($input['id']);
		$model->update($input);

		\Session::flash('status', 'The issue has been updated successfully');

		return redirect()->action('Issue@displayGridAction');
	}
}
