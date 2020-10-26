<?php 
        $title = "success";
        require_once "includes/header.php";
    ?>
    <h1 class="text-center text-success">You have been Registered!!</h1>

    <!-- <div class="card" style="width: 22rem; background-color: rgb(253, 249, 5); color: black">
        <div class="card-body">
            <h5 class="card-title"><?php //echo $_GET['firstname'] . ' '.$_GET['lastname']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['speciality']?></h6>
            <p class="card-text">Date of Birh: <?php// echo $_GET['dob']?></p>
            <p class="card-text">Email Address: <?php //echo $_GET['email']?></p>
            <p class="card-text">Contact Number: <?php //echo $_GET['phone']?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
     </div>
</div> -->


<div class="card" style="width: 22rem; background-color: rgb(253, 249, 5); color: black">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['firstname'] . ' '.$_POST['lastname']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality']?></h6>
            <p class="card-text">Date of Birh: <?php echo $_POST['dob']?></p>
            <p class="card-text">Email Address: <?php echo $_POST['email']?></p>
            <p class="card-text">Contact Number: <?php echo $_POST['phone']?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
     </div>
</div>


    <hr/>
    <br/>

<?php require_once "includes/footer.php";?>