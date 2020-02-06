<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\UserModel;
use App\Services\Business\SecurityService;
use Dotenv\Exception\ValidationException;

class Login3Controller extends Controller
{
    public function test()
    {
        return "testing 123";
    }
    
    public function test2()
    {
        return view('HelloWorld');
    }
    
    public function onLogin(Request $request)
    {
        try 
        {
            $this->validate($request);
            
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
        catch (ValidationException $e1) 
        {
            throw $e1;
        }
        catch(Exception $e2)
        {
            return view('systemException');
        }
            
    }
    
    private function validateForm(Request $request)
    {
        $rules = ['username' => 'Required | between:4,10 | Alpha',
                    'password' => 'Required | between:4,10'];
        $this->validate($request, $rules);
        
    }
}