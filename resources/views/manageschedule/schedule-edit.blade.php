@extends('layouts.admin')

@section('title')
Edit | Admin
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="h4 p-3 bg-info bg-opacity-10 border border-info-subtle border-start-0 rounded-end">
                        Schedule Details -Edit 
                    </div>
                </div>
                <form action="/schedule/{{ $schedules->id }}/update" method="post" >
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label for="colFormLabelLg" class="col-form-label lg">Name:</label>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control" id="colFormLabelLg" value="{{ $schedules->name }}" name="name" id="name" placeholder="Name" required>
                                        </td>
                                        </td>
                                    </tr>
                                    <td>
                                        <label for="colFormLabelLg" class="col-form-label lg">Matric Number:</label>
                                    <td class="col-md-9">
                                        <input type="text" class="form-control" id="colFormLabelLg" id="matric_no" placeholder="Student ID" value="{{ $schedules->matric_no }}" name="matric_no" required>
                                    </td>
                                    </td>
                                    <tr>
                                        <td>
                                            <label for="colFormLabelLg" class="col-form-label lg">Work Type :</label>
                                            <td class="col-md-9">
                                                <div id="employment_type" id="colFormLabelLg">
                                                    <label>
                                                        <input type="radio" id="employment_type" name="employment_type" value="full-time" required> Full-time
                                                    </label>
                                                    <label>
                                                        <input type="radio" id="employment_type" name="employment_type" value="part-time" required> Part-time
                                                    </label>
                                                </div>
                                            </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="colFormLabelLg" class="col-form-label lg">Day :</label>
                                            <td class="col-md-9">
                                            <div id="employment_type" id="colFormLabelLg" >
                                            <select id="day" name="day">
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                            </select>
                                            </div>
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="colFormLabelLg" class="col-form-label lg">Time:</label>
                                            <td class="col-md-9">
                                            <div id="employment_type" id="colFormLabelLg" >
                                            <select id="time" name="time">
                                                <option value="08:00 - 10:00">08:00 - 10:00</option>
                                                <option value="10:00 - 12:00">10:00 - 12:00</option>
                                                <option value="12:00 - 14:00">12:00 - 14:00</option>
                                                <option value="14:00 - 16:00">14:00 - 16:00</option>
                                                <option value="16:00 - 18:00">16:00 - 18:00</option>
                                            </select>
                                            </div>
                                        </td>
                                        </td>
                                    </tr>   
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Update</button>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="/schedule/{{$schedules->id}}/delete" onclick="return confirm('Are You Sure?')"><button class="btn btn-primary me-md-2" type="button">Delete</button></a>
                                </div>
                            </div>
                            </div>
                    </div>
                </form>
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
