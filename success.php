<?php
$title = "success";
require_once "includes/header.php";
require_once "db/conn.php";
require_once "sendemail.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['speciality'];
    //call functionto insert and track is success or not
    $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty);
    $specialtyName = $crud->getSpecialtyById($specialty);

    if ($isSuccess) {
        SendEmail::SendMail($email, 'Welcome to IT Conference 2020', 'Dear ' . $fname . ',<br><br>You have successfully registered for this year\'s IT Conference. <br><br>Regards. <br>IT Conference Team<br>');
        include 'includes/successmessage.php';
    } else {
        include 'includes/errormessage.php';
        header('location : viewrecords.php');
    }
}
?>


<!-- <div class="card" style="width: 22rem; background-color: rgb(253, 249, 5); color: black">
        <div class="card-body">
            <h5 class="card-title"><?php //echo $_GET['firstname'] . ' '.$_GET['lastname']
                                    ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['speciality']
                                                        ?></h6>
            <p class="card-text">Date of Birh: <?php// echo $_GET['dob']?></p>
            <p class="card-text">Email Address: <?php //echo $_GET['email']
                                                ?></p>
            <p class="card-text">Contact Number: <?php //echo $_GET['phone']
                                                    ?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
     </div>
</div> -->

<div class="row">
    <div class="col">
        <!-- 1 of 3 -->
    </div>
    <div class="col-xl">
        <div class="card" style="width: 30rem; background-color: rgb(253, 249, 5);">
            <div class="card-body" style="color: black; font-size: 20px;">
                <h2 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'] ?></h2>
                <h4 class="card-subtitle mb-2 text-muted"><?php echo $specialtyName['name'] ?></h4>
                <h5 class="card-text">Date of Birh: <?php echo $_POST['dob'] ?></h5>
                <h5 class="card-text">Email Address: <?php echo $_POST['email'] ?></h5>
                <h5 class="card-text">Contact Number: <?php echo $_POST['phone'] ?></h5>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    <div class="col">
        <!-- 3 of 3 -->
    </div>
</div>



<hr />
<br />

<?php require_once "includes/footer.php"; ?>