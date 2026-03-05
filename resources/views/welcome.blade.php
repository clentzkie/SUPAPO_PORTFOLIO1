<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile->full_name }} | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            scroll-behavior: smooth;
        }
        
        .hero-section { 
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); 
            padding: 100px 0; 
            border-bottom: 1px solid #dee2e6; 
        }

        .profile-img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 5px solid white;
            transition: transform 0.3s ease;
        }

        .profile-img:hover { transform: scale(1.05); }

        section { padding: 80px 0; }

        .card { 
            border: none; 
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); 
        }

        .card:hover { 
            transform: translateY(-12px) scale(1.02); 
            box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
        }

        /* Skill Card & Modal Styling */
        .skill-card { cursor: pointer; }
        
        .modal-content { border-radius: 20px; border: none; }
        
        .resource-link {
            display: block;
            padding: 12px;
            margin-bottom: 10px;
            background: #f8f9fa;
            border-radius: 10px;
            text-decoration: none;
            color: #333;
            transition: all 0.3s;
            font-weight: 500;
        }
        .resource-link:hover {
            background: #00d2ff;
            color: white;
            transform: translateX(10px);
        }

        .hover-opacity:hover {
            color: #00d2ff !important;
            transform: translateY(-5px);
            text-shadow: 0px 0px 15px rgba(0, 210, 255, 0.9);
        }

        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #212529; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">{{ $profile->full_name }}</a>
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

    <header id="about" class="hero-section">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-4 d-flex justify-content-center mb-4 mb-md-0">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="profile-img shadow-lg">
                </div>
                <div class="col-md-8">
                    <h1 class="display-3 fw-bold text-dark mb-3">{{ $profile->full_name }}</h1>
                    <p class="lead text-muted mb-4" style="max-width: 800px;">{{ $profile->about_me }}</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-4 fw-semibold">
                        <span>📧 {{ $profile->email }}</span>
                        <span>📞 {{ $profile->phone }}</span>
                        <span>📍 {{ $profile->location }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="skills" class="container">
        <h2 class="text-center mb-5 fw-bold">MY SKILLS & CONCEPTS</h2>
        <div class="row g-4 justify-content-center">
            @foreach($skills as $skill)
            <div class="col-md-4">
                <div class="card shadow-sm p-4 text-center bg-white border-0 skill-card" 
                     data-bs-toggle="modal" data-bs-target="#modal{{ Str::slug($skill->skill_name) }}">
                    <h5 class="fw-bold">{{ $skill->skill_name }}</h5>
                    <div class="progress mt-3" style="height: 12px; border-radius: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $skill->proficiency }}%;"></div>
                    </div>
                    <small class="text-muted mt-2 d-block text-end">{{ $skill->proficiency }}% Proficiency</small>
                    <p class="mt-3 small text-primary fw-bold">Click to view resources →</p>
                </div>
            </div>

            <div class="modal fade" id="modal{{ Str::slug($skill->skill_name) }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content p-3 shadow-lg">
                        <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold">Explore {{ $skill->skill_name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @if(str_contains(strtolower($skill->skill_name), 'laravel'))
                                <a href="http://127.0.0.1:8000/" target="_blank" class="resource-link"> Laravel Portfolio</a> 
                                <a href="https://github.com/clentzkie/SUPAPO_PORTFOLIO1" target="_blank" class="resource-link"> GitHub Repository</a>
                            @elseif(str_contains(strtolower($skill->skill_name), 'business'))
                                <a href="https://www.facebook.com/profile.php?id=61578389986229" target="_blank" class="resource-link">Caps Business</a>
                                <a href="https://www.facebook.com/profile.php?id=61574058151938" target="_blank" class="resource-link">Clothing Business</a>
                            @elseif(str_contains(strtolower($skill->skill_name), 'game') || str_contains(strtolower($skill->skill_name), 'gaming'))
                                <a href="https://www.mobilelegends.com/" target="_blank" class="resource-link">Mobile Legends</a>
                                <a href="https://playvalorant.com/en-gb/" target="_blank" class="resource-link">Valorant</a>
                                <a href="https://www.dota2.com/home" target="_blank" class="resource-link">Dota 2</a>
                                <a href="https://nba.2k.com/2k24/" target="_blank" class="resource-link">NBA 2k24</a>
                            @else
                                <p class="text-muted">More resources for {{ $skill->skill_name }} coming soon!</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section id="projects" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">PROJECTS</h2>
            <div class="row g-4">
                @foreach($projects as $project)
                <div class="col-md-6">
                    <div class="card shadow-sm h-100 border-0 overflow-hidden">
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold text-primary">{{ $project->title }}</h4>
                            <p class="card-text text-muted">{{ $project->description }}</p>
                            <a href="{{ $project->project_link }}" class="btn btn-primary btn-sm mt-3 px-4 rounded-pill" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="experience" class="container">
        <h2 class="text-center mb-5 fw-bold">EXPERIENCE & EDUCATION</h2>
        <div class="col-lg-8 mx-auto">
            @foreach($experiences as $exp)
            <div class="d-flex mb-4 p-4 border-start border-5 border-primary shadow-sm bg-white rounded-3 card">
                <div class="card-body p-0">
                    <h5 class="fw-bold mb-1 text-dark">{{ $exp->title }}</h5>
                    <h6 class="text-primary fw-semibold">{{ $exp->company }}</h6>
                    <small class="text-muted d-block mt-1"> {{ $exp->year }}</small>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer id="contact" class="bg-dark text-white py-5">
        <div class="container text-center">
            <h2 class="mb-4 fw-bold">CONTACTS</h2>
            <p class="text-light opacity-75 mb-4">Feel free to connect with me through my professional links:</p>
            <div class="d-flex justify-content-center flex-wrap gap-4 fs-5">
                @foreach($contacts as $contact)
                <a href="{{ $contact->link }}" target="_blank" class="text-white text-decoration-none hover-opacity">
                    {{ $contact->platform }}
                </a>
                @endforeach
            </div>
            <hr class="my-5 border-secondary opacity-25">
            <p class="mb-0 opacity-50">&copy; 2025 {{ $profile->full_name }}. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>