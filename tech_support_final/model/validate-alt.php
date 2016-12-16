<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["first_name"]))
     {$_SESSION['first_name']= "Name is required";}
   if (empty($_POST["email"]))
     {$_SESSION['email'] = "Email is required";}
   if (empty($_POST["last_name"]))
     {$_SESSION['last_name'] = "Website is required";}
   if (empty($_POST["city"]))
     {$_SESSION['city'] = "City is required";}
   if (empty($_POST["state"]))
     {$_SESSION['state'] = "state is required";}
}

?>