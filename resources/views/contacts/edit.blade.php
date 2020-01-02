@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-12">
			<h3>Contacto</h3>
			<form action="/contacts/{{ $contact->id }}" method="POST">
				@csrf
				@method('PUT')

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" class="form-control" placeholder="" value="{{ $contact->name }}">
				</div>
				
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control" placeholder="" value="{{ $contact->email }}">
				</div>

				<div class="form-group">
					<label for="subject">Asunto</label>
					<input type="text" id="subject" name="subject" class="form-control" placeholder="" value="{{ $contact->subject }}">
				</div>
				
				<div class="form-group">
					<label for="message">Mensaje</label>
					<textarea id="message" name="message" placeholder="" rows="10" cols="100" maxlength="999" class="form-control">{{ $contact->message }}</textarea>
				</div>

				<button type="submit" id="submit" class="btn btn-primary">Enviar</button>
			</form>
		</div>
	</div>
@endsection	
