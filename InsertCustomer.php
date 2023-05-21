<?php
        include ('conn.php');
            if($_POST["submit"]=="Submit"){
                // $link = 
                $name_customer = $_POST["name_customer"];
                $email_customer = $_POST["email_customer"];
                $address_customer = $_POST["address_-customer"];
                
                $insert = "INSERT INTO customer (name_customer,email_customer,address_customer) VALUES ('$name_customer','$email_customer',' $address_customer')";
                $result = $mysqli->query($insert);
            }
            if($result == TRUE){
                echo "<h2>insert data SUCCESS</h2>";
                // echo "<a href = \"$link\">show data</a>";
            }
?>