<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Design Our Future Burger!</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <header>
            <h1>Design Our Future Burger!</h1>
            <p>Enter your burger ideas below and we might pick your burger for our menu!</p>
        </header>
            <form method="post" action="save-burger.php">
                <fieldset>
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter Full Name" required />
                    </div>
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input class="form-control" type="text" id="country" name="country" placeholder="Enter Your Country" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" required />
                    </div>
                    <div>
                        <label for="buns">Type of Bun</label>
                        <select name="buns" id="buns">
                            <?php
                            // connect
                            $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
                            
                            // set up & run query & store results
                            $sql = "SELECT buns FROM burger";

                            // loop through data
                            $cmd = $conn->prepare($sql);
                            $cmd->execute();
                            $buns = $cmd->fetchAll();

                            foreach ($buns as $bun) {
                                // display each bun inside <option></option> tags
                                echo '<option>' . $bun['buns'] . '</option>';
                            }
                            
                            // disconnect
                            $conn = null;
                            ?>                              
                        </select>
                    </div>
                    <div>
                        <label for="vegetable1">Vegetable (First Choice)</label>
                        <select name="vegetable1" id="vegetable1">
                            <?php
                            // connect
                            $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
                            
                            // set up & run query & store results
                            $sql = "SELECT vegetable1 FROM burger";

                            // loop through the data
                            $cmd = $conn->prepare($sql);
                            $cmd->execute();
                            $vegetables1 = $cmd->fetchAll();

                            foreach ($vegetables1 as $vegetable1) {
                                // display first set of vegetables inside <option></option> tags
                                echo '<option>' . $vegetable1['vegetable1'] . '</option>';
                            }
                            
                            // disconnect
                            $conn = null;
                            ?>                              
                        </select>
                    </div>
                    <div>
                        <label for="vegetable2">Vegetable (Second Choice)</label>
                        <select name="vegetable2" id="vegetable2">
                            <?php
                            // connect
                            $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
                            
                            // set up & run query & store results
                            $sql = "SELECT vegetable2 FROM burger";

                            // loop through the data
                            $cmd = $conn->prepare($sql);
                            $cmd->execute();
                            $vegetables2 = $cmd->fetchAll();

                            foreach ($vegetables2 as $vegetable2) {
                                // display each second set of vegetables inside <option></option> tags
                                echo '<option>' . $vegetable2['vegetable2'] . '</option>';
                            }
                            
                            // disconnect
                            $conn = null;
                            ?>                              
                        </select>
                    </div>
                    <div>
                        <label for="cheese">Cheese</label>
                        <select name="cheese" id="cheese">
                            <?php
                            // connect
                            $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
                            
                            // set up & run query & store results
                            $sql = "SELECT cheese FROM burger";

                            // loop through the data
                            $cmd = $conn->prepare($sql);
                            $cmd->execute();
                            $cheeses = $cmd->fetchAll();

                            foreach ($cheeses as $cheese) {
                                // display types of cheese inside <option></option> tags
                                echo '<option>' . $cheese['cheese'] . '</option>';
                            }
                            
                            // disconnect
                            $conn = null;
                            ?>                              
                        </select>
                    </div>
                    <div>
                        <label for="meat">Meat</label>
                        <select name="meat" id="meat">
                            <?php
                            // connect
                            $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
                            
                            // set up & run query & store results
                            $sql = "SELECT meat FROM burger";

                            // loop through the data
                            $cmd = $conn->prepare($sql);
                            $cmd->execute();
                            $meats = $cmd->fetchAll();

                            foreach ($meats as $meat) {
                                // display types of meat inside <option></option> tags
                                echo '<option>' . $meat['meat'] . '</option>';
                            }
                            
                            // disconnect
                            $conn = null;
                            ?>                              
                        </select>
                    </div>
                    <div>
                        <label for="sauce">Sauce</label>
                        <select name="sauce" id="sauce">
                            <?php
                            // connect
                            $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
                            
                            // set up & run query & store results
                            $sql = "SELECT sauce FROM burger";

                            // loop through the data
                            $cmd = $conn->prepare($sql);
                            $cmd->execute();
                            $sauces = $cmd->fetchAll();

                            foreach ($sauces as $sauce) {
                                // display types of sauces inside <option></option> tags
                                echo '<option>' . $sauce['sauce'] . '</option>';
                            }
                            
                            // disconnect
                            $conn = null;
                            ?>                              
                        </select>
                    </div> 
                    <div>  
                        <p>Receive emails from us?</p>                 
                        <label for="accept_yes">Yes</label>
                        <!--assign values to store in database when users choose between 'yes' and 'no'-->
                        <input type="radio" id="accept_yes" name="accept_emails" value="yes" />                    
                        <label for="accept_no">No</label>
                        <input type="radio" id="accept_no" name="accept_emails" value="no" />
                    </div>   
                    <div>
                        <button class="btn btn-success">Order Now</button>
                    </div>
                </fieldset>
            </form>
        <!-- Latest   jQuery -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>