<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />

     @include('dashboard.frontEnd.css')
</head>
<!-- END HEAD -->
    @php
        $currentLocal = App::getLocale();
        //App::getLocal => To get current local [ar,en,etc...]
    @endphp
    @if ($currentLocal == 'ar')
        @php

            $class = 'sidemenu-container-reversed';
            $navbar = 'navbar-right';
        @endphp
    @else
         @php
            $class = '';
             $navbar = 'navbar-left';
        @endphp
    @endif
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md {{ $class }} header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
             @include('dashboard.layouts.includes.navbar')
        <!-- end header -->

		<!-- start color quick setting -->
		    @include('dashboard.layouts.includes.settingMain')
        <!-- end color quick setting -->

		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			@include('dashboard.layouts.includes.sidebar')
            <!-- end sidebar menu -->

			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
                    </div>

                    @yield('content')
				</div>
			</div>
            <!-- end page content -->

			<!-- start chat sidebar -->
             @include('dashboard.layouts.includes.chatSidebar')
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		  @include('dashboard.layouts.includes.footer')
		<!-- end footer -->
	</div>
    @include('dashboard.frontEnd.js')
</body>

</html>
