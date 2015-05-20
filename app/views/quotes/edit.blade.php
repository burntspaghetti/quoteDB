@extends('master')

@section('content')

    <h3>Edit quote for {{$persona->fName . " " . $persona->lName}}</h3>

    <hr/>

    {{ Form::model($quote, ['action' => 'QuoteController@update', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

    <!--quoteText Form Input-->
    <div class="form-group">
        {{ Form::label('quoteText', 'Quote Text ') }}
        {{ Form::textarea('quoteText', null, array('class' => 'form-control')) }}
        {{ $errors->first('quoteText', '<p class="text-danger" style="padding:1em;">:message</p>') }}
    </div>

    <!--quoteSource1 Form Input-->
    <div class="form-group">
        {{ Form::label('quoteSource1', 'Quote Source #1 ') }}
        {{ Form::input('text', 'quoteSource1', null, array('class' => 'form-control')) }}
        {{ $errors->first('quoteSource1', '<p class="text-danger" style="padding:1em;">:message</p>') }}
    </div>

    <!--quoteSource2 Form Input-->
    <div class="form-group">
        {{ Form::label('quoteSource2', 'Quote Source #2 ') }}
        {{ Form::input('text', 'quoteSource2', null, array('class' => 'form-control')) }}
        {{ $errors->first('quoteSource2', '<p class="text-danger" style="padding:1em;">:message</p>') }}
    </div>

    {{ Form::hidden('idPersona', $persona->idPersona) }}

    <div align="center">
        <button class="btn btn-success" type="submit">Submit</button>
        <a href="{{ action('PersonaController@showPersona', $persona->idPersona) }}" class="btn btn-danger">Cancel</a>
    </div>


    {{ Form::hidden('id', $persona->idPersona) }}

    {{ Form::close() }}


    <br>
    <br>
    <h3>Delete Quote</h3>
    <hr/>

        <a href="{{ action('QuoteController@delete', $quote->idQuote) }}" class="btn btn-xs btn-danger">Delete Quote</a>

    <br>
    <br>
    <br>
@endsection
