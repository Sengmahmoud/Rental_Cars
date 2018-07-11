@extends('master')

@section('content')


    <table class="table table-dark">
        <thead><span><b>Agencies</b></span></thead>
    <tbody>
    @foreach($agencies as $agency)
        <tr>
       <td>

        <a href="home/{{$agency->id}}">



                  {{ $agency->name }}
        </a>
       </td>

            <td>
                    <div><a href="home/{{ $agency->id }}/delete" class="btn btn-danger pull-right">Delete</a> </div>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
    <div class="form-inline">
        <form method="POST" action="agencystore">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Add Agency . . .">

          <button class="btn btn-default" type="submit">Add</button>

            </div>
        </form>
    </div>

@stop