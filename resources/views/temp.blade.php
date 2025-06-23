<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TCE CLUB PORTFOLIO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

</head>


<style>
.enroll-button {
    display: inline-block;
    padding: 12px 30px;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    text-decoration: none;
    color: white;
    background: linear-gradient(135deg, #00b894, #0984e3);
    border: none;
    border-radius: 50px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
}

.enroll-button:hover {
    background: linear-gradient(135deg, #0984e3, #00b894);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    transform: translateY(-3px);
    color: white;
}

.box {
    color: white;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 7px;
}

.box.small {
    width: 250px;
    height: 250px;
}

.box.wide {
    width: 400px;
    height: 250px;
}

.box.red {
    background-color: #e63946;
}

.box.orange {
    background-color: #f4a261;
}

.box.green {
    background-color: #2a9d8f;
}

.box.blue {
    background-color: #264653;
}

.plus-icon-btn {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: #800000;
    color: white;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    font-size: 28px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: 0.3s ease-in-out;
    z-index: 9999;
}

.plus-icon-btn:hover {
    background-color: #a00000;
    transform: scale(1.05);
}

.admin-login-box {
    position: fixed;
    bottom: 100px;
    right: 30px;
    background-color: white;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 12px;
    width: 250px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
    z-index: 9999;
}

.box.image-box {
    padding: 0;
    overflow: hidden;
    border-radius: 7px;
}

.box.image-box img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 7px;
}

.row.custom-gutter {
    margin-left: -0.25rem;
    margin-right: -0.25rem;
    justify-content: center;
}

.row.custom-gutter>[class*='col-'] {
    padding-left: 0.25rem;
    padding-right: 0.25rem;
    display: flex;
    justify-content: center;
}

.row.custom-gutter+.row.custom-gutter {
    margin-top: 1rem;
}

.club-text h5 {

    margin-bottom: 10px;
    letter-spacing: 0.8px;
    font-weight: 600;
    font-size: 1rem;
}

.club-text h1 {
    color: #800000;
    font-size: 2rem;
    line-height: 1.3;
    margin-bottom: 15px;
}

.club-text p {
    color: black;
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 0;
}

.add-club-btn {
    width: 60px;
    height: 60px;
    font-size: 30px;
    border-radius: 50%;
    background-color: white;
    color: black;
    border: 2px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.3s ease;
}

.add-club-btn:hover {
    background-color: #800000;
    color: white;
    border-color: #800000;
}
</style>





    
<body>


    </div>
    <!-- Normal Header (static) -->
    <div style="
  width: 100%;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  /* NO position: fixed or sticky */
  height: max-content;
">
        <div class="container d-flex align-items-center justify-content-between py-3">

            <!-- Logo -->
            <a href="index.html" class="d-flex align-items-center text-decoration-none">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo" style="height: 60px;">
            </a>

            <!-- Navigation Links -->
            <div style="display: flex; gap: 40px;">
                <a href="{{url('/')}}" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="home" style="stroke:#2A5D9F; width:36px; height:36px;"></i><br>Home
                </a>
                <a href="about.html" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="users" style="stroke:#E76F51; width:36px; height:36px;"></i><br>Clubs
                </a>
                <a href="{{ route('events.index') }}" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="calendar" style="stroke:#E9C46A; width:36px; height:36px;"></i><br>Events
                </a>
                <a href="{{ route('register.form') }}" class="nav-item"
                    style="text-align: center; color: black; text-decoration: none; font-weight: 600;">
                    <i data-feather="edit-3" style="stroke:#F4A261; width:36px; height:36px;"></i><br>Enroll
                </a>
                

            </div>

        </div>
    </div>

    <!-- No extra padding needed because header is static -->

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
    feather.replace()
    </script>

<div class="container mt-5">
  <h2 class="mb-4">All Events</h2>

  <!-- Filter by Club -->
  <form method="GET" action="{{ route('events.index') }}" class="mb-4">
    <div class="row g-2 align-items-center">
      <div class="col-auto">
        <label for="club_id" class="col-form-label">Filter by Club:</label>
      </div>
      <div class="col-auto">
        <select name="club_id" id="club_id" class="form-select" onchange="this.form.submit()">
          <option value="">All Clubs</option>
          @foreach ($clubs as $club)
            <option value="{{ $club->id }}" {{ $clubId == $club->id ? 'selected' : '' }}>
              {{ $club->club_name }}
            </option>
          @endforeach
        </select>
      </div>
    </div>
  </form>

  <!-- Upcoming Events -->
  <div class="mb-5">
    <h4 class="text-success">Upcoming Events</h4>
    @forelse ($upcoming as $event)
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{ $event->event_name }}</h5>
          <p class="card-text">{{ $event->description }}</p>
          <p><strong>Date:</strong> {{ $event->date }} | <strong>Time:</strong> {{ $event->time }}</p>
          <p><strong>Club:</strong> {{ $event->club->club_name }}</p>
          @if($event->image_path)
            <img src="{{ asset( $event->image_path) }}" alt="Event Image" class="img-fluid" style="max-width: 300px;">
          @endif
        </div>
      </div>
    @empty
      <p class="text-muted">No upcoming events found.</p>
    @endforelse
  </div>

  <!-- Completed Events -->
  <div>
    <h4 class="text-secondary">Completed Events</h4>
    @forelse ($completed as $event)
      <div class="card mb-3 bg-light">
        <div class="card-body">
          <h5 class="card-title">{{ $event->event_name }}</h5>
          <p class="card-text">{{ $event->description }}</p>
          <p><strong>Date:</strong> {{ $event->date }} | <strong>Time:</strong> {{ $event->time }}</p>
          <p><strong>Club:</strong> {{ $event->club->club_name }}</p>
          @if($event->image_path)
            <img src="{{ asset( $event->image_path) }}" alt="Event Image" class="img-fluid" style="max-width: 300px;">
          @endif
        </div>
      </div>
    @empty
      <p class="text-muted">No completed events found.</p>
    @endforelse
  </div>
</div>

 <!-- Footer Start -->
                <div class="container-fluid" style="background-color: #800000; color: white; padding: 40px 0;">
                    <div class="container">
                        <div class="row g-4">
                            <!-- Contact Info -->
                            <div class="col-md-6 col-lg-4">
                                <h4 style="color: #B34747; margin-bottom: 20px;">Contact Info</h4>
                                <p><i class="fa fa-map-marker-alt me-2" style="color: #B34747;"></i>123 College Road,
                                    Chennai, India
                                </p>
                                <p><i class="fas fa-envelope me-2" style="color: #B34747;"></i>info@tce.edu.in</p>
                                <p><i class="fas fa-phone me-2" style="color: #B34747;"></i>+91 44 1234 5678</p>
                            </div>

                            <!-- Opening Time -->
                            <div class="col-md-6 col-lg-4">
                                <h4 style="color: #B34747; margin-bottom: 20px;">Opening Time</h4>
                                <p>Monday - Friday: 9:00 AM to 5:00 PM</p>
                                <p>Saturday: 9:00 AM to 1:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>

                            <!-- Social Media -->
                            <div class="col-md-12 col-lg-4 d-flex flex-column">
                                <h4 style="color: #B34747; margin-bottom: 20px;">Connect With Us</h4>
                                <div>
                                    <a href="#" style="color: white; margin-right: 15px; font-size: 1.5rem;"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" style="color: white; margin-right: 15px; font-size: 1.5rem;"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" style="color: white; margin-right: 15px; font-size: 1.5rem;"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" style="color: white; font-size: 1.5rem;"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <hr style="border-color: #B34747; margin: 30px 0;">
                        <div class="text-center" style="color: white; font-size: 0.9rem;">
                            &copy; 2025 TCE College. All Rights Reserved.
                        </div>
                    </div>
                </div>
                <!-- Footer End -->

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
