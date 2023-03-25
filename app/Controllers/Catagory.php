<?php
namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\JoinModel;


class Catagory extends BaseController
{ 
  public function index()
  { 
    $model=new joinModel();
    $cat=$this->request->getpost('catagory');

     if($cat== 0){
        $result['achivments']=$model->getallachivment($cat);
     }
    else{
        $result['achivments']=$model->getcatachivment($cat);
    }
    // $result['achivments']=$model->where('catagory',$cat)->findAll();
    // print_r($result);
    echo view('home',$result);
  }

}