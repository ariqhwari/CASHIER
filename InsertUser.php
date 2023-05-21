<?php
        include ('conn.php');
            if($_POST["submit"]=="Submit"){
                // $link = 
                $name_user = $_POST["name_user"];
                $email_user = $_POST["email_user"];
                $password_user = $_POST["password_user"];
                $type_user = $_POST["type_user"];
                
                $insert = "INSERT INTO user (name_user,email_user,password_user,type_user) VALUES ('$name_user','$email_user','$password_user','$type_user')";
                $result = $mysqli->query($insert);
            }
            if($result == TRUE){
                echo "<h2>insert data SUCCESS</h2>";
                // echo "<a href = \"$link\">show data</a>";
            }
?>