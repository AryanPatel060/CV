<?php
namespace app\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table ='users';
    protected $primaryKey ='id';

    protected $useAutoIncrement = true;

    protected $returnType ='object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username', 'useremail','phonenumber','password','profession','fcategory','created_at','updated_at'];
    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'update_at';
    // protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages =[];
    protected $skipValidation = false;

}


?>