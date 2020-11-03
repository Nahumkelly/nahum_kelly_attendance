<?php

class crud{
    //private database object\
    private $db;

    function __construct($conn){
        $this->db =$conn;
    }

    //function to insert a new record into the attendee database
    public function insert($fname, $lname, $dob, $email, $contact,$specialty){
        try {
            //define all sql statemnet to be execution
            $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id) VALUES (:fname, :lname, :dob, :email, :contact,:specialty)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            //biind all placeholderto the actual values
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':specialty',$specialty);
            //Execute Statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function editAttendee($id, $fname, $lname, $dob, $email, $contact,$specialty){
        try{
            $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,
            `emailaddress`=:email,`contactnumber`=:contact,`specialty_id`=:specialty
            WHERE attendee_id =:id";

            $stmt = $this->db->prepare($sql);
            //biind all placeholderto the actual values
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':specialty',$specialty);
            //Execute Statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAttendees(){
        $sql = "SELECT * FROM `attendee` a inner join `specialties` s on a.specialty_id = s.specialty_id";
        $result = $this->db->query($sql);
        return $result;
    }

    public function getAttendeesDetails($id){
        $sql = "SELECT * FROM `attendee`a inner join `specialties` s on a.specialty_id = s.specialty_id WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id',$id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function getSpecialties(){
        $sql = "SELECT * FROM `specialties`";
        $result = $this->db->query($sql);
        return $result;
    }

}

?>