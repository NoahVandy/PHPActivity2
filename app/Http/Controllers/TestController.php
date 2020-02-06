<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class TestController extends Controller
{
    public function test()
    {
        return "username: NoahVandy password: test";
    }
    
    public function test2()
    {
        return view('HelloWorld');
    }
    
    public function WhoAmI()
    {
        return view('AskMe');
    }
    
    public function onLogin(Request $request)
    {
        
        // get the posted form data
        $username = $request->input('username');
        $password = $request->input('password');
        
        // save posted data in user data object model
        $user = new UserModel(-1, $username, $password);
        
        // call security buesiness service
        $service = new SecurityService(); 
        $status = $service->login($user);
        
        // render a failed or passed response view and pass the user model in passed view
        if($status)
        {
            $data = ['model' => $user];
            return view('loginPassed')->with($data);
        }
        else 
        {
            return view('loginFailed');
        }
    }
}