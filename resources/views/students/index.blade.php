@extends('students.layout')
@section('content')
    <div class="container">
        <div class="now">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>CRUD</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{url('/students/create')}}" class="mb-3 btn btn-success btn-sm" title="new student">
                                Create
                            </a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}<</td>
                                        <td>{{$item->address}}<</td>
                                        <td>{{$item->mobile}}<</td>
                                        <td>
                                            <a href="{{'$/student/'}}" title="View Student"><button class="btn btn-info" aria-hidden="true">View</button> </a>
                                            <a href="" title="Edit Student"><button class="btn btn-info button-green" aria-hidden="true">Edit</button> </a>
                                            <a href="" title="Delete Student"><button class="btn btn-info btn-danger" aria-hidden="true">Delete</button> </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
