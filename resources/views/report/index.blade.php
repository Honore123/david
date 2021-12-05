@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-md-12 mt-5 mb-3 border-bottom border-1">
            <h4>Stations Report</h4>
        </div>
        @include('layouts.partials.notification')
        <div class="col-md-4 mb-4">
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label">Start date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">End date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control">
                </div>
                <div>
                    <button class="btn btn-success w-100">Fetch</button>
                </div>
            </form>
        </div>
        <div class="col-md-12 ">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Client</th>
                    <th>Liters</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12-10-2012</td>
                        <td>ISHIMWE David</td>
                        <td>
                           20
                        </td>
                        <td>20,000 Rwf</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="3">Total</td>
                        <td>20,000 Rwf</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
