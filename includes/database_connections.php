<?php
/**
 * Created by PhpStorm.
 * User: santh
 * Date: 4/16/2017
 * Time: 5:23 PM
 */

require_once("Config.php");

class DatabaseConnections
{
    private $connection=null;

    public function __construct()
    {
       $this->$connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    }



    public function __destruct()
    {
       
        if(isset($this->$connection))
        {
            $this->connection->close();
        }
    }


}