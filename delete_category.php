<?php
require_once('database.php');

// Get IDs
$category_name = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($category_name != false) {
    $query = 'DELETE FROM categories
              WHERE category_name = :category_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $category_name);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');