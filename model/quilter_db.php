<?php

function get_quilterID_column($quilter_id) {
    require_once('../model/database.php');

    //Fetch the Quilter Info to the database
    global $db;
    $query = "SELECT * FROM quilt_entry
           WHERE quilter_id='".$quilter_id."'";
    $statement = $db->prepare($query);
    $statement->execute();
    $column = $statement->fetchAll();
    $statement->closeCursor(); 
    return $column;
}















?>