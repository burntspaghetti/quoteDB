@extends('master')

@section('content')

{{ Form::open([ 'action' => 'LoginController@doLogin', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

@if(Session::has('incorrectPassword'))
    <div align="center">
        <span class="label label-danger">Incorrect email and/or password combination</span><br>
    </div>
    {{Session::forget('incorrectPassword')}}
@endif
<div align="center">
    {{ $errors->first('email', '<p class="label label-danger" style="padding:1em;">:message</p>') }}
    {{ $errors->first('password', '<p class="label label-danger" style="padding:1em;">:message</p>') }}
</div>


<!--email Form Input-->
<div class="row">
    <div class="form-group col-md-4 col-md-offset-4">
        {{ Form::label('email', 'Email: ') }}
        {{ Form::input('text', 'email', null, array('class' => 'form-control')) }}
        <br>
        {{ Form::label('password', 'Password: ') }}
        {{ Form::password('password', array('class' => 'form-control')) }}
        <br>
        <div align="center">
            <button class="btn btn-success" type="submit">Submit</button>
            <a href="{{ action('LoginController@login') }}" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</div>


{{ Form::close() }}


@endsection
