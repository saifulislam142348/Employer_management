<script>
    $(document).ready(function(){
        $('.up_registration').click(function(){

           let id= $(this).data('id');
           let name= $(this).data('name');
           let email= $(this).data('email');
           let gender= $(this).data('gender');
            let phone=$(this).data('phone');
            let nid= $(this).data('nid');
           let address= $(this).data('address');
           
           $("input[name=up_id]").val(id);
            $("input[name=up_name]").val(name);
            $("input[name=up_email]").val(email);
            $("select option:first #gender").val(gender);
            $("input[name=up_phone]").val(phone);
            $("input[name=up_nid]").val(nid);
            $("input[name=up_address]").val(address);
        });
    });
</script>