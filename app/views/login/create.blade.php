@extends('master')

@section('content')


{{ Form::open([ 'action' => 'LoginController@doLogin', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

    <!--email Form Input-->
    <div class="form-group">
        {{ Form::label('email', 'Email: ') }}
        {{ Form::input('text', 'email', null, array('class' => 'form-control')) }}
    </div>

    <!--password Form Input-->
    <div class="form-group">
        {{ Form::label('password', 'Password: ') }}
        {{ Form::input('text', 'password', null, array('class' => 'form-control')) }}
    </div>


<button class="btn btn-success" type="submit">Submit</button>
<a href="{{ action('LoginController@login') }}" class="btn btn-danger">Cancel</a>

{{ Form::close() }}


@endsection
