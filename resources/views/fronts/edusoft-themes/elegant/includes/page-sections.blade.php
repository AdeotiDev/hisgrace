
{{-- About Us --}}

<section class="about-us py-5" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{asset('school-images/building-1.jpg')}}" alt="Our School" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="display-5 mb-4">About Our School</h2>
                <p class="lead text-muted mb-3">
                    We are a leading educational institution committed to excellence in academics, sports, and community service.
                </p>
                <p>
                    Our goal is to nurture young minds to become future leaders. We provide a supportive, inclusive environment with experienced teachers and state-of-the-art facilities to ensure that every child can reach their full potential.
                </p>
                <a href="#" class="btn btn-primary mt-3 px-4 py-2">Learn More</a>
            </div>
        </div>
    </div>
</section>


{{-- Our Programs --}}
<section class="our-programs py-5" id="programs">
    <div class="container">
        <h2 class="display-5 text-center mb-5">Our Programs</h2>
        <div class="row">
            <!-- Program Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="program-card shadow-sm p-4 rounded">
                    <div class="program-icon bg-gradient-primary mb-3">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h5 class="program-title">Science & Technology</h5>
                    <p>Explore cutting-edge science labs and innovative technology classes to spark creativity.</p>
                </div>
            </div>
            <!-- Program Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="program-card shadow-sm p-4 rounded">
                    <div class="program-icon bg-gradient-success mb-3">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h5 class="program-title">Arts & Humanities</h5>
                    <p>Encourage creativity and expression through music, theater, visual arts, and more.</p>
                </div>
            </div>
            <!-- Program Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="program-card shadow-sm p-4 rounded">
                    <div class="program-icon bg-gradient-warning mb-3">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h5 class="program-title">Sports & Athletics</h5>
                    <p>Build teamwork and discipline through a wide range of sports activities and facilities.</p>
                </div>
            </div>
        </div>
    </div>
</section>





{{-- Curriculum Cards Sections --}}
<section id="admission-curriculum-fees" class="admission-curriculum-fees py-5" >
    <div class="container">
        <div class="row text-center">
            <!-- Admission Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg rounded-lg border-0 overflow-hidden">
                    <div class="card-body position-relative p-5">
                        <h5 class="card-title text-white mb-3">Admissions Now Open</h5>
                        <p class="card-text text-white mb-4">We welcome children of all backgrounds, offering a nurturing and inclusive environment for kids aged 6 months to 10 years. Join us and be part of an enriching educational journey.</p>
                        <a href="#" class="btn btn-light text-primary btn-lg position-absolute bottom-0 start-50 translate-middle-x mb-3">Discover More</a>
                        <div class="card-overlay"></div>
                    </div>
                </div>
            </div>
            <!-- Curriculum Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg rounded-lg border-0 overflow-hidden">
                    <div class="card-body position-relative p-5">
                        <h5 class="card-title text-white mb-3">Our Holistic Curriculum</h5>
                        <p class="card-text text-white mb-4">At {{$schoolDetails['school_name']}}, we offer a blended approach of Montessori and Jolly Phonics for early childhood development, ensuring each child learns at their own pace in a personalized setting.</p>
                        <a href="#" class="btn btn-light text-primary btn-lg position-absolute bottom-0 start-50 translate-middle-x mb-3">Learn More</a>
                        <div class="card-overlay"></div>
                    </div>
                </div>
            </div>
            <!-- Fees Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg rounded-lg border-0 overflow-hidden">
                    <div class="card-body position-relative p-5">
                        <h5 class="card-title text-white mb-3">Tuition Fees</h5>
                        <p class="card-text text-white mb-4">We believe transparency is key. Explore our affordable fee structure and schedule a tour to see firsthand how we invest in your child’s future.</p>
                        <a href="#" class="btn btn-light text-primary btn-lg position-absolute bottom-0 start-50 translate-middle-x mb-3">See Our Fees</a>
                        <div class="card-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- Why Choose Us --}}
<section class="why-choose-us py-5">
    <div class="container text-center">
        <h2 class="display-5 mb-5">Why Choose Us</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="feature-card p-4 rounded shadow-lg">
                    <div class="icon-wrapper bg-gradient-blue mb-3">
                        <i class="fas fa-user-graduate feature-icon"></i>
                    </div>
                    <h5 class="feature-title">Experienced Teachers</h5>
                    <p>Our staff is highly qualified with years of experience.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-card p-4 rounded shadow-lg">
                    <div class="icon-wrapper bg-gradient-green mb-3">
                        <i class="fas fa-school feature-icon"></i>
                    </div>
                    <h5 class="feature-title">Modern Facilities</h5>
                    <p>State-of-the-art classrooms, labs, and sports facilities.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-card p-4 rounded shadow-lg">
                    <div class="icon-wrapper bg-gradient-orange mb-3">
                        <i class="fas fa-book feature-icon"></i>
                    </div>
                    <h5 class="feature-title">Innovative Curriculum</h5>
                    <p>Programs designed to encourage curiosity and creativity.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-card p-4 rounded shadow-lg">
                    <div class="icon-wrapper bg-gradient-purple mb-3">
                        <i class="fas fa-users feature-icon"></i>
                    </div>
                    <h5 class="feature-title">Supportive Community</h5>
                    <p>A diverse and welcoming environment for all students.</p>
                </div>
            </div>
        </div>
    </div>
</section>




{{-- Testimonials --}}
<section id="testimonials" class="community-testimonials py-5">
    <div class="container text-center">
        <h2 class="section-title mb-4">What Our Community Says</h2>
        <p class="section-description mb-5">Hear from our students, parents, and teachers about their experiences at our school. We value their feedback!</p>

        <!-- Testimonial Carousel -->
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="testimonial-item shadow-lg p-4 rounded">
                        <p class="testimonial-text">"The school has transformed my child's life. The teachers are exceptional, and the programs are tailored to foster learning and growth."</p>
                        <h5 class="testimonial-name">John Doe</h5>
                        <p class="testimonial-position">Parent</p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="testimonial-item shadow-lg p-4 rounded">
                        <p class="testimonial-text">"The school not only provides academic excellence but also teaches important life skills. I feel confident in the foundation being built here."</p>
                        <h5 class="testimonial-name">Jane Smith</h5>
                        <p class="testimonial-position">Student</p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="testimonial-item shadow-lg p-4 rounded">
                        <p class="testimonial-text">"A fantastic learning environment with a focus on holistic development. My children love coming to school every day!"</p>
                        <h5 class="testimonial-name">Robert Brown</h5>
                        <p class="testimonial-position">Parent</p>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>




{{-- Get In Touch --}}
<section id="contact" class="get-in-touch-section py-5">
    <div class="container text-center">
        <h2 class="section-title mb-4">Get In Touch</h2>
        <p class="section-description mb-5">We’d love to hear from you! Whether you have a question, suggestion, or want to learn more about our programs, feel free to reach out to us.</p>
        
        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="#" method="POST" class="contact-form shadow-lg p-4 rounded">
                    <div class="form-row row">
                        <div class="col-md-6">
                            <input type="text" class="form-control mb-3" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control mb-3" placeholder="Your Email" required>
                        </div>
                    </div>
                    <input type="text" class="form-control mb-3" placeholder="Subject" required>
                    <textarea class="form-control mb-3" rows="5" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn-primary btn-lg mt-3 px-5 py-2">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>




