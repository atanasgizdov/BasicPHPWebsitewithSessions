<?php

// define variables and set to empty values
$first_nameErr = $last_nameErr = $emailErr = $addressErr = $cityErr = $stateErr = $postalErr = $phoneErr "";
$first_name = $last_name = $email = $address = $city = $state = $gender = $comment = $website = $postal_code = $phone = "";
$errors = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $first_nameErr = "First name is required";
    $errors = true;
  } else {
    $first_name = test_input($_POST["first_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$first_name) OR strlen($first_name)<1) OR strlen($first_name)>51)) {
      $first_nameErr = "Only letters and white space allowed and length must be between 1 and 51 characters"; 
      $errors = true;
    }
  }

  if (empty($_POST["last_name"])) {
    $last_nameErr = "Last name is required";
    $errors = true;
  } else {
    $last_name = test_input($_POST["last_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name) OR strlen($last_name)<1) OR strlen($last_name)>51)) {
      $last_nameErr = "Only letters and white space allowed and length must be between 1 and 51 characters"; 
      $errors = true;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
      $errors = true;    
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      $errors = true;      
    }
  }

  if (empty($_POST["address"]) {
    $addressErr = "Address is required";
    $errors = true;
  } else {
    $address = test_input($_POST["address"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$address) OR strlen($address)<1) OR strlen($address)>51)) {
      $addressErr = "Only letters and white space allowed and length must be between 1 and 51 characters"; 
      $errors = true;
    }
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is required";
    $errors = true;
  } else {
    $city = test_input($_POST["city"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$city) OR strlen($city)<1) OR strlen($city)>51)) {
      $cityErr = "Only letters and white space allowed and length must be between 1 and 51 characters"; 
      $errors = true;
    }
  }

  if (empty($_POST["state"])) {
    $stateErr = "State is required";
    $errors = true;
  } else {
    $state = test_input($_POST["state"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$state) OR strlen($state)<1) OR strlen($state)>51)) {
      $stateErr = "Only letters and white space allowed and length must be between 1 and 51 characters"; 
      $errors = true;
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
    $errors = true;
  } else {
    $phone = test_input($_POST["phone"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:(\s*([2-9]1[02-9]|[2-9][02-8]‌​1|[2-9][02-8][02-9])‌​\s*)|([2-9]1[02-9]|[‌​2-9][02-8]1|[2-9][02‌​-8][02-9]))\s*(?:[.-‌​]\s*)?)([2-9]1[02-9]‌​|[2-9][02-9]1|[2-9][‌​02-9]{2})\s*(?:[.-]\‌​s*)?([0-9]{4})/",$phone) {
      $stateErr = "Phone numbers should be in the format of (555) 555-5555"; 
      $errors = true;
    }
  }

  if (empty($_POST["postal_code"])) {
    $postalErr = "Postal Code is required";
    $errors = true;
  } else {
    $postal_code = test_input($_POST["postal_code"]);
    // check if name only contains letters and whitespace
    if strlen($postal_code)<1) OR strlen($postal_code)>20)) {
      $postalErr = "Postal codes must be between 1 and 21 characters";
      $errors = true;
    }
  }
    
  if (empty($_POST["email"])) {
    $email = "Email address is required.";
    $errors = true;
  } else {
    $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL) OR strlen($email)<1) OR strlen($email)>51)) {
      $emailErr = "Invalid email format and remember that length must be between 1 and 51 characters"; 
      $errors = true;
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if(!empty($errors))//if error occured
{
   die(implode('<br />', $errors));//Stops the script and prints the errors if any occured
}
// Insert the data from the form into the DB:
?>