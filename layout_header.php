<?php
// include database and object files
include_once 'config/database.php';
include_once 'objects/task.php';
// get database connection
$database = new Database();
$db = $database->getConnection();
// pass connection to objects
$product = new Product($db);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
// set number of records received per page,was usable,but i went against using pagination
$records_per_page = 10;
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
 
// query products
$stmt = $product->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  
    <!-- our custom CSS -->
    <link rel="stylesheet" href="libs/css/custom.css" />
    <link rel="stylesheet" href="libs/css/style.css" />
  
</head>
<body>
    <!-- container holding all the task posts -->
    <div class="container">
    <h1>DARĀMO LIETU SARAKSTS</h1>
        <?php
        // show page header
        echo "<div class='page-header'>
                <h1>{$page_title}</h1>
            </div>";
        ?>
        