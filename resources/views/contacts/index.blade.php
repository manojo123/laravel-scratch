@extends('layouts.app')

@section('content')

	<div class="row">
		@forelse($contacts as $contact)
			<div class="col-4">
				<p><a href="/contacts/{{ $contact->id }}">Contacto #{{ $contact->id }}</a></p>	
				@include('contacts.contact')
			</div>
		@empty
			<div class="col-12">
				<p class="alert alert-warning">No Hay mensajes para mostrar. Haz click <a href="/contacts/create">aquí</a> para enviar su contacto</p>
			</div>
		@endforelse
		<div class="col-12">
			{!! $contacts->render() !!}
		</div>
	</div>

@endsection