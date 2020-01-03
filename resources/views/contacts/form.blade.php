<form action="/contacts/{{ isset($contact) ? $contact->id : '' }}" method="POST">
	@csrf
	@isset($contact)
		@method('PUT')
	@endisset

	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control" placeholder="" value="{{ isset($contact->name) ? $contact->name : old('text') }}">
	</div>
	
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control" placeholder="" value="{{ isset($contact->email) ? $contact->email : old('email') }}">
	</div>

	<div class="form-group">
		<label for="subject">Asunto</label>
		<input type="text" name="subject" class="form-control" placeholder="" value="{{ isset($contact->subject) ? $contact->subject : old('text') }}">
	</div>
	
	<div class="form-group">
		<label for="message">Mensaje</label>
		<textarea id="message" name="message" placeholder="" rows="10" cols="100" maxlength="999" class="form-control">{{ isset($contact->message) ? $contact->message : old('message') }}</textarea>
	</div>

	<button type="submit" class="btn btn-primary">Enviar</button>
</form>