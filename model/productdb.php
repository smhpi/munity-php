<?php

function get_products($category_id)
{
    global $db;
    $query = 'SELECT * FROM product
            WHERE product.ProductSubCategoryID = :category_id
            ORDER BY ProductID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id)
{
    global $db;
    $query = 'SELECT * FROM product 
    WHERE ProductID = :product_id
    ORDER BY productID';
    $statement = $db->prepare($query);
    $statement->bindValue("product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closCursor();
    return $product;
}

function delete_product($product_id)
{
    global $db;
    $query = 'DELETE FROM product WHERE ProductID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}
