@extends('layouts.app')

@section('content')
<h1> Contact</h1>
@include ('inc.messages')

@if (session('status'))
        <div class="alert alert-success"> 
               {{session('status')}}
        </div>
@endif
<div class="flex">
{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">
    
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class'=>'form-control'])}}

</div> 

<div class="form-group">

         {{Form::label('email', 'E-Mail Address')}}
         {{Form::text('email', '',  ['class'=>'form-control'])}}

</div> 

<div class="form-group">

        {{Form::label('Message', 'Message')}}
        {{Form::textarea('message', '',  ['class'=>'form-control', 'placeholder' => "Your message here..."])}}

</div> 
</div>
<div class="form-group">
    {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
</div>
    
{!! Form::close() !!}
@endsection
