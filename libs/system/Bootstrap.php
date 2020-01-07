<?php
namespace libs\system;
class Bootstrap
{
    public function __construct()
    {
        if(isset($_GET["url"]))
        {

        }else{
            echo "MVC";
        }
    }
}