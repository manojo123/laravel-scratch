@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-12">
			<h3>Contacto #{{ $contact->id }}</h3>
			@include('contacts.form')
		</div>
	</div>
@endsection	
