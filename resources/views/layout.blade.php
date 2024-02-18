<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student Management System</title>
    <style>
        body {
    margin: 0;
    font-family: "Lato", sans-serif;
  }
  
  .sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
  }
  
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }
   
  .sidebar a.active {
    background-color: #8EA1E8;
    color: white;
  }
  
  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
  
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }

  /* Dashboard Style */

  .dashboard-box {
    position: relative;
  }

  .dashboard-box img {
    position: absolute;
    top: 10%;
    right: 10%;
  }

  .blue {
    background-color: #2AA8F0;
  }

  .violet {
    background-color: #F02ADB
  }

  .orange {
    background-color: #F9D261
  }

  .red {
    background-color: #F0542A
  }

  .green {
    background-color: #54F02A
  }

  .yellow {
    background-color: #E1F02A
  }
  
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  @media screen and (max-width: 400px) {
    .navbar-brand h1 {
      font-size: 1.2rem
    }
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><h1>Student Management System</h1></a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <!-- This is a sidebar -->
                <div class="sidebar">
                    <a class="{{ (request()->is('view')) ? 'active' : '' }}" href="{{ url('view') }}">Dashboard</a>
                    <a class="{{ (request()->is('students')) ? 'active' : '' }}" href="{{ url('/students')}}">Student</a>
                    <a class="{{ (request()->is('teachers')) ? 'active' : '' }}" href="{{ url('/teachers') }}">Teacher</a>
                    <a class="{{ (request()->is('courses')) ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a>
                    <a class="{{ (request()->is('batches')) ? 'active' : '' }}" href="{{ url('/batches') }}">Batches</a>
                    <a class="{{ (request()->is('enrollments')) ? 'active' : '' }}" href="{{ url('/enrollments') }}">Enrollment</a>
                    <a class="{{ (request()->is('payments')) ? 'active' : '' }}" href="{{ url('/payments')}}">Payment</a>
                </div>
            </div>
            <div class="col-md-9">
                    @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>