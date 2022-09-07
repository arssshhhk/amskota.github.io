<div class="container">
        <header>Inspection Form</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Inspection</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        
                        <div class="input-field">
                            <label>PDO</label>
                            <input type="date" placeholder="Enter birth date" required>
                        </div>

                        

                        <div class="input-field">
                            <label>Assets</label>
                            <select required>
                                
                                <option>Tubelight</option>
                                <option>Fan</option>
                                <option>Taps</option>
                                <option>AC</option>
                                <option>Cooler</option>
                                <option>Water Cooler</option>
                                <option>Charging Points</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>From</label>
                            <select required>
                                <option disabled selected>Station</option>
                                <option>KOTA</option>
                                <option>SWM</option>
                                <option>GGC</option>
                                <option>BXN</option>
                                <option>BTE</option>
                                <option>DDV</option>
                                <option>MKX</option>
                                <option>RMA</option>
                                <option>BWM</option>
                                <option>JHW</option>
                                <option>SGZ</option>
                                <option>SVA</option>
                                <option>CMU</option>
                                <option>VMA</option>
                                <option>BAZ</option>
                                <option>BON</option>
                                <option>CAG</option>
                                <option>SYL</option>
                                <option>MTPC</option>
                                <option>DHR</option>
                                <option>BUDI</option>
                                <option>MLGH</option>
                                <option>SGAC</option>
                                <option>JLWC</option>
                                <option>KTPH</option>
                                <option>MTPC</option>
                                <option>GQL</option>
                                <option>LKE</option>
                                <option>IDG</option>
                                <option>BSSL</option>
                            </select>
                        </div>

                        <div class="input-field">
                        <label>To</label>
                            <select required>
                                <option disabled selected>Station</option>
                                <option>KOTA</option>
                                <option>SWM</option>
                                <option>GGC</option>
                                <option>BXN</option>
                                <option>BTE</option>
                                <option>DDV</option>
                                <option>MKX</option>
                                <option>RMA</option>
                                <option>BWM</option>
                                <option>JHW</option>
                                <option>SGZ</option>
                                <option>SVA</option>
                                <option>CMU</option>
                                <option>VMA</option>
                                <option>BAZ</option>
                                <option>BON</option>
                                <option>CAG</option>
                                <option>SYL</option>
                                <option>MTPC</option>
                                <option>DHR</option>
                                <option>BUDI</option>
                                <option>MLGH</option>
                                <option>SGAC</option>
                                <option>JLWC</option>
                                <option>KTPH</option>
                                <option>MTPC</option>
                                <option>GQL</option>
                                <option>LKE</option>
                                <option>IDG</option>
                                <option>BSSL</option>
                            </select>
                        </div>
                    </div>
                </div>

                
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>



    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">




    /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container{
    position: relative;
    max-width: 700px;
    max-height: 370px;
    width: 100%;
    
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: transparent;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: transparent;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container{
        max-height:600px;
    }
    .container form .form{
        background-color: #fff;
    }
    .container form{
        overflow-y: scroll;
        background-color: #fff;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}









* {
    margin: 0;
    padding: 0;
}
.ins{
    display: flex;
    height: 100vh;
    background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
      url("lightstation.JPG");
      background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.flex {
    display: flex;
    
}

.flexCenter {
    display: flex;
    align-items: center;
}

.flexco {
    display: flex;
    flex-direction: column;
}

.pd-20 {
    padding: 20px;
}

.mt-20 {
    margin-top: 20px;
}

.mb-20 {
    margin-bottom: 20px;
}

.mb-30 {
    margin-bottom: 30px;
}

.width {
    width: 100%;
}

.center {
    text-align: center;
}

.relative {
    position: relative;
}

.o-hidden {
    overflow: hidden;
}

.hidden {
    display: none;
}

.f-right {
    float: right;
}

.f001 {
    width: 50%;
    height: auto;
    padding: 30px 20px;
    margin: auto;
    font-family: system-ui;
    background:   rgba(206, 117, 65, 0.705);
    margin-top: 15%;
}

.f002 {
    padding: 25px 0px;
    display: block;
    position: relative;
    left: -2px;
    width: -webkit-fill-available;
}

.f003 {
    display: block;
    margin-right: 6.621%;
    width: 100%;
}

.f004 {
    font-weight: 600;
}

.f006 {
    flex-wrap: wrap;
}

.f007 {
    width: 45%;
    margin: 0 5% 3% 0;
    position: relative;
    height: 32px;
}

.f010 {
    background: #fff;
}

.f011 {
    width: 364px;
}

.f012 {
    text-align: center;
    color: #fff;
}

.f013 {
    font-size: 13px;
}

.f014 {
    margin: auto;
    text-decoration: none;
}

.f015 {
    background: #fff;
    color: #222;
    padding: 6px 15px;
    border-radius: 24px;
    display: block;

}

.f016 {
    width: 150px;
    border-radius: 50% 0 0 50%;
}

.f008 {
    padding: 7px 50px;
    border: none;
    color: #fff;
    cursor: pointer;
    background: #066474;
}

.f009 {
    width: 95%;
}

.ex-input {
    padding: 2px 8px;
    height: 30px;
    border-radius: 3px;
    background: transparent;
    box-shadow: 0 0 0 0.7px #929292;
    border: none;
    font-size: 12px;
    z-index: 1;
    position: absolute;
    left: 0;
    top: 0;
}

.ex-title {
    background: #fff;
    font-size: 11.5px;
    position: absolute;
    top: 12px;
    left: 8px;
    padding: 0 3px;
    line-height: 0.5;
    color: #929292;
    border-radius: 2px;
    transition: 0.2s;
}

.ex-input:focus {
    box-shadow: 0 0 0 1.5px #34a853;
    outline: none;
}

.ex-input:focus+.ex-title,
.ex-input:not(:placeholder-shown).ex-input:not(:focus)+.ex-title {
    font-size: 8.5px;
    top: -3px;
    left: 6px;
    z-index: 999;
}



@media screen and (max-width:842px) {
    .f001 {
        width: 85%;
    }

    .f007 {
        width: 43%;
        margin: 0 7% 3% 0;
    }
}

@media screen and (max-width:680px) {
    .f001 {
        display: block;
    }

    .f002 {
        border-radius: 63px 0;
    }

    .f003 {
        width: 90%;
        margin-left: 6.621%;
    }

    .f011 {
        margin: auto;
        width: 80%;
    }

    .f012 {
        margin-bottom: 20px;
    }
}

@media screen and (max-width:460px) {
    .f003 {
        margin: auto;
        width: 80%;
    }

    .f006 {
        margin-bottom: 20px;
    }

    .f007 {
        width: 100%;
        margin: auto;
        margin-bottom: 20px;
    }
}
    </style>
</head>
<body>
    <div class="ins">
    
<div class="header">
<nav class="nav bar">
                <a href="#" class="nav__logo">
                    WCR KOTA
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Contact</a>
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
            
    <div class="f001 flex">
        <div class="f011 flexCenter">
            <div class="f012 flexco pd-20">
                <ar-title class="f004 mb-20"><h2>Asset Management System</h2></ar-title>
                <ar-desc class="f013 mb-20">Please fill All the delails carefully.</ar-desc>
                <a href="#" class="f014">
                    <ar-ststus-chack class="f014">
                        <ar-button class="f015">Chack Status</ar-button>
                    </ar-ststus-chack>
                </a>
            </div>
        </div>
        <div class="f016 f010">
            <ar-desic class="hidden"></ar-desic>
        </div>
        <div class="f002 f010">
            <form action="" enctype="multipart/form-data">
                <div class="f003 center">
                    <ar-title class="f004">
                        <h3 class="f004 mb-30">Inspection form</h3>
                    </ar-title>
                    <ar-forms class="relative">
                        <div class="f006 flex">
                            <div class="f007">
                            <label>Date of Inspection</label><br>
                            <input type="date" placeholder="Enter birth date" required>
                            </div>
                            <div class="f007">
                                <input type="text" class="ex-input width" name="" placeholder=" " value="">
                                <in-title class="ex-title">Enter Subject</in-title>
                            </div>
                            <div class="f007">
                                <input type="text" class="ex-input width" name="" placeholder=" " value="">
                                <in-title class="ex-title">Exprince</in-title>
                            </div>
                            <div class="f007">
                                <input type="text" class="ex-input width" name="" placeholder=" " value="">
                                <in-title class="ex-title">Enter Document Name</in-title>
                            </div>
                            <div class="f007">
                                <input type="file" class="mt-20 width" name="" placeholder=" " value="">
                                <in-title class="ex-title hidden">Uplode Document</in-title>
                            </div>
                        </div>
                        <div class="f009 o-hidden">
                            <div class="f-right">
                                <button class="f015 f008">Apply</button>
                            </div>
                        </div>
                    </ar-forms>
                </div>
            </form>
        </div>
    </div>
    </div>



    <?php
session_start(); //we need session for the log in thingy XD 
include 'partials/_dbconnect.php';
$login=false;
$loginError=false;
if(isset($_POST['login'])){
  $password = $_POST['password'];
  $email = $_POST['email'];
  
  $query = "SELECT * from `accounts` where email = '$email' AND password = '$password'";
  $result = mysqli_query(@$con, $query);
  if(mysqli_num_rows($query) > 0){ //this is to catch unknown error.
    
       
        $_SESSION['login'] = true;
        $_SESSION['type'] = $row['type'];
              if($row['type'] == admin){
              header('location:admin.php');
              }
              else{
                $_SESSION["email"] = $row['email'];
                header('location:welcome.php');
              }
            }
      
      else{
        $loginError = "You don't have an account.";
      }
  // if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
  //       foreach(fetchAll($query) as $row){
  //         if($row['email']==$email&&$row['password']==$password){
  //             $_SESSION['login'] = true;
  //             $_SESSION['type'] = $row['type'];
  //             if($row['type'] == admin){
  //             header('location:admin.php');
  //             }
  //             else{
  //               header('location:welcome.php');
  //             }
  //         }else{
              
  //             header('location:login.php');
  //         }
  //         echo "<script>alert('Wrong login details.')</script>";
          
  
 
  
}
?>



<?php

include_once 'partials/_dbconnect.php';

$showError=false;
$approval=false;
if(isset($_POST['signup'])){
  @$name = $_POST['name'];
  @$email = $_POST['email'];
  @$password = $_POST['password'];
  @$number = $_POST['number'];
  @$designation = $_POST['designation'];
  @$department = $_POST['department'];
  @$stations = $_POST['stations'];
  $message = "$name would like to request an account.";
  $sql = "SELECT * from `accounts` where email = '$email' ";
  $result = mysqli_query(@$con, $sql);
  if(mysqli_num_rows($sql) == 0){ //this is to catch unknown error.
    $showError = "User already exist.";
  }
  // if(empty(trim($_POST["email"]))){
  //       $username_err = "email cannot be blank";
  //     }
  //     else{
  //         $sql = "SELECT amskota FROM accounts WHERE email = ?";
  //         $stmt = mysqli_prepare(@$con, $sql);
  //         if($stmt)
  //         {
  //             mysqli_stmt_bind_param($stmt, "s", $param_email);
      
  //             // Set the value of param username
  //             $param_email = trim($_POST['email']);
      
  //             // Try to execute this statement
  //             if(mysqli_stmt_execute($stmt)){
  //                 mysqli_stmt_store_result($stmt);
  //                 if(mysqli_stmt_num_rows($stmt) == 1)
  //                 {
  //                     $showError = "This email is already taken"; 
  //                 }
                
  else{  
    $query = "INSERT INTO `requests` (`id`, `name`, `email`, `password`, `number`, `designation`, `department`, `stations`, `message`, `dt`) VALUES ('', '$name', '$email', '$password', '$number', '$designation', '$department', '$stations', '$message', current_timestamp())";
    if(mysqli_query($query)){
      $approval = "Your account request is now pending for approval. Please wait for confirmation. Thankyou.";
    }else{
     echo "<script>alert('Error.')</script>";
    }
  }
  

  
       
}
?>












<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<?php
include("header.php");
?>
<?php
// database connection
try{
$con = new PDO("mysql:host=localhost; dbname=test2022", 'test2022', 'test2022');
} catch(PDOExection $e) {
echo $e->getMessage();
}
// define daterange
$dateCond = '';
if (!empty($_GET['from']) && !empty($_GET['to'])) {
$dateCond = "DATE(trn_date) >= '{$_GET['from']}' AND DATE(trn_date) <= '{$_GET['to']}'";
}
// define product filter
$product = '';
if (!empty($_GET['product'])) {
$product = "product='{$_GET['product']}'";
}
$city = '';
if (!empty($_GET['city'])) {
$city = "city='{$_GET['city']}'";
}
// search query
$sql = "SELECT city as city, farm_name as farm_name, salesdate as salesdate, rate as rate, product as product,
sum(amount) as amount,
sum(totaltaka) as totaltaka FROM sales WHERE farm_name = '{$_SESSION["username"]}' AND {$dateCond} AND {$product}  AND {$city} OR usertype = '{$_SESSION["usertype"]}' AND {$dateCond} AND {$product} AND {$city} GROUP BY city, farm_name, salesdate, rate, product order by product, salesdate asc";
$stmt = $con->prepare($sql);
$stmt->execute();
$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 </head>
 <body>
  <div align="center" class="container mt-5">
   <h5 align="center">Product Sales Summary Report by Sales Date & Product Filter</h5><br>
   <h6 align="center">Search Date Range within: (1 Jan 2021 to 31 Dec 2021/current date)</h6><br>
   <form class="myForm" method="get" enctype="application/x-www-form-urlencoded" action="index.php">
    <div class="form-row" align="left">
     <div class="form-group col-md-3">
      <label>From Date:</label>
      <input type="date" class="datepicker btn-block"  name="from" id="fromDate" Placeholder="Select From Date" value="<?php echo isset($_GET['from']) ? $_GET['from'] : '' ?>">
     </div>
     <div class="form-group col-md-3">
      <label>To Date:  </label>
      <input type="date" name="to" id="toDate" class="datepicker btn-block"  Placeholder="Select To Date" value="<?php echo isset($_GET['to']) ? $_GET['to'] : '' ?>">
     </div>
     <div class="form-group col-md-3">
      <label>Product:  </label>
      <select class="custom-select" name="product" id="product" required>
       <option value="">--Select Product--</option>
       <option value="Milk">Milk</option>
       <option value="Egg">Egg</option>
      </select>
     </div>
     <div class="form-group col-md-3">
      <label>City (value from other table)</label>
      <?php
      $con = mysqli_connect("localhost", "test2022", "test2022", "test2022");
      $city_name = '';
      $query = "SELECT city_name FROM city GROUP BY city_name ORDER BY city_name ASC";
      $result = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($result))
      {
      $city_name .= '<option value="'.$row["city_name"].'">'.$row["city_name"].'</option>';
      }
      ?>
      <select name="city" id="city_name" class="custom-select" required>
       <option value="">--Select City--</option>
       <?php echo $city_name; ?>
      </select>
     </div>
    </div>
    <div class="form-row" align="left">
     <div class="form-group col-md-3 offset-md-6">
      <a href="index.php" class="btn btn-danger btn-block"><i class="fa fa-refresh"></i> Reset</a></span>
     </div>
     <div class="form-group col-md-3">
      <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
     </div>
    </div>
   </form>
   <br>
   <style type="text/css">
   @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
   <div class="tg-wrap">
    <table id="table" class="display" cellspacing="0" style="width:100%">
     <thead style="font: bold; active" align="center">
      <tr>
       <td>Id</td>
       <td align= center>City Name</td>
       <td align= center>Farm Name</td>
       <td align= center>Product</td>
       <td align= center>Sales Date</td>
       <td align= center>Rate</td>
       <td align= center>Sales Qty/Ltr</td>
       <td align= center>Total (USD)</td>
      </tr>
     </thead>
     <tbody>
      <?php
      $total = [
      'total' => 0,
      'amount' => 0,
      'totaltaka' => 0,
      ];
      foreach ($arr as $index => $unit) {
      $total = [
      'amount' => $total['amount'] + $unit['amount'],
      'totaltaka' => $total['totaltaka'] + $unit['totaltaka'],
      ];
      echo '<tr>';
       echo '<td align= center>' . ($index + 1) . '</td>';
        echo '<td align= center>' . $unit['city'] . '</td>';
       echo '<td align= center>' . $unit['farm_name'] . '</td>';
       echo '<td align= center>' . $unit['product'] . '</td>';
       echo '<td align= center>' . $unit['salesdate'] . '</td>';
       echo '<td align= center>' . $unit['rate'] . '</td>';
       echo '<td align= center>' . $unit['amount'] . '</td>';
       echo '<td align= center>' . $unit['totaltaka'] . '</td>';
      echo '</tr>';
      }
      echo '<tr align= center>';
       echo '<th colspan="6" style="text-align: right;">Total</th>';
       echo '<td ><b>' . $total['amount'] . '</b></td>';
       echo '<td ><b>' . $total['totaltaka'] . '</b></td>';
      echo '</tr>';
      ?>
     </tbody>
    </table>
   </div>
   <!-- </div> -->
   <br>
   <br><br>
   <script type="text/javascript">
   $(document).ready(function() {
   $('#table').dataTable();
   } );
   </script>
  </body>
 </html>