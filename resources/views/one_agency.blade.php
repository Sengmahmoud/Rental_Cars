@extends('master')

@section('content')



    <table class="table table-dark">
        <thead>{{$id->name}}</thead>
        <tbody>

            <tr>


                <td>
                    <a href="{{$id->id}}/Users" class="btn btn-danger ">users</a>

                </td>

            </tr>
            <tr>
                <td>
                    <a href="{{$id->id}}/Cars" class="btn btn-danger ">Cars</a>

                </td>

            </tr>

        </tbody>
    </table>
@stop