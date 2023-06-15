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
                            <a class='btn btn-primary me-md-2' href="/admin/sales">Back</a>
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
                                <button class="save-button" onclick="saveData()">Save</button>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                {{-- <div class="card-body" style="float= right;">

                </div> --}}
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

        function saveData() {
            var subtotalElement = document.getElementById('subtotal');
            var subtotal = subtotalElement.innerText;
            // Implement save functionality here
            console.log('Data saved:', subtotal);
        }
    </script>
@endsection
