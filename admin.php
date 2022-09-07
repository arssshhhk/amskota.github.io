<?php
session_start(); //we need session for the log in thingy XD 
include_once("functions.php");
if($_SESSION['login'] !== true){
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Admin block</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    

    



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .body{
        width: 100%;
    height: 100vh;
    background-image: url("back.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
  
<header style="background-color: aliceblue">
  
  <div class="navbar navbar-transparent bg-transparent shadow-sm">
    <div class="container" >
      <a href="#" class="navbar-brand d-flex align-items-center">
        
        <strong>Hi, admin</strong>
      </a>
      <div class="pull-right">
      <?php
        if(isset($_POST['logout'])){
            session_destroy();
            header('location:admin.php');
        }
    
      ?>


        <form method="post">
            <button name="logout" class="btn btn-danger my-2">Logout</button>
        </form>
      </div>
      
    </div>
  </div>
</header>

<main role="main" >

  <section class="jumbotron text-center" style="background-color: rgb(180, 213, 243); font-size: 25px; margin-top:30px;">
    <div class="container">
    <?php
            
            $query = "select * from `requests`;";
            if(count(fetchAll($query))>0){
                foreach(fetchAll($query) as $row){
                    ?>
            
                <h1 class="jumbotron-heading"><?php echo $row['email']." | ".$row['number']." | ".$row['designation']." | ".$row['department']." | ".$row['stations'] ?></h1>
                <h5 class ="jumbotron-heading"><?php echo$row['id'] ?></h5>
                  <p class="lead text-muted"><?php echo $row['message'] ?></p>
                  <p>
                    <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
                    <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                  </p>
                <small><i><?php echo $row['dt'] ?></i></small><hr>
        <?php 

            }
            }else{
                echo "No Pending Requests.";
            }
        ?>
    </div>
  </section>

  
</main>
          


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
  </body>
</html>
