@extends('master')
@section('test')
    <h3>search results</h3>



    {{--<table id="table_id" class="table">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Quote</th>--}}
            {{--<th>Persona</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}

        {{--@foreach($quotes as $quote)--}}
            {{--<tr>--}}
                {{--<td>Row 1 Data 1</td>--}}
                {{--<td>Row 1 Data 2</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}

        {{--</tbody>--}}
    {{--</table>--}}


    <div class="row">
        @foreach($quotes as $quote)
            <div class="col-lg-6">
                <div class="bs-component">
                    <blockquote>
                        <p>{{$quote->quoteText}}</p>
                        <small>{{$personaArray[$quote->idPersona]->fName . " " . $personaArray[$quote->idPersona]->lName}} <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endsection