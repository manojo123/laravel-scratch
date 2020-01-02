<p>{{ $contact->name }}</p>
<p>{{ $contact->email }}</p>
<p><b>{{ $contact->subject }}</b></p>
<p>{{ $contact->message }}</p>
<p><a href="/contacts/{{ $contact->id }}/edit" class="btn btn-block btn-warning">Editar</a></p>
<form action="/contacts/{{ $contact->id }}" method="POST">
	@csrf
	@method('DELETE')
	<p><button type="submit" class="btn btn-danger btn-block">Eliminar</button></p>
</form>