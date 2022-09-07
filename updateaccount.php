<?php
require 'getout.php';
?>

<?php
if(isset($_POST['update_email']))
{
    $nos = false;
    $_SESSION['updateaccount'] = false;
    $user_email = mysqli_real_escape_string($conn, $_POST['update_email']);

    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $stations = mysqli_real_escape_string($conn, $_POST['stations']);

    if($working + $nonwrkg != $total){
        $nos = true;
    }
    else{

        $query = "UPDATE `accounts` SET `name`='$name', `email`='$email', `number`='$number', `designation`='$designation', `department`='$department', `stations`='$stations' WHERE  email ='$user_email' ";
        $sql = "UPDATE `reports` SET `name`='$name', `email`='$email', `number`='$number', `designation`='$designation', `department`='$department', `stations`='$stations' WHERE  email = '$user_email' ";
        $sql_run = mysqli_query($conn, $sql);
        $query_run = mysqli_query($conn, $query);
    
        if($query_run." ".$sql_run)
        {
            echo $_SESSION['updateaccount'] = true;
            header("Location: accounts.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Updated";
            header("Location: accounts.php");
            exit(0);
        }
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
	<!-- Custom CSS Link -->
	<link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >


    <title>Update Details</title>
    <style>
        .body{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.15)),
              url("lightstation.JPG");
              background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding:20px;
        }

        @media screen and (max-width:650px) and (min-width:650px){
            .body {
               flex-wrap: wrap;
               gap:0;
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
<?php
    if(@$nos){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>OOPS!</strong> Working or Non-working numbers are incorrect.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
      }
?>
  <div class="body">
    <div class="container ">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Details 
                            <a href="accounts.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_email = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM `accounts` WHERE id ='$user_email' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form method="POST">
                                    
                                    
                                    <div class="mb-3">
                                        <label>username</label>
                                        <input type="text" name="name" value="<?=$student['name'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Mobile number</label>
                                        <input type="number" name="number" value="<?=$student['number'];?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Designation</label>
                                        <select data-live-search="true" name="designation" value="<?=$student['designation'];?>" class="form-control" required>
                                        <!-- <option disabled selected value="">Assets</option> -->
                                        <option value="DRM">DRM</option>
                                        <option value="ADRM(O&A)">ADRM(O&A)</option>
                                        <option value="ADRM(T&I)">ADRM(T&I)</option>
                                        <option value="Sr DEN Co">Sr DEN Co</option>
                                        <option value="Sr DSTE Co">Sr DSTE Co</option>
                                        <option value="Sr DME Co">Sr DME Co</option>
                                        <option value="Sr DSO">Sr DSO</option>
                                        <option value="Sr DEE TRO">Sr DEE TRO</option>
                                        <option value="Sr DEE TRD">Sr DEE TRD</option>
                                        <option value="Sr DEE G">Sr DEE G</option>
                                        <option value="Sr DEE TRS">Sr DEE TRS</option>
                                        <option value="CMS">CMS</option>
                                        <option value="Sr DPO">Sr DPO</option>
                                        <option value="Sr DFM">Sr DFM</option>
                                        <option value="SSE">SSE</option>
                                        <option value="JE">JE</option>
                                        <option value="Technician">Technician</option>
                                        <option value="CLI">CLI</option>
                                        <option value="TI">TI</option>
                                        <option value="MCF">MCF</option>
                                        <option value="Fitter">Fitter</option>
                                        <option value="CSI">CSI</option>
                                        <option value="DCWI">DCWI</option>
                                        <option value="CMI">CMI</option>
                                        <option value="SC-LOCO">SC-LOCO</option>
                                        <option value="SC-OPTG">SC-OPTG</option>
                                        <option value="SC-TRD">SC-TRD</option>
                                        <option value="SC-ENGG">SC-ENGG</option>
                                        <option value="MVI">MVI</option>
                                        <option value="MCF">MCF</option>
                                        <option value="DCTI">DCTI</option>
                                        <option value="HELPER">HELPER</option>
                                        <option value="AAO">AAO</option>
                                        <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Department</label>
                                        <select data-live-search="true" name="department" value="<?=$student['department'];?>" class="form-control" required>
                                        <!-- <option disabled selected value="">Assets</option> -->
                                        <option value="Engineering">Engineering</option>
                                        <option value="Electrical G">Electrical G</option>
                                        <option value="Mechanical">Mechanical</option>
                                        <option value="Operating">Operating</option>
                                        <option value="Electrical TRD">Electrical TRD</option>
                                        <option value="Electrical TRO">Electrical TRO</option>
                                        <option value="Electrical TRS">Electrical TRS</option>
                                        <option value="Signal & Telecom">Signal & Telecom</option>
                                        <option value="Safety">Safety</option>
                                        <option value="Administration">Administration</option>
                                        <option value="Medical">Medical</option>
                                        <option value="Accounts">Accounts</option>
                                        <option value="Personal">Personal</option>                
                                        <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Headquarter</label>
                                        <select data-live-search="true" name="stations" value="<?=$student['stations'];?>" class="form-control" required>
                                        <!-- <option disabled selected value="">Assets</option> -->
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
                                    <div class="mb-3">
                                        <button type="submit" name="update_email" value="<?=$student['email'];?>" class="btn btn-primary">
                                            Update Entry
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Email Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="main.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</body>
</html>