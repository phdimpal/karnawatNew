<!DOCTYPE html>

<html lang="en" class="no-js">
@include('layouts.includes.head')
<body class="page-header-fixed page-quick-sidebar-over-content">
@include('layouts.includes.header')
<!-- END HEADER -->

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!----------------------side bar------------------->
	@include('layouts.includes.sidebar')
	<!-- BEGIN CONTENT -->
	
		@yield('content')
			
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('layouts.includes.footer')
<!------------------footer.blade.php----------------------->

@include('layouts.includes.footerscript')
<!------------------footerscript.blade.php----------------------->

<!-- END PAGE LEVEL SCRIPTS -->

@yield('js')

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>