<!DOCTYPE html>
<html>
<head>
	<title>AMS Kota</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .topic{
    color: rgb(7, 7, 61);
    margin-top: 40px; 
    font-size: 30px; 
    text-align: center;
    background: rgba(240, 255, 255, 0.527);
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
	<main>
		<section>
            <div class="content">
            <img src="logorail.PNG" width="140px" style="display: block; margin-left: auto; margin-right: auto; margin-top: 0px;">
            <h1>West <span> Central </span> Railway </h1>
			<h2 style="letter-spacing: 2px;">(Kota Division)</h2>
            </div>
			<div class="subheading">
            <h1 class="topic" style="font-family: 'Times New Roman', Times, serif; text-align:center;">Asset-<span>Management</span>-System</h1>
            </div> <br><br><br>
			<div class="click">
            <a href="login.php" class="btnone">Let's Go</a>
            </div>

            
			

		</section>

        
	</main>

    <footer class="home__footer">
            <span>+91 9001015311</span>
            <span>|</span>
            <span>mujahatalikhan@gmail.com</span>
            </footer>
</header>




<!--=============== SCROLLREVEAL ===============-->
<script src="scrollreveal.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="main.js"></script>
</body>
</html>

