@extends('master')

@section('content')
    <br>
    <br>
    <div align="center">
        <a href="{{ action('PersonaController@create') }}" class="btn btn-default">Create New Persona</a>
    </div>
    
    <br>
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
                <td><h3><a href="{{ action('PersonaController@showPersona', $persona->idPersona) }}">{{$persona->fName . " " . $persona->lName}}</a></h3></td>
            </tr>
            {{--</div>--}}
            {{--</div>--}}
        @endforeach

        </tbody>
    </table>


m    <script>
        $(document).ready( function () {
            $('#table_id').DataTable(
                    {
                        "iDisplayLength": 100
                    }
            );
        } );
    </script>
@endsection
