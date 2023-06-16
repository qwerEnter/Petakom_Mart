@extends('layouts.admin')

@section('title')
    Add | Admin
@endsection



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="h4 p-3 bg-info bg-opacity-10 border border-info-subtle border-start-0 rounded-end">
                        Inventory Details
                    </div>
                </div>
                <form action="/inventory/create" method="POST">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label for="colFormLabelLg" class="col-form-label lg">Name of the
                                                products:</label>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control" id="colFormLabelLg" value="" name="name">
                                        </td>
                                        </td>
                                    </tr>
                                    <td>
                                        <label for="colFormLabelLg" class="col-form-label lg">ID Products:</label>
                                    <td class="col-md-9">
                                        <input type="int" class="form-control" id="colFormLabelLg" value="" name="product_id">
                                    </td>
                                    </td>
                                    <tr>
                                        <td>
                                            <label for="colFormLabelLg" class="col-form-label lg">Price:</label>
                                        <td class="col-md-9">
                                            <input type="float" class="form-control" id="colFormLabelLg" value="" name="price">
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="colFormLabelLg" class="col-form-label lg">Stock Levels:</label>
                                        <td class="col-md-9">
                                            <input type="int" class="form-control" id="colFormLabelLg" value="" name="quantity">
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="colFormLabelLg" class="col-form-label lg">Product
                                                Description:</label>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control" id="colFormLabelLg" value="" name="description">
                                        </td>
                                        </td>
                                    </tr>
                                    <td>
                                        <label for="colFormLabel" class="col-form-label">Date Expired:</label>
                                    <td class="col-md-9">
                                        <input type="date" class="form-control" id="colFormLabel" value="" name="expired_date">
                                    </td>
                                    </td>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/now-ui-dashboards.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/now-ui-dashboard.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/now-ui-dashboard.min.css') }}">
@endsection
