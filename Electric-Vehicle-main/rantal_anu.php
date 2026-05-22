<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body{
            /* background-color: aqua; */
            background-image: url(https://d2cbg94ubxgsnp.cloudfront.net/Pictures/2000xAny/7/0/6/519706_index_car_23854.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            
        }
        h1{
            color: red;
        }
    </style>
    <title>Rent form</title>
</head>
<body>
    <h1>Rent a Electric Vehicle</h1>
    <form action="http://localhost/Prakhar/rantal_anu.php/" method="post">
        Enter your Full Name
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="namef" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="namel" placeholder="Last name">
            </div>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        Enter your phone number
        <div class="col">
            <input type="text" class="form-control" name="number" placeholder="Phone Number">
          </div>
          Address
        <div class="form-row">
            <div class="col-7">
              <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="state" placeholder="State">
            </div></div>
     <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        <?php
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $namef=$_POST['namef'];
            $namel=$_POST['namel'];
            $email=$_POST['email'];
            $number=$_POST['number'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $servername="localhost";
            $username="root";
            $password="";
            $database="rantal_anu";
            $conn=mysqli_connect($servername,$username,$password,$database);
            if(!$conn){
                die("Sorry we failed to connect");
            }
            else{
                echo "Connection was successfull<br>";
            }
            $sql="INSERT INTO `rantal_anu` (`namef`, `namel`, `email`, `number`, `city`, `state`)
             VALUES ('$namef', '$namel', '$email', '$number', '$city', '$state')";
              $result=mysqli_query($conn,$sql);
              if($result){
                echo "Record has been inserted successfully";
            }
            else{
                echo "The record has not been inserted successfully<br>";
            }
            }
        ?>

</body>
</html>