<script>
    $(document).ready(function(){
       $('.up_designation').click(function(){
    
        let id= $(this).data('id');
        let designation= $(this).data('name');
    
        $('#up_designation_id').val(id);
        $('#up_designation_name').val(designation);
       });
    });
    
    </script>
    