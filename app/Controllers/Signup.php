<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Signup extends BaseController
{
    public function index()
    {
        echo view('partials\header');
        echo view('signup');
        echo view('partials\footer');

    }

    public function signup()
    {
        $usermodel = new UserModel();
        $username=$this->request->getPost('username');
        $useremail=$this->request->getPost('useremail');
        $phoneno=$this->request->getPost('phoneno');
        $password=$this->request->getPost('password');
        $cpassword=$this->request->getPost('cpassword');

        
        $usrname=$usermodel->where('username',$username)->findAll();
        $email=$usermodel->where('useremail',$useremail)->findAll();

        if($usrname==NULL){
        if($password == $cpassword )
        {
       $password= password_hash($password,PASSWORD_DEFAULT);
            $data=[
                'username'=>$username,
                'useremail'=>$useremail,
                'phonenumber'=>$phoneno,
                'password'=>$password
                // 'profession'=>$profession 
            ];
        }
        else {
            $_SESSION['passcpass'] = 'Sorry, password and confermpassword not match';
            $session = session();
            $session->markAsFlashdata('passcpass');
           return redirect()->to('/signup');
        }
    }
    else if($email!=NULL){
        $_SESSION['emailalready'] = 'Sorry, useremail already exists';
        $session = session();
        $session->markAsFlashdata('emailalready');
       return redirect()->to('/signup');
    }
    else{
        $_SESSION['usernamealready'] = 'Sorry, username already exists';
        $session = session();
        $session->markAsFlashdata('usernamealready');
       return redirect()->to('/signup');
    }
        $r = $usermodel->insert($data);
        if($r)
        {
            $_SESSION['Signupdone'] = 'Sign up successfull, now you can login';
            $session = session();
            $session->markAsFlashdata('Signupdone');
           return redirect()->to('/login');

        }
        else 
        {
            echo"Error";
        }
    }
}
