<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('partials.header')
</head>
<body>
<!-- Navbar -->
@include('partials.navbar')

@yield('content')

@include('partials.modal')

<footer class="footer clearfix">
	@include('partials.footer')
</footer>

@include('partials.scripts')

</body>
</html>