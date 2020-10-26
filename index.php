<?php 
        $title = "index";
        require_once "includes/header.php";
    ?>

<h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="success.php" > 

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname"style="background-color: rgb(253, 249, 5); color: black" >
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" style="background-color: rgb(253, 249, 5); color: black"  >
        </div>
            
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob" style="background-color: rgb(253, 249, 5); color: black"  >
        </div>

        <div class="form-group">
            <label for="speciality">Area of Expertise</label>
            <select class="form-control" id="speciality" name="speciality"style="background-color: rgb(253, 249, 5); color: black" >
                <option>Database Admin</option>
                <option>Software Developer</option>
                <option>Web Administrator</option>
                <option>Network Admin</option>
                <option>Other</option>
             </select>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" style="background-color: rgb(253, 249, 5); color: black" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="phone">Contact</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" style="background-color: rgb(253, 249, 5); color: black" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your Contact Number with anyone else.</small>
        </div>

       
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form> 
    <hr/>
    <br/>

<?php require_once "includes/footer.php";?>