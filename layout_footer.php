</div>
    
 

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
<script>
// JavaScript for deleting task
$(document).on('click', '.delete-object', function(){
    var id = $(this).attr('delete-id');
        bootbox.confirm({
            message: "<h4>Vai esat pārliecināts/āta?</h4>",
                buttons: {
                    confirm: {
                    label: '<span class="glyphicon glyphicon-ok"></span> O Jā',
                className: 'btn-danger'
                         },
                cancel: {
                label: '<span class="glyphicon glyphicon-remove"></span> O Nē',
                className: 'btn-primary'
            }
        },
        callback: function (result) {
 
            if(result==true){
                $.post('delete_task.php', {
                    object_id: id
                }, function(data){
                    location.reload();
                }).fail(function() {
                    alert('Unable to delete.');
                });
            }
        }
    });
 
    return false;
});
</script>
</body>
</html>