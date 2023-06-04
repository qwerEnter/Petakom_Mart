@extends('layouts.cashier')

@section('title')
Inventory | Admin
@endsection



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Inventory Details</h3>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class='btn btn-primary me-md-2' href="{{ route('inventories.create') }}">Add</a>
                    
                </td>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                     <tbody>
                      <th>
                        Inventory ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Price 
                      </th>
                      <th>
                        Stock Level
                      </th>
                      <th class>
                        Action
                      </th>
                      </tbody>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          PID1005
                        </td>
                        <td>
                          Milo
                        </td>
                        <td>
                          RM2.00
                        </td>
                        <td>
                          10
                        </td>
                        <td>
                          <div class='btn-group'>
                          <a type='button' class='btn btn-success' href="{{ route ('inventories.edit') }}">Edit</a>
                          <a type='button' class='btn btn-info' href="{{ route (' inventories.show ') }}">View</a>
                            <!-- <a type='button' class='btn btn-warning' href="{{ route('abc') }}">Update</a> -->
                            <a type='button' class='btn btn-danger' href="{{ route('inventories.destroy') }}">Delete</a>
                          </div>
                        </td>
                      </tr>
                      <tbody>
                      <tr>
                        <td>
                          PID1006
                        </td>
                        <td>
                          Maggie Cup
                        </td>
                        <td>
                          RM2.50
                        </td>
                        <td>
                          8
                        </td>
                        <td>
                          <div class='btn-group'>
                          <a type='button' class='btn btn-success' href="{{ url('/admin/inventory/edit') }}">Edit</a>
                          <a type='button' class='btn btn-info' href="{{ url('/admin/inventory/view') }}">View</a>
                            <a type='button' class='btn btn-warning' href="{{ url('/admin/inventory/update') }}">Update</a>
                            <a type='button' class='btn btn-danger' href="{{ url('/admin/inventory/delete') }}">Delete</a>
                          </div>
                        </td>
                      </tr>  
                    </tbody>
                    <tbody>
                      <tr>
                        <td>
                          PID1007
                        </td>
                        <td>
                          Roti
                        </td>
                        <td>
                          RM1.90
                        </td>
                        <td>
                          5
                        </td>
                        <td>
                          <div class='btn-group'>
                          <a type='button' class='btn btn-success' href="{{ url('/admin/inventory/edit') }}">Edit</a>
                          <a type='button' class='btn btn-info' href="{{ url('/admin/inventory/view') }}">View</a>
                            <a type='button' class='btn btn-warning' href="{{ url('/admin/inventory/update') }}">Update</a>
                            <a type='button' class='btn btn-danger' href="{{ url('/admin/inventory/delete') }}">Delete</a>
                          </div>
                        </td>
                      </tr>  
                    </tbody>
                    <tbody>
                      <tr>
                        <td>
                          PID1008
                        </td>
                        <td>
                          Nescafe
                        </td>
                        <td>
                          RM2.00
                        </td>
                        <td>
                          6
                        </td>
                        <td>
                          <div class='btn-group'>
                            <a type='button' class='btn btn-success' href="{{ url('/admin/inventory/edit') }}">Edit</a>
                            <a type='button' class='btn btn-info' href="{{ url('/admin/inventory/view') }}">View</a>
                            <a type='button' class='btn btn-warning' href="{{ url('/admin/inventory/update') }}">Update</a>
                            <a type='button' class='btn btn-danger' href="{{ url('/admin/inventory/delete') }}">Delete</a>
                          </div>
                        </td>
                      </tr>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          
         
@endsection


