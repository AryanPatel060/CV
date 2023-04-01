<?php
namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\JoinModel;
use \App\Models\CategoryModel;



class Catagory extends BaseController
{ 
  public function index()
  { 
    $model=new joinModel();
    $cat=$this->request->getpost('catagory');
    $catprofile=$this->request->getpost('catagoryfromprofile');

    
      if($cat== 0){
        $result['achivments']=$model->getallachivment($cat);
     }
    else{
        $result['achivments']=$model->getcatachivment($cat);
    }
    $model = new CategoryModel();
        $r['categorys']=$model->selectall();

      
      echo view('partials/header2',$r);
      echo view('home',$result);
        
  }

  public function addcat()
  { 
    $catmodel= new CategoryModel();
    $cat=$this->request->getpost('newcat');
     $data=[
      'category_name'=>$cat
     ];
     $result=$catmodel->insert($data);
     if($result)
     {
      $_SESSION['catadd'] = 'category added';
      $session = session();
      $session->markAsFlashdata('catadd');
      return redirect()->to('adminlogin');

     }
  }
  public function editcat()
  { 
    $catmodel= new CategoryModel();
    $cat=$this->request->getpost('catid');
    
  }
  public function deletecat()
  {
    $catmodel= new CategoryModel();
    $cat=$this->request->getpost('catid');
    $result=$catmodel->where('category_id',$cat)->delete();
    if($result)
     {
      $_SESSION['catdelete'] = 'category deleted';
      $session = session();
      $session->markAsFlashdata('catdelete');
      return redirect()->to('adminpanel');
     }
    }
}