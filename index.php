<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/icons/tabicon.ico">
    <title>Meezan</title>
    <link rel="stylesheet" href="css/tools.css">
    <link rel="stylesheet" href="css/styler.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body onload="preload()" onresize="logWind()" style="margin:0;">

    <?php
        require_once("connection.php");
        session_start(); 
    
        if(isset($_REQUEST['page']))
        switch($_REQUEST['page'])
        {
            case 'services':
                $pg = 1;
                break;
            
            case 'bloodbank':
                $pg = 2;
                break;
                
            case 'about':
                $pg = 3;
                break;
                
            case 'contact':
                $pg = 4;
                break;
                
            default:
                $pg = 99;
                break;
        }
    ?>

    <div class="preloader"></div>

    <div id="aftCont" style="display:none;">
        <nav>
            <div class="navbar bg-lightgreen navbar-dark navbar-expand-md fixed-top">

                <div class="navbar-brand">
                    <a href="index.php" class="nav-link">
                        <img src="images/logo/logo.png" width="60px" height="60px" alt="Meezan Logo">
                        <label class="h2" style="color: white;cursor:pointer;">EEZAN</label>
                    </a>
                </div>

                <div class="navbar-collapse collapse justify-content-end" id="mez_menu">
                    <ul class="navbar-nav text-right">
                        <li class="nav-item <?php if($pg==0)echo "active";?>">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=services" class="nav-link <?php if($pg==1)echo "active";?>">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=bloodbank" class="nav-link <?php if($pg==2)echo "active";?>">Blood Bank</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=about" class="nav-link <?php if($pg==3)echo "active";?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=contact" class="nav-link <?php if($pg==4)echo "active";?>">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="nav-item log"></div>

                <button onclick="logWind()" class="navbar-toggler" data-toggle="collapse" data-target="#mez_menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>

        <div class="pageContent">
            <?php
                if(isset($_REQUEST['page'])){
                    if($_REQUEST['page'] == 'services')include("services.php");
                    if($_REQUEST['page'] == 'bloodbank')include("bloodbank.php");
                    if($_REQUEST['page'] == 'about')include("about.php");
                    if($_REQUEST['page'] == 'contact')include("contact.php");
                    if($_REQUEST['page'] == 'signup')include("signup.php");
                    if($_REQUEST['page'] == 'appointment')include("appointment.php");
                    if($_REQUEST['page'] == 'docpanel')include("docpanel.php");
                    if($_REQUEST['page'] == 'adminpanel')include("adminpanel.php");
                    if($_REQUEST['page'] == 'profile')include("profile.php");
                }
                else{
                    $pg = 0;
                    include("home.php"); 
                }
          ?>
        </div>
    </div>


    <script src="js/javasc.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
