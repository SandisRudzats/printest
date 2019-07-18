<?php
// set page title
$page_title = "IZVEIDOT JAUNU IERAKSTU";
include_once "layout_header.php";
?>
<?php 
// if the form was submitted,user will receive a message. 
if($_POST){
 
    // setting product property values
    $product->name = $_POST['name'];
    $product->description = $_POST['description'];
    // create the task
    if($product->create()){
            echo "<div class='alert alert-success'>Ieraksts ir izveidots.</div>";
                    }
    // if unable to create the product, telling the user
    else{
        echo "<div class='alert alert-danger'>Nav iespējams izveidot ierakstu.</div>";
    }
}
?>
 <!-- HTML part for ui -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table  table-responsive table-bordered'>
        <tr>
            <td>Virsraksts:</td>
            <td><input type='text' name='name' class='form-control' placeholder="Virsraksts:" required/></td>
        </tr>
        <tr>
            <td>Apraksts:</td>
            <td><textarea name='description' class='form-control' placeholder="Apraksts:"></textarea></td>
        </tr>
        <tr>
            <td> 
                <form>
                <input class="btn btn-primary" type="button" value="Doties atpakaļ" onclick="window.location.href='index.php'" />
                <button type="submit" class="btn btn-primary">Izveidot</button>
            </td>
        </tr>
    </table>
</form>

<?php
// footer insertion
include_once "layout_footer.php";
?>