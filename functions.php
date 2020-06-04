<?php

function fetchSql($query, $conn)
{
    $result = $conn->prepare($query);
    $result->execute();
    $result = $result->fetchALL();
    return $result;
}


function insert_into($query, $conn)
{
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec($query);
    } catch (PDOException $e) {
        echo "<pre>" . $query . "<br>" . $e->getMessage() . "</pre>";
    }
}


?>