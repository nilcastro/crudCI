<?php  namespace app\models;

use CodeIgniter\Model;

class Crud_model extends Model{
    protected $table = 'task';
    protected $primarykey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = ["tittle", "description", "creadted-at"];
}


