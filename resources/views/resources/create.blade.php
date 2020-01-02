@extends('layouts.app')

@section('content') 
	<div class="row">
		<div class="col-12">
			<form action="/resources" method="POST">
				@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" id="name" name="name" class="form-control" placeholder="">
				</div>

				<div class="form-group">
					<label for="subject">Asunto</label>
					<input type="text" id="subject" name="subject" class="form-control" placeholder="">
				</div>

				<div class="form-group">
					<label for="message">Mensaje</label>
					<textarea id="message" name="message" placeholder="" rows="10" cols="100" maxlength="999" class="form-control"></textarea>
				</div>

				<button type="submit" id="submit" name="submit" class="btn btn-primary">Send</button>
			</form>
		</div>
	</div>
@endsection