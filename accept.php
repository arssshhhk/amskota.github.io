<?php
    include_once('functions.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM `requests` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            @$name = $row['name'];
            @$email = $row['email'];
            @$password = $row['password'];
            @$number = $row['number'];
            @$designation = $row['designation'];
            @$department = $row['department'];
            @$stations = $row['stations'];
            $query = "INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `number`, `designation`, `department`, `stations`, `type`, `dt`) VALUES (NULL, '$name', '$email', '$password', '$number', '$designation', '$department', '$stations', 'user', current_timestamp());";
            
        }
        $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id'";
            if(performQuery($query)){
            echo "Account has been accepted.";
            }else{
            echo "Unknown error occured. Please try again.";
            }
        
    }else{
        echo "Error occured.";
    }
    
?>
<br/><br/>
<a href="admin.php">Back</a>