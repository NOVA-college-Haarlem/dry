<?php

function selectAllData($table, $columns = "*")
{
    require 'database.php';
    
    return mysqli_fetch_all(mysqli_query($conn, "SELECT $columns FROM $table "), MYSQLI_ASSOC);
}



function deleteData($table)
{
    require 'database.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM $table WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("location: $table" . "_index.php");
        exit;
    }
}

function showData($table, $columns = "*", $id = '')
{
    require 'database.php';

    $sql = "SELECT $columns FROM $table";

    if ($id != '') {
        $sql .= " WHERE id = $id LIMIT 1";
        return mysqli_fetch_assoc(mysqli_query($conn, $sql));
    }

    return mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);

}
