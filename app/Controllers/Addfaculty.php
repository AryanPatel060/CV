<?php
namespace App\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use \App\Models\UserModel;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

class Addfaculty extends BaseController
{
    public function index()
    {   
        $usermodel = new UserModel();
        $username=$this->request->getPost('fusername');
        $useremail=$this->request->getPost('fuseremail');
        $password=$this->request->getPost('fpassword');
        $cpassword=$this->request->getPost('fcpassword');
        $category=$this->request->getPost('fc1');


        if($password == $cpassword)
        {
            $p=1;
            $password1= password_hash($password,PASSWORD_DEFAULT);
            $data=[
                'useremail'=>$useremail,
                'username'=>$username,
                'password'=>$password1,
                'profession'=>$p,
                'fcategory'=>$category
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

            $mail = new PHPMailer(true);
            try{
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username='aryanpatel19aug3@gmail.com';
            $mail->Password = 'mmrfwpsolkstystj';
            $mail->SMTPSecure="tls";
            $mail->Port='587';
            $mail->setFrom('admin@admin.com');
            $mail->addAddress($useremail);
            $mail->isHTML(true);
            $mail->Subject = 'Cradentials For Login in CV';
            $mail->Body ="Email Address=".$useremail."<br>Password=".$password."<br>    Username=".$username;
            $mail->send();
            echo'done';
            }
            catch(e){
                echo'error';
            }
           return redirect()->to('/adminpanel');
        }
        else 
        {
            echo"Error";
        }

    }
}
?>