@extends('layouts.admin')

@section('title')
Update | Admin
@endsection



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Inventory Details</h3>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class='btn btn-primary me-md-2'>Add</a>
                    
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
                            <input type='button' class='btn btn-success' value='Edit'>
                            <input type='button' class='btn btn-info 'value= 'View'>
                            <a type='button' class='btn btn-warning'href="{{ url('/admin/inventory/update') }}">Update</a>
                            <input type='button' class='btn btn-danger'value='Delete'>
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
                            <input type='button' class='btn btn-success'value='Edit'>
                            <input type='button' class='btn btn-info'value= 'View'>
                            <input type='button' class='btn btn-warning'value='Update'>
                            <input type='button' class='btn btn-danger'value='Delete'>
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
                            <input type='button' class='btn btn-success'value='Edit'>
                            <input type='button' class='btn btn-info'value= 'View'>
                            <input type='button' class='btn btn-warning'value='Update'>
                            <input type='button' class='btn btn-danger'value='Delete'>
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
                            <input type='button' class='btn btn-success'value='Edit'>
                            <input type='button' class='btn btn-info'value= 'View'>
                            <input type='button' class='btn btn-warning'value='Update'>
                            <input type='button' class='btn btn-danger'value='Delete'>
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


