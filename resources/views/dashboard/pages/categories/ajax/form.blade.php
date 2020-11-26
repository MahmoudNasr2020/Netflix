$('#department-form').on('submit',function(e){
        e.preventDefault();
        var type = $('#type').val();
        var id = $('#id').val();
        if(type == 'add')
        {
                   $.ajax({
                        method:"POST",
                        url:"{{ route('admin.category.store') }}",
                        data:$(this).serialize(),
                        dataType:"json",
                        success:function(){
                        $('#category-table').DataTable().draw();
                        $('#dapartment_model').modal('hide');
                        new Noty({
                            theme: 'relax',
                            type: 'success',
                            layout: 'topRight',
                            text: 'Some notification text',
                            killer:true,
                            timeout:3000,
                        }).show();
                    },
                        error:function(reject)
                        {
                            $.each(reject.responseJSON.errors,function(key,val){
                                new Noty({
                                    theme: 'relax',
                                    type   : "error",
                                    layout : 'topRight',
                                    text   : val[0],
                                    killer :true,
                                    timeout:3000,
                                }).show();
                });
            }
        });
        }

        else
        {
            $.ajax({
                        method:"PUT",
                        url:"{{ route('admin.category.index') }}"+'/'+id,
                        data:$(this).serialize(),
                        dataType:"json",
                        success:function(){
                        $('#category-table').DataTable().ajax.reload(null,false);
                        $('#dapartment_model').modal('hide');
                        new Noty({
                            theme: 'relax',
                            type: 'success',
                            layout: 'topRight',
                            text: 'Edit successfully',
                            killer:true,
                            timeout:1000,
                        }).show();
                    },
                        error:function(reject)
                        {
                            $.each(reject.responseJSON.errors,function(key,val){
                                new Noty({
                                    theme: 'relax',
                                    type   : "error",
                                    layout : 'topRight',
                                    text   : val[0],
                                    killer :true,
                                    timeout:3000,
                                }).show();
                });
            }
        })
        }

    });
