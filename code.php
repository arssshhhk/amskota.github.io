<?php
require 'getout.php';

if(isset($_POST['delete_email']))
{
    $user_email = mysqli_real_escape_string($conn, $_POST['delete_email']);

    $query = "DELETE FROM `reports` WHERE id='$user_email' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        
        header("Location: entries.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: entries.php");
        exit(0);
    }
}




// if(isset($_POST['save_student']))
// {
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $assets = mysqli_real_escape_string($conn, $_POST['assets']);
//     $total = mysqli_real_escape_string($conn, $_POST['total']);
//     $working = mysqli_real_escape_string($conn, $_POST['working']);
//     $nonwrkg = mysqli_real_escape_string($conn, $_POST['nonwrkg']);
//     $froms = mysqli_real_escape_string($conn, $_POST['froms']);
//     $to = mysqli_real_escape_string($conn, $_POST['to']);
//     $dtofinspection = mysqli_real_escape_string($conn, $_POST['dtofinspection']);
//     $pdc = mysqli_real_escape_string($conn, $_POST['pdc']);
//     $issue = mysqli_real_escape_string($conn, $_POST['issue']);

//     $query = "INSERT INTO students (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

//     $query_run = mysqli_query($con, $query);
//     if($query_run)
//     {
//         $_SESSION['message'] = "Student Created Successfully";
//         header("Location: student-create.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Student Not Created";
//         header("Location: student-create.php");
//         exit(0);
//     }
// }

?>

