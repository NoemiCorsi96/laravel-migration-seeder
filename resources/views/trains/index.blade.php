@extends('layouts.master')

@section('title', 'Train Board')

@section('content')

<h1 class="mb-4">Departures</h1>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Company</th>
            <th>From</th>
            <th>To</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Code</th>
            <th>Carriages</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            <tr>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->carriages }}</td>
                <td>
                    @if ($train->cancelled)
                        <span class="badge bg-danger">Cancelled</span>
                    @elseif (!$train->on_time)
                        <span class="badge bg-warning text-dark">Delayed</span>
                    @else
                        <span class="badge bg-success">On Time</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection