<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct(){}
    
    public function index()
    {
        $users = User::all();
        $users = User::paginate(10);
        return view('admin.adminUserSection')->with('users', $users);
    }

    public function show(User $user)
    {
        return view('user', [
            'user' => $user
        ]);
    }

    public function destroy(User $user, $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back()->with('flash_message', 'User deleted!');
   }

    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('session');
    // }
}
