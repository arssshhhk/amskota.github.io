<?php
include 'partials/_dbconnect.php';
session_start();

// define('MYSITE',true);
// if(!defined('MYSITE')){
//     header('location:login.php');
//     die();
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    
require 'vendor/autoload.php';

function send_password_reset($get_name,$get_email,$token)
{ 
    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'arshkhan1273@gmail.com';                     
    $mail->Password   = 'zjzcoqdvmeuhkvwn';                               
    $mail->SMTPSecure = "tls";            
    $mail->Port       = 587;       
    
    $mail->setFrom('arshkhan1273@gmail.com', 'AMS KOTA');
    $mail->addAddress($get_email);

    $mail->isHTML(true);
    $mail->Subject = 'Reset Password Link';
    $mail_template = "
    <h2>Hello, $get_name</h2>
    <a name='mail_body' href='http://localhost/amskota/passwordreset.php?email=$get_email&token=$token'><h4>Click here to reset your password</h4></a>
    ";
    $mail->Body = $mail_template;

    $mail->send();

}
$noemail = false;
$sendfailed = false;
@$_SESSION['checkyourmail'] = false;

if(isset($_POST['passwordreset'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT * FROM `accounts` WHERE email = '$email'";
    $check_email_run = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($check_email_run) > 0){
        $row = mysqli_fetch_array($check_email_run);
        @$get_name = $row['name'];
        @$get_email = $row['email'];
        send_password_reset($get_name, $get_email, $token);
        if(isset($_POST['passwordreset'])){
            echo @$_SESSION['checkyourmail'] = true;
            unset($_SESSION['passupdated']);
            
            header('location:login.php');
        }
    } 
    else{
        echo $noemail = true; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Recover Account</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(lightstation.JPG);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}

.container .login-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}

.container .login-social {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    margin-bottom: 25px;
}

.container .login-social a {
    padding: 12px;
    margin: 10px;
    border-radius: 3px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    text-decoration: none;
    font-size: 1rem;
    text-align: center;
    color: #FFF;
    transition: .3s;
}

.container .login-social a i {
    margin-right: 5px;
}

.container .login-social a.facebook {
    background: #4267B2;
}

.container .login-social a.twitter {
    background: #1DA1F2;
}

.container .login-social a.google-plus {
    background: #db4a39;
}

.container .login-social a.linkedin {
    background: #0e76a8;
}

.container .login-social a.facebook:hover {
    background: #3d5fa3;
}

.container .login-social a.twitter:hover {
    background: #1991db;
}

.container .login-social a.google-plus:hover {
    background: #ca4334;
}

.container .login-social a.linkedin:hover {
    background: #0b5c81;
}

.container .login-email .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}

.container .login-email .input-group input {
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}

.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
    border-color: #a29bfe;
}

.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #a29bfe;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #6c5ce7;
}

.login-register-text {
    color: #111;
    font-weight: 600;
}

.login-register-text a {
    text-decoration: none;
    color: #6c5ce7;
}

@media (max-width: 430px) {
    .container {
        width: 300px;
    }
    .container .login-social {
        display: block;
    }
    .container .login-social a {
        display: block;
    }
}
    </style>
</head>
<body>
	<div class="container">
		<form method="POST" class="login-email">
        <?php
            if($noemail){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>OOPS!</strong> Email not found.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>';
              }
              
            
            ?>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Recover Your Account!</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			
			<div class="input-group">
				<button name="passwordreset" class="btn">Send Reset Link</button>
			</div>
			<p class="login-register-text">Remeber Your Password! <a href="login.php">Get Login Here</a>.</p>
		</form>
	</div>
    <script src="main.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
</body>
</html>

<?php
unset($noemail);
?>