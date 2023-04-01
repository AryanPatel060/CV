<?php
namespace app\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table ='category';
    protected $primaryKey ='category_id';

    protected $useAutoIncrement = true;

    protected $returnType ='array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['category_name','created_at','updated_at'];
    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'update_at';
    // protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages =[];
    protected $skipValidation = false;
     

    public function selectall()
    {
        $query= $this->db->query("select * from category;");
    return $query->getResultArray();
    }
}


?>