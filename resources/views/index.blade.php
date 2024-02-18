@extends('layout')
@section('content')
        <div class="card-header">
            <h2>Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-md-3 border shadow my-3 mx-2 py-3">
                <h5>Total Students</h5>
                <h5>{{ $students->count() }}</h5>
            </div>
            <div class="col-md-3 border shadow my-3 mx-2 py-3">
                <h5>Total Teachers</h5>
                <h5>{{ $teachers->count() }}</h5>
            </div>
            <div class="col-md-3 border shadow my-3 mx-2 py-3">
                <h5>Total Courses</h5>
                <h5>{{ $courses->count() }}</h5>
            </div>
            <div class="col-md-3 border shadow my-3 mx-2 py-3">
                <h5>Total Batches</h5>
                <h5>{{ $batches->count() }}</h5>
            </div>
            <div class="col-md-3 border shadow my-3 mx-2 py-3">
                <h5>Total Enrollies</h5>
                <h5>{{ $enrollments->count() }}</h5>
            </div>
            <div class="col-md-3 border shadow my-3 mx-2 py-3">
                <h5>Total Students Pay</h5>
                <h5>{{ $payments->count() }}</h5>
            </div>
        </div>

    @endsection