<?php
namespace app\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table ='admin';
    protected $primaryKey ='admin_id';

    protected $useAutoIncrement = true;

    protected $returnType ='array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['admin_username', 'admin_email','admin_password'];
    protected $useTimestamp = true;
    // protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages =[];
    protected $skipValidation = false;

}


?>