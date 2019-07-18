<?php
// set page header
$page_title = "LABOT";
include_once "layout_header.php";
// get ID of the product to be edited
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
// set ID property of product to be edited
$product->id = $id;
// read the details of product to be edited
$product->readOne();
?>
<?php 
// if the form was submitted
if($_POST){
    // set product property values
    $product->name = $_POST['name'];
    $product->description = $_POST['description'];
    // update the product
    if($product->update()){
        echo "<div class='alert alert-success alert-dismissable'>";
            echo "Ieraksts ir atjaunināts.";
        echo "</div>";
    }
    // if unable to update the product, tell the user
    else{
        echo "<div class='alert alert-danger alert-dismissable'>";
            echo "Ierakstu nav iespējams atjaunināt.";
        echo "</div>";
    }
}
?>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?id={$id}");?>" method="post">
 <table class='table table-hover table-responsive table-bordered'>
     <tr>
         <td>Virsrakts:</td>
         <td><input type='text' name='name' value='<?php echo $product->name; ?>' class='form-control' required/></td>
     </tr>
     <tr>
         <td>Apraksts:</td>
         <td><textarea name='description' class='form-control'><?php echo $product->description; ?></textarea></td>
     </tr>
     <tr>
         
         <td>
             
            <form>
                <input class="btn btn-primary" type="button" value="Doties atpakaļ"
                onclick="window.location.href='index.php'" />
                <button type="submit" class="btn btn-primary">Saglabāt</button>
                <?php echo "<a delete-id='{$id}' class='btn btn-danger delete-object'>
                <span class='glyphicon glyphicon-remove'></span> Dzēst
                </a>";?>
            </form>

        </td>
        
     </tr>

 </table>
           

<?php
 

 

 
// set page footer
include_once "layout_footer.php";
?>