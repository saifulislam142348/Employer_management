<script>
    $(document).ready(function() {
        $('.add_department').click(function(e){
            e.preventDefault();
           let departmentName=$('#departmet').val();
     $.ajax({
        url:"route('admin.department.store')",
        type:'POST',
                data: {departmentName:name},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
       
        }); 
    

     function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });

</script>
