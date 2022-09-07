<?php
require 'getout.php';
?>

<?php 

$insert = false;
$alreadyInsert = false;
$nos = false;
// $wrongDoi = false;
// $wrongStation = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    @$name = $_POST["name"];
    $email = $_POST["email"];
    @$number = $_POST["number"];
    @$designation = $_POST["designation"];
    @$department = $_POST["department"];
    @$stations = $_POST["stations"];
    @$assets = $_POST["assets"];
    $total = $_POST["total"];
    $working = $_POST["working"];
    $nonwrkg = $_POST["nonwrkg"];
    @$froms = $_POST["froms"];
    $to = $_POST["to"];
    $dtofinspection = $_POST["dtofinspection"];
    $pdc = $_POST["pdc"];
    $issue = $_POST["issue"];
    $sql = "SELECT * FROM `inspection` where email = '$email' AND assets = '$assets' AND dtofinspection = '$dtofinspection' AND froms = '$froms' ";
        
        
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
       
    
    if($working + $nonwrkg != $total){
        $nos = true;
    }elseif(mysqli_num_rows($result) > 0){
        $alreadyInsert = true;
    }
    else{       
        $sql1 = "INSERT INTO `reports` (`dtofinspection`, `name`, `email`, `number`, `designation`, `department`, `stations`, `froms`, `to`, `assets`, `total`, `working`, `nonwrkg`, `pdc`, `dt`, `issue`) VALUES ('$dtofinspection', '$name', '$email', '$number', '$designation', '$department', '$stations', '$froms', '$to', '$assets', '$total', '$working', '$nonwrkg', '$pdc', current_timestamp(), '$issue')";
        if(mysqli_query($conn, $sql1)){
          $insert = true;
        }else{
         echo '<script>alert("Error")</script>';
        }
   }
        
        
   
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspection Entries</title>
	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >

	<!-- Custom CSS Link -->
	<link rel="stylesheet" href="styles.css">
    <style>
        /* Google Poppins Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}

/* Variables */
:root{
    --primary-font-family: 'Poppins', sans-serif;
    --light-white:#f5f8fa;
    --gray:#5e6278;
    --gray-1:#e3e3e3;
}
body{
    min-height: 100vh;
    
  align-items: center;
  justify-content: center;
  background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
      url("lightstation.JPG");
      background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  padding: 20px;
} 

/* Main CSS */ 
.wrapper{
    padding:0 0 100px;
    
    background-position:bottom center;
    background-repeat: no-repeat;
    
    
    min-height: 100%;
    position: relative;
}

.wrapper .logo img{
    max-width:40%;
}
.wrapper input{
    background-color:var(--light-white);
    border-color:var(--light-white);
    color:var(--gray);
}
.wrapper input:focus{
    box-shadow: none;
}
.wrapper .password-info{
    font-size:10px;
}
.wrapper .submit_btn{
    padding:10px 15px;
    font-weight:500;
}
.wrapper .login_with{
    padding:80px 15px;
    font-size:13px;
    font-weight: 500;
    transition:0.3s ease-in-out;
}
.wrapper .submit_btn:focus,
.wrapper .login_with:focus{
    box-shadow: none;
}
.wrapper .login_with:hover{
    background-color:var(--gray-1);
    border-color:var(--gray-1);
}
.wrapper .login_with img{
    max-width:7%;
}
.search_select_box{
    max width: 40px;
    margin:17px auto;
}

.search_select_box select{
    width: 100%;
}
.search_select_box button{
    background-color: var(--light-white) !important;
    padding: 10px 25px;
    color: grey !important;
    font-size: 17px;
}
.topic{
    color: rgb(7, 7, 61);
    margin-top: 40px; 
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
    <section class="wrapper">
		<div class="block">
        
			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <br><div class="subheading">
            <h1 class="topic" style="font-family: 'Times New Roman', Times, serif; text-align:center;">Asset-<span>Management</span>-System</h1>
            </div> <br>
				<form class="rounded bg-white shadow p-5" method="post">
                <?php
    if($insert){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>SUCCESS!</strong> Your data has been inserted.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
        }
    if($alreadyInsert){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>OOPS!</strong> Data already has been inserted.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
        }
    if($nos){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>OOPS!</strong> Working or Non-working numbers are incorrect.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
        }
    // if($wrongDoi){
    //       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //        <strong>OOPS!</strong> Data already has been inserted.
    //        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //          <span aria-hidden="true">&times;</span>
    //        </button>
    //      </div>';
    //     }
    // if($wrongStation){
    //       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //        <strong>OOPS!</strong> Data already has been inserted.
    //        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //          <span aria-hidden="true">&times;</span>
    //        </button>
    //      </div>';
    //     }
        ?>
					<h3 class="text-dark fw-bolder fs-4 mb-2">INSPECTION FORM</h3>                   
                    <div class="form-floating mb-3">
                        <input class="form-control" id="floatingFirstName" name="name" placeholder="name@example.com" value="<?php echo($_SESSION['name']);?>" hidden>
                        <label for="floatingFirstName">name</label>
                    </div>
                    <div class="form-floating mb-3">
                    
                        <input class="form-control" id="floatingFirstName" name="email" placeholder="name@example.com" value="<?php echo($_SESSION['email']);?>" hidden>
                        <label for="floatingFirstName">email</label>
                    </div>
                    <div class="form-floating mb-3">
                    
                        <input class="form-control" id="floatingFirstName" name="number" placeholder="name@example.com" value="<?php echo($_SESSION['number']);?>" hidden>
                        <label for="floatingFirstName">number</label>
                    </div>
                    <div class="form-floating mb-3">
                    
                        <input class="form-control" id="floatingFirstName" name="designation" placeholder="name@example.com" value="<?php echo($_SESSION['designation']);?>" hidden>
                        <label for="floatingFirstName">designation</label>
                    </div>
                    <div class="form-floating mb-3">
                    
                        <input class="form-control" id="floatingFirstName" name="department" placeholder="name@example.com" value="<?php echo($_SESSION['department']);?>" hidden>
                        <label for="floatingFirstName">department</label>
                    </div>
                    <div class="form-floating mb-3">
                    
                        <input class="form-control" id="floatingFirstName" name="stations" placeholder="name@example.com" value="<?php echo($_SESSION['stations']);?>" hidden>
                        <label for="floatingFirstName">stations</label>
                    </div>
                    
                    <div class="search_select_box">
                            <select data-live-search="true" name="assets" class="form-control" required>
                            <option disabled selected value="">Assets</option>
                                <option value="Tubelight/lights/LED">Tubelight/lights/LED</option>
                                <option value="Fan">Fan</option>
                                <option value="Taps">Taps</option>
                                <option value="AC">AC</option>
                                <option value="Cooler">Cooler</option>
                                <option value="Water Cooler">Water Cooler</option>
                                <option value="Charging Points">Charging Points</option>
                                <option value="Lift">Lift</option>
                                <option value="Esscelator">Esscelator</option>
                                <option value="Benches/Chairs/Seats">Benches/Chairs/Seats</option>
                            </select>
                    </div> 
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="total" id="floatingFirstName" placeholder="name@example.com" required>
                        <label for="floatingFirstName">Total Nos.</label>
                    </div><div class="form-floating mb-3">
                        <input type="number" class="form-control" name="working" id="floatingFirstName" placeholder="name@example.com" required>
                        <label for="floatingFirstName">Working Nos.</label>
                    </div><div class="form-floating mb-3">
                        <input type="number" class="form-control" name="nonwrkg" id="floatingFirstName" placeholder="name@example.com" required>
                        <label for="floatingFirstName">Defective / Non-Wkg Nos.</label>
                    </div>
					<div class="search_select_box">
					
                            <select data-live-search="true" class="form-control" name="froms" required>
                                <option disabled selected value="">From Station</option>
                                <option value="KOTA">KOTA</option>
                                <option value="SWM">SWM</option>
                                <option value="GGC">GGC</option>
                                <option value="BXN">BXN</option>
                                <option value="BTE">BTE</option>
                                <option value="DDV">DDV</option>
                                <option value="MKX">MKX</option>
                                <option value="RMA">RMA</option>
                                <option value="BWM">BWM</option>
                                <option value="JHW">JHW</option>
                                <option value="SGZ">SGZ</option>
                                <option value="SVA">SVA</option>
                                <option value="CMU">CMU</option>
                                <option value="VMA">VMA</option>
                                <option value="BAZ">BAZ</option>
                                <option value="BON">BON</option>
                                <option value="CAG">CAG</option>
                                <option value="SYL">SYL</option>
                                <option value="MTPC">MTPC</option>
                                <option value="DHR">DHR</option>
                                <option value="BUDI">BUDI</option>
                                <option value="MLGH">MLGH</option>
                                <option value="SGAC">SGAC</option>
                                <option value="JLWC">JLWC</option>
                                <option value="KTPH">KTPH</option>
                                <option value="MTPC">MTPC</option>
                                <option value="GQL">GQL</option>
                                <option value="LKE">LKE</option>
                                <option value="IDG">IDG</option>
                                <option value="BSSL">BSSL</option>
                            </select>
                            </div>

                            <div class="search_select_box">
                            <select data-live-search="true" class="form-control" name="to" >
                                <option>Station</option>
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
					Date of Inspection
                    <div class="form-floating mb-3">
                    <!-- <label for="floatingFirstName">Date of Inspection</label> -->
                        <input type="date" placeholder="Enter birth date" name="dtofinspection" class="form-control" id="floatingFirstName" required>
					</div> 
                    PDC
                    <div class="form-floating mb-3">
                    <!-- <label for="floatingFirstName">PDC</label> -->
                        <input type="date" placeholder="Enter birth date" name="pdc" class="form-control" id="floatingFirstName" >
					</div> 
                   
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="issue" placeholder="Describe your issue" style="max-line: 1;" required>
                        <label for="floatingFirstName">Describe Your issue</label>
                    </div>

                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="gridCheck" style="background-color: grey;" required>
                        <label class="form-check-label ms-2" for="gridCheck" >
                          Read Carefully & Continue.
                        </label>
                    </div>
                    
					<button type="submit" class="btn btn-primary submit_btn w-100 my-4">submit</button> 
				</form>
			</div>
		</div>
	</section>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <script src="script.js"></script>
</body>
</html>


