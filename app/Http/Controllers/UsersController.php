<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function userOnlineStatus()
    {
        $users = User::orderBy('last_online_at', 'desc')->first();
        return view('users.online', compact('users'));
    }


    public function verifyToken(Request $request, $register_token)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }

        $success = false;
        $user = User::where('register_token', '=', $register_token)->first();
        if (empty($user->email_verified_at) && !empty($user->name)) {
            $success = true;
            $user->update(["email_verified_at" => Carbon::now()]);
            if($request->ajax()){
                return response()->json(["success" => true]);
            }
        }
        return view('users.verifyToken', compact("success", "user"));
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public
function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
public
function store(Request $request)
{
    //
}

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function update(Request $request, $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function destroy($id)
{
    //
}
}
