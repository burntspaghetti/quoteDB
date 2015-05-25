@extends('master')
@section('content')

    <div class="container">

        <div class="page-header" id="banner">
            <div class="row">

                {{ Form::open([ 'action' => 'HomeController@search', 'class' => 'clearfix', 'style' => 'padding:1em 3em;']) }}

                <!--search Form Input-->
                <div class="form-group">
                    {{ Form::label('search', 'Search Quotes: ') }}
                    {{ Form::input('text', 'search', null, array('class' => 'form-control input-lg')) }}
                </div>

                {{--<button class="btn btn-default btn-lg btn-block" type="submit">Search</button>--}}

                {{ Form::close() }}

            </div>
        </div>
    </div>


@endsection