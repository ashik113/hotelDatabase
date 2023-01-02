<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>


<div class="container"> 

  <br>
  <h1>GUEST REGISTRATION FORM</h1>
  <p>Please fill in this form with information related to the guest</p>
  <hr>
  <br>
<form method="POST">
   
<br>

<div class="form-group row">
  <div class="col">
    <label for="firstName" class="col form-label">First Name</label>
    <input type="text" name="firstName" class="form-control">
  </div>
  <div class="col">
        <label for="lastName" class="col form-label">Last Name</label>

    <input type="text" name="lastName" class="form-control">
  </div>
</div>


<br><br>

<div class="form-group row">
  <div class="col form-label">
            <label for="emailId" class="col form-label">Email Id</label>


    <input type="text" name="emailId" class="form-control">
  </div>
  <div class="col form-label">
                <label for="phoneNo" class="col form-label">Phone No</label>

    <input type="text" name="phoneNo" class="form-control" >
  </div>
</div>

<br><br>

<div class="form-group row">
  <div class="col form-label">
                    <label for="dateOfBirth" class="col form-label">Date of Birth</label>


    <input type="date" name="dateOfBirth" class="form-control">
  </div>
  <div class="col form-label">
                  <label for="nationality" class="col form-label">Nationality</label>

    <input type="text" name="nationality" class="form-control">
  </div>
  <div class="col form-label">
                    <label for="countryOfBirth" class="col form-label">Country of Birth</label>

    <input type="text" name="countryOfBirth" class="form-control">
  </div>
</div>

<br><br>

<div class="form-group row">
  <div class="col form-label">
                        <label for="dateOfArrival" class="col form-label">Date of Arrival</label>

    <input type="date" name="dateOfArrival" class="form-control">
  </div>
  <div class="col form-label">
                        <label for="intendedLengthOfStay" class="col form-label">Intended Length of Stay</label>

    <input type="text" name="intendedLengthOfStay" class="form-control">
  </div>
  <div class="col form-label">
                            <label for="roomAndBedNumber" class="col form-label">Room & Bed Number</label>

    
    <input type="text" name="roomAndBedNumber" class="form-control">
  </div>
</div>

<br><br>

<div class="form-group row">
    <div class="col form-label">
      <label for="textArea" >Occupation & Place of Employment</label>
      <br>
       <textarea rows="5" name="textArea" cols="100"></textarea>
</div>
    
</div>
<center>
<input type="submit" name="done" class="btn btn-success">
</center>
<br>
</div>

</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php

    include 'connection.php';
    if($_POST)
    {
      $fname = $_POST['firstName'];
      $lname = $_POST['lastName'];
      $email = $_POST['emailId'];
      $phone = $_POST['phoneNo'];
      $dob = $_POST['dateOfBirth'];
      $nation = $_POST['nationality'];
      $country = $_POST['countryOfBirth'];
      $doa = $_POST['dateOfArrival'];
      $length = $_POST['intendedLengthOfStay'];
      $roomNo = $_POST['roomAndBedNumber'];
      $textAreas = $_POST['textArea'];

      $sql = "INSERT INTO client VALUES ('$fname', '$lname', '$email', '$phone', '$dob', '$nation', '$country', '$doa', $length, $roomNo, '$textAreas')";

if ($conn->query($sql) === TRUE) {
  header("location:display.php");
  echo "Inserted Successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



    }

?>
</body>
</html>