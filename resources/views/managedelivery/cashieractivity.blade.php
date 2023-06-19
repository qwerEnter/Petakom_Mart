@extends('layouts.cashier')
@section('title')
Delivery | Cashier
@endsection
@section('content')

<!-- update status delivery field -->
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Delivery Menu List</h4>                 
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
                                @foreach ($historys as $history)
                                    
                                    <tr>
                                    <td>{{ isset($history->id) ? $history->id : 'loading..' }}</td>
                                    <td>{{$history->product->name}}</td> 
                                    <td>{{$history->quantity}}</td> 
                                    <td>{{$history->meetupPoint->location}}</td>
                                    <td>{{ isset($history->totalprice) ? 'RM' . $history->totalprice : '?' }}</td>
                                    <td>{{$history->status}}</td>
                                    <td>{{ $history->name ? $history->name : 'Not Assigned Yet' }}</td>

                                    <td><button type="button" value ="{{$history->id}}"class="btn btn-warning editbtn btm-sm">Update</button></td>
                                    
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

<!-- for uodate status popup form to fill -->
<form action="update-status" method = "POST">
{{csrf_field()}}
@method('PUT')
<input type="hidden" name="status_id" id="status_id"/>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h3 class="modal-title fs-5" id="exampleModal">Update Status</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-totalprice" class="col-form-label">Total Price: *include it with delivery charges RM2</label>
            <input type="text" name="totalprice" class="form-control" id="totalprice" >
          </div>
          <div class="mb-3">
            <label for="recipient-status" class="col-form-label">Status:  *ongoing *arrived *delivered </label>
            <input type="text" name="status" class="form-control" id="status" >
          </div>
          
        </form>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</div>
<!-- end pop message -->
@endsection

<!-- jquery conn for update update status -->
@section('scripts')
<script>
  $(document).ready(function UpdateStatus()
  {
    $(document).on('click', '.editbtn', function()
    {
      var status_id=$(this).val();
      $('#exampleModal').modal('show');
      
      $.ajax({

        type:"GET",
        url:"/edit-status/"+status_id,
        success: function (response){
          $('#status').val(response.status.status);
          $('#totalprice').val(response.status.totalprice);
          $('#status_id').val(status_id);
        }
      })
    });
  });
</script>
@endsection
<!-- end of update -->


