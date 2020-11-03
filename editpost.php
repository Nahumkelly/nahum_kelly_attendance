<?php
 $title = "Index";
 require_once "includes/header.php";
 require_once 'db/conn.php';

//get values from post opertion
if(isset($_POST['submit'])){
    $id =$_POST['id'];
    $fname =$_POST['firstname'];
    $lname =$_POST['lastname'];
    $dob =$_POST['dob'];
    $email =$_POST['email'];
    $contact =$_POST['phone'];
    $specialty =$_POST['speciality'];
    //call functionto insert and track is success or not
    $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact,$specialty);

    if($result){
      header ("location: viewrecords.php");
    }else{
        echo '<h1 class="text-center text-danger">There was an error in processing</h1>';

    }
}else{
    echo '<h1 class="text-center text-danger">There was an error in processing</h1>';

}





?>