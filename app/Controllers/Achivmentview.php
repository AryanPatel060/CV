<?php

namespace App\Controllers;

use \App\Models\AchivmentModel;
use \App\Models\JoinModel;

class Achivmentview extends BaseController
{
    public function index()
    {   
        $record=new JoinModel(); 
        if(!isset($_SESSION['user'])){
            return redirect()->to('login');
        }
        else{
        $id=$this->request->getpost('achivmentid');
        }
        // echo $id;
        $r['achivments']=$record->achivmentbyid($id);
        echo view('achivmentview',$r);
    }
    public function aproove()
    {
       $a= new AchivmentModel();
       $b= new JoinModel();
    
       $id=$this->request->getpost('achivmentid');
       $r= $a->set('aproovment',1)->where('achivment_id',$id)->update();

       $result['achivments']=$b->achivmentbyid($id);
    //    $this->session->set("aprooved",$result);

    $_SESSION['approved'] = 'apprvment successfully!';
    $session = session();
    $session->markAsFlashdata('approved');

       if($r){
        echo view('achivmentview',$result);
       }
       else{
        echo'error';
       }
    }
}
?>