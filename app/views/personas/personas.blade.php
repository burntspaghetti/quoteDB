@extends('master')

@section('content')
    <br>
    <br>
    <br>
    <div align="center">
        <a href="{{ action('PersonaController@create') }}" class="btn btn-default">Create New Persona</a>
    </div>
    <table id="table_id" class="table">
        <thead>
        <tr>
            <th>Persona</th>
        </tr>
        </thead>
        <tbody>
        @foreach($personas as $persona)
            {{--<div class="col-lg-6">--}}
            {{--<div class="bs-component">--}}
            <tr>
                <td><a href="{{ action('PersonaController@showPersona', $persona->idPersona) }}">{{$persona->fName . " " . $persona->lName}}</a></td>
            </tr>
            {{--</div>--}}
            {{--</div>--}}
        @endforeach

        </tbody>
    </table>


    <script>
        $(document).ready( function () {
            $('#table_id').DataTable(
                    {
                        "iDisplayLength": 100
                    }
            );
        } );
    </script>
@endsection
