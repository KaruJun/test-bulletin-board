<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThreadResource;
use App\Http\Resources\ThreadWithResponseResource;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::with([
            'responses' => function ($query) {
                $query->latest()->limit(10);
            },
        ])
            ->withCount('responses')
            ->get();

        return ThreadWithResponseResource::collection($threads);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thread = Thread::create($request->only(
            ['title', 'name', 'email', 'content']
        ));

        return new ThreadResource($thread);
    }

    /**
     * Display the specified resource.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $thread = Thread::with('responses')->withCount('responses')->findOrFail($id);

        return new ThreadWithResponseResource($thread);
    }
}
