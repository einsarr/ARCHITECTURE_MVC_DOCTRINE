<?php
namespace src\model;
use libs\system\Model;
class RolesDb extends Model
{
    public function findAll()
    {
        return array("ADMIN_COMPTA","ROLE_FINANCE");
    }
   
}