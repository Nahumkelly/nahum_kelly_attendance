<?php 
        $title = "View Record";
        require_once "includes/header.php";
        require_once 'db/conn.php';

        //get Attendee by Id
        if(!isset($_GET['id'])){
            echo "<h1 class='text-danger> Please check details and try Agin!</h1>";
        }else{
            $id = $_GET['id'];
            $result = $crud->getAttendeesDetails($id);
    ?>
       
<div class="card" style="width: 22rem; background-color: rgb(253, 249, 5); color: black">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname'] . ' '.   $result['lastname']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name']?></h6>
            <p class="card-text">Date of Birh: <?php echo $result['dateofbirth']?></p>
            <p class="card-text">Email Address: <?php echo $result['emailaddress']?></p>
            <p class="card-text">Contact Number: <?php echo $result['contactnumber']?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
     </div>
</div>

    <?php }?>

<hr/>
    <br/>

<?php require_once "includes/footer.php";?>