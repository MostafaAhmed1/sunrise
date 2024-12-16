<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $posts = DB::table('posts')->get();
        $works = DB::table('lastworks')->get();

        return view('welcome', ['posts' => $posts, 'works' => $works]);
    }

    public function login_view()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $name = $request->fullName;
        $pass = $request->password;

        $data = DB::table('users')->get();

        foreach($data as $usr)
        {
            if ($usr->username == $name && $usr->password == $pass)
            {
                session(['user' => $usr->username]);
                session(['auth' => $usr->password]);

                return redirect()->route('dashboard');
            }
        }
        
        return back()->with('error', 'يرجى التأكد من كتابة البيانات بشكل صحيح');
    }
}
