@extends('layouts.admin')

@section('title')
    Sales | Admin
@endsection

@section('content')

    <head>
        <style></style>
    </head>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Report</h3>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class='btn btn-primary me-md-2' href="/admin/sales">Back</a>
                        </div>
                    </td>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Dashboard</div>

                                <div class="card-body">

                                    <h1>{{ $chart1->options['chart_title'] }}</h1>
                                    {!! $chart1->renderHtml() !!}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body" style="float= right;">

                </div> --}}
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
        {!! $chart1->renderChartJsLibrary() !!}
        {!! $chart1->renderJs() !!}
    </script>
@endsection
