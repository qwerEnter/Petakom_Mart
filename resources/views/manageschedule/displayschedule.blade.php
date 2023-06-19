@extends('layouts.admin')

@section('title')
Inventory | Admin
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">SCHEDULE DETAIL</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Matric Number</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $schedules)

                            <tr>
                                <td>{{ $schedules->name }}</td>
                                <td>{{ $schedules->matric_no }}</td>
                                <td>{{ $schedules->day }}</td>
                                <td>{{ $schedules->time }}</td>
                                <td>
                                    <div class='btn-group'>
                                        <a type='button' class='btn btn-success' href="/schedule/{{$schedules->id}}/edit">Edit</a>
                                    </div>
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

@endsection
