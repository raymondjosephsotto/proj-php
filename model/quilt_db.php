<?php

function select_quilt($quilt_id) {
    global $db;
    $query = 'SELECT * FROM quilt_entry
              WHERE quilt_id = :quilt_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':quilt_id', $quilt_id);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    return $row;
}





?>