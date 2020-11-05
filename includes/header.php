<?php 
//This include session file. this ffile contain code that starts/returns a session
//By having it in the header file. it will be included on every page, allowing sesssion capability to be used on every page a cross the website
include_once 'includes/session.php'?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="css/sitestyle.css">
    <title>Attendance - <?php echo "$title"?></title>
</head>

<body>
    <div class="container-fluid">
        <div id="heading"  class="row">
            <div class="col-lg-1 offset-lg-1">
                <img class="rounded" src="image/nahum.png" alt="Nahum" width="70&quot;" height="70&quot;"></div>
            <div class="col">
                <h3>Nahum Kelly</h3>
                <h4></h4>
            </div>
            <div class="col offset-lg-3">
                <form class="form-inline my-2 my-lg-10" >
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div>
            <nav class="navbar navbar-dark navbar-expand-md">
                <div class="container-fluid">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only"
                            style="background-color:#f9f7f7;">Toggle navigation</span><span class="navbar-toggler-icon"
                            style="color:rgba(247,247,247,0.5);"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                    <div>
                    <ul class="nav navbar-pills mr-auto">
                    <li class="nav-item">
                        <a class="nav-link actve " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewrecords.php">View Attendees</a>
                    </li>
                </ul>
                    </div>
                    
                    <div class="navbar-nav ml-auto">
                    <?php 
                            if(!isset($_SESSION['userid'])){
                        ?>                      
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" style="color: black;">Login</a>
                            </li>  
                        <?php }else {?>  
                            <!-- <li>
                            <a class="nav-link" href="#" style="color: black;"></a>
                            <spam style="color: black;">Hello <?php //echo $_SESSION['username'] ?>!</spam>
                            </li> -->
                            <li>
                            <spam style="color: black;">Hello <?php echo $_SESSION['username'] ?>!</spam>
                                <a class="nav-link" href="logout.php" style="color: black;">Logout</a>
                            </li>
                        <?php }?>                    
                    </ul>
                    </div>

                </div>
            </nav>
        </div>

        <div class="container">
            <br/>
     