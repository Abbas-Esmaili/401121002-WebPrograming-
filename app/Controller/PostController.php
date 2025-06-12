<?php 

namespace App\Controller;
use App\Model\Post;
class PostController{
    public static function index()
    {
        if(isloggedin())
        {
            return view("posts/index.php");
        }
        return redirect('/webprogramming/login');
    }
    public static function create()
    {
        return view("posts/create.php");
        
    }
    public static function show()
    {
        return view('posts/show.php');

    }
    public static function edit()
    {

    }
    public static function store()
    {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $user_id = $_SESSION['user_id'];
        Post::create(['title'=>$title, 'body'=>$body, 'user_id'=>$user_id]);
        return redirect("/webprogramming/post");

    }
    public static function update()
    {

    }
    public static function destroy()
    {

    }
    
}