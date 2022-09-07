<?php

    
    define('DBINFO','mysql:host=localhost;dbname=amskota');
    define('DBNAME','root');
    define('DBPASS','');

    function performQuery($query){
        $con = new PDO(DBINFO,DBNAME,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $con = new PDO(DBINFO, DBNAME, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

?>