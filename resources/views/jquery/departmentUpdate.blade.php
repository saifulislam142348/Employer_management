<script>
    $(document).ready(function() {
        $('.up_department').click(function() {

            let id = $(this).data('id');
            let department = $(this).data('name');

            $('#up_department_id').val(id);
            $('#up_department_name').val(department);
        });

        // update department

        $('.update_department').click(function(e) {
            e.preventDefault();
            let up_department_id = $('#up_department_id').val();
            let up_department_name = $('#up_department_name').val();
          
      //       $.ajaxSetup({
      //       headers: {
      //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //       }
      //   });
            $.ajax({
               url:"{{route('update.department')}}",
               method:"POST",
               data:{up_department_id:up_department_id, up_department_name:up_department_name},
               success:function(res){
                if(res.status=='success'){
                  // $('#departmentEditModal').modal('hide');
                  // $('#updateFormDepartment')[0].reset();
                  alert('jgjj')

                }

               },
               error:function(){}
            });

        });
    });
</script>
