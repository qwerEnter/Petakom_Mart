@extends('layouts.admin')

@section('title')
    Sales | Admin
@endsection

@section('content')

    <head>
        <style>

        </style>
    </head>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sales Cashier</h3>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class='btn btn-primary me-md-2' href="{{ route('inventories.create') }}">Report</a>
                            <a class='btn btn-primary me-md-2' href="{{ route('inventories.create') }}">Open/Closing</a>
                        </div>
                    </td>
                </div>


                {{-- <div class="card-body" style="float= right;">

                </div> --}}
            </div>
        </div>

    </div>
    <script>

    </script>
@endsection
