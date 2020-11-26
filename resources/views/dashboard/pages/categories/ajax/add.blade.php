
    $('#addRow1').on('click',function(){
         $('#department-form')[0].reset();
         $('#type').val('add');
         $('#id').val('');
         $('#departmentName').val('');
         $('#dapartment_model').modal('show');
    });
