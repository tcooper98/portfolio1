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
// define variables and set to empty values
$nameError = $emailError = $majorError = $housingError = $satisfactionError =  "";
$name = $studentEmail = $major = $housing = $satisfaction = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Please enter your name";
  } else {
    $name = $_POST["name"];
  }

  if (empty($_POST["studentEmail"])) {
    $emailError = "Email is required";
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
    $satisfactionError = "Please select one";
  } else {
    $satisfaction = $_POST["satisfaction"];
  }
}
?>

    <div id="wrapper">
    <h1>Student Survey</h1>
    <div id="font">
	<form method="post" action="">
     <span class="error"> <?php echo $nameError;?></span>
     <br>
     <label for="name">Name: </label>
     <br>
     <input type="text" name="name" value="<?php echo $name;?>">
     <br>
     
     <span class="error"> <?php echo $emailError;?></span>
     <br>
     <label for="studentEmail">Student Email:</label>
     <br>
     <input type="text" name="studentEmail" value="<?php echo $studentEmail;?>">
     <br>
     
     <span class="error"> <?php echo $majorError;?></span>
     <br>
     <label for="major">Major:</label>
     <br>
     <input type="text" name="major" value="<?php echo $major;?>">
     <br><br>
     
     <label for="housing">Do you live on campus? </label>
     </div>
     <br>
     <span class="error"> <?php echo $housingError;?></span>
     
     
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



  <input type="submit" name="submit" value="submit">
    </form>
</div>
  </body>
</html>


