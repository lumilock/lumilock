<?php

namespace lumilock\lumilock\App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use  lumilock\lumilock\App\Models\User;

class UserController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the authenticated User.
     *
     * @return Response
     */
    public function profile()
    {
        return response()->json(['user' => Auth::user(), 'client ip' => $_SERVER['REMOTE_ADDR'], 'host name' => gethostname(), 'browser' => $_SERVER['HTTP_USER_AGENT']], 200);
    }

    /**
     * Get all User.
     *
     * @return Response
     */
    public function allUsers()
    {
        return response()->json(['users' =>  User::all()], 200);
    }

    /**
     * Get one user.
     *
     * @return Response
     */
    public function singleUser($id)
    {
        try {
            $user = User::findOrFail($id);

            return response()->json(['user' => $user], 200);
        } catch (\Exception $e) {

            return response()->json(['message' => 'user not found!'], 404);
        }
    }
}
