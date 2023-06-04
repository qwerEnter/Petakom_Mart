@extends('layouts.admin')




@section('title')

Delivery | Admin

@endsection




@section('content')

<!-- for add cashier popup form to fill -->
<form action="/save-newcashier" method = "POST">
{{csrf_field()}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Cashier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Matric No:</label>
            <input type="text" name="matric_no" class="form-control" id="matric">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="name"></textarea>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Create</button>

      </div>
    </div>
  </div>
</div>
<!-- end pop message -->

<!-- add cashier field -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">Cashier List</h4>   
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="#exampleModal">Add Cashier</button>
                    <!-- <a href="{{ url('add_cashier') }}" class="btn btn-primary">Add Cashier</a> -->
                            
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                              
                                <th>No.</th>
                                <th>Matric No.</th>
                                <th>Name</th>
                                <th class="text-right">Work Type</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $stu)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$stu->matric_no}}</td>
                                        <td>{{$stu->name}}</td>
                                        <td class="text-right">{{$stu->work_type}}</td>
                                        <td class="text-right"><a href="{{ route('delete_cashier', ['id' => $stu->id]) }}" class="btn btn-danger">Delete</a></td>
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

<!-- add meetuppoint field -->
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">MeetupPoint List</h4>   
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal2" data-bs-target="#exampleModal2">Add Meetup</button>
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
                                @foreach ($data as $stu)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td class="text-right">{{$stu->meetup_points}}</td>
                                        <td class="text-right"><a href="{{ route('delete_meetup', ['id' => $stu->id]) }}" class="btn btn-danger">Delete</a></td>
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

<!-- for add meetuppoint popup form to fill -->
<form action="/save-newmeetup" method = "POST">
{{csrf_field()}}

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModal2">Add New MeetupPoint</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal2" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Meetup Point:</label>
            <input type="text" name="meetup_points" class="form-control" id="meetuppoint">
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




