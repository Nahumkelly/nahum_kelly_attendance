<?php 
        $title = "View Record";
        require_once "includes/header.php";
        require_once 'db/conn.php';

        //get Attendee by Id
        if(!isset($_GET['id'])){
            include 'includes/errormessage.php';
            header('location : viewrecords.php');
        }else{
            $id = $_GET['id'];
            $result = $crud->getAttendeesDetails($id);
            include 'includes/successmessage.php';
    ?>
       
<div class="card" style="width: 22rem; background-color: rgb(253, 249, 5); color: black">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname'] . ' '.   $result['lastname']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name']?></h6>
            <p class="card-text">Date of Birh: <?php echo $result['dateofbirth']?></p>
            <p class="card-text">Email Address: <?php echo $result['emailaddress']?></p>
            <p class="card-text">Contact Number: <?php echo $result['contactnumber']?></p>
            <br/>
            <a href="viewrecords.php" class=" btn btn-info">Back To List </a>
            <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class=" btn btn-warning">Edit </a>
            <a onclick="return confirm('Are you Sure you want to Delete this Record')" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class=" btn btn-danger">Delete </a>
     </div>
</div>

    <?php }?>

<hr/>
    <br/>

<?php require_once "includes/footer.php";?>