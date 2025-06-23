<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .event-card {
            position: relative;
            width: 100%;
            padding-top: 85%; /* Square but slightly smaller */
            overflow: hidden;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            background-color: #f0f0f0;
            margin-bottom: 25px;
        }

        .event-card:hover {
            transform: scale(1.02);
        }

        .event-card img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .event-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 15px;
            transition: bottom 0.4s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            border-radius: 15px;
        }

        .event-card:hover .event-overlay {
            bottom: 0;
        }

        .event-wrapper {
            padding: 0 10px;
        }

        @media (min-width: 768px) {
            .col-md-4 {
                flex: 0 0 auto;
                width: 33.333333%;
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>
</head>
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
    <h2 class="mb-4 text-center">Club Events</h2>


    <!-- Filter -->
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
    <h4 class="text-success mb-3">Upcoming Events</h4>
    <div class="row">
        @forelse ($upcoming as $event)
            <div class="col-md-4 event-wrapper">
                <div class="event-card" data-bs-toggle="modal" data-bs-target="#eventModal{{ $event->id }}">
                    <img src="{{ asset('storage/' .$event->image_path ?? 'img/default.png') }}" alt="Event Image">
                    <div class="event-overlay">
                        <h5>{{ $event->event_name }}</h5>
                        <p class="mb-0"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}</p>
                        <p class="mb-0"><strong>Time:</strong> {{ \Carbon\Carbon::parse($event->time)->format('g:i A') }}</p>

                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="eventModal{{ $event->id }}" tabindex="-1" aria-labelledby="eventModalLabel{{ $event->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventModalLabel{{ $event->id }}">{{ $event->event_name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/' . $event->image_path ?? 'img/default.png') }}" class="img-fluid mb-3 rounded">
                           <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}</p>
<p><strong>Time:</strong> {{ \Carbon\Carbon::parse($event->time)->format('g:i A') }}</p>

                            <p><strong>Club:</strong> {{ $event->club->club_name }}</p>
                            <p>{{ $event->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">No upcoming events found.</p>
        @endforelse
    </div>

    <!-- Completed Events -->
    <h4 class="text-secondary mb-3">Completed Events</h4>
    <div class="row">
        @forelse ($completed as $event)
            <div class="col-md-4 event-wrapper">
                <div class="event-card" data-bs-toggle="modal" data-bs-target="#eventModal{{ $event->id }}">
                    <img src="{{ asset('storage/' . $event->image_path ?? 'img/default.png') }}" alt="Event Image">
                    <div class="event-overlay">
                        <h5>{{ $event->event_name }}</h5>
                        <p class="mb-0"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}</p>
                        <p class="mb-0"><strong>Time:</strong> {{ \Carbon\Carbon::parse($event->time)->format('g:i A') }}</p>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="eventModal{{ $event->id }}" tabindex="-1" aria-labelledby="eventModalLabel{{ $event->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventModalLabel{{ $event->id }}">{{ $event->event_name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/' . $event->image_path ?? 'img/default.png') }}" class="img-fluid mb-3 rounded">
                           <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}</p>
<p><strong>Time:</strong> {{ \Carbon\Carbon::parse($event->time)->format('g:i A') }}</p>

                            <p><strong>Club:</strong> {{ $event->club->club_name }}</p>
                            <p>{{ $event->description }}</p>
                        </div>
                    </div>
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
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
