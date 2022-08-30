<script>
    $(document).ready(function(){
        $('.up_employee').click(function(){
            let id =$(this).data('id');
            let user_id =$(this).data('user_id');
            let department_id =$(this).data('department_id');
            let designation_id =$(this).data('designation_id');
        
         
            $('#id').val(id);
            $('#user_id').val(user_id);
            $('#department_id').val(department_id);
            $('#designation_id').val(designation_id);
          

        });
    });
</script>