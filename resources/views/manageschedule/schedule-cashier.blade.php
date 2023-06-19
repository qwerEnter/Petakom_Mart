@extends('layouts.admin')

@section('title')
Schedule | Admin
@endsection



@section('content')

<style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        /* Pop-up Styling */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
        }

        .popup-buttons {
            margin-top: 20px;
        }

        .popup-buttons button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
        }

        .popup {
        position: relative;
    }

    .close-icon {
        position: absolute;
        top: 10px;
        right: 20px;
        cursor: pointer;
        font-size: 20px;
        color: #888;
    }  
    </style>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title" align="center"> Schedule</h1>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        
                    <table>

                      <tr>
                          <th></th>
                          <th>08:00 - 10:00</th>
                          <th>10:00 - 12:00</th>
                          <th>12:00 - 14:00</th>
                          <th>14:00 - 16:00</th>
                          <th>16:00 - 18:00</th>
                      </tr>
                        
                      <tr>
                          <th>Monday</th>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Monday')->where('time', '08:00 - 10:00')->first()?->name}}',)">
                          {{ $schedules->where('day', 'Monday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Monday')->where('time', '08:00 - 10:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Monday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Monday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Monday')->where('time', '10:00 - 12:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Monday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Monday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Monday')->where('time', '12:00 - 14:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Monday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Monday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Monday')->where('time', '14:00 - 16:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Monday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Monday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Monday')->where('time', '16:00 - 18:00')->first()?->matric_no }}
                        </td>
                      </tr>
                      <tr>
                          <th>Tuesday</th>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Tuesday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Tuesday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Tuesday')->where('time', '08:00 - 10:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Tuesday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Tuesday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Tuesday')->where('time', '10:00 - 12:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Tuesday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Tuesday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Tuesday')->where('time', '12:00 - 14:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Tuesday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Tuesday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Tuesday')->where('time', '14:00 - 16:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Tuesday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Tuesday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Tuesday')->where('time', '16:00 - 18:00')->first()?->matric_no }}
                        </td>
                      </tr>
                      <tr>
                          <th>Wednesday</th>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Wednesday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Wednesday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Wednesday')->where('time', '08:00 - 10:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Wednesday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Wednesday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Wednesday')->where('time', '10:00 - 12:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Wednesday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Wednesday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Wednesday')->where('time', '12:00 - 14:0')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Wednesday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Wednesday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Wednesday')->where('time', '14:00 - 16:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Wednesday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Wednesday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Wednesday')->where('time', '16:00 - 18:00')->first()?->matric_no }}
                        </td>
                      </tr>
                      <tr>
                          <th>Thursday</th>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Thursday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Thursday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Thursday')->where('time', '08:00 - 10:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Thursday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Thursday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Thursday')->where('time', '10:00 - 12:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Thursday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Thursday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Thursday')->where('time', '12:00 - 14:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Thursday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Thursday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Thursday')->where('time', '14:00 - 16:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Thursday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Thursday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Thursday')->where('time', '16:00 - 18:00')->first()?->matric_no }}
                        </td>
                      </tr>
                      <tr>
                          <th>Friday</th>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Friday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Friday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Friday')->where('time', '08:00 - 10:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Friday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Friday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Friday')->where('time', '10:00 - 12:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Friday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Friday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Friday')->where('time', '12:00 - 14:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Friday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Friday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Friday')->where('time', '14:00 - 16:00')->first()?->matric_no }}
                        </td>
                          <td onclick="showPopup('{{ $schedules->where('day', 'Friday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $schedules->where('day', 'Friday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                          {{ $schedules->where('day', 'Friday')->where('time', '16:00 - 18:00')->first()?->matric_no }}
                        </td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          
          <!-- Pop-up -->
          <div class="popup-overlay" id="popupOverlay">
            <div class="popup">
            <span class="close-icon" onclick="closePopup()">&#10006;</span> <!-- Close icon -->
            <h2 id="popupTitle"></h2>
                <div class="popup-buttons">
                    <button onclick="showPopup1('add')">Add</button>
                </div>
            </div>
        </div>
        
        <div class="popup-overlay" id="popupOverlay1">
            <div class="popup">
                <h2>Add Schedule</h2>
                <form class="popup-form" action="{{ route('schedule-cashier.create') }}" method="POST">
                @csrf
                <!-- Include your form fields here -->
                <table class="table">
                    <thead class=" text-primary">
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label for="colFormLabelLg" class="col-form-label lg">Name:</label>
                            <td class="col-md-9">
                                <input type="text" class="form-control" id="colFormLabelLg" value="" name="name" id="name" placeholder="Name" required>
                            </td>
                            </td>
                        </tr>
                        <td>
                            <label for="colFormLabelLg" class="col-form-label lg">Matric Number:</label>
                        <td class="col-md-9">
                            <input type="text" class="form-control" id="colFormLabelLg" id="matric_no" placeholder="Student ID" value="" name="matric_no" required>
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
                                <div id="day" id="colFormLabelLg" >
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
                                <div id="time" id="colFormLabelLg" >
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
                        <tr>
                            <td class="popup-buttons">
                            <button type="submit">Submit</button>
                            </td>
                            <td class="popup-buttons">
                            <button type="button" onclick="closePopup()">Cancel</button>
                            </td>
                        </tr>   
                    </tbody>
                </table>   
                </form>
            </div>
        </div>
    </div>

    <script>
        function showPopup(className) {
            document.getElementById('popupTitle').textContent = className;
            document.getElementById('popupOverlay').style.display = 'flex';
        }

        function showPopup1() {
            document.getElementById('popupOverlay1').style.display = 'flex';
        }


        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.getElementById('popupOverlay1').style.display = 'none'; 
        }
    </script>


          
         
@endsection

@section('scripts')
@endsection