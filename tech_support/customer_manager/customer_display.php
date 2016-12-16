<?php 
include '../view/header.php'; 
require_once '../model/validate.php';

?>

<head>

<style>
.error {color: #FF0000;}
</style>
<script src="/tech_support/model/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
    console.log("yelp!");
    jQuery.validator.addMethod("phoneUS", function (phone, element) {
        //phone = phone.replace(/\s+/g, "");
        return this.optional(element) || phone.length > 9 && phone.match("\\(\\d{3}\\)\\s\\d{3}-\\d{4}");
    }, "Please specify a valid phone number");

    $('#aligned').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            first_name: {
                required: true, 
                minlength: 1,
                maxlength: 51
            },
            last_name: {
                required: true, 
                minlength: 1,
                maxlength: 51
            },
            address: {
                required: true, 
                minlength: 1,
                maxlength: 51
            },
            city: {
                required: true, 
                minlength: 1,
                maxlength: 51
            },
            state: {
                required: true, 
                minlength: 1,
                maxlength: 51
            },
            postal_code: {
                required: true, 
                minlength: 1,
                maxlength: 21
            },
            password: {
                required: true, 
                minlength: 6,
                maxlength: 21
            },
            phone: {
                required: true,
                phoneUS: true
            }                              
        }
    });

    $('#aligned input').on('keyup blur', function () { // fires on every keyup & blur
        if ($('#aligned').valid()) {                   // checks form for validity
            $('input[type="submit"]').prop('disabled', false);        // enables button
        } else {
            $('input[type="submit"]').prop('disabled', 'disabled');   // disables button
        }
    });
});

</script>
</head>
<main>

    <!-- display a table of customer information -->
    <h2>View/Update Customer</h2>
    <p><span class="error">* required field.</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="aligned">
        <input type="hidden" name="action" value="update_customer">
        <input type="hidden" name="customer_id" 
               value="<?php echo htmlspecialchars($customer['customerID']); ?>">

        <label>First Name:</label>
        <input type="text" name="first_name" 
               value="<?php echo htmlspecialchars($customer['firstName']); ?>">
<!--                 <span class="error">* <?php echo $first_nameErr;?></span>
                -->               <br>

        <label>Last Name:</label>
        <input type="text" name="last_name" 
               value="<?php echo htmlspecialchars($customer['lastName']); ?>">
<!-- <span class="error">* <?php echo $last_nameErr;?></span>
                -->               <br>

        <label>Address:</label>
        <input type="text" name="address" 
               value="<?php echo htmlspecialchars($customer['address']); ?>" 
               size="50">
<!-- <span class="error">* <?php echo $addressErr;?></span>
                -->               <br>

        <label>City:</label>
        <input type="text" name="city" 
               value="<?php echo htmlspecialchars($customer['city']); ?>">
<!-- <span class="error">* <?php echo $cityErr;?></span>
                -->               <br>

        <label>State:</label>
        <input type="text" name="state" 
               value="<?php echo htmlspecialchars($customer['state']); ?>">
<!-- <span class="error">* <?php echo $stateErr;?></span>
                -->               <br>

        <label>Postal Code:</label>
        <input type="text" name="postal_code" 
               value="<?php echo htmlspecialchars($customer['postalCode']); ?>"><br>
        
        <label>Country:</label>
         <?php

          @mysql_connect("localhost","ts_user","pa55word");
          $db = mysql_select_db("tech_support");
          
          //query
          $sql = mysql_query("SELECT countryCode,countryName FROM countries ORDER by countryName");
          $selectStatement = "SELECT countryName FROM countries WHERE countryCode = '".$customer['countryCode']."'";
          $query = mysql_query($selectStatement);
          $row = mysql_fetch_row($query);
          $newCountryCode = $row[0];
          if(mysql_num_rows($sql)){
          $select = '<select name="country_code" id="countryCode">';
          while($rs = mysql_fetch_array($sql)){ 
            if ($rs['countryCode'] === $customer['countryCode']) {
                  $select.='<option selected="true" value="'.$customer['countryCode'].'">'.$newCountryCode.'</option>';
            } else {
                  $select.='<option value="'.$rs['countryCode'].'">'.$rs['countryName'].'</option>';
                }
            }
          }
          $select.='</select><br>';
          echo $select; 

        ?>
        <label>Phone:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($customer['phone']); ?>"><br>

        <label>Email:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($customer['email']); ?>" 
               size="50">
<!-- <span class="error">* <?php echo $emailErr;?></span>
                -->               <br>

        <label>Password:</label>
        <input type="text" name="password" 
               value="<?php echo htmlspecialchars($customer['password']); ?>"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Update Customer" id="submission"><br>
        </form>
    <p><a href="">Search Customers</a></p>




</main>
<?php include '../view/footer.php'; ?>