@extends('master')

@section('content')

    <div class="form-group"  >
        <form method="post" action="update">

            {{csrf_field()}}
            <div class="input-group mb-3">
                <input type="integer" name="customer_id" value="{{$car->customer_id}}" class="form-control">
                <input type="datetime-local" name="rental_start_date" value="{{$car->rental_start_date}}" class="form-control">
                <input type="datetime-local" name="rental_return_date" value="{{$car->rental_return_date}}" class="form-control">
                <button type="submit" class="btn btn-primary">edit</button>
            </div>
        </form>
    </div>




@stop