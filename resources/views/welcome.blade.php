@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Hello World</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @for($i=0; $i < 5; $i++)
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Explicabo maxime delectus facere deleniti eveniet eligendi 
                    impedit aliquid est quibusdam dolorum nisi consectetur enim 
                    provident blanditiis ex vel culpa totam, reiciendis.
                </p>
            @endfor
        </div>
    </div>
@endsection