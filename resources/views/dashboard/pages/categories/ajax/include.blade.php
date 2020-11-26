<script>
    $(document).ready(function(){
        $("<p>ahmed</p>").insertBefore($('.dataTables_length'));
             $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        @include('dashboard.pages.categories.ajax.add')
        @include('dashboard.pages.categories.ajax.edit')
        @include('dashboard.pages.categories.ajax.form')
        @include('dashboard.pages.categories.ajax.delete')

        $('.box-refresh').on('click', function(){
           //$('#category-table').DataTable().draw();
            $('#category-table').DataTable().reload();


        });
    });

</script>
