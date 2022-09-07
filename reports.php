<?php
require 'getout.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="multiselect-dropdown.js"></script>
    <!-- <script src="./fetch.js"></script> -->
    <style>
        .cont{
    margin-top: -5vw;
  }
  .cont h1 {
    margin: 30px 0 20px 0;
    font-size: 55px;
    font-weight: 700;
    text-shadow: 2px 1px 5px rgb(0, 0, 0);
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
  }

  .cont h1 span{
    color: #ff7200;
  }
        .topic{
    color: rgb(7, 7, 61);
    margin-top: 40px; 
    font-size: 40px; 
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
    margin-top: 10px;
  }
  .container{
    margin-top: -10px;
  }
}
@media screen and (min-width: 381px) and (max-width: 467px){
    .topic{
    font-size: 30px;
    text-align: center;
    height: 25px;
  }
}
    </style>
</head>
<body>

<header>
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
                            <a href="accounts.php" class="nav__link">Accounts</a>
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
            </div><br><br>
            <section>

           

            <div class="subheading">
            <h1 class="topic" style="font-family: 'Times New Roman', Times, serif; text-align:center;">Asset-<span>Management</span>-System</h1>
            </div> 

            </section>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                    
                        <form method="POST" action="displaydata.php">
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                        
                                        <select data_live_search="true" name="department" class="form-control" required>
                                        <option value="All">All</option>
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Assets</label>
                                        <select data-live-search="true" name="assets" class="form-control" required>
                                            <option value="All">All</option>
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
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Get Report</label> <br>
                                      <button type="submit" name="download_file" id="download_file" class="btn btn-info">GET REPORT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <script src="main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>