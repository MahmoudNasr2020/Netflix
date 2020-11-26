
@php
     //$frontEnd =>this is  global variable ,it define in appServiceProvider To use in all pages
      $local = App::getLocale();
     //App::getLocal => To get current local [ar,en,etc...]
@endphp
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{  $frontEnd }}/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="{{  $frontEnd }}/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="{{  $frontEnd }}/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{  $frontEnd }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="{{  $frontEnd }}/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{  $frontEnd }}/plugins/material/material.min.css">
	<link rel="stylesheet" href="{{  $frontEnd }}/css/material_style.css">
	<!-- inbox style -->
    <link href="{{  $frontEnd }}/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- notiy Styles -->

    <!-- include Styles -->
     @yield('style')
    <!-- Theme Styles -->
    @if ($local == 'en')
        <link href="{{  $frontEnd }}/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
        <link href="{{  $frontEnd }}/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="{{  $frontEnd }}/css/theme/light/style.css" rel="stylesheet" type="text/css" />
        <link href="{{  $frontEnd }}/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="{{  $frontEnd }}/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    @else
        <link href="{{  $frontEnd }}/css/theme/rtl/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
        <link href="{{  $frontEnd }}/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="{{  $frontEnd }}/css/theme/rtl/style.css" rel="stylesheet" type="text/css" />
        <link href="{{  $frontEnd }}/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="{{  $frontEnd }}/css/theme/rtl/theme-color.css" rel="stylesheet" type="text/css" />
        <link href="{{  $frontEnd }}/css/theme/rtl/rtl.css" rel="stylesheet" type="text/css" />
    @endif

	<!-- favicon -->
    <link rel="shortcut icon" href="{{  $frontEnd }}/img/favicon.ico" />
    <link href="{{ asset('plugins/notiy/noty.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/notiy/relax.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/notiy/noty.min.js')}}" type="text/javascript"></script>
