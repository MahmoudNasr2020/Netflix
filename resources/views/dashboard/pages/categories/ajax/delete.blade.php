$(document).on('click','.delete_department',function(e){
    e.preventDefault();
    var id = $(this).attr('id');
        var n = new Noty({
                theme: 'relax',
                type:'alert',
                text:'Confirm deleting record',
                killer:true,
                buttons:[
                    Noty.button('yes', 'btn btn-danger mr-2', function(){
                        $.ajax({
                            method:"DELETE",
                            url:"{{ route('admin.category.index') }}"+'/'+id,
                            success:function(){
                                 $('#category-table').DataTable().ajax.reload(null,false);
                                 n.close()
                                new Noty({
                                theme: 'relax',
                                type:'success',
                                text:'Deleted successfully',
                                killer:true,
                                timeout:2000,
                                }).show();
                            },
                        });
                    }),
                    Noty.button('no','btn btn-light',function(){
                        n.close()
                    }),
                ]

            }).show();
});
