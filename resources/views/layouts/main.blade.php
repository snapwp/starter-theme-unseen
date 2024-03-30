<!doctype html>
<html {!! get_language_attributes() !!}>
	<head>
		<meta charset="{{ get_bloginfo('charset') }}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=1">
		<title>{{ wp_title('') }}</title>

		@wphead
	</head>

	<body class="{{ implode(' ', get_body_class()) }} ">
        @include('partials.navigation')

        <main class="scroll-container">
            <div data-taxi>
                <div data-taxi-view="{{ $taxi_view ?? 'default' }}">
                    @yield('main')
                </div>
            </div>
        </main>

		@wpfooter
	</body>
</html>
