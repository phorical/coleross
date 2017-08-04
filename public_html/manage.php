<?php
include 'mailing_list.php';
//determine if they need to see the form or not
if (!$_POST) {
    //they need to see the form, so create form block
   $display_block = <<<END_OF_BLOCK
   <form method="POST" action="$_SERVER[PHP_SELF]">

   <p><label for="email">e-mail address:</label><br/>
   <input type="email" id="email" name="email"
          size="40" maxlength="150" /></p>

   <button type="submit" name="submit" value="submit">subscribe</button>
   </form>
END_OF_BLOCK;
} else if (($_POST) && ($_POST['action'] == "sub")) {
     //trying to subscribe; validate email address
     if ($_POST['email'] == "") {
         header("Location: manage.php");
         exit;
     } else {
         //connect to database
         doDB();

        //check that email is in list
        emailChecker($_POST['email']);

        //get number of results and do action
        if (mysqli_num_rows($check_res) < 1) {
            //free result
            mysqli_free_result($check_res);

            //add record
            $add_sql = "INSERT INTO subscribers (email)
                       VALUES('".$safe_email."')";
            $add_res = mysqli_query($mysqli, $add_sql)
                       or die(mysqli_error($mysqli));
            $display_block = "<p>Thanks for signing up!</p>";

             //close connection to MySQL
            mysqli_close($mysqli);
        } else {
            //print failure message
            $display_block = "<p>You're already subscribed!</p>";
        }
    }
} else if (($_POST) && ($_POST['action'] == "unsub")) {
    //trying to unsubscribe; validate email address
    if ($_POST['email'] == "") {
        header("Location: manage.php");
        exit;
    } else {
        //connect to database
        doDB();

        //check that email is in list
        emailChecker($_POST['email']);

        //get number of results and do action
        if (mysqli_num_rows($check_res) < 1) {
            //free result
            mysqli_free_result($check_res);

            //print failure message
            $display_block = "<p>Couldn't find your address!</p>
            <p>No action was taken.</p>";
        } else {
            //get value of ID from result
            while ($row = mysqli_fetch_array($check_res)) {
                $id = $row['id'];
            }

            //unsubscribe the address
            $del_sql = "DELETE FROM subscribers
                        WHERE id = ".$id;
            $del_res = mysqli_query($mysqli, $del_sql)
                       or die(mysqli_error($mysqli));
            $display_block = "<p>You're unsubscribed!</p>";
        }
        mysqli_close($mysqli);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Subscribe/Unsubscribe to a Mailing List</title>
<link href="styles/css.css" type="text/css" rel="stylesheet" /> 
<link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet" />
</head>
<body>

<?php echo "$display_block"; ?>
</body>
</html>
