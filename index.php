<?php
// set page headers
$page_title = "SARAKSTS";
include_once "layout_header.php";
?>
<?php if($num>0){
    echo "<table class='table table-hover table-responsive table-bordered'>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
                echo "<tr>";?>
                <div>
                    <form action="">
                        <label for="language"></label>
                        <input type="checkbox"  id="fluency" unchecked />
                     </form>
                </div>
                <?php 
                //calling and showing use the existing task post and desc,
                 echo "<div>{$name}</div>";
                 echo "<div>{$description}</div>";
                 //unfinished part of elapsed time feature
                 echo "<div>".time_elapsed_string('2013-05-01 00:22:35', true)."</div>";
                 // update button
                 echo " <a href='update_task.php?id={$id}'  class='btn btn-info left-margin'>
                 <span class='glyphicon glyphicon-edit'></span> Labot
                 </a>";
                 echo "</tr>";
         
        }
    }
    echo "</table>";
    //add new task item button live here
echo "<div class='right-button-margin'>";
     echo "<a href='create_task.php' class='btn btn-default pull-right'>Pievienot jaunu</a>";
echo "</div>";
 

include_once "layout_footer.php"; 

