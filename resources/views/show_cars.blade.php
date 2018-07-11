@extends('master')

@section('content')



    <table class="table table-dark">
        <thead>{{$agency->name}}</thead>
        <tbody>
        <tr bgcolor="red">
            <td>ID</td>
            <td>Type</td>
            <td>Number</td>
            <td>Customer_ID</td>
            <td>Rental_date</td>
            <td>Return_date</td>
        </tr>
        @foreach($agency->cars as $car)
            <tr>


                <td>
                    {{$car->id}}

                </td>

                <td>
                    {{$car->type}}

                </td>
                <td>
                    {{$car->number}}

                </td>

            @foreach($agency->customers as $customer)

@if($car->customer_id==$customer->id)
                    <td>
                    {{$car->customer_id}}

                </td>
                <td>
                    {{$car->rental_start_date}}

                </td>

                <td>
                    {{$car->rental_return_date}}

                </td>


@endif
                @endforeach


                <td>
                    <a href="Cars/{{$car->id}}/edit" class="btn btn-primary ">RentalTO</a>
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>


    <div class="form-group" mr  >
        <form method="post" action="Cars/store">
            {{csrf_field()}}

            <label for="formGroupExampleInput">ADD Car To Agency</label>
            <input type="text" name="type" class="form-control" id="formGroupExampleInput" placeholder="CarType">
            <input type="text" name="number" class="form-control" id="formGroupExampleInput"placeholder="CarNumber">

            <button type="submit" class="btn btn-primary">ADD</button>

        </form>
    </div>




@stop
