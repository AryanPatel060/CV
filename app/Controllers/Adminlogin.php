<?php

namespace App\Controllers;
use \App\Models\AdminModel;

class Adminlogin extends BaseController
{
    public function index()
    {
        if(isset($_SESSION['admin'])){
            return redirect()->to('adminpanel');
        }
        else {
            $_SESSION['adminloginpage'] = 'adminloginpage';
            $session = session();
            $session->markAsFlashdata('adminloginpage');
            echo view('partials\header');
            echo view('adminlogin');
            echo view('partials\footer');
        }
    }

    public function adminlogin()
    {
     $userModel = new AdminModel();
     $email = $this->request->getPost('adminemail');
     $password = $this->request->getPost('adminpassword');
     

     $result = $userModel->where('admin_email',$email)->first();
    //  echo $password;
    //  echo $email;
    //   print_r($result);
   
     if( $result['admin_id'] > 0)
     {
        if (password_verify( $password, $result['admin_password']))
        {
            // session_destroy();
            $this->session->set("admin",$result);
           return redirect()->to('adminpanel');
        }
         else
        {
            $_SESSION['emailpass'] = 'Sorry, Email or password do not match';
            $session = session();
            $session->markAsFlashdata('emailpass');
           return redirect()->to('adminpanel');

        }
     }

    }

    public function adminlogout()
    {
        session_destroy();
      return redirect()->to('adminlogin');
    } 
}
?>