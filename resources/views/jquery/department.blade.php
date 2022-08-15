<script>
    $(document).ready(function() {
        $(document).on('click', '.add_department', function(e) {
            e.preventDefault();

            let department_name = $('#departmet').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('admin.department.store') }}",
                method: 'post',
                data: {
                    name: department_name
                },
                success: function(res) {

                },
                error: function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $('.errormsg').append('<span class="text-danger">' + value +
                            '</span>' + '</br>');

                    });
                }

            });
        });


    });
</script>
