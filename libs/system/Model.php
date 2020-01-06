<?php
namespace libs\system;
class Model
{
    protected $entityManager;
    public function __construct()
    {
        require_once "Bootstrap.php";
        $this->entityManager = $entityManager;
    }
}