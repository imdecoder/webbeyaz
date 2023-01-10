<!DOCTYPE html>
<html lang="tr">
<head>
	@include('layouts.partials.meta')

	@include('layouts.partials.favicon')

	@include('layouts.partials.styles')

	<script>
        const API_URL = '{{ site_url('api') }}'
	</script>
</head>
<body class="body-bg-f8faff">

@include('layouts.partials.preloader')

<!-- Start All Section Area -->
<div class="all-section-area">

	@include('layouts.partials.header')

	@include('layouts.partials.sidebar')

	<!-- Start Main Content Area -->
	<main class="main-content-wrap style-two">

		@yield('content')

		@include('layouts.partials.footer')

	</main>
	<!-- End Main Content Area -->
</div>
<!-- End All Section Area -->

@include('layouts.partials.go-top')

@include('layouts.partials.scripts')

</body>
</html>
