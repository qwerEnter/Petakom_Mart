@extends('layouts.admin')

@section('title')
Inventory | Admin
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Inventory Details</h3>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class='btn btn-primary me-md-2' href="/inventory">Add</a>
                    </div>
                </td>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <tr>
                                <th>Inventory ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Expired Date</th>
                                <th>Stock Level</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)

                            <tr>
                                <td>{{ $inventory->id }}</td>
                                <td>{{ $inventory->name }}</td>
                                <td>{{ $inventory->price }}</td>
                                <td>{{ $inventory->expired_date }}</td>
                                <td>{{ $inventory->quantity }}</td>
                                <td>
                                    <div class='btn-group'>
                                        <a type='button' class='btn btn-success' href="/inventory/{{$inventory->id}}/edit">Edit</a>
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
