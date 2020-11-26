
    $(document).on('click','.edit_department',function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
            method:"GET",
            url:"category/"+id+"/edit",
            success:function(data)
            {
                $('#type').val('edit');
                $('#id').val(data.id);
                $('#departmentName').val(data.name);
                $('#dapartment_model').modal('show');
            }
        });
    });

