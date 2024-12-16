<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $name = session()->get('user');
        $pass = session()->get('auth');

        $passed = 0;
        $data = DB::table('users')->get();
        foreach($data as $usr)
        {
            if ($usr->username == $name && $usr->password == $pass)
            {
                $passed = 1;
            }
        }
        
        if ($passed == 0)
        {
            return redirect()->route('login');
        }

        $posts = DB::table('posts')->get();
        $works = DB::table('lastworks')->get();

        return view('dashboard', ['posts' => $posts, 'works' => $works]);
    }
    
    public function create_post()
    {
        return view('posts.create');
    }

    public function add_post(Request $request)
    {
        $messages = [
            "title"=> 'العنوان الرئيسى',
            "subtitle"=> 'العنوان الفرعى',
            "details"=> 'التفاصيل',
            "img"=> 'الصورة',
        ];

        request()->validate(
            [
            "title"=> 'required|string',
            "subtitle"=> 'required|string',
            "details"=> 'required|string',
            "img"=> 'image|mimes:jpeg,png,jpg|max:20048',
            ], [], $messages);

        $title = addslashes(htmlspecialchars($request->input("title")));
        $subtitle = addslashes(htmlspecialchars($request->input("subtitle")));
        $details = addslashes(htmlspecialchars($request->input("details")));
        $photo = $request->file("img");
        
        $path = 'non';
        if($photo)
        {
            $imageName = time().'.'.$photo->extension();
            $photo->move('upload/posts', $imageName);
            $path = 'upload/posts/'.$imageName;
        }

        DB::table('posts')->insert(
            [
                "title"=> $title,
                "subtitle"=> $subtitle,
                "details"=> $details,
                "img"=> $path,
        ]);

        return redirect()->back()->with('status', 'تم تسجيل البيانات بنجاح');
    }
        
    public function delete_post(Request $request, $id)
    {
        DB::table('posts')->where("id", $id)->delete();

        return redirect()->back()->with('status', 'تم تحديث البيانات بنجاح');
    }

    public function show_post($id)
    {
        $data = DB::table('posts')->where('id', '=', $id)->first();

        return view('posts.show', ['data' => $data]);
    }

    
    public function create_job()
    {
        return view('jobs.create');
    }

    public function add_job(Request $request)
    {
        $messages = [
            "img"=> 'الصورة',
        ];

        request()->validate(
            [
            "img"=> 'required|image|mimes:jpeg,png,jpg|max:20048',
            ], [], $messages);
 
        $photo = $request->file("img");
        
        $path = 'non';
        if($photo)
        {
            $imageName = time().'.'.$photo->extension();
            $photo->move('upload/jobs', $imageName);
            $path = 'upload/jobs/'.$imageName;
        }

        DB::table('lastworks')->insert(
            [
                "img"=> $path,
        ]);

        return redirect()->back()->with('status', 'تم تسجيل البيانات بنجاح');
    }
        
    public function delete_job(Request $request, $id)
    {
        DB::table('lastworks')->where("id", $id)->delete();

        return redirect()->back()->with('status', 'تم تحديث البيانات بنجاح');
    }
}