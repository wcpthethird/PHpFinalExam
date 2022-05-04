<?php
require ('database.php');

function read_utensils() {
    global $db;
    $query = 'SELECT utensil_name, utensil_description, utensil_type, utensil_year_purchased
              FROM cooking.utensils';
    $statement = $db->prepare($query);
    $statement->execute();
    $utensils = $statement->fetchall();
    $statement->closeCursor();
    return $utensils;
}

function get_utensil_types() {
    global $db;
    $query = 'SELECT DISTINCT utensil_type
              FROM cooking.utensils';
    $statement = $db->prepare($query);
    $statement->execute();
    $utensil_types = $statement->fetchAll();
    $statement->closeCursor();
    return $utensil_types;
}

function create_utensil($utensil_name, $utensil_description, $utensil_type, $utensil_year_purchased) {
    global $db;
    $query = 'INSERT INTO utensils(utensil_name, utensil_description, utensil_type, utensil_year_purchased)
              VALUES (:utensilname, :utensildescription, :utensiltype, :utensilyearpurchased)';
    $statement = $db->prepare($query);
    $statement->bindParam(':utensilname', $utensil_name);
    $statement->bindParam(':utensildescription', $utensil_description);
    $statement->bindParam(':utensiltype', $utensil_type);
    $statement->bindParam(':utensilyearpurchased', $utensil_year_purchased);
    $statement->execute();
    return $statement->rowCount();    
}

?>