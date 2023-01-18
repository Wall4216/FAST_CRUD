@extends('students.layout')
@section('content')
    <div class="card m-2">
        <div class="card-header">Students Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name: {{$students->name}}</h5>
                <p class="card-text">Address: {{$students->address}}</p>
                <p class="card-text">Mobile: {{$students->mobile}}</p>
            </div>
        </div>
    </div>
    @stop
