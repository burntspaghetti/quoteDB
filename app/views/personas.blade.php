@extends('master')

@section('content')
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
                <td><a href="{{ action('HomeController@showPersona', $persona->idPersona) }}">{{$persona->fName . " " . $persona->lName}}</a></td>
            </tr>
            {{--</div>--}}
            {{--</div>--}}
        @endforeach

        </tbody>
    </table>


    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection
