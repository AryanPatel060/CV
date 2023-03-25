<?php

namespace App\Controllers;
// use \App\Models\AchivmentModel;
use \App\Models\UserModel;
// use \App\Models\JoinModel;



class Addfaculty extends BaseController
{
    public function index()
    {   
        $usermodel = new UserModel();
        $username=$this->request->getPost('fusername');
        $useremail=$this->request->getPost('fuseremail');
        $phoneno=$this->request->getPost('fphoneno');
        $password=$this->request->getPost('fpassword');
        $cpassword=$this->request->getPost('fcpassword');

        echo $username. $useremail.$phoneno.$password;
        if($password == $cpassword)
        {
            $p=1;
            $password= password_hash($password,PASSWORD_DEFAULT);
            $data=[
                'useremail'=>$useremail,
                'username'=>$username,
                'phonenumber'=>$phoneno,
                'password'=>$password,
                'profession'=>$p 
            ];
        }
        // print_r($data);
        else {
            $_SESSION['passcpass'] = 'Sorry, password and confirmpassword not match';
            $session = session();
            $session->markAsFlashdata('passcpass');
           return redirect()->to('/adminpanel');
        }
        
        $r = $usermodel->insert($data);
        if($r)
        {
            $_SESSION['Signupdone'] = 'Sign up successfull, now faculty can login';
            $session = session();
            $session->markAsFlashdata('Signupdone');
           return redirect()->to('/adminpanel');

        }
        else 
        {
            echo"Error";
        }

    }
}
?>