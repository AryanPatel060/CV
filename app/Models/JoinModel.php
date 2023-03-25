<?php
namespace app\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Query;
use CodeIgniter\Database\MySQLi;


class JoinModel extends Model
{
    protected $returnType ='array';
  public function getallachivment(){
   $query= $this->db->query("select * from users join achivment on users.id=achivment.user_id;");
    return $query->getResultArray();
  }
  public function getcatachivment($cat){
    
    $query= $this->db->query("select * from users join achivment on users.id=achivment.user_id where catagory='$cat';");
     return $query->getResultArray();
   }
  public function achivmentbyid($id)
  {
    $query= $this->db->query("select * from users join achivment on users.id=achivment.user_id where achivment_id='$id';");
     return $query->getResultArray();
  }
  public function profilebyid($id)
  {
    $query= $this->db->query("select * from users join achivment on users.id=achivment.user_id where id='$id';");
     return $query->getResultArray();
  }
  public function aproove($id)
  {
    $query= $this->db->query("select * from users join achivment on users.id=achivment.user_id where id='$id';");
     return $query->getResultArray();
  }

}
?>