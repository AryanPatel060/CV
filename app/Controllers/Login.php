<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        
        if(isset($_SESSION['user'])){
            return redirect()->to('profile');
        }
        else {
            echo view('partials\header');
            echo view('login');
            echo view('partials\footer');
        }
    }

    public function login()
    {
     $userModel = new userModel();
     $email = $this->request->getPost('loginemail');
     $password = $this->request->getPost('loginpassword');
    

     $result = $userModel->where('useremail',$email)->first();
    //  echo $password;
    //  echo $email;
    //   print_r($result);
   
     if( $result)
     {
        if (password_verify( $password, $result->password))
        {
                $this->session->set("user",$result);
                return redirect()->to('profile');
        }
         else
        {
            $_SESSION['emailpass'] = 'Sorry, Email or password do not match';
            $session = session();
            $session->markAsFlashdata('emailpass');
           return redirect()->to('login');

        }
     }
     else{
        $_SESSION['emailnotexist'] = 'Sorry, Email does  not exists';
        $session = session();
        $session->markAsFlashdata('emailnotexist');
        return redirect()->to('login');
     }

    }

    public function logout()
    {
        session_destroy();
      return redirect()->to('home');
    }
}
