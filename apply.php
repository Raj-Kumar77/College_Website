<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="apply.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Regisration Form </title> 
</head>
<body>
    <div class="container">
        <header>Registration | <a href="index.php">Home>></a></header>


        <form action="#" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <div class="details address">
                        <span class="title">Address Details</span>
    
                        <div class="fields">
                            <div class="input-field">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Permanent or Temporary" required>
                            </div>
    
                            <div class="input-field">
                                <label>Nationality</label>
                                <input type="text" name="nationality" placeholder="Enter nationality" required>
                            </div>
    
                            <div class="input-field">
                                <label>State</label>
                                <input type="text" name="state" placeholder="Enter your state" required>
                            </div>
    
                            <div class="input-field">
                                <label>City</label>
                                <input type="text" name="city" placeholder="Enter your district" required>
                            </div>

                            <div class="input-field">
                                <label>District</label>
                                <input type="text" name="district" placeholder="Enter your district" required>
                            </div>

                            <div class="input-field">
                                <label>Pin Code</label>
                                <input type="number" name="pin" placeholder="Enter your district" required>
                            </div>
    
                        </div>
                    </div>
                    <div class="twin" style="display: flex;justify-content:space-between">
                        <button class="nextBtn">
                            <span class="btnText">Next</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        <button>
                            <span><a href="display2.php" style="color:#fff">View</a></span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                    
                </div> 
            </div>

            <div class="form second">
                

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="father" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" name="mother" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Father Occupation</label>
                            <input type="text" name="occupation" placeholder="Enter Father Occupation" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit" type="submit" name="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>


<?php

include 'connection.php';

if(isset($_POST['submit'])){
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $nationality=$_POST['nationality'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $pin=$_POST['pin'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $occupation=$_POST['occupation'];

    // $insertquery = "insert into registration (First_name,Last_name,Dob,Email,Mob_no,Gender,Address,Nationality,State,City,District,Pincode,Father_name,Mother_name,Father_occupation) values ('$fname','$lname','$dob','$email','$mobile','$gender','$address','$nationality','$state','$city','$district','$pin','$father','$mother','$occupation')";

    $insertquery =  "INSERT INTO `registration` (`S_no`, `First_name`, `Last_name`, `Dob`, `Email`, `Mob_no`, `Gender`, `Address`, `Nationality`, `State`, `City`, `District`, `Pincode`, `Father_name`, `Mother_name`, `Father_occupation`) VALUES (NULL, '$fname', '$lname', '$dob', '$email', '$mobile', '$gender', '$address', '$nationality', '$state', '$city', '$district', '$pin', '$father', '$mother', '$occupation')";

    $res = mysqli_query($con,$insertquery);

    if($res){
        ?>
        <script>
            alert("Data Insrted Properly");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data Not Inserted");
        </script>
        <?php
    }
}

?>