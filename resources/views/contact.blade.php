<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
<center>
        <div class="p-3">

		<p class="h1">Contact page</p>
		<p class="h4">Laravel Vue Form example </p>

	</div>

	<div id="app">
<div class="w-50 p-3 shadow" style="background-color: #eee;">
		<contact-form-component></contact-form-component>
</div>
</center>
	</div>

	<script src="js/app.js"></script>
    </body>
</html>
