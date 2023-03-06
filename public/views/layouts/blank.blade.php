<!DOCTYPE html>
<html lang="tr">
<head>

	@include('layouts.partials.meta')

	@include('layouts.partials.favicon')

	@include('layouts.partials.styles')

</head>
<body class="body-bg-f8faff">

	@include('layouts.partials.preloader')

	@yield('content')

	@include('layouts.partials.scripts')
</body>
</html>
