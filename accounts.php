<?php
require 'getout.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>

   <!-- Bootstrap 5 CDN Link -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
   <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
	<!-- Custom CSS Link -->
	<link rel="stylesheet" href="styles.css">
   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --dark-blue:#2980b9;
   --red:#e74c3c;
   --dark-red:#c0392b;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

/* *::-webkit-scrollbar{
   width: 10px;
}

*::-webkit-scrollbar-track{
   background-color: rgb(247, 230, 217);
}

*::-webkit-scrollbar-thumb{
   background-color: #ff7200;
} */

.heading{
   
   background-color: aliceblue;
   justify-content: center;
}
.update-profile{
   width: 100%;
   height: 100%;
   background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
     url("lightstation.JPG");
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
}


.btn,
.delete-btn{
   width: 100%;
   border-radius: 5px;
   padding:10px 30px;
   color:var(--white);
   display: block;
   text-align: center;
   cursor: pointer;
   font-size: 20px;
   margin-top: 10px;
}

.btn{
   background-color: var(--blue);
}

.btn:hover{
   background-color: var(--dark-blue);
}

.delete-btn{
   background-color: var(--red);
}

.delete-btn:hover{
   background-color: var(--dark-red);
}

.message{
   margin:10px 0;
   width: 100%;
   border-radius: 5px;
   padding:10px;
   text-align: center;
   background-color: var(--red);
   color:var(--white);
   font-size: 20px;
}

.form-container{
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.form-container form{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 500px;
   border-radius: 5px;
}

.form-container form h3{
   margin-bottom: 10px;
   font-size: 30px;
   color:var(--black);
   text-transform: uppercase;
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   padding:12px 14px;
   font-size: 18px;
   color:var(--black);
   margin:10px 0;
   background-color: var(--light-bg);
}

.form-container form p{
   margin-top: 15px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.container{
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.container .profile{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 400px;
   border-radius: 5px;
}

.container .profile img{
   height: 150px;
   width: 150px;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.container .profile h3{
   margin:5px 0;
   font-size: 20px;
   color:var(--black);
}

.container .profile p{
   margin-top: 20px;
   color:var(--black);
   font-size: 20px;
}

.container .profile p a{
   color:var(--red);
}

.container .profile p a:hover{
   text-decoration: underline;
}

.update-profile{
   min-height: 100vh;
   background-color: var(--light-bg);
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
}

.update-profile form{
   padding:20px;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
   width: 700px;
   text-align: center;
   border-radius: 5px;
}

.update-profile form img{
   height: 200px;
   width: 200p;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: 5px;
}

.update-profile form .flex{
   display: flex;
   justify-content: space-between;
   margin-bottom: 20px;
   gap:15px;
}

.update-profile form .flex .inputBox{
   width: 49%;
}

.update-profile form .flex .inputBox span{
   text-align: left;
   display: block;
   margin-top: 15px;
   font-size: 17px;
   color:var(--black);
}

.update-profile form .flex .inputBox .box{
   width: 100%;
   border-radius: 5px;
   background-color: var(--light-bg);
   padding:12px 14px;
   font-size: 17px;
   color:var(--black);
   margin-top: 10px;
}

.topic{
    color: rgb(7, 7, 61);
     
    font-size: 30px; 
    text-align: center;
    height: 40px;
    text-shadow: 1px 1px 3px black;
    border-radius: 10px;
    justify-content: center;
}
.topic span{
    color:#ff7200
}
@media screen and (max-width: 380px){
    .topic{
    font-size: 20px;
    text-align: center;
    height: 25px;
  }
}
@media screen and (min-width: 380px) and (max-width: 480px){
    .topic{
        font-size: 25px;
        text-align: center;
        height: 25px;
    }
}

@media screen and (max-width:650px) and (min-width:650px){
   .update-profile form .flex{
      flex-wrap: wrap;
      gap:0;
   }
   .update-profile form .flex .inputBox{
      width: 100%;
   }
}
   </style>

</head>
<body>
<div class="header">
<nav class="nav bar">
                <a href="#" class="nav__logo">
                    WCR KOTA
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="welcome.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Contact</a>
                        </li>
                        <li class="nav__item">
                            <a href="accounts.php" class="nav__link">Account</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>
                </div>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
                
</nav>
</div>
<!-- <div class="body">
<br><div class="subheading">
<h1 class="topic" style="font-family: 'Times New Roman', Times, serif; text-align:center;">Asset-<span>Management</span>-System</h1>
</div> <br> -->

<div class="update-profile">
<?php 
$email = $_SESSION['email'];
    $query = "SELECT * FROM `accounts` where email = '$email'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $student)
        {
            ?>

   

   <form action="" method="post" enctype="multipart/form-data">
   <?php
if(@$_SESSION['updateaccount']){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>SUCCESS!</strong> Your Profile is updated successfully.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
}
?>
   <div class="heading">
      <h1 style="text-align: center;">My Profile</h1>
      </div>
      <div class="flex">
      
         <div class="inputBox">
         
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $student['name']; ?>" class="box" disabled>
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $student['email']; ?>" class="box" disabled>
            <span>mobile number :</span>
            <input type="email" name="update_number" value="<?php echo $student['number']; ?>" class="box" disabled>
            
         </div>
         <div class="inputBox">
         <span>Designation :</span>
            <input type="text" name="update_designation" value="<?php echo $student['designation']; ?>" class="box" disabled>
            <span>Department :</span>
            <input type="email" name="update_department" value="<?php echo $student['department']; ?>" class="box" disabled>
            <span>Headquarter :</span>
            <input type="email" name="update_stations" value="<?php echo $student['stations']; ?>" class="box" disabled>
         </div>

      </div>
      
      <a href="updateaccount.php?id=<?= $student['id']; ?>" class="btn">update profile</a>
      <a href="entries.php" class="btn">Your Entries</a>
      <a href="logout.php" name="logout" class="delete-btn">Logout</a>
      
   </form>

</div>
<?php
         }
     }
     else
     {
         echo "<h5> No Record Found </h5>";
     }
 ?>

<script src="main.js"></script>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</body>
</html>

<?php
unset($_SESSION['updateaccount']);
?>