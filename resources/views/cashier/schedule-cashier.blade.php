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
            border-radius: 10px;
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
                <h4 class="card-title" align="center"> Schedule</h4>
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
                          <td onclick="showPopup('Class A')">Class A</td>
                          <td onclick="showPopup('Class B')">Class B</td>
                          <td onclick="showPopup('Class C')">Class C</td>
                          <td onclick="showPopup('Class D')">Class D</td>
                          <td onclick="showPopup('Class E')">Class E</td>
                      </tr>
                      <tr>
                          <th>Tuesday</th>
                          <td onclick="showPopup('Class F')">Class F</td>
                          <td onclick="showPopup('Class G')">Class G</td>
                          <td onclick="showPopup('Class H')">Class H</td>
                          <td onclick="showPopup('Class I')">Class I</td>
                          <td onclick="showPopup('Class J')">Class J</td>
                      </tr>
                      <tr>
                          <th>Wednesday</th>
                          <td onclick="showPopup('Class K')">Class K</td>
                          <td onclick="showPopup('Class L')">Class L</td>
                          <td onclick="showPopup('Class M')">Class M</td>
                          <td onclick="showPopup('Class N')">Class N</td>
                          <td onclick="showPopup('Class O')">Class O</td>
                      </tr>
                      <tr>
                          <th>Thursday</th>
                          <td onclick="showPopup('Class P')">Class P</td>
                          <td onclick="showPopup('Class Q')">Class Q</td>
                          <td onclick="showPopup('Class R')">Class R</td>
                          <td onclick="showPopup('Class S')">Class S</td>
                          <td onclick="showPopup('Class T')">Class T</td>
                      </tr>
                      <tr>
                          <th>Friday</th>
                          <td onclick="showPopup('Class U')">Class U</td>
                          <td onclick="showPopup('Class V')">Class V</td>
                          <td onclick="showPopup('Class W')">Class W</td>
                          <td onclick="showPopup('Class X')">Class X</td>
                          <td onclick="showPopup('Class Y')">Class Y</td>
                      </tr>
                      <tr>
                          <th>Saturday</th>
                          <td onclick="showPopup('Class Z')">Class Z</td>
                          <td onclick="showPopup('Class AA')">Class AA</td>
                          <td onclick="showPopup('Class BB')">Class BB</td>
                          <td onclick="showPopup('Class CC')">Class CC</td>
                          <td onclick="showPopup('Class DD')">Class DD</td>
                      </tr>
                      <tr>
                          <th>Sunday</th>
                          <td onclick="showPopup('Class EE')">Class EE</td>
                          <td onclick="showPopup('Class FF')">Class FF</td>
                          <td onclick="showPopup('Class GG')">Class GG</td>
                          <td onclick="showPopup('Class HH')">Class HH</td>
                          <td onclick="showPopup('Class II')">Class II</td>
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
                <form class="popup-form" onsubmit="submitForm(event)">
                    <input type="text" id="nameInput" placeholder="Name" required><br>
                    <input type="text" id="studentIdInput" placeholder="Student ID" required><br>
                    <div>
                        <label>
                            <input type="radio" name="workType" value="full-time" required> Full-time
                        </label>
                        <label>
                            <input type="radio" name="workType" value="part-time" required> Part-time
                        </label>
                    </div>
                    <input type="date" id="dateInput" required><br>
                    <input type="time" id="timeInput" required><br>
                    <div class="popup-buttons">
                        <button type="submit">Submit</button>
                        <button type="button" onclick="closePopup()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showPopup(className) {
            document.getElementById('popupTitle').textContent = className;
            document.getElementById('popupOverlay').style.display = 'flex';
        }

        function performAction(action) {
            // Replace with your logic for handling the action
            alert(action + ' action performed!');
        }

        function showPopup1() {
            document.getElementById('popupOverlay1').style.display = 'compact';
        }

        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            document.getElementById('popupOverlay1').style.display = 'none';
        }

        function submitForm(event) {
            event.preventDefault();

            // Get the input values
            var name = document.getElementById('nameInput').value;
            var studentId = document.getElementById('studentIdInput').value;
            var workType = document.querySelector('input[name="workType"]:checked').value;
            var date = document.getElementById('dateInput').value;
            var time = document.getElementById('timeInput').value;

            // You can perform further processing with the name and studentId
            console.log('Name:', name);
            console.log('Student ID:', studentId);
            console.log('Work Type:', workType);
            console.log('Date:', date);
            console.log('Time:', time);

            // Close the pop-up
            closePopup();
        }

    </script>


          
         
@endsection

@section('scripts')
@endsection