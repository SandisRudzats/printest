<?php
$page_title = "IZDZEST IERAKSTU";
include_once "layout_header.php";
// checking if value was sent to and from db
if($_POST){
 
    // set product id to be deleted
    $product->id = $_POST['object_id'];
    // delete the product
    if($product->delete()){
        echo "Ieraksts ir dzēsts.";
    } 
    // if unable to delete the product
    else{
        echo "Ierakstu nav iespējams dzēst.";
    }
}
?>
<?php 
include_once "layout_footer.php"; 
?>
