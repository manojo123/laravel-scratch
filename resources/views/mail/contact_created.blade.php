@component('mail::message')
# Gracias por Entrar en Contacto

@component('mail::panel')
<p><b>Nombre:</b> {{ $contact->name }}</p>
<p><b>Email:</b> {{ $contact->email }}</p>
<p><b>Asunto:</b> {{ $contact->subject }}</p>
<p><b>Mensaje:</b> {{ $contact->message }}</p>
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
