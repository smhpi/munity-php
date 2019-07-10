<?php
function get_categories()
{
    global $db;
    $query = 'SELECT * FROM productsubcategory ORDER BY ProductSubcategoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_category_name($category_id)
{
    global $db;
    $query = 'SELECT * FROM  productsubcategory WHERE ProductSubcategoryID = : category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $category = $statement->fetch();
    $statement->closeCursor();
    $category_name = $category['Name'];
    return $category_name;
}
