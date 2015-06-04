@extends('master')

@section('content')



    {{ Form::open([ 'action' => 'QuoteController@scrapeURL', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}
        <div class="row col-md-4 col-md-offset-4" align="center">
            <h3>Scrape Quotes for {{$persona->fName . " " . $persona->lName}}</h3>
            <hr/>
            <!--wikiquoteURL Form Input-->
            <div class="form-group">
                {{ Form::label('wikiquoteURL', 'Wikiquote URL: ') }}
                {{ Form::input('text', 'wikiquoteURL', null, array('class' => 'form-control')) }}
            </div>

            {{ Form::hidden('idPersona', $persona->idPersona) }}

            <button class="btn btn-success" type="submit">Submit</button>
            <a href="{{ action('PersonaController@showPersona', $persona->idPersona) }}" class="btn btn-danger">Cancel</a>

        </div>

    {{ Form::close() }}

@endsection
