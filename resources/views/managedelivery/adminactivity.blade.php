@extends('layouts.admin')
@section('title')
Delivery | Admin
@endsection
@section('content')

<!-- cashier field -->
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">Order List</h4>             
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                              
                                <th>No.</th>
                                <th>Order No.</th>
                                <th>Cashier</th>
                                <th></th>
                            </thead>
                            <tbody>
                            @php
                                    $i = 1;
                                @endphp
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->name}}</td>
                                        <td><button type="button" value ="{{$order->id}}"class="btn btn-warning editbtn btm-sm">Update</button></td>
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

<!-- meetuppoint field -->
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">MeetupPoint List</h4>   
                    <button type="button" class="btn btn-primary" data-toggle="modal2" data-target="#exampleModal2">Add Meetup</button>
                    <!-- <a href="{{ url('add_cashier') }}" class="btn btn-primary">Add Cashier</a> -->
                            
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                              
                                <th>No.</th>
                                <th>Meetup Point</th>
                                <th></th>
                            </thead>
                            <tbody>
                            @php
                                    $i = 1;
                                @endphp
                                @foreach ($meetupPoints as $meetupPoint)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$meetupPoint->location}}</td>
                                      <td class="text-right"><a href="{{ route('delete_location', ['id' => $meetupPoint->id]) }}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end meetuppoint field -->


<!-- for add assigned cashier -->
<form action="update-order" method = "POST">
{{csrf_field()}}
@method('PUT')
<input type="hidden" name="order_id" id="order_id"/>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title fs-5" id="exampleModal">Assign Delivery</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Cashier:</label>
            <input type="text" name="name" class="form-control" id="name" >
          </div>
          
        </form>
      </div>
      <button type="submit" class="btn btn-warning">Update</button>
    </div>
  </div>
</div>
<!-- end pop message -->

<!-- for add meetuppoint popup form to fill -->
<form action="/save-newmeetup" method = "POST">
{{csrf_field()}}

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title fs-5" id="exampleModal2">Add New MeetupPoint</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal2" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Meetup Point:</label>
            <input type="text" name="location" class="form-control" id="meetuppoint">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
    
        <button type="submit2" class="btn btn-primary">Create</button>
        

      </div>
    </div>
  </div>
</div>
<!-- end pop message -->
@endsection

<!-- jquery conn for update assigned cashier -->
@section('scripts')
<script>
  $(document).ready(function UpdateOrder()
  {
    $(document).on('click', '.editbtn', function()
    {
      var order_id=$(this).val();
      $('#exampleModal').modal('show');
      
      $.ajax({

        type:"GET",
        url:"/edit-order/"+order_id,
        success: function (response){
          // console.log(response.name.name);
          $('#name').val(response.name.name);
          $('#order_id').val(order_id);
        }
      })
    });
  });
</script>
@endsection
<!-- end of update -->