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
// connect
$conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');

// set up query
$sql = "SELECT country, buns, vegetable1, vegetable2, cheese, meat, sauce FROM customer_orders";

// run query and store results
$cmd = $conn->prepare($sql);
$cmd->execute();
$orders = $cmd->FetchAll();

// start table and headings
echo '<table class="table table-bordered">
        <tr>
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
    // print each album as a new row
    echo '<tr><td>' . $order['country'] . '</td>
    <td>' . $order['buns'] . '</td>
    <td>' . $order['vegetable1'] . '</td>
    <td>' . $order['vegetable2'] . '</td>
    <td>' . $order['cheese'] . '</td>
    <td>' . $order['meat'] . '</td>
    <td>' . $order['sauce'] . '</td></tr>';
}

// end table
echo '</table>';


// disconnect
$conn = null;
?> 

<!-- Latest   jQuery -->
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>