<?php

namespace App\Http\Controllers\Api;

use App\Messages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $messages = Messages::all();
        return response()->json($messages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $message = auth()->user()->messages()->create([
            'message' => $request->input('message')
        ]);

        return response()->json([
            'success' => true,
            'posted' => $message,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\messages $messages
     * @return Response
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\messages $messages
     * @return Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\messages $messages
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Messages $messages)
    {
    }
}
