<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.partials.meta.global')

	@include('includes.safetypig')

	@yield('meta')

	<title>NYU Skullhouse | Phi Kappa Sigma Fraternity | Delta Phi Chapter | New York University</title>

	@include('includes.partials.favicon.global')

	@include('includes.partials.css.bootstrap')
	@include('includes.partials.css.global')
	@yield('css')

@include('includes.partials.js.bootstrap')

</head>
<body data-spy="scroll" data-target="#navbar">
	@include('includes.mask')

	@include('includes.navbar')

	@yield('breadcrumbs')

	@include('includes.messages')

	@yield('content')

	@include('includes.footer')

	@include('includes.social')

	@include('includes.partials.google.analytics')

	@yield('js')
</body>
</html>

