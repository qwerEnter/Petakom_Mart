@extends('layouts.admin')

@section('title')
    Sales | Admin
@endsection

@section('content')

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js"
            integrity="sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js"
            integrity="sha512-iphNRh6dPbeuPGIrQbCdbBF/qcqadKWLa35YPVfMZMHBSI6PLJh1om2xCTWhpVpmUyb4IvVS9iYnnYMkleVXLA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
        </script>

        {{-- Css Bootstrap --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}

        <!-- for styling -->
        <style>
            table {
                border: 1px solid black;
                margin-left: auto;
                margin-right: auto;
            }

            input[type="button"] {
                width: 100%;
                padding: 20px 40px;
                background-color: green;
                color: white;
                font-size: 24px;
                font-weight: bold;
                border: none;
                border-radius: 5px;
            }

            input[type="text"] {
                padding: 20px 30px;
                font-size: 24px;
                font-weight: bold;
                border: none;
                border-radius: 5px;
                border: 2px solid black;
            }

            /* CSS for Tab */
            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }

            table {
                width: 80%;
            }

            tr,
            th {
                text-align: left;
            }

            .selected {
                background-color: blue;
            }

            /*Highlight*/
            .highlight {
                background-color: blue;
                color: white;
            }
        </style>
    </head>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sales Cashier</h3>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class='btn btn-primary me-md-2' href="/reportSales">Report</a>
                            <a class='btn btn-primary me-md-2' href="/salesFlow">Open/Closing</a>
                        </div>
                    </td>
                </div>
                <div class="col-md-12">


                    <div style="float: right">
                        <div class="table-responsive">
                            <table id="calcu">
                                <tr>
                                    <td colspan="3"><input type="text" id="result"></td>
                                    <!-- clr() function will call clr to clear all value -->
                                    <td><input type="button" value="c" onclick="clr()" /> </td>
                                </tr>
                                <tr>
                                    <!-- create button and assign value to each button -->
                                    <!-- dis("1") will call function dis to display value -->
                                    <td><input type="button" value="1" onclick="dis('1')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="2" onclick="dis('2')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="3" onclick="dis('3')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="/" onclick="dis('/')"
                                                onkeydown="myFunction(event)"> </td>
                                </tr>
                                <tr>
                                    <td><input type="button" value="4" onclick="dis('4')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="5" onclick="dis('5')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="6" onclick="dis('6')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="*" onclick="dis('*')"
                                                onkeydown="myFunction(event)"> </td>
                                </tr>
                                <tr>
                                    <td><input type="button" value="7" onclick="dis('7')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="8" onclick="dis('8')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="9" onclick="dis('9')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="-" onclick="dis('-')"
                                                onkeydown="myFunction(event)"> </td>
                                </tr>
                                <tr>
                                    <td><input type="button" value="0" onclick="dis('0')"
                                                onkeydown="myFunction(event)"> </td>
                                    <td><input type="button" value="." onclick="dis('.')"
                                                onkeydown="myFunction(event)"> </td>
                                    <!-- solve function call function solve to evaluate value -->
                                    <td><input type="button" value="=" onclick="solve()"> </td>

                                    <td><input type="button" value="+" onclick="dis('+')"
                                                onkeydown="myFunction(event)"> </td>
                                </tr>
                                <tr>
                                    <td colspan="4"><input type="button" value="Confirm Payment" data-toggle="modal"
                                            data-target="#exampleModal"></td>

                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Modal Confirm Payment-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h2>Confirm Payment</h2>
                                    <p>Are you sure to continue with the payment?</p>
                                </div>
                                <div class="modal-footer" style="padding-right: 37%">
                                    <button class="btn btn-success" data-dismiss="modal" data-target="#paymentMethod"
                                        data-toggle="modal">Yes</button>
                                    <button class="btn btn-primary me-md-2" data-dismiss="modal">No</button>
                                    {{-- <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal Payment Method-->
                    <div class="modal fade" id="paymentMethod" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h2>Payment Selection</h2>
                                    <p>Choose the payment method:</p>
                                    <table>
                                        <tr style="border-style: solid">
                                            <td>
                                                <div id="qrDiv" class="container" data-dismiss="modal"
                                                    data-target="#qrMethod" data-toggle="modal">
                                                    <img src="{{ asset('assets/img/qr.png') }}" alt="qr"
                                                        style="height: 100px; width: 100px" class="center">
                                                    <h5>QR Code</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div id="cashDiv" class="container"
                                                data-dismiss="modal" data-target="#cashMethod"
                                                data-toggle="modal">
                                                    <img src="{{ asset('assets/img/cash.png') }}" alt="cash"
                                                        style="height: 100px; width: 100px" class="center">
                                                    <h5>Cash</h5>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer" style="padding-right: 37%">
                                    {{-- <button class="btn btn-success" data-dismiss="modal" data-target="#qrModal"
                                        data-toggle="modal">Yes</button> --}}
                                    <button class="btn btn-primary me-md-2" data-dismiss="modal">Cancel</button>
                                    {{-- <button type="button" class="btn btn-secondary"
                                         data-bs-dismiss="modal">Close</button>
                                     <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal QR Method-->
                    <div class="modal fade" id="qrMethod" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h2>Payment Selection</h2>
                                    <p>Please scan the QR below:</p>
                                    <div class="center" style="text-align: center;">
                                        <div style="display: inline-block;">
                                            <img src="{{ asset('assets/img/qr.png') }}" alt="qr"
                                                style="height: 100px; width: 100px" class="center">
                                            <div>
                                                <h4>PETAKOM FK UMP</h4>
                                                <h5>00000216546516</h5>
                                                <h5>Maybank Berhad</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer" style="text-align: center;">
                                    <button class="btn btn-success" data-dismiss="modal">OK</button>
                                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Cash Method-->
                    <div class="modal fade" id="cashMethod" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h2>Payment Selection</h2>
                                    <p>Please process the cash</p>
                                </div>
                                <div class="modal-footer" style="text-align: center;">
                                    <button class="btn btn-success" data-dismiss="modal">OK</button>
                                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab" style="width: 68%">
                        <button class="tablinks" onclick="openCity(event, 'General')">General</button>
                        <button class="tablinks" onclick="openCity(event, 'Food')">Food</button>
                        <button class="tablinks" onclick="openCity(event, 'Beverages')">Beverages</button>
                        <button class="tablinks" onclick="openCity(event, 'Amenities')">Amenities</button>
                        <button class="tablinks" onclick="openCity(event, 'Printing')">Printing</button>
                    </div>

                    <div id="General" class="tabcontent" style="height: 100%; float: left; width: 68%">
                        <h3>General</h3>
                        <table>
                            <tr>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('FK Pen', 1.20, this)">
                                        <img src="{{ asset('assets/img/fkpen.png') }}" alt="fkpen"
                                            style="height: 100px; width: 100px;">
                                        <h4>FK Pen</h4>
                                        <h5>RM1.20</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('FK Pencil', 1.00, this)">
                                        <img src="{{ asset('assets/img/fkpencil.png') }}" alt="fklanyard"
                                            style="height: 100px; width: 100px;">
                                        <h4>FK Pencil</h4>
                                        <h5>RM1.00</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('FK Glue', 1.50, this)">
                                        <img src="{{ asset('assets/img/fkglue.png') }}" alt="fkglue"
                                            style="height: 100px; width: 100px;">
                                        <h4>FK Glue</h4>
                                        <h5>RM1.50</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('FK Lanyard', 5.00, this)">
                                        <img src="{{ asset('assets/img/fklanyard.png') }}" alt="fklanyard"
                                            style="height: 100px; width: 100px;">
                                        <h4>FK Lanyard</h4>
                                        <h5>RM5.00</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('FK Card Holder', 3.00, this)">
                                        <img src="{{ asset('assets/img/fkcardholder.jpg') }}" alt="fkcardholder"
                                            style="height: 100px; width: 100px;">
                                        <h4>FK Card Holder</h4>
                                        <h5>RM3.00</h5>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div id="Food" class="tabcontent" style="height: 100%; float: left; width: 68%">
                        <h3>Food</h3>
                        <table>
                            <tr>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('Maggi Cup', 1.50, this)">
                                        <img src="{{ asset('assets/img/megi.jpg') }}" alt="megi"
                                            style="height: 100px; width: 100px;">
                                        <h4>Maggi Cup</h4>
                                        <h5>RM1.50</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('Apollo Assorted Flavours', 1.00, this)">
                                        <img src="{{ asset('assets/img/apollo.jpg') }}" alt="apollo"
                                            style="height: 100px; width: 100px;">
                                        <h4>Apollo Assorted Flavours</h4>
                                        <h5>RM1.00</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('Buah Potong', 5.50, this)">
                                        <img src="{{ asset('assets/img/buah.jpg') }}" alt="buahpotong"
                                            style="height: 100px; width: 100px;">
                                        <h4>Buah Potong</h4>
                                        <h5>RM5.50</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('Kacang Paket', 0.50, this)">
                                        <img src="{{ asset('assets/img/kacang.jpg') }}" alt="kacang"
                                            style="height: 100px; width: 100px;">
                                        <h4>Kacang Paket</h4>
                                        <h5>RM0.50</h5>
                                    </div>
                                </td>
                                <td style="border-style: solid;">
                                    <div class="container" onclick="selectItem('Roti Paket', 2.00, this)">
                                        <img src="{{ asset('assets/img/rotipaket.jpg') }}" alt="roti"
                                            style="height: 100px; width: 100px;">
                                        <h4>Roti Paket</h4>
                                        <h5>RM2.00</h5>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div id="Beverages" class="tabcontent" style="height: 100%; float: left; width: 68%">
                        <h3>Beverages</h3>
                        <div class="container">
                            <table>
                                <tr>
                                    <td style="border-style: solid;">
                                        <div class="container" onclick="selectItem('Air Mineral', 1.30, this)">
                                            <img src="{{ asset('assets/img/air mineral.jpg') }}" alt="airmineral"
                                                style="height: 100px; width: 100px;">
                                            <h4>Mineral Water</h4>
                                            <h5>RM1.30</h5>
                                        </div>
                                    </td>
                                    <td style="border-style: solid;">
                                        <div class="container" onclick="selectItem('air kotak', 1.50, this)">
                                            <img src="{{ asset('assets/img/airkotak.jpg') }}" alt="airkotak"
                                                style="height: 100px; width: 100px;">
                                            <h4>Air Kotak</h4>
                                            <h5>RM1.50</h5>
                                        </div>
                                    </td>
                                    <td style="border-style: solid;">
                                        <div class="container" onclick="selectItem('Milo', 3.50, this)">
                                            <img src="{{ asset('assets/img/buah.jpg') }}" alt="Milo"
                                                style="height: 100px; width: 100px;">
                                            <h4>Milo Tin</h4>
                                            <h5>RM3.50</h5>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div id="Amenities" class="tabcontent" style="height: 100%; float: left; width: 68%">
                        <h3>Amenities</h3>
                        <div class="container">
                            <table>
                                <tr>
                                    <td style="border-style: solid;">
                                        <div class="container" onclick="selectItem('Pad', 5.50, this)">
                                            <img src="{{ asset('assets/img/pad.jpg') }}" alt="Pad"
                                                style="height: 100px; width: 100px;">
                                            <h4>Pad Wanita</h4>
                                            <h5>RM5.50</h5>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div id="Printing" class="tabcontent" style="height: 100%; float: left; width: 68%">
                        <h3>Printing</h3>
                        <div class="container">
                            <table>
                                <tr>
                                    <td style="border-style: solid;">
                                        <div class="container" onclick="selectItem('Nocolor', 0.10, this)">
                                            <img src="{{ asset('assets/img/nocolor.jpg') }}" alt="no"
                                                style="height: 100px; width: 100px;">
                                            <h4>Print No Color</h4>
                                            <h5>RM0.10</h5>
                                        </div>
                                    </td>
                                    <td style="border-style: solid;">
                                        <div class="container" onclick="selectItem('color', 0.50, this)">
                                            <img src="{{ asset('assets/img/apollo.jpg') }}" alt="color"
                                                style="height: 100px; width: 100px;">
                                            <h4>Print Color</h4>
                                            <h5>RM0.50</h5>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>

                {{-- <div class="card-body" style="float= right;">

                </div> --}}
            </div>
        </div>

    </div>
    <script>
        //Calculator Scripts
        // Function that display value
        function dis(val) {
            document.getElementById("result").value += val
        }

        function myFunction(event) {
            if (event.key == '0' || event.key == '1' ||
                event.key == '2' || event.key == '3' ||
                event.key == '4' || event.key == '5' ||
                event.key == '6' || event.key == '7' ||
                event.key == '8' || event.key == '9' ||
                event.key == '+' || event.key == '-' ||
                event.key == '*' || event.key == '/')
                document.getElementById("result").value += event.key;
        }

        var cal = document.getElementById("calcu");
        cal.onkeyup = function(event) {
            if (event.keyCode === 13) {
                console.log("Enter");
                let x = document.getElementById("result").value
                console.log(x);
                solve();
            }
        }

        // Function that evaluates the digit and return result
        function solve() {
            let x = document.getElementById("result").value
            let y = math.evaluate(x)
            document.getElementById("result").value = y
        }

        // Function that clear the display
        function clr() {
            document.getElementById("result").value = ""
        }

        // Function Tab
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Create a variable to store the total sum
        var totalSum = 0;

        // Function that handles item selection
        function selectItem(itemName, price, element) {
            // Check if the item is already selected
            var isSelected = element.classList.contains('selected');

            // Reset the selection for all items
            var items = document.getElementsByClassName('container');
            for (var i = 0; i < items.length; i++) {
                items[i].classList.remove('selected');
            }

            if (!isSelected) {
                // Add the selected class to the clicked item
                element.classList.add('selected');

                // Add the item's price to the total sum
                totalSum += price;
            } else {
                // Deselect the item
                totalSum -= price;
            }

            // Update the calculator display with the total sum
            document.getElementById('result').value = totalSum.toFixed(2);
        }

        // Function that evaluates the total sum and displays it
        function calculateTotal() {
            document.getElementById('result').value = totalSum.toFixed(2);
        }

        // Function that clears the display and resets the total sum
        function clr() {
            document.getElementById('result').value = "";
            totalSum = 0;
        }
    </script>
@endsection
