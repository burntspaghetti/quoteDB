@extends('master')

@section('content')

    <h3>New Persona</h3>
    <hr/>

    {{ Form::open([ 'action' => 'PersonaController@store', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

    <div class="row">
        <div class="form-group col-md-4 col-md-offset-4">
            {{ Form::label('fName', 'First Name ') }}
            {{ Form::input('text', 'fName', null, array('class' => 'form-control')) }}
            {{ $errors->first('fName', '<p class="text-danger" style="padding:1em;">:message</p>') }}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4 col-md-offset-4">
            {{ Form::label('mName', 'Middle Name ') }}
            {{ Form::input('text', 'mName', null, array('class' => 'form-control')) }}
            {{ $errors->first('mName', '<p class="text-danger" style="padding:1em;">:message</p>') }}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4 col-md-offset-4">
            {{ Form::label('lName', 'Last Name ') }}
            {{ Form::input('text', 'lName', null, array('class' => 'form-control')) }}
            {{ $errors->first('lName', '<p class="text-danger" style="padding:1em;">:message</p>') }}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4 col-md-offset-4">
            {{ Form::label('bio', 'Bio ') }}
            {{ Form::textarea('bio', null, array('class' => 'form-control')) }}
            {{ $errors->first('bio', '<p class="text-danger" style="padding:1em;">:message</p>') }}
        </div>
    </div>

   <div class="row">
       <div class="form-group col-md-4 col-md-offset-4">
           {{ Form::label('dateBorn', 'DOB ') }}
           {{ Form::input('text', 'dateBorn', null, array('class' => 'form-control')) }}
           {{ $errors->first('dateBorn', '<p class="text-danger" style="padding:1em;">:message</p>') }}
       </div>
   </div>


    <div class="row">
        <div class="form-group col-md-4 col-md-offset-4">
            {{ Form::label('dateDied', 'DOD ') }}
            {{ Form::input('text', 'dateDied', null, array('class' => 'form-control')) }}
            {{ $errors->first('dateDied', '<p class="text-danger" style="padding:1em;">:message</p>') }}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4 col-md-offset-5">
            <button class="btn btn-success" type="submit">Submit</button>
            <a href="{{ action('PersonaController@personas') }}" class="btn btn-danger">Cancel</a>
        </div>
    </div>


    {{ Form::close() }}

@endsection
