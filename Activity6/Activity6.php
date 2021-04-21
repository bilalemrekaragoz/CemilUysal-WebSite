<?php 
    $to = 0;
    $from = 0;
    $changes = array("usdcad" => 1.25, "usdeur"=> 0.83 , "eurcad" => 1.50,
                     "cadusd"=>0.80, "eurusd" => 1.20, "cadeur" =>0.67);

    if(isset($_GET["convert"])){
        $symbol1 = $_GET["currency1"];
        $symbol2 = $_GET["currency2"];
        $from = $_GET["from"];
        // converting money type
        foreach($changes as $code => $value){
            if($code == "$symbol1$symbol2"){
                $to = $from * $value;
            }
            
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Cemil Uysal Activity6</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="container">
        <form action="Activity6.php" method="GET">
            <div class="left_side">
                <label class="left_label" for="from">From:</label>
                    <input class="money" type="number" name="from" maxlength=30 size="25" id="from"
                        value="<?php
                                    echo $from; 
                                ?>"/> 
                    <br/>
                    <label class="left_label" for="to">To:</label>
                    <output class="money left" name="to" maxlength=30 size="25" > 
                        <?php
                            echo $to; 
                        ?>
                    </output>
            </div>

            <div class="right_side">
                <label for="currency1" required>Currency:</label>
                    <select name="currency1">
                        <!-- Making selected item choosen one-->
                        <option  value="currency" disaabled >Select a Currency</option>
                            <option value="usd" <?php
                                                if(isset($_GET["convert"])){
                                                    if($_GET["currency1"]=="usd"){
                                                            echo "selected";
                                                        }
                                                    } 
                                                ?>>US Dollar</option>
                            <option value="cad" <?php
                                                    if(isset($_GET["convert"])){
                                                        if($_GET["currency1"]=="cad"){
                                                            echo "selected";
                                                        }
                                                    } 
                                                ?>>Canadian Dollar</option>
                            <option value="eur" <?php
                                                    if(isset($_GET["convert"])){
                                                        if($_GET["currency1"]=="eur"){
                                                            echo "selected";
                                                        }
                                                    } 
                                                ?>>Euro</option>
                        </select>

                        <br/>
                        <label for="currency2">Currency:</label>
                    <select name="currency2">
                        <!-- Making selected item choosen one-->
                        <option  value="currency" >Select a Currency</option>
                        <option value="usd" <?php
                                                if(isset($_GET["convert"])){
                                                    if($_GET["currency2"]=="usd"){
                                                        echo "selected";
                                                    }
                                                } 
                                            ?> >US Dollar</option>
                        <option value="cad" <?php
                                                if(isset($_GET["convert"])){
                                                    if($_GET["currency2"]=="cad"){
                                                        echo "selected";
                                                    }
                                                } 
                                            ?>>Canadian Dollar</option>
                        <option value="eur" <?php
                                                if(isset($_GET["convert"])){
                                                    if($_GET["currency2"]=="eur"){
                                                        echo "selected";
                                                    }
                                                } 
                                            ?>>Euro</option>
                    </select>
            </div>
            <div class="clear"></div>
            <input class="convert" type="submit" value="convert" name="convert"/>
        </form>
    </div>
    
</body>
</html>
