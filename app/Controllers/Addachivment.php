<?php

namespace App\Controllers;
use \App\Models\AchivmentModel;
use \App\Models\CategoryModel;


class Addachivment extends BaseController
{
    public function index()
    {
      $model = new CategoryModel();
             $result['categorys']=$model->selectall();
                         
            echo view('addachivment',$result);
    }

    public function addachivment(){
      $achivmentmodel = new AchivmentModel();
      $model = new CategoryModel();
       
      $userid=session('user')->id;
      $title=$this->request->getpost('title');
      $desc=$this->request->getpost('desc');
      $catagory=$this->request->getpost('catagory');
      $doc = $this->request->getfile('doc');
    //   echo $doc;
    //   die();

      $result=$model->where('category_id',$catagory)->first();
      $catname=$result['category_name'];
      
      if($doc->isValid() && ! $doc->hasMoved()){

        $name = $doc->getRandomName();
        $doc->move('uploads/',$name);
      }else{
        $name=0;
      }
      $approved=0;
      $data=[
        'user_id'=>$userid,
        'achivment_title'=>$title,
        'achivment_desc'=>$desc,
        'catagory'=>$catname,
        'category_id'=>$catagory,
        'aproovment'=>$approved,
        'doc'=>$name
    ];

    $r = $achivmentmodel->insert($data);
    if($r)
    {
        $_SESSION['achivmentadded'] = 'achivment added successfully';
        $session = session();
        $session->markAsFlashdata('achivmentadded');
       return redirect()->to('profile');

    }
    else 
    {
        echo"Error";
    }

    }

    public function deleteachivment()
    { 
      // echo'in deletede';
      // die();
      $achivmentmodel = new AchivmentModel();
      $desc=$this->request->getpost('achivmentid');
      $result=$achivmentmodel->where('achivment_id',$desc)->delete();
      // echo $desc;
      if($result)
       {
        $_SESSION['achiventdelete'] = 'Achivment deleted';
        $session = session();
        $session->markAsFlashdata('achiventdelete');
        return redirect()->to('profile');
       }

    }

}

?>