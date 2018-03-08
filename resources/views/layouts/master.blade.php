<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <!-- <meta name="author" content="Mosaddek"> -->
	    <!-- <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina"> -->
	    <link rel="shortcut icon" href="img/favicon.png">

	    <title>Project list</title>

	    <!-- Bootstrap core CSS -->
	    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
	    <!--external css-->
	    <link href="{{asset('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

	    <!--right slidebar-->
	    <link href="{{asset('css/slidebars.css')}}" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
    </head>
	<body>
		
		@include ('layouts.nav')
		@include ('layouts.sidebar')

	    <!-- js placed at the end of the document so the pages load faster -->
	    <script src="{{asset('js/jquery.js')}}"></script>
	    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
	    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
	    <script src="{{asset('js/slidebars.min.js')}}"></script>
	    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
	    <script src="{{asset('js/respond.min.js')}}" ></script>

	    <!--common script for all pages-->
	    <script src="{{asset('js/common-scripts.js')}}"></script>
		@yield ('content')
		@include ('layouts.footer')

	</body>
</html>