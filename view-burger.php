<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Other Entries</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

<?php
try {
    // connect
    $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');

    // set up query
    $sql = "SELECT country, buns, vegetable1, vegetable2, cheese, meat, sauce FROM burger_ideas";

    // run query and store results
    $cmd = $conn->prepare($sql);
    $cmd->execute();
    $orders = $cmd->FetchAll();

    // start of table
    echo '<table class="table table-bordered">
            <tr class="success">
                <th>Country</th>
                <th>Buns</th>
                <th>Vegetable1</th>
                <th>Vegetable2</th>
                <th>Cheese</th>
                <th>Meat</th>
                <th>Sauce</th>
            </tr>';

    // loop through data
    foreach ($orders as $order) {
        echo '<tr class="success"><td>' . $order['country'] . '</td>
        <td>' . $order['buns'] . '</td>
        <td>' . $order['vegetable1'] . '</td>
        <td>' . $order['vegetable2'] . '</td>
        <td>' . $order['cheese'] . '</td>
        <td>' . $order['meat'] . '</td>
        <td>' . $order['sauce'] . '</td></tr>';
    }

    echo '</table>';


    // disconnect
    $conn = null;

    // provide link back to burger form
    echo '<a href="http://comp1006-cassidyho.azurewebsites.net/comp1006-assignment1/index.php">Back to Burger Form</a>';
}
catch (exception $e) {
    mail('cassidyctho@hotmail.com', 'Burger List Error', $e);
    header('location:error.php');
}
?> 

<!-- Latest   jQuery -->
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>