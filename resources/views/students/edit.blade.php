@extends('students.layout')
@section('content')
    <div class="card m-2">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{url('students/' . $students->id)}}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label>Address</label><br>
                <label for="address"></label><input type="text" name="address" id="address" class="form-control"><br>
                <label>Mobile</label><br>
                <input type="text" name="mobile" id="mobile" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>
    @stop
