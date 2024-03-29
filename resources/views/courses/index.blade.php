@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Course Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Course">
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
                            <th>Name</th>
                            <th>Syllabus</th>
                            <th>Duration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->syllabus }}</td>
                            <td>{{ $item->duration() }}</td>
                            <td>
                                <a href="{{ url('/courses' . '/' . $item->id) }}" title="View Course">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                            View
                                    </button>
                                </a>
                                <a href="{{ url('/courses/' . $item->id . "/edit") }}" tittle="Edit Course">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            Edit
                                    </button>
                                </a>
                                <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger btn-sm" type="submit" title="Delete Course" onclick="return confirm(&quot;Confirm Delete?&quot;)">
                                        <i class="fa fa trash-o" aria-hidden="true"> Delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection