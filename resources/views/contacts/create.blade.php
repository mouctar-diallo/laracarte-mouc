@extends('layouts.default', ['title'=> 'contact'])

@section('content')

<div class="container">
	<h2 style="margin-top: 3%;">Get in touch</h2>
	<p>if you having trouble with this service. please <a href="mailto:mercuryseries@gmail.com">ask for help</a></p>
		<div class="form-group">
			<form method="POST" action="#">
				{{ csrf_field() }}
				<fieldset>
					<label for="nom" class="control-label">Name</label>
					<input type="text" name="nom" id="nom" class="form-control" required="required">
					<label for="email" class="control-label">email</label>
					<input type="email" name="email" id="email" class="form-control" required="required"><br>
					<label class="control-label sr-only">message</label>
					<textarea class="form-control" name="message" rows="5"></textarea>
				</fieldset><br>
				<input type="submit" value="contactez-nous" class="btn btn-primary btn btn-block">
			</form>
		</div>
</div>

@stop