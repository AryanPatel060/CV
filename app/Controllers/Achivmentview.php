<?php

namespace App\Controllers;

use \App\Models\AchivmentModel;
use \App\Models\JoinModel;

class Achivmentview extends BaseController
{
    public function index()
    {   
        $record=new JoinModel();       
        $id=$this->request->getpost('achivmentid');
        // echo $id;
        $r['achivments']=$record->achivmentbyid($id);
        echo view('achivmentview',$r);
    }
    public function aproove()
    {
       $a= new JoinModel();
       $id=$this->request->getpost('achivmentid');
       $r=$a->where('achivment_id',$id)->update('aproovment' ,1);
       if($r){
           return redirect()->to('achivmentview');
       }
       else{
        echo'error';
       }
    }
}
?>