<?php
session_start();
include_once './util/ApiService.php';
include_once './util/Utility.php';
include_once "./controller/MahasiswaController.php";
include_once "./controller/Categorycontrol.php";
include_once "./controller/RencanaController.php";
include_once "./controller/UserController.php";


if (!isset($_SESSION['mySession'])) {
    $_SESSION['mySession'] = false;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script> 
    <link rel="stylesheet"href="style.css"></link>
    <script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-database.js"></script> 
    <script src="scripts/index.js"></script>
    <script src="script/command.js"></script>
    <script src="scripts/Apiservice.js"></script>
    <script src="scripts/genre_Script.js"></script>
    <title>PHP Programming</title>
</head>

<body>
    <?php
    if ($_SESSION['mySession']) {
    ?>
    <header>
    <nav>
        <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href="?mn=Home">mahasiswa</a></li>
            <li><a href="?mn=category">Category</a></li>
            <li><a href="?mn=rencana">rencana</a></li>
            <li><a href="?mn=Logout">Logout</a></li>
        </ul>
    </nav>

</header>
       
    <?php
        $menu = filter_input(INPUT_GET, "mn");
        switch ($menu) {
            case "Home":
                $mahasiswacontrol = new MahasiswaController();
                $mahasiswacontrol->index();
    
                break;
            case "category":
                $genrecontrol = new CategoryController();
                $genrecontrol->index();

                break;

            case "rencana":
                $rencanacontrol = new RencanaController();
                $rencanacontrol->index();

                break;

            case "rencanadelete":
                $rencanacontrol = new RencanaController();
                $rencanacontrol->delete();
                break;

            
            case "Logout":

                session_unset();
                session_destroy();
                header("location: index.php");
                break;
            default:
                include_once 'pages/home__page.php';
        }
    } else {
        $usercontroller = new UserController();
        $usercontroller->index();
        include_once 'pages/login.php';
    
   }
    ?>
</body>

</html>