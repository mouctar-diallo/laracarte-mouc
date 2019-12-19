@extends('layouts.default' , ['title'=>'about'])

@section('content')
<div class="container">
	<div class="col-md-6">
	<h2 style="margin-top: 2%;">what is {{config('app.name')}} ?</h2>
		<p>{{config('app.name')}} is a clone app of  <a href="http://laramap.com">laramap.com</a></p>
		<p class="alert alert-warning">this app has been built by mouctar for learn-laravel</p>
		<p>le  code source <a href="https://github.com/mouctar-diallo/laracarte-mouc.git">code source</a></p>
		<p><h2>what is laramap ?</h2></p>
		<p>laramap is the website by witch {{config('app.name')}} inspired</p>
		<p>more info <a href="#">here</a></p>
		<p><h3>which tools and services are used in laracarte</h3></p>
		<p>basicaly is built on laravel & bootstrap but there's used send email  and other section</p>
		<p>
			<li>laravel</li>
			<li>bootstrap</li>
			<li>google maps</li>
			<li>amazon s3</li>
		</p>
</div>
</div>

@stop