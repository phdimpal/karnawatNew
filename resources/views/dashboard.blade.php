
@extends('layouts.master')

@section('containt')

<h1>Welcome Admin</h1>
@php
echo url()->current();
@endphp

@endsection

<script>
jQuery(document).ready(function() {    
	Metronic.init(); // init metronic core componets
	Layout.init(); // init layout
	QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features
	Index.init();   
 
});
</script>
<!-- END JAVASCRIPTS -->