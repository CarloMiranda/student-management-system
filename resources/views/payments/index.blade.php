@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Payments</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Batch">
                <i class="fa fa-plus" aria-hidden="true">Add New</i>
            </a> <br/> <br/>
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
                <br/>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment No.</th>
                            <th>Student Name</th>
                            <th>Paid Date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enrollment->enroll_no }}</td>
                            <td>{{ $item->enrollment->student->name }}</td>
                            <td>{{ $item->paid_date }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>
                                <a href="{{ url('/payments' . '/' . $item->id) }}" title="View batch">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                            View
                                    </button>
                                </a>
                                <a href="{{ url('/payments/' . $item->id . "/edit") }}" tittle="Edit batch">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            Edit
                                    </button>
                                </a>
                                <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-sm" type="submit" title="Delete batch" onclick="return confirm(&quot;Confirm Delete?&quot;)">
                                        <i class="fa fa trash-o" aria-hidden="true"> Delete</i>
                                    </button>
                                </form>
                                <a href="{{ url('/report/report1/' . $item->id ) }}" title="Edit Payment"><button class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection