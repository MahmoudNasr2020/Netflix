@extends('dashboard.layouts.app')

@section('title','categories')
@section('style')

	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <link href="{{ $frontEnd }}/plugins/bootstrap-datepicker/datepicker.css" rel="stylesheet">
    <link href="{{ $frontEnd }}/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"
        media="screen">
        	<!-- Data Tables -->
	<link href="{{ $frontEnd }}/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<link href="{{ $frontEnd }}/plugins/datatables/export/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
              <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    <header>Show Categories</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <button id="addRow1" class="btn btn-info" data-toggle="modal" data-target="#dapartment_model" data-whatever="@mdo">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group pull-right">
                                                <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                    data-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Delete All Record</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                         {!! $dataTable->table(['class'=>'table table-striped table-bordered table-hover table-checkable order-column','style'=>'width:100%']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        @include('dashboard.pages.categories.model.form')
@endsection
@section('script')
<!-- Data Table -->
	<script src="{{ $frontEnd }}/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/export/dataTables.buttons.min.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/export/buttons.flash.min.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/export/jszip.min.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/export/pdfmake.min.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/export/vfs_fonts.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/export/buttons.html5.min.js"></script>
	<script src="{{ $frontEnd }}/plugins/datatables/export/buttons.print.min.js"></script>
	<script src="{{ $frontEnd }}/js/pages/table/table_data.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/vendor/datatables/buttons.server-side.js') }}"></script>
    @include('dashboard.pages.categories.ajax.include')
  {!! $dataTable->scripts() !!}
@endsection
