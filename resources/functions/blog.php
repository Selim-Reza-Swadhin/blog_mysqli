<?php

function add_post($title,$contents,$category){
    $title      = mysqli_real_escape_string($title);
    $contents   = mysqli_real_escape_string($contents);
    $category   = (int)$category;

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_query($conn,"INSERT INTO `posts` VALUES 
                `cat_id`     = {$category},
                `title`      = '{$title}',
                `contents`   = '{$contents}',
                `date_posted`= NOW()");
}

function edit_post($id,$title,$contents,$category){
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $id         = (int)$id;
    $title      = mysqli_real_escape_string($conn, $title);
    $contents   = mysqli_real_escape_string($conn, $contents);
    $category   = (int)$category;

    mysqli_query($conn,"UPDATE `posts` SET
                `cat_id`     = {$category},
                `title`      = '{$title}',
                `contents`   = '{$contents}'
                WHERE `id` = {$id}");  
}

function add_category($name){
  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  $name = mysqli_real_escape_string($conn, $name);

  mysqli_query($conn,"INSERT INTO `categories` SET `name` = '{$name}'");
}

function delete($table, $id){
    $table = real_escape_string($table);
    $id    = (int)$id;

    $query ="DELETE FROM $table WHERE `id`= $id ";
    query($query);
    
}

function get_posts($id = null, $cat_id = null){
    $posts = array();


    $query = "SELECT
              `posts`.`id` AS `post_id` ,
               `categories`.`id` AS `category_id`,
               `title`,`contents`,`date_posted`,
               `categories`.`name`
               FROM `posts`
               INNER JOIN `categories` ON `categories`.`id` = `posts`.`cat_id` " ;
    if(isset($id)){
        $id = (int)$id;
        $query .= " WHERE `posts`.`id` = {$id} ";
             }
    if(isset($cat_id)){
        $cat_id = (int)$cat_id;
        $query .= " WHERE `cat_id` = {$cat_id} ";
             }         
        
    $query .= "ORDER BY `post_id` DESC";

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $query = mysqli_query($query);
    
    while($row = mysqli_fetch_assoc($query)){
    $posts[] = $row;
   }
   return $posts;
}

function get_categories($id = null){
   $categories = array();

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   $query = mysqli_query($conn, "SELECT `id`,`name` FROM `categories` LIMIT 7");
   
   while($row = mysqli_fetch_assoc($query)){
    $categories[] = $row;
   }
   
   return $categories;
}

function category_exists($field,$name){
    $name = mysqli_real_escape_string($name);
    $field = mysqli_real_escape_string($field);

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $query = mysqli_query($conn, "SELECT COUNT(1) FROM categories WHERE `{$field}` = '{$name}'");
    
    return(mysqli_result($query,0) == 0)?false : true;
}