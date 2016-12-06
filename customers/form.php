<?php include 'model/database.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/style.css"/>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
</script>  
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    console.log( "Still Ready!" );
    $("#customerForm").validate({
      rules: {
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        email: {
          required: "We need your email adddress specified",
          email: "Your email address must be in the format 'username@domain.com'"
        }
      }
    });
  });
</script>
</head>
<body>
	
<div class="container">
  <h2>View / Update Customer</h2>
  <form action="submit-data.php" method="POST" name="registration" id="customerForm">

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" placeholder="John"/>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" placeholder="Doe" required/>

    <label for="lastname">Address</label>
    <input type="text" name="address" id="address" placeholder="1 Park Street"/>

    <label for="lastname">City</label>
    <input type="text" name="city" id="city" placeholder="Boston"/>

    <label for="lastname">State</label>
    <input type="text" name="state" id="state" placeholder="Massachusetts" required/>

    <label for="lastname">Postal Code</label>
    <input type="text" name="postal" id="postal" placeholder="00000" minlength="1" maxlength="21" required/>

    <label for="lastname">Country</label>
    <?php
      $dsn = 'mysql:host=localhost;dbname=tech_support';
      $username = 'ts_user';
      $password = 'pa55word';

      //db connection
      mysql_connect("localhost","ts_user","pa55word");
      mysql_select_db("tech_support");

      //query
      $sql = mysql_query("SELECT countryName FROM countries");
      if(mysql_num_rows($sql)){
      $select= '<select name="select">';
      while($rs=mysql_fetch_array($sql)){
            $select.='<option value="'.$rs['countryName'].'">'.$rs['countryName'].'</option>';
        }
      }
      $select.='</select>';
      echo $select; 

    ?>
    <label for="lastname">Phone</label>
    <input type="phone" name="phone" id="phone" placeholder="00000"/>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="john@doe.com"/>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" minlength="6" maxlength="21" required />

    <button type="submit" name="submit">Update Customer</button>

  </form>
</div>

</body>
	
</html>

