<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResponseResource;
use App\Models\Thread;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param integer $threadId
     * @param Request $request
     * @return void
     */
    public function store(int $threadId, Request $request)
    {
        $thread = Thread::findOrFail($threadId);
        $responseNo = $thread->responses()->max('response_no') + 1;

        $response = $thread
            ->responses()
            ->create(['response_no' => $responseNo] + $request->only(['name', 'email', 'content']));

        return new ResponseResource($response);
    }
}
