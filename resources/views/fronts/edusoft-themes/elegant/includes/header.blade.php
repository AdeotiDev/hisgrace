    @php
        $school_logo = $schoolDetails['school_logo'];
    @endphp
    <!-- Header Section with Bootstrap Navbar -->
    <header class="header bg-white sticky-top shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Logo -->
                <a class="navbar-brand" href="#">

                    <img src="{{ Storage::url($school_logo) }}" alt="Logo" class="logo-img" style="height: 50px; border-radius: 10%;">
                </a>
    
                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#programs">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{route('filament.student.auth.login')}}>Student's Portal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Teacher's Portal</a>
                        </li>
                    </ul>
                </div>

                
            </nav>
        </div>
    </header>
    