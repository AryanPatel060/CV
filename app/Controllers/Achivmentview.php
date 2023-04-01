<?php

namespace App\Controllers;

use \App\Models\AchivmentModel;
use \App\Models\JoinModel;
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

class Achivmentview extends BaseController
{
    public function index()
    {   
        $record=new JoinModel(); 
        // if(!isset($_SESSION['user'])){
        //     return redirect()->to('login');
        // }
        // else{
        $id=$this->request->getpost('achivmentid');
        // }
        // echo $id;
        $r['achivments']=$record->achivmentbyid($id);
        echo view('achivmentview',$r);
    }
    public function aproove()
    {
       $a= new AchivmentModel();
       $b= new JoinModel();
    
       $id=$this->request->getpost('achivmentid');
       $approvedbyid=session('user')->username;
       $r= $a->set('aproovment',1)->where('achivment_id',$id)->update();
       $r= $a->set('approvedby',$approvedbyid)->where('achivment_id',$id)->update();

      
       $result['achivments']=$b->achivmentbyid($id);
    //    $this->session->set("aprooved",$result);

    $_SESSION['approved'] = 'Approvment Successfully!';
    $session = session();
    $session->markAsFlashdata('approved');

       if($r){
        echo view('achivmentview',$result);
       }
       else{
        echo'error';
       }
    }
    public function undoaproove()
    {
       $a= new AchivmentModel();
       $b= new JoinModel();

       $id=$this->request->getpost('achivmentid');
       $reason=$this->request->getpost('reason');

       $undobyid=session('user')->username;
       $r= $a->set('aproovment',0)->where('achivment_id',$id)->update();
       $r= $a->set('approvedby',$undobyid)->where('achivment_id',$id)->update();
       
       $result['achivments']=$b->achivmentbyid($id);
       $res=$b->achivmentbyid($id);

    //    print_r($result);
       $umail=$res['0']['useremail'];
       
    //    die();
   
          if($r){
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
            $mail->addAddress($umail);
            $mail->isHTML(true);
            $mail->Subject = 'Cradentials For Login in CV';
            $mail->Body ="<h2>Your Achivment was removed:</h2><br>
                           <h4>Reason for removal</h4>:".$reason;
            $mail->send();
            // echo'done';
            $_SESSION['undo'] = 'Approvment Undo Successfully!';
       $session = session();
       $session->markAsFlashdata('undo');
       echo view('achivmentview',$result);
       
            }
            catch(e){
                $_SESSION['milnot'] = 'We can not send mail to achivment holder';
       $session = session();
       $session->markAsFlashdata('mailnot');
                // echo'error';
                echo view('achivmentview',$result);
            }

          }
          else{
           echo'error';
          }
    }
}
?>