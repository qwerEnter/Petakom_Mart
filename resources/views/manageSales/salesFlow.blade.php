@extends('layouts.admin')

@section('title')
    Sales | Admin
@endsection

@section('content')

    <head>
        <style>
            table {
                margin: 0 auto;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
                width: 100%;
            }

            th {
                background-color: #333;
                color: #fff;
                font-weight: bold;
                padding: 10px;
                text-align: center;
                text-transform: uppercase;
            }

            td {
                background-color: #f7f7f7;
                color: #333;
                padding: 10px;
                text-align: center;
            }

            .counter {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .counter span {
                display: inline-block;
                width: 30px;
                height: 30px;
                background-color: #eee;
                color: #333;
                font-weight: bold;
                font-size: 16px;
                line-height: 30px;
                cursor: pointer;
                border-radius: 50%;
                margin: 0 5px;
            }

            .counter span:hover {
                background-color: #ddd;
            }

            .total {
                font-weight: bold;
            }

            .subtotal-container {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 10px;
                font-size: 18px;
            }

            .subtotal {
                font-weight: bold;
                margin-bottom: 5px;
            }

            .save-button {
                background-color: #333;
                color: #fff;
                border: none;
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .save-button:hover {
                background-color: #555;
            }
        </style>
    </head>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Opening/Closing Cash Flow</h3>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class='btn btn-primary me-md-2' href="{{ route('manageSales.sales') }}">Add Sales</a>
                        </div>
                    </td>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Money</th>
                            <th>Amount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RM100</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total1"></td>
                        </tr>
                        <tr>
                            <td>RM50</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total2"></td>
                        </tr>
                        <tr>
                            <td>RM20</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total3"></td>
                        </tr>
                        <tr>
                            <td>RM10</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total4"></td>
                        </tr>
                        <tr>
                            <td>RM5</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total5"></td>
                        </tr>
                        <tr>
                            <td>RM1</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total6"></td>
                        </tr>
                        <tr>
                            <td>50 sen</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total7"></td>
                        </tr>
                        <tr>
                            <td>20 sen</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total8"></td>
                        </tr>
                        <tr>
                            <td>10 sen</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total9"></td>
                        </tr>
                        <tr>
                            <td>5 sen</td>
                            <td class="counter">
                                <span onclick="decrementAmount(this)">-</span>
                                <span>0</span>
                                <span onclick="incrementAmount(this)">+</span>
                            </td>
                            <td id="total10"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="subtotal-container">
                                <span id="subtotal"></span>
                                <button class="save-button" data-toggle="modal" data-target="#saveModal">Save</button>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Modal Confirm Save-->
                <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h2>Save Confirmation</h2>
                            <p>Which save?</p>
                            <table>
                                <tr style="border-style: solid">
                                    <td>
                                        <div id="openDiv" class="container" data-dismiss="modal" data-target="#openMethod"
                                            data-toggle="modal">
                                            <img src="{{ asset('assets/img/save.png') }}" alt="open"
                                                style="height: 100px; width: 100px" class="center">
                                            <h5>Opening</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="closeDiv" class="container" data-dismiss="modal"
                                            data-target="#closeMethod" data-toggle="modal">
                                            <img src="{{ asset('assets/img/closed.jpg') }}" alt="close"
                                                style="height: 100px; width: 100px" class="center">
                                            <h5>Closing</h5>
                                        </div>
                                    </td>
                                </tr>
                            </table>
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
                {{-- <div class="card-body" style="float= right;">

                </div> --}}
            </div>
        </div>
        {{-- <p>{{ $payment_total->id }}</p> --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List of Sales</h3>
                </div>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Money</th>
                        <th>Modifier</th>

                    </tr>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>{{ $sale->id }}</td>
                            <td>{{ $sale->paymentTotal }}</td>
                            <td><a href="/sales/{{$sale->id}}/delete" onclick="return confirm('Are You Sure?')"><button type="button">Delete</button></a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

    <script>
        //Functions for interactivity
        function incrementAmount(element) {
            var counter = element.parentNode.querySelector('span:nth-child(2)');
            var value = parseInt(counter.innerText);
            counter.innerText = value + 1;
            calculateTotal();
        }

        function decrementAmount(element) {
            var counter = element.parentNode.querySelector('span:nth-child(2)');
            var value = parseInt(counter.innerText);
            if (value > 0) {
                counter.innerText = value - 1;
                calculateTotal();
            }
        }

        function calculateTotal() {
            var counters = document.querySelectorAll('.counter');
            var totals = document.querySelectorAll('[id^="total"]');
            var amounts = [100, 50, 20, 10, 5, 1, 0.5, 0.2, 0.1, 0.05];

            var grandTotal = 0;
            for (var i = 0; i < counters.length; i++) {
                var counter = counters[i];
                var totalCell = totals[i];
                var value = parseInt(counter.querySelector('span:nth-child(2)').innerText);
                var amount = amounts[i];
                var total = value * amount;
                grandTotal += total;

                totalCell.innerText = 'RM' + total.toFixed(2);
            }

            var subtotalElement = document.getElementById('subtotal');
            var subtotal = grandTotal.toFixed(2);
            subtotalElement.innerText = 'Subtotal = RM' + subtotal;
        }
    </script>
@endsection
