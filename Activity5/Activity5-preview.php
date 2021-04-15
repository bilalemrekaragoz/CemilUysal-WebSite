<?php
    $personals = array("name"=>"Not Provided","username"=>"Not Provided","password"=>"Not Provided"
                        ,"address"=>"Not Provided","Country"=>"Not Provided","Zip"=>"Not Provided"
                        ,"sex"=>"Not Provided","language"=>"Not Provided","about"=>"Not Provided");
    echo "<h1> Prewiev </h1>";
    if(isset($_GET["sub_but"])){
        foreach($personals as $val => $key){
            if($_GET[$val] != null){
                $key = $_GET[$val];
                if ($val == "language"){
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