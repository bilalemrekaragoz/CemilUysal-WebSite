<?php 
    $changes = array("usdcad" => 1.25, "usdeur"=> 0.83 , "eurcad" => 1.50,
                     "cadusd"=>0.80, "eurusd" => 1.20, "cadeur" =>0.67);
    $symbols = array("usd" => "US Dollar","cad" => "Canadian Dollar", "eur"=> "Euro" );
    if(isset($_GET["convert"])){
        $symbol1 = $_GET["currency1"];
        $symbol2 = $_GET["currency2"];
        $currency1;
        $currency2;
        $from = $_GET["from"];
        foreach($changes as $code => $value){
            if($code == "$symbol1$symbol2"){
                $to = $from * $value;
            }
        }
        foreach($symbols as $key=> $val){
            if($key==$symbol1){
                $currency1 = $val;
            }
            if($key==$symbol2){
                $currency2 = $val;
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
    <form action="Activity6.php" method="GET">
        <div class="container">
                    <p >
                        <label class="left-side" for="from">From:</label>
                        <input type="text" name="from" maxlength=30 size="25" id="from"
                            value="<?php
                                        echo $from; 
                                    ?>"/> 

                        <label for="currency1" required>Currency:</label>
                        <select name="currency1">
                            <option  value="<?php echo $symbol1?>" selected><?php echo $currency1;
                                                             ?></option>
                            <option value="usd">US Dollar</option>
                            <option value="cad">Canadian Dollar</option>
                            <option value="eur">Euro</option>
                        </select>
                    </p>
                    <div class="clear" ></div>
                    <p>
                        <label class="left-side" for="to">To:</label>
                        <input type="text" name="to" maxlength=30 size="25" id="to" 
                        value="<?php 
                                    echo $to;
                                ?>"/> 

                        <label for="currency2">Currency:</label>
                        <select name="currency2">
                            <option  value="<?php echo $symbol2?>" selected><?php echo $currency2;
                                                             ?></option>
                            <option value="usd">US Dollar</option>
                            <option value="cad">Canadian Dollar</option>
                            <option value="eur">Euro</option>
                        </select>
                    </p>
                    <input class="convert" type="submit" value="convert" name="convert"/>
        </div>    

                    
    </form>
</body>
</html>
