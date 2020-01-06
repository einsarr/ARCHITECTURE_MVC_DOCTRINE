<?php
namespace src\controller;
use libs\system\Controller;
class RolesController extends Controller
{
    public function add()
    {
        return $this->view->load("roles/add");
    }
    public function getAll()
    {
        $roles = array("ROLE_ADMIN","ROLE_USER");
        return $this->view->load("roles/getAll",$roles);
    }
}