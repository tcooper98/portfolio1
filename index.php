<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio one</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <?php

$nameError = $emailError = $majorError = $housingError = $satisfactionError = $emailListError = "";
$name = $studentEmail = $major = $housing = $satisfaction = $emailList = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Please enter your name";
  } else {
    $name = $_POST["name"];
  }

  if (empty($_POST["studentEmail"])) {
    $emailError = "Please enter your Email";
  } else {
    $studentEmail = $_POST["studentEmail"];
  }

  if (empty($_POST["major"])) {
    $majorError = "Please enter your major";
  } else {
    $major = $_POST["major"];
  }

  if (empty($_POST["housing"])) {
    $housingError = "select one";
  } else {
    $housing = $_POST["housing"];
  }

  if (empty($_POST["satisfaction"])) {
    $satisfactionError = "Select one for least satisfied and five for most satisfied";
  } else {
    $satisfaction = $_POST["satisfaction"];
  }

  if (empty($_POST["emailList"])) {
    $emailListError = "select one";
  } else {
    $emailList = $_POST["emailList"];
  }
}



  
?>

    <div id="wrapper">
    <h1>Student Survey</h1>
    <div id="font">
	<form method="post" action="">
     
     <label for="name">Name: </label>
     <span class="error"> <?php echo $nameError;?></span>
     <br>
     <input type="text" name="name" value="<?php echo $name;?>">
     <br>
     
     
     <label for="studentEmail">Student Email:</label>
     <span class="error"> <?php echo $emailError;?></span>
     <br>
     <input type="text" name="studentEmail" value="<?php echo $studentEmail;?>">
     <br>
     
     
     <label for="major">Major:</label>
     <span class="error"> <?php echo $majorError;?></span>
     <br>
     <input type="text" name="major" value="<?php echo $major;?>">
     <br><br>
     
     <label for="housing">Do you live on campus? </label>
     <span class="error"> <?php echo $housingError;?></span>
     <br>
     </div>
     
     
     
     <input type="radio" name="housing" <?php if (isset($housing) && $housing== "Yes") echo "checked";?> value="Yes">
     <label for="Yes">Yes</label>
     <br>
     
     <input type="radio" name="housing" <?php if (isset($housing) && $housing== "No") echo "checked";?> value="No">
     <label for="No">No</label>
     <br>
     
     <input type="radio" name="housing" <?php if (isset($housing) && $housing== "noBut") echo "checked";?> value="noBut">
     <label for="noBut">No, I live in student affiliated housing</label>
     <br><br>
     
     
     <div id="font">
     <label for="satisfaction">How satisfied are you with your housing?</label>
     <br>
     <span class="error"> <?php echo $satisfactionError;?></span>
     <br>
    </div>
     
     <input type="radio" name="satisfaction" <?php if (isset($satisfaction) && $satisfaction== "1") echo "checked";?> value="1">
     <label for="1">1</label>

     <input type="radio" name="satisfaction" <?php if (isset($satisfaction) && $satisfaction== "2") echo "checked";?> value="2">
     <label for="2">2</label>
     
     <input type="radio" name="satisfaction" <?php if (isset($satisfaction) && $satisfaction== "3") echo "checked";?> value="3">
     <label for="3">3</label>

     <input type="radio" name="satisfaction" <?php if (isset($satisfaction) && $satisfaction== "4") echo "checked";?> value="4">
     <label for="4">4</label>

     <input type="radio" name="satisfaction" <?php if (isset($satisfaction) && $satisfaction== "5") echo "checked";?> value="5">
     <label for="5">5</label>
     <br><br>
     
     <div id="font">
     <label for="emailList">Would you like to receive emails for housing recommendations?</label>
     <span class="error"> <?php echo $emailListError;?></span>
     </div>
     
     
     
     <input type="checkbox"  name="emailList"  <?php if (isset($emailList) && $emailList== "Yes") echo "checked";?> value="Yes">
     <label for="emailList"> Yes</label>
     <br>
     <input type="checkbox"  name="emailList" <?php if (isset($emailList) && $emailList== "No") echo "checked";?> value="No">
     <label for="emailList"> No</label>
     <br><br>


  
  <input type="submit" name="submit" value="submit">
  <br>

   <?php
  
    if(isset($_POST['submit'])){
    echo "form submitted";
 
}
     
   ?>

  
    </form>
</div>
  </body>
</html>


