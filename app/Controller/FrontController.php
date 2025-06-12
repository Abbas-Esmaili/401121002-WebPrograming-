<?php 

namespace App\Controller;
use App\Model\User;
class FrontController{
    public static function home(){
        $id = array_key_exists('id',$_GET)? $_GET['id']:0;
        $user  = User::find($id);
        if($user)
        {
            var_dump($user->composite()); 
        }else{
            echo('User not exist');
        }
        exit;
        return view('home.php');
    }
    public static function about(){
        return view('about.php');
    }
    public static function infs(){
        return view('infs.php');
    }

}