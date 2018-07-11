@extends('master')

@section('content')



    <table class="table table-dark">
        <thead>{{$agency->name}}</thead>
        <tbody>
        <tr bgcolor="red">
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Car_ID</td>
            <td>Rental_date</td>
            <td>Return_date</td>
        </tr>
        @foreach($agency->customers as $customer)
            <tr>


                <td>
                    {{$customer->id}}

                </td>

                <td>
                    {{$customer->name}}

                </td>

                <td>
                    {{$customer->phone}}

                </td>

                <td>
                    {{$customer->address}}

                </td>
                @foreach($agency->cars as $car)
                @if($customer->id==$car->customer_id)
                        <td>{{$car->id}}</td>
                        <td>
                            {{$car->rental_start_date}}

                        </td>
                        <td>
                            {{$car->rental_return_date}}

                        </td>

@endif
                    @endforeach

                <td>
                    <div><a href="Users/{{$customer->id}}/delete" class="btn btn-danger pull-right">Delete</a> </div>
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>


    <div class="form-group" mr  >
        <form method="post" action="Users/store">
            {{csrf_field()}}

            <label for="formGroupExampleInput">Add User</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
            <input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="Phone">
            <input type="text" name="address" class="form-control" id="formGroupExampleInput" placeholder="Address">

            <button type="submit" class="btn btn-primary">ADD</button>

        </form>
    </div>




@stop
