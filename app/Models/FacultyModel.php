<?php
namespace app\Models;

use CodeIgniter\Model;

class FacultyModel extends Model
{
    protected $table ='faculty';
    protected $primaryKey ='faculty_id';

    protected $useAutoIncrement = true;

    protected $returnType ='object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['faculty_username','faculty_email','faculty_password','faculty_category_1','faculty_category_2','created_at','updated_at'];
    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'update_at';
    // protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages =[];
    protected $skipValidation = false;

}


?>