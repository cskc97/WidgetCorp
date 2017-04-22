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
    private $databaseConnection=null;

    public function __construct()
    {
       $this->$databaseConnection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

    }

    /**
     * @param $subjectID
     * @param $menuName
     * @param $position
     * @param $visibility
     */
    public function insertASubject($menuName,
                                   $position, $visibility)
    {
        $insertionQuery = "INSERT INTO subjects VALUES(NULL,?,?,?);";
        $stmt = ($this->databaseConnection)->prepare($insertionQuery);
        $stmt->bind_param("sii",$menuName,$position,$visibility);
        $stmt->execute();
        $stmt->close();
    }

    public function insertAPage($subjectID,$menuName,$position
    ,$visibility,$content)
    {
        $insertionQuery = "INSERT INTO
                            pages VALUES(
                            NULL,?,?,?,?,?);
                            ";
        $stmt = ($this->databaseConnection)->prepare($insertionQuery);
        $stmt->bind_param("isiis",$subjectID,$menuName,$position,$visibility,
            $content);
        $stmt->execute();
        $stmt->close();


    }


    public function __destruct()
    {

        if(isset($this->$connection))
        {
            $this->databaseConnection->close();
        }
    }


}