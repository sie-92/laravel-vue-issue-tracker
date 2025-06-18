<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Issue;
use Illuminate\Support\Facades\Auth;

class IssueController extends Controller
{
    public function index()
    {
        return Issue::where('user_id', Auth::id())->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        return Issue::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description
        ]);
    }

    public function show($id)
    {
        return Issue::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    }

    public function update(Request $request, $id)
    {
        $issue = Issue::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $issue->update($request->only(['title', 'description', 'status']));
        return $issue;
    }

    public function destroy($id)
    {
        $issue = Issue::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $issue->delete();
        return response()->noContent();
    }
}
