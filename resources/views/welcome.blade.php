<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->full_name }} | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .hero-section { background: #f8f9fa; padding: 100px 0; border-bottom: 1px solid #dee2e6; }
        section { padding: 80px 0; }
        .card { border: none; transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">{{ $profile->full_name }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="about" class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold text-dark">{{ $profile->full_name }}</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">{{ $profile->about_me }}</p>
            <div class="mt-4">
                <span class="me-3">📧 {{ $profile->email }}</span>
                <span>📞 {{ $profile->phone }}</span>
            </div>
        </div>
    </header>

    <section id="skills" class="container">
        <h2 class="text-center mb-5 fw-bold">My Skills</h2>
        <div class="row g-4 justify-content-center">
            @foreach($skills as $skill)
            <div class="col-md-4">
                <div class="card shadow-sm p-4 text-center bg-white">
                    <h5 class="fw-bold">{{ $skill->skill_name }}</h5>
                    <div class="progress mt-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" style="width: <?php echo $skill->proficiency; ?>%;"></div>
                    </div>
                    <small class="text-muted mt-2 d-blockS text-end">{{ $skill->proficiency }}% Proficiency</small>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="projects" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Recent Projects</h2>
            <div class="row g-4">
                @foreach($projects as $project)
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 p-3">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-primary">{{ $project->title }}</h4>
                            <p class="card-text text-muted">{{ $project->description }}</p>
                            <a href="{{ $project->project_link }}" class="btn btn-outline-primary btn-sm mt-3" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="experience" class="container">
        <h2 class="text-center mb-5 fw-bold">Experience & Education</h2>
        <div class="col-lg-8 mx-auto">
            @foreach($experiences as $exp)
            <div class="d-flex mb-4 p-4 border-start border-4 border-primary shadow-sm bg-white rounded">
                <div>
                    <h5 class="fw-bold mb-1">{{ $exp->title }}</h5>
                    <h6 class="text-primary">{{ $exp->company }}</h6>
                    <small class="text-muted">{{ $exp->year }}</small>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer id="contact" class="bg-dark text-white py-5 mt-5">
        <div class="container text-center">
            <h2 class="mb-4">Get In Touch</h2>
            <p class="text-light opacity-75">Connect with me through my professional links:</p>
            <div class="fs-4">
                @foreach($contacts as $contact)
                <a href="{{ $contact->link }}" class="text-white text-decoration-none mx-3 hover-opacity">{{ $contact->platform }}</a>
                @endforeach
            </div>
            <hr class="my-4 border-secondary">
            <p class="mb-0">&copy; 2024 {{ $profile->full_name }}. All rights galing sa Database.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>