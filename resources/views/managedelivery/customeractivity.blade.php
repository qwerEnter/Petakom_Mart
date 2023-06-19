@extends('layouts.customer')
@section('title')
Delivery | Customer
@endsection
@section('content')

<!-- status delivery field -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Delivery History</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Order No.</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Meetup Point</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Runner / Cashier</th>
                        </thead>
                        <tbody>
                            @foreach ($history as $delivery)
                            <tr>
                                <td>{{ isset($delivery->id) ? $delivery->id : 'loading..' }}</td>
                                <td>{{ $delivery->product->name }}</td>
                                <td>{{ $delivery->quantity }}</td>
                                <td>{{ $delivery->meetupPoint->location }}</td>
                                <td>{{ isset($delivery->totalprice) ? 'RM' . $delivery->totalprice : 'calculating..' }}</td>
                                <td>{{ isset($delivery->status) ? $delivery->status : 'ongoing' }}</td>
                                <td>{{ $delivery->name ? $delivery->name : 'Not Assigned Yet' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cashier field -->

<!-- item list -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Item List</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal3" data-bs-target="#addCartModal">Add To Cart</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>No.</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </thead>
                        <tbody>
                            @foreach ($itemList as $inventory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $inventory->product->name }}</td>
                                <td>RM{{ $inventory->product->price }}</td>
                                <td>{{ $inventory->quantity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end item field -->

<!-- for add order form -->
<form action="/save-neworder" method="POST">
    {{ csrf_field() }}

    <div class="modal fade" id="statusUpdateModal" tabindex="-1" aria-labelledby="statusUpdateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="statusUpdateModalLabel">Add To Cart</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            
<center>
                                <table style="margin-top: 10px;">
                                    <tr>
                                    <td>Item:</td>
                                        <td>
                                        <select name="product_id" class="form-select">
                                    <option value="">Choose Item</option>
                                    @foreach ($itemList as $delivery)
                                        <option value="{{ $delivery->product->id }}">{{ $delivery->product->name }}</option>
                                    @endforeach
                                </select>
                                            </select>
                                        </td>
                                    </tr>
                                

                                
                                    <tr>
                                    <td>
                                    <label for="recipient-name" class="col-form-label">Quantity:</label>
                                    </td>
                                        <td>
                                            <input type="number" name="quantity" class="form-control" id="quantity"min="1"max="10">
                                            </select>
                                        </td>
                                    </tr>
                                

                                
                                <tr>
                                    <td>Meetup Point:</td>
                                        <td>
                                        <select name="meetup_point_id" class="form-select">
                                    <option value="">Choose Location</option>
                                    @foreach ($listloc as $location)
                                        <option value="{{ $location->id }}">{{ $location->location }}</option>
                                    @endforeach
                                </select>
                                        </td>
                                    </tr>
                                </table>


                                <table style="margin-top: 50px;">
                                <tr>
                                    <td>*Charges May Apply*</td>
                                    </tr>
                                </table>
                                </center>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="submit2" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end pop message -->
</form>
@endsection