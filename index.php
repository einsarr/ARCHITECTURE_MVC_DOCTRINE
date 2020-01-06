<?php
require_once "config/autoload.php";
use src\controller\RolesController;
$roles_dao = new RolesController();
$roles_dao->add();

