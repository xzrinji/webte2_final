<?php
    include "config.php";
    
    $name = $_POST["name"];
    $select = "SELECT firstname, lastname,email,project FROM authors where firstname ='$name'";
    $result1 = $conn->query($select);

    while ($row = $result1->fetch_assoc()){
        //echo "<br> First name : "  . $row["firstname"] . "<br> " . "Last name : " . $row["lastname"] . "<br>" . "Email : " . $row['email'] . "<br>" . "Project : " . $row['project']. "<br>";
        echo json_encode($row);
    }


?>