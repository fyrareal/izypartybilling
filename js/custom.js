//$('input:text').focus(
//    function(){
//        $(this).val('');
//    });
$(document).ready(function(){
    $("#sub").click(function(){
        var namanya = $('#text').val();
        $.ajax({type:"POST",url:"ins.php",data:{data:namanya},
                success: function(msg){
                    alert('succes');
                },
                error: function(msg){
                    alert('error');
                }
               });
    });
});