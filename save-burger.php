<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Thank you!</title>
</head>
<body>
    
<?php
    // store user's details as variables
    $name = $_POST['name'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $buns = $_POST['buns'];
    $vegetable1 = $_POST['vegetable1'];
    $vegetable2 = $_POST['vegetable2'];
    $cheese = $_POST['cheese'];
    $meat = $_POST['meat'];
    $sauce = $_POST['sauce'];
    $accept_emails = $_POST['accept_emails'];
    // form is valid for now
    $ok = true;
    // validating inputs before storing results
    // if text inputs are empty/invalid, display error
    if (empty($name)) {
        echo 'Name is required<br />';
        $ok = false;
    }
    if (empty($country)) {
        echo 'Country is required<br />';
        $ok = false;
    }
    if (empty($email)) {
        echo 'Email is required<br />';
        $ok = false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Please enter a correct email<br />';
        $ok = false;
    }
    // if text inputs are valid, proceed to storing results
    if ($ok == true) {
        // connect
        $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
        // inserting each input into database
        $sql = "INSERT INTO burger_ideas (name, country, email, buns, vegetable1, vegetable2, cheese, meat, sauce, accept_emails) VALUES (:name, :country, :email, :buns, :vegetable1, :vegetable2, :cheese, :meat, :sauce, :accept_emails);";
        // pass the input variables to the SQL command
        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':name', $name, PDO::PARAM_STR, 100);
        $cmd->bindParam(':country', $country, PDO::PARAM_STR, 50);
        $cmd->bindParam(':email', $email, PDO::PARAM_STR, 100);
        $cmd->bindParam(':buns', $buns, PDO::PARAM_STR, 100);
        $cmd->bindParam(':vegetable1', $vegetable1, PDO::PARAM_STR, 100);
        $cmd->bindParam(':vegetable2', $vegetable2, PDO::PARAM_STR, 100);
        $cmd->bindParam(':cheese', $cheese, PDO::PARAM_STR, 100);
        $cmd->bindParam(':meat', $meat, PDO::PARAM_STR, 100);
        $cmd->bindParam(':sauce', $sauce, PDO::PARAM_STR, 100);
        $cmd->bindParam(':accept_emails', $accept_emails, PDO::PARAM_STR, 5);
        // executing the inserted values
        $cmd->execute();
        // disconnect
        $conn = null;
        // display thank you message and lead users to the table of burger ideas
        echo 'Thank you for your ideas! Check out other burger ideas from other people.<br />';
        echo '<a href="http://comp1006-cassidyho.azurewebsites.net/comp1006-assignment1/view-burger.php">Click here to see other ideas from burger lovers across the world!</a>';
    }
?>

</body>
</html>