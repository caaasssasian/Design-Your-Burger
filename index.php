<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Design Our Future Burger!</title>
    </head>
    <body>
        <header>
            <h1>Design Our Future Burger!</h1>
            <p>Enter your burger ideas below and we might pick your burger for our menu!</p>
            <form method="post" action="save-burger.php">
                <fieldset>
                    <div>
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" />
                    </div>
                    <div>
                        <label for="country">Country:</label>
                        <input type="text" id="country" name="country" required />
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required />
                    </div>
                    <div>
                        <label for="buns">Type of Bun</label>
                        <select name="buns" id="buns">
                            <?php
                            // connect
                            $conn = new PDO('mysql:host=ca-cdbr-azure-central-a.cloudapp.net;dbname=assignment1_comp1006', 'b3f6ff2f5424e3', '8805fe1c');
                            
                            // set up & run query & store results
                            $sql = "SELECT buns FROM burger";

                            // loop through the data
                            $cmd = $conn->prepare($sql);
                            $cmd->execute();
                            $buns = $cmd->fetchAll();

                            foreach ($buns as $bun) {
                                // display each artist inside <option></option> tags
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
                                // display each artist inside <option></option> tags
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
                                // display each artist inside <option></option> tags
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
                                // display each artist inside <option></option> tags
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
                                // display each artist inside <option></option> tags
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
                                // display each artist inside <option></option> tags
                                echo '<option>' . $sauce['sauce'] . '</option>';
                            }
                            
                            // disconnect
                            $conn = null;
                            ?>                              
                        </select>
                    </div>
                    <button>Order Now</button>
                </fieldset>
            </form>
        </header>
    </body>
</html>