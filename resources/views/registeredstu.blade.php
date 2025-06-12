<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registered Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@300;500;600&display=swap"
        rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="https://unpkg.com/feather-icons"></script>


    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html,
    body {
        height: 100%;
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('img/clg1.jpg') no-repeat center center fixed;
        background-size: cover;
        z-index: -2;
    }

    body::after {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(5px);
        background: rgba(255, 255, 255, 0.3);
        z-index: -1;
    }

    .navbar-custom {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 999;
        padding: 15px 0;
    }




    button {
        background: #5a9bd3;
        color: white;
        border: none;
        padding: 12px 20px;
        margin-top: 25px;
        width: 100%;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #417cb9;
    }

    .nav-item {
        text-align: center;
        color: black;
        text-decoration: none;
        font-weight: 600;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .align-button {
        display: flex;
        align-items: center;
    }

    .nav-item i {
        display: block;
        margin: auto;
    }

    @media (max-width: 768px) {
        .container-form {
            margin: 20px;
        }

        .navbar-custom .container {
            flex-direction: column;
            gap: 10px;
        }
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-custom">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a href="index.html" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo" style="height: 60px;">
            </a>

            <!-- Navigation Links -->
            <div class="d-flex" style="gap: 30px;">
                <a href="{{url('/')}}" class="nav-item">
                    <i data-feather="home" style="stroke:#2A5D9F; width:24px; height:24px;"></i>Home
                </a>
                <a href="about.html" class="nav-item">
                    <i data-feather="users" style="stroke:#E76F51; width:24px; height:24px;"></i>Clubs
                </a>
                <a href="service.html" class="nav-item">
                    <i data-feather="calendar" style="stroke:#E9C46A; width:24px; height:24px;"></i>Events
                </a>
                <a href="{{ route('register.form') }}" class="nav-item">
                    <i data-feather="edit-3" style="stroke:#F4A261; width:24px; height:24px;"></i>Enroll
                </a>
                <a href="{{url('/')}}" class="nav-item">
                    <i data-feather="log-in" style="stroke:#2A9D8F; width:24px; height:24px;"></i>Logout
                </a>
            </div>
        </div>
    </div>
    <script>
    feather.replace();
    </script>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registered Students</h2>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($students->isEmpty())
        <p class="text-center">No student registrations found.</p>
        @else
        <form method="GET" action="{{ route('students.list') }}">
            <div class="row align-items-end g-2 mb-4">

                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search by name..."
                        value="{{ request('search') }}">
                </div>

                <div class="col-md-2">
                    <select name="department" class="form-select">
                        <option value="">All Departments</option>
                        <option value="IT" {{ request('department') == 'IT' ? 'selected' : '' }}>IT</option>
                        <option value="CSE" {{ request('department') == 'CSE' ? 'selected' : '' }}>CSE</option>
                        <option value="ECE" {{ request('department') == 'ECE' ? 'selected' : '' }}>ECE</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <select name="year" class="form-select">
                        <option value="">All Years</option>
                        <option value="1" {{ request('year') == '1' ? 'selected' : '' }}>1st Year</option>
                        <option value="2" {{ request('year') == '2' ? 'selected' : '' }}>2nd Year</option>
                        <option value="3" {{ request('year') == '3' ? 'selected' : '' }}>3rd Year</option>
                        <option value="4" {{ request('year') == '4' ? 'selected' : '' }}>4th Year</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <input type="text" name="club" class="form-control" placeholder="Filter by club..."
                        value="{{ request('club') }}">
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>

            </div>
        </form>


        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Club</th>
                    <th>Registered At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->department }}</td>
                    <td>{{ $student->year_of_study }}</td>
                    <td>{{ $student->club }}</td>
                    <td>{{ \Carbon\Carbon::parse($student->created_at)->format('d M Y, h:i A') }}</td>
                    <td class="d-flex gap-2">
                        <form action="{{ url('/students/accept/' . $student->id . '/' . $student->club) }}"
                            method="POST">
                            @csrf
                            <button class="btn btn-success btn-sm">Accept</button>
                        </form>
                        <form action="{{ url('/students/reject/' . $student->id . '/' . $student->club) }}"
                            method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        @endif
    </div>
</body>

</html>