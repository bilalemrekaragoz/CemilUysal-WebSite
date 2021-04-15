<?php
    $personals = array("Name"=>"Not Provided","Username"=>"Not Provided","Password"=>"Not Provided"
                        ,"Address"=>"Not Provided","Country"=>"Not Provided","Zip"=>"Not Provided","Email"=>"Not Provided"
                        ,"Sex"=>"Not Provided","Language"=>"Not Provided","About"=>"Not Provided");
    echo "<h1> Prewiev </h1>";
    if(isset($_GET["sub_but"])){
        foreach($personals as $val => $key){
            if($_GET[$val] != null && $_GET[$val] != "(Please Select a Country)"){
                $key = $_GET[$val];
                if ($val == "Language"){
                    for($i = 0; $i < sizeof($key); $i++){
                        echo "$key[$i] <br/>";
                    }
                }
                else{
                    echo "$key <br/>";
                }
            }
            else{
                echo "$val: $key <br/>";
            }
                
        }
    }   
?>