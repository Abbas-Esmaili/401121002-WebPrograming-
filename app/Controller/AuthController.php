<?php 

namespace App\Controller;
use App\Model\User;
class AuthController{
    public static function login()
    {
        if(isloggedin())
        {
            return redirect('/webprogramming/dashboard');
        }
        return view('login.php');
    }
    public static function register()
    {
        if(isloggedin())
        {
            return redirect('/webprogramming/dashboard');
        }
        return view('register.php');
    }
    public static function storeuser()
    {
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $user = User::create(['name'=>$_POST['name'],
                      'email'=>$_POST['email'],
                      'password'=>$password
                ]);
        var_dump($user);
        exit();
    }
    public static function loginuser()
    {
        $username = $_POST['email'];
        $userpass = $_POST['password'];
        $user = User::where('email',$username)->first();
        if(password_verify($userpass,$user->password))
        {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            return redirect('/webprogramming/dashboard');
        }else{
            return redirect('/webprogramming/login');
        }
        exit();
    }

}