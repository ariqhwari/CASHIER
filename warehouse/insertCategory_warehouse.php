<?php
    include '../conn.php';
            if($_POST["submit"]=="Submit"){
                // $link = 
                $name_category = $_POST["name_category"];
                
                $insert = "INSERT INTO category (name_category) VALUES ('$name_category')";
                $result = $conn->query($insert);

                if ($result === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $insert . "<br>" . $conn->error;
                  }
            }
            // if($result == TRUE){
            //     echo "<h2>insert data SUCCESS</h2>";
            //     // echo "<a href = \"$link\">show data</a>";
            // }
?>