<?php
namespace app\Models;

use CodeIgniter\Model;

class AchivmentModel extends Model
{
    protected $table ='achivment';
    protected $primaryKey ='achivment_id';

    protected $useAutoIncrement = true;

    protected $returnType ='array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['user_id', 'achivment_title','achivment_desc','catagory','aproovment','approvedby','created_at','updated_at'];
    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'update_at';
    // protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages =[];
    protected $skipValidation = false;

}


?>