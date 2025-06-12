<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Enrollment</title>
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
        padding: 10px 0;
    }

    .form-wrapper {
        margin-top: 120px;
    }

    .container-form {
        max-width: 700px;
        margin: auto;
        background: rgba(255, 255, 255, 0.95);
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    label {
        display: block;
        margin: 15px 0 5px;
        color: #444;
        font-weight: 500;
    }

    input[type="text"],
    input[type="file"],
    select {
        width: 100%;
        padding: 10px 14px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .checkbox-group {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
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
                <a href="#" onclick="openLogin('student')" class="nav-item">
                    <i data-feather="log-in" style="stroke:#2A9D8F; width:24px; height:24px;"></i>Login
                </a>
            </div>
        </div>
    </div>

    <!-- Enrollment Form -->
    <div class="container-form">
        <h2>Enroll Student</h2>

        @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Photo:</label>
            <input type="file" name="photo" required>

            <label>Year of Study:</label>
            <input type="text" name="year_of_study" required>

            <label>Department:</label>
            <input type="text" name="department" required>

            <label>Select up to 3 Clubs:</label>
            <div class="checkbox-group">
                @php
                $clubs = ['IOT', 'App Development', 'AR/VR', 'Prometheans', 'Eureka', 'Coders Club', 'Ekalayva', 'SAE
                Collegiate Club',
                'ISHARE Students Chapter',
                'YUKTA Racing', 'Algo Geeks', 'IEI student chapter', 'Ascenders', 'Quizzards', 'IEEE student chapter',
                'Anglophile Longue', 'IETE student chapter', 'Ventura',
                'Innov CHEM', 'Sports & Culturals', 'Foreign language club', 'Happy Hive', 'Kernel Club', 'Math Club',
                'Spark Club', 'TECHXPLORERS'];
                @endphp

                @foreach($clubs as $club)
                <label>
                    <input type="checkbox" name="clubs[]" value="{{ $club }}" class="club-checkbox">
                    {{ $club }}
                </label>
                @endforeach
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
    const checkboxes = document.querySelectorAll('.club-checkbox');
    checkboxes.forEach(chk => {
        chk.addEventListener('change', () => {
            let checked = document.querySelectorAll('.club-checkbox:checked');
            if (checked.length > 3) {
                chk.checked = false;
                alert('You can only select 3 clubs.');
            }
        });
    });
    </script>


    <script>
    feather.replace();
    </script>
</body>

</html>