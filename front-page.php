
<?php get_header(); ?>

    <main id="main-content">
        <!-- ================= SECTION 1: HERO BANNER ================= -->
        <section class="section-hero position-relative overflow-hidden" id="hero-section" data-aos="fade">
            <!-- Animated Ambient Background Layer -->
            <div class="hero-ambient-layer">
                <div class="hero-blob hero-blob-1" data-speed="0.04"></div>
                <div class="hero-blob hero-blob-2" data-speed="-0.03"></div>
                <div class="hero-blob hero-blob-3" data-speed="0.02"></div>
                <div class="hero-grid-pattern"></div>

                <!-- Floating Decorative Particles / Micro-interaction Shapes -->
                <div class="hero-particle particle-1" data-speed="0.06"><i class="fa-solid fa-sparkles text-gold"></i></div>
                <div class="hero-particle particle-2" data-speed="-0.05"><i class="fa-solid fa-star text-gold"></i></div>
                <div class="hero-particle particle-3" data-speed="0.04"><i class="fa-solid fa-seedling text-forest"></i></div>
                <div class="hero-particle particle-4" data-speed="-0.03"><i class="fa-solid fa-circle-nodes text-gold"></i></div>
                <div class="hero-particle particle-5" data-speed="0.05"><i class="fa-solid fa-globe text-forest"></i></div>
            </div>

            <div class="container-fluid container-hero px-lg-5 px-3 position-relative" style="z-index: 2;">
                <div class="row align-items-center min-vh-hero">
                    <!-- Left Hero Content -->
                    <div class="col-lg-6 col-md-12 hero-content-col" data-aos="fade-up" data-aos-duration="900">
                        <div class="hero-badge d-inline-flex align-items-center gap-2 mb-3">
                            <span class="pulse-dot"></span>
                            <span class="badge-text">IB World School & Cambridge Accredited</span>
                        </div>

<h1 class="hero-tagline mb-4">
    <?php
    echo wp_kses(
        get_theme_mod(
            'mentari_main_hero_title',
            'More than lessons.<br><span class="highlight-text">It’s life.</span>'
        ),
        array(
            'br'   => array(),
            'span' => array(
                'class' => array(),
            ),
        )
    );
    ?>
</h1>

                        <p class="hero-description mb-4">
                            At MIS, learning goes beyond the classroom—nurturing minds, building characters, and shaping futures.
                        </p>
                        <div class="hero-actions d-flex flex-wrap align-items-center gap-3">
                            <a href="#admission" class="btn btn-mis-primary btn-hero-pill">
                                Admission <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                            <a href="#listen-video" class="btn btn-outline-forest btn-hero-pill" id="btn-hero-watch-story">
                                <i class="fa-solid fa-circle-play me-2"></i> Watch Story
                            </a>
                        </div>

                        <!-- Stats Pill Summary under CTA -->
                        <div class="hero-quick-stats d-flex align-items-center gap-3 gap-sm-4 mt-4 pt-3 border-top border-light-subtle">
                            <div class="stat-mini">
                                <span class="fw-bold fs-5 d-block">30+ Years</span>
                                <small>Educational Legacy</small>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-mini">
                                <span class="fw-bold fs-5 d-block">100+</span>
                                <small>Top Uni Placements</small>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-mini">
                                <span class="fw-bold fs-5 d-block">3</span>
                                <small>Campuses in Jakarta</small>
                            </div>
                        </div>
                    </div>

                    <!-- Right Hero Collage / Visual Elements (Swiper Photo Slider) -->
                    <div class="col-lg-6 col-md-12 hero-visual-col mt-4 mt-lg-0" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="hero-artwork position-relative text-center">
                            <!-- Background Glow Rings -->
                            <div class="hero-glow-ring"></div>

                            <!-- Hero Photo Carousel (Swiper) -->
                            <div class="swiper hero-photo-slider shadow-lg rounded-4">
                                <div class="swiper-wrapper">
                                    <!-- Slide 1: Collaborative Learning -->
                                    <div class="swiper-slide">
                                        <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/ab3c27cc-230e-4a3b-b217-5118e9f7e903/HeroPage2%402x.png"
                                             alt="Mentari Students Learning"
                                             class="hero-slider-img">
                                        <div class="hero-slide-caption">
                                            <span class="badge bg-gold text-dark fw-bold mb-1">Global Education</span>
                                            <p class="mb-0 text-white fs-7">Nurturing curious minds & future global citizens</p>
                                        </div>
                                    </div>
                                    <!-- Slide 2: Inquiry Teaching -->
                                    <div class="swiper-slide">
                                        <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/3ed09e47-5337-4d3c-8f42-775ec47323bd/Teaching+142.jpg"
                                             alt="Inquiry-Led Teaching"
                                             class="hero-slider-img">
                                        <div class="hero-slide-caption">
                                            <span class="badge bg-gold text-dark fw-bold mb-1">Inquiry-Led Teaching</span>
                                            <p class="mb-0 text-white fs-7">Empowering students through active discovery</p>
                                        </div>
                                    </div>
                                    <!-- Slide 3: Inspiring Campus Life -->
                                    <div class="swiper-slide">
                                        <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b2ac868c-6af4-4273-b5a2-fe1d37ff187a/HS+Inspiring.jpg"
                                             alt="High School Leadership"
                                             class="hero-slider-img">
                                        <div class="hero-slide-caption">
                                            <span class="badge bg-gold text-dark fw-bold mb-1">High School & DP</span>
                                            <p class="mb-0 text-white fs-7">World-class academic standards & mentorship</p>
                                        </div>
                                    </div>
                                    <!-- Slide 4: Arts & Performances -->
                                    <div class="swiper-slide">
                                        <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/2c601019-8f7e-49d9-b418-5f9477ed8e5b/MENTARISHOW-262.JPG"
                                             alt="Mentari Arts & Performances"
                                             class="hero-slider-img">
                                        <div class="hero-slide-caption">
                                            <span class="badge bg-gold text-dark fw-bold mb-1">Arts & Talents</span>
                                            <p class="mb-0 text-white fs-7">Creative expression, music & stage performances</p>
                                        </div>
                                    </div>
                                    <!-- Slide 5: Early Childhood & Campus -->
                                    <div class="swiper-slide">
                                        <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1576ef94-cf1a-4ef4-86e4-2411b5967bb8/High+School+2.jpg"
                                             alt="Student Collaboration"
                                             class="hero-slider-img">
                                        <div class="hero-slide-caption">
                                            <span class="badge bg-gold text-dark fw-bold mb-1">Community & Life</span>
                                            <p class="mb-0 text-white fs-7">More than lessons. It’s life.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slider Pagination & Navigation -->
                                <div class="hero-swiper-pagination"></div>
                                <div class="hero-slider-nav hero-slider-prev"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="hero-slider-nav hero-slider-next"><i class="fa-solid fa-chevron-right"></i></div>
                            </div>

                            <!-- Floating Decorative Badge Elements with Micro-Interactions -->
                            <div class="hero-float-badge float-top-left" data-speed="0.04" data-aos="fade-right" data-aos-delay="300">
                                <div class="badge-card">
                                    <div class="badge-icon-wrap bg-gold-subtle">
                                        <i class="fa-solid fa-graduation-cap text-gold"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold fs-7">Top 1% IB DP</div>
                                        <small class="text-muted">Avg. Score 36.4 (World: 30.2)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-float-badge float-bottom-right" data-speed="-0.04" data-aos="fade-left" data-aos-delay="400">
                                <div class="badge-card">
                                    <div class="badge-icon-wrap bg-danger-subtle">
                                        <i class="fa-solid fa-heart-pulse text-danger"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold fs-7">Positive Education</div>
                                        <small class="text-muted">Holistic Growth & Well-being</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Intercultural Badge -->
                            <div class="hero-float-badge float-top-right d-none d-md-block" data-speed="0.02" data-aos="fade-down" data-aos-delay="500">
                                <div class="badge-card px-3 py-2">
                                    <i class="fa-solid fa-earth-asia text-forest fs-6"></i>
                                    <span class="fs-8 fw-bold text-forest">Intercultural Mindset</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 2: PURPOSE & IB DP SCORE ================= -->
        <section id="about" class="section-purpose py-5 py-lg-6 bg-cream">
            <div class="container py-lg-4">
                <div class="row align-items-center g-5">
                    <!-- Left Column: Image / IB Score Card -->
                    <div class="col-lg-6 text-center" data-aos="fade-right" data-aos-duration="900">
                        <div class="ib-score-card bg-white p-3 p-md-4 rounded-4 shadow-sm border border-light">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b4ca3fd0-d14d-4be3-b507-849bb6c1c95c/MISJ+IB+DP+Score+2025+%281%29.png"
                                 alt="MIS IB DP Score 2025"
                                 class="img-fluid rounded-3">
                        </div>
                    </div>

                    <!-- Right Column: Mission & Purpose Text Content -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
                        <span class="sub-label text-gold fw-bold text-uppercase tracking-wider d-block mb-2">Our Mission & Purpose</span>
                        <h2 class="section-title text-forest mb-4">Nurturing Both Mind and Heart</h2>
                        <p class="lead-text text-dark-slate mb-3">
                            Mentari Intercultural School was founded with a clear purpose: to nurture both the mind and the heart. We offer a values-driven, globally minded education that empowers students to grow with purpose, reach their full potential, and become compassionate leaders who make a difference in their communities and the world.
                        </p>
                        <p class="subtext text-muted mb-4">
                            Curious about who we are and what we believe in? Let’s take you there.
                        </p>
                        <a href="mis-story.html" class="btn btn-mis-primary btn-pill">
                            Learn More <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 3: OVER 27 YEARS OF DEDICATION ================= -->
        <section id="vision" class="section-dedication py-5 py-lg-6 bg-white">
            <div class="container py-lg-4">
                <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
                    <span class="sub-label text-gold fw-bold text-uppercase tracking-wider d-block mb-2">Excellence in Education</span>
                    <h2 class="section-title text-forest display-5 fw-bold">Over 27 Years of Dedication</h2>
                    <p class="text-muted">Empowering generations of confident, empathetic, and future-ready thinkers.</p>
                </div>

                <div class="row g-4">
                    <!-- Pillar 1: Teaching -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="dedication-card h-100 rounded-4 overflow-hidden shadow-sm d-flex flex-column">
                            <div class="card-img-wrap position-relative">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/3ed09e47-5337-4d3c-8f42-775ec47323bd/Teaching+142.jpg"
                                     alt="Teaching at MIS"
                                     class="card-img-top">
                                <div class="pillar-tag">Teaching</div>
                            </div>
                            <div class="card-body p-4 d-flex flex-column flex-grow-1">
                                <h4 class="card-heading text-forest mb-3">Teaching with Heart</h4>
                                <p class="card-text text-muted flex-grow-1">
                                    Lessons may fade, but the impact of a caring teacher endures. While every learner is different, students will always remember those who taught with heart—whose support and kindness left a lasting impression beyond the classroom.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 2: Inspiring -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="dedication-card h-100 rounded-4 overflow-hidden shadow-sm d-flex flex-column">
                            <div class="card-img-wrap position-relative">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b2ac868c-6af4-4273-b5a2-fe1d37ff187a/HS+Inspiring.jpg"
                                     alt="Inspiring Educators"
                                     class="card-img-top">
                                <div class="pillar-tag">Inspiring</div>
                            </div>
                            <div class="card-body p-4 d-flex flex-column flex-grow-1">
                                <h4 class="card-heading text-forest mb-3">Igniting Potential</h4>
                                <p class="card-text text-muted flex-grow-1">
                                    We are talking about the moment we had in school when we got so inspired by a particular educator, possibly contributing to who we have become today. That is our dream, working as much as possible, to light that inspiration to others, most especially, our students.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 3: Caring -->
                    <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="300">
                        <div class="dedication-card h-100 rounded-4 overflow-hidden shadow-sm d-flex flex-column">
                            <div class="card-img-wrap position-relative">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/6e51620e-37bc-4346-aa52-fb68cb558536/Caring+%281%29.jpg"
                                     alt="Caring Community"
                                     class="card-img-top">
                                <div class="pillar-tag">Caring</div>
                            </div>
                            <div class="card-body p-4 d-flex flex-column flex-grow-1">
                                <h4 class="card-heading text-forest mb-3">Rooted in Compassion</h4>
                                <p class="card-text text-muted flex-grow-1">
                                    We’ve reached 27 years not just by teaching, but by caring deeply. Every student, every parent, every moment mattered. Our commitment is rooted in compassion—for each child’s growth, future, and the memories we build together.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 4: CALLOUT BANNER (LET’S GROW AS ONE) ================= -->
        <section class="section-banner-callout position-relative text-white text-center py-5 py-lg-7" style="background-image: linear-gradient(rgba(13, 56, 30, 0.78), rgba(13, 56, 30, 0.88)), url('https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/2c601019-8f7e-49d9-b418-5f9477ed8e5b/MENTARISHOW-262.JPG');" data-aos="fade">
            <div class="container py-lg-5">
                <div class="max-w-800 mx-auto" data-aos="zoom-in" data-aos-duration="800">
                    <h2 class="display-4 fw-bold mb-3 text-white">Let’s grow as one.</h2>
                    <p class="fs-4 fw-light text-light-opacity mb-4">Because every family starts with belonging—and grows with purpose.</p>
                    <a href="#admission" class="btn btn-gold btn-hero-pill px-5 py-3 fs-5">Apply Now <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 5: SCHOOL CURRICULA ================= -->
        <section id="curricula" class="section-curricula py-5 py-lg-6 bg-light-green">
            <div class="container py-lg-4">
                <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between mb-4 mb-md-5" data-aos="fade-up">
                    <div>
                        <span class="sub-label text-gold fw-bold text-uppercase tracking-wider d-block mb-1">Academic Pathway</span>
                        <h2 class="section-title text-forest display-6 fw-bold mb-0">School Curricula</h2>
                    </div>
                    <p class="text-muted mb-0 mt-2 mt-md-0 max-w-400">Comprehensive educational programs from early childhood through to pre-university preparation.</p>
                </div>

                <div class="row g-3 g-md-4 justify-content-center">
                    <!-- Level 1: Early Years -->
                    <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="curriculum-item-card rounded-4 overflow-hidden position-relative shadow-sm">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1c0f3d35-d3ae-4cc5-9adc-18948a8b41a5/DSC08102.jpg" alt="Early Years" class="curriculum-img">
                            <div class="curriculum-overlay">
                                <div class="curriculum-badge-wrap mb-2">
                                    <span class="badge-age">Ages 2 - 5</span>
                                </div>
                                <h3 class="curriculum-title">Early Years</h3>
                                <p class="curriculum-desc">Play-based, inquiry-driven learning nurturing natural curiosity and joyful discovery.</p>
                                <a href="#admission" class="curriculum-link">Explore Program <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Level 2: Elementary -->
                    <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="curriculum-item-card rounded-4 overflow-hidden position-relative shadow-sm">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/5837a716-b51d-4b88-966d-863b64140333/Elementary+7.png" alt="Elementary" class="curriculum-img">
                            <div class="curriculum-overlay">
                                <div class="curriculum-badge-wrap mb-2">
                                    <span class="badge-age">Grades 1 - 5</span>
                                </div>
                                <h3 class="curriculum-title">Elementary</h3>
                                <p class="curriculum-desc">IB Primary Years Programme (PYP) inspiring critical thinking and international mindedness.</p>
                                <a href="#admission" class="curriculum-link">Explore Program <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Level 3: Middle School -->
                    <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="curriculum-item-card rounded-4 overflow-hidden position-relative shadow-sm">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/7530af28-f093-4e25-8353-e17589919861/School+Curricula+-+JHS+45_2.jpg" alt="Middle School" class="curriculum-img">
                            <div class="curriculum-overlay">
                                <div class="curriculum-badge-wrap mb-2">
                                    <span class="badge-age">Grades 6 - 8</span>
                                </div>
                                <h3 class="curriculum-title">Middle School</h3>
                                <p class="curriculum-desc">IB Middle Years Programme (MYP) developing academic mastery, empathy, and leadership.</p>
                                <a href="#admission" class="curriculum-link">Explore Program <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Level 4: High School -->
                    <div class="col-12 col-sm-6 col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="curriculum-item-card rounded-4 overflow-hidden position-relative shadow-sm">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1576ef94-cf1a-4ef4-86e4-2411b5967bb8/High+School+2.jpg" alt="High School" class="curriculum-img">
                            <div class="curriculum-overlay">
                                <div class="curriculum-badge-wrap mb-2">
                                    <span class="badge-age">Grades 9 - 12</span>
                                </div>
                                <h3 class="curriculum-title">High School</h3>
                                <p class="curriculum-desc">Cambridge IGCSE and IB Diploma Programme (DP) preparing students for worldwide higher education success.</p>
                                <a href="#admission" class="curriculum-link">Explore Program <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Level 5: University Counseling -->
                    <div class="col-12 col-sm-6 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="curriculum-item-card rounded-4 overflow-hidden position-relative shadow-sm">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/8f65bfce-676a-43d1-a0f6-17db6974c471/Screenshot+2025-07-30+at+10.25.50.png" alt="University Counseling" class="curriculum-img">
                            <div class="curriculum-overlay">
                                <div class="curriculum-badge-wrap mb-2">
                                    <span class="badge-age">College Pathways</span>
                                </div>
                                <h3 class="curriculum-title">University Counseling</h3>
                                <p class="curriculum-desc">Dedicated 1-on-1 global admissions advisory assisting students into top world-renowned universities.</p>
                                <a href="#universities" class="curriculum-link">Explore Placements <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 6: CAMPUSES ================= -->
        <section id="campuses" class="section-campuses py-5 py-lg-6 bg-white">
            <div class="container py-lg-4">
                <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
                    <span class="sub-label text-gold fw-bold text-uppercase tracking-wider d-block mb-1">Our Locations</span>
                    <h2 class="section-title text-forest display-6 fw-bold">Campuses</h2>
                    <p class="text-muted">Modern, vibrant, and safe learning environments across Greater Jakarta.</p>
                </div>

                <div class="row g-4">
                    <!-- Campus 1: MIS Bintaro -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="campus-card h-100 rounded-4 overflow-hidden shadow-sm">
                            <div class="campus-img-container">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/7d1ed6cb-ede3-4e77-b77a-1b433961e04e/11.jpg" alt="MIS Bintaro Campus" class="campus-img">
                                <span class="campus-badge"><i class="fa-solid fa-location-dot me-1"></i> Bintaro Sektor 9</span>
                            </div>
                            <div class="campus-info p-4">
                                <h4 class="campus-name text-forest mb-2">MIS Bintaro</h4>
                                <p class="campus-desc text-muted mb-3">Comprehensive campus serving Early Childhood, Elementary, Middle School, and High School with state-of-the-art sports and arts facilities.</p>
                                <a href="#contact-footer" class="campus-cta-link">Campus Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Campus 2: MIS Jakarta -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="campus-card h-100 rounded-4 overflow-hidden shadow-sm">
                            <div class="campus-img-container">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/55ef63c0-1f26-4ef8-aacc-43a4fe82b0c4/DJI_0855.JPG" alt="MIS Jakarta Campus" class="campus-img">
                                <span class="campus-badge"><i class="fa-solid fa-location-dot me-1"></i> Cipete, South Jakarta</span>
                            </div>
                            <div class="campus-info p-4">
                                <h4 class="campus-name text-forest mb-2">MIS Jakarta</h4>
                                <p class="campus-desc text-muted mb-3">Our flagship international campus in Cipete, renowned for its strong community, academic rigor, and vibrant student life.</p>
                                <a href="#contact-footer" class="campus-cta-link">Campus Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Campus 3: MIS Grand Surya -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="campus-card h-100 rounded-4 overflow-hidden shadow-sm">
                            <div class="campus-img-container">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b9584050-a372-4b9f-95e7-2e57688e2f7f/DJI_0266.jpg" alt="MIS Grand Surya Campus" class="campus-img">
                                <span class="campus-badge"><i class="fa-solid fa-location-dot me-1"></i> West Jakarta</span>
                            </div>
                            <div class="campus-info p-4">
                                <h4 class="campus-name text-forest mb-2">MIS Grand Surya</h4>
                                <p class="campus-desc text-muted mb-3">Purpose-built modern campus providing exceptional international curriculum and holistic development programs in West Jakarta.</p>
                                <a href="#contact-footer" class="campus-cta-link">Campus Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Campus 4: Mentari Preschool -->
                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="campus-card h-100 rounded-4 overflow-hidden shadow-sm">
                            <div class="campus-img-container">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/c3d7a938-2ffe-460e-92a4-6a785a41fdb2/L1030398.jpg" alt="Mentari Preschool Jakarta" class="campus-img">
                                <span class="campus-badge"><i class="fa-solid fa-location-dot me-1"></i> Jakarta</span>
                            </div>
                            <div class="campus-info p-4">
                                <h4 class="campus-name text-forest mb-2">Mentari Preschool Jakarta</h4>
                                <p class="campus-desc text-muted mb-3">Nurturing joyful discovery and developmental milestones for children in their most formative early years.</p>
                                <a href="#contact-footer" class="campus-cta-link">Campus Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Campus 5: Sunflower Preschool -->
                    <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <div class="campus-card h-100 rounded-4 overflow-hidden shadow-sm">
                            <div class="campus-img-container">
                                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/7bae7578-f323-4c61-952f-dc78f4ec141f/DSC01916-2.jpg" alt="Sunflower Preschool" class="campus-img">
                                <span class="campus-badge"><i class="fa-solid fa-location-dot me-1"></i> Bintaro</span>
                            </div>
                            <div class="campus-info p-4">
                                <h4 class="campus-name text-forest mb-2">Sunflower Preschool</h4>
                                <p class="campus-desc text-muted mb-3">A warm, homey, and stimulating space where little learners flourish through creative play and values-driven guidance.</p>
                                <a href="#contact-footer" class="campus-cta-link">Campus Details <i class="fa-solid fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 7: LISTEN MORE ABOUT US (VIDEO SHOWCASE) ================= -->
        <section id="listen-video" class="section-listen py-5 py-lg-6 bg-forest text-white position-relative overflow-hidden">
            <div class="container py-lg-4 position-relative z-1">
                <div class="text-center max-w-750 mx-auto mb-5" data-aos="fade-up">
                    <span class="sub-label text-gold fw-bold text-uppercase tracking-wider d-block mb-2">Community Voices</span>
                    <h2 class="section-title text-white display-5 fw-bold mb-3">Listen More About Us</h2>
                    <p class="text-white-50 fs-5 mb-0">
                        Take a moment to watch our testimonial video, where our community shares their heartfelt experiences. It’s a warm glimpse into the vibrant and supportive environment that makes MIS special.
                    </p>
                </div>

                <div class="video-showcase-box max-w-950 mx-auto position-relative rounded-4 overflow-hidden shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
                    <div class="ratio ratio-16x9 video-thumb-container">
                        <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/47202415-a773-47aa-9e81-0f07ca85d6ff/C0019T01.JPG"
                             alt="MIS Testimonial Video"
                             class="video-thumb-img">
                        <div class="video-overlay d-flex flex-column align-items-center justify-content-center">
                            <button class="btn-play-pulse" id="btn-open-video-modal" aria-label="Play Testimonial Video">
                                <i class="fa-solid fa-play"></i>
                            </button>
                            <span class="mt-3 text-white fw-medium tracking-wide">Click to Watch Community Story</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 8 & 9: UNIVERSITY PREPARATION & LOGOS MARQUEE ================= -->
        <section id="universities" class="section-universities py-5 py-lg-6 bg-white overflow-hidden">
            <div class="container py-lg-3">
                <div class="text-center max-w-850 mx-auto mb-5" data-aos="fade-up">
                    <span class="sub-label text-gold fw-bold text-uppercase tracking-wider d-block mb-2">Global Pathways</span>
                    <h3 class="section-title text-forest fs-2 fw-bold mb-3">
                        Your children’s future is limitless with MIS — preparing them for top universities both here and abroad.
                    </h3>
                    <p class="text-muted mb-0">Our graduates are accepted into world-leading institutions across the USA, UK, Canada, Australia, Asia, and Indonesia.</p>
                </div>
            </div>

            <!-- Infinite Logo Carousel / Marquee Track -->
            <div class="university-marquee-container" data-aos="fade-in">
                <div class="marquee-track">
                    <!-- Set 1 -->
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/a75c8c18-14d1-43b2-883f-4c6691b46c39/Artboard+2.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/f15234c7-c7ca-4c71-be8b-a19458307c1e/Artboard+3.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b80572e9-7e6d-4dcb-9882-8c32357699d7/Artboard+4.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/edcd355b-424f-4e68-870b-458b1d760405/Artboard+5.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/66560432-0044-4bba-b4fd-a138297e78b8/Artboard+6.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/067372b9-af02-47c1-9260-4f1e37945be0/Artboard+7.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/08ed2e26-c342-44ba-833b-08acb5281681/Artboard+8.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/e4281170-81fd-4ee7-b48a-b2c49e7d0621/Artboard+9.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/910715c8-ce3b-44c1-bf95-bb206f05eb23/Artboard+10.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/3ca46bba-5d16-4d0b-b983-d288d4c9d81a/Artboard+11.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/2d19b63d-ba74-4d3d-a7c3-32dda3b89fd8/Artboard+12.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/5f8c23f8-78d0-4414-9aad-a77301e8ef39/Artboard+13.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/79899ca7-4de3-4877-b5d6-eec3e47c0caa/Artboard+14.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/edaf7328-e65c-45cc-8857-ddeb7159e76c/Artboard+15.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/490346b7-e6fb-43cc-811c-558f4b6b8e5e/Artboard+16.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/d357258f-0363-49c7-97ab-f7f1533b0264/Artboard+17.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/0bbec192-2f13-4542-a1fe-2a2f04c1e846/Artboard+18.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/e4b4066b-9181-4ff7-90d5-0f89fa5ab42f/Artboard+19.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/004265a2-f4fc-46cf-a6b7-49474a1e2a61/Artboard+20.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/a5706aeb-fff0-4bba-a849-f2192a66754a/Artboard+21.png" alt="University Acceptance"></div>

                    <!-- Duplicate for seamless loop -->
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/a75c8c18-14d1-43b2-883f-4c6691b46c39/Artboard+2.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/f15234c7-c7ca-4c71-be8b-a19458307c1e/Artboard+3.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/b80572e9-7e6d-4dcb-9882-8c32357699d7/Artboard+4.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/edcd355b-424f-4e68-870b-458b1d760405/Artboard+5.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/66560432-0044-4bba-b4fd-a138297e78b8/Artboard+6.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/067372b9-af02-47c1-9260-4f1e37945be0/Artboard+7.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/08ed2e26-c342-44ba-833b-08acb5281681/Artboard+8.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/e4281170-81fd-4ee7-b48a-b2c49e7d0621/Artboard+9.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/910715c8-ce3b-44c1-bf95-bb206f05eb23/Artboard+10.png" alt="University Acceptance"></div>
                    <div class="marquee-item"><img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/3ca46bba-5d16-4d0b-b983-d288d4c9d81a/Artboard+11.png" alt="University Acceptance"></div>
                </div>
            </div>
        </section>

        <!-- ================= SECTION 10: CONNECT WITH US (INSTAGRAM FEED & LIGHTBOX) ================= -->
        <section id="connect" class="section-connect-with-us py-5 py-lg-7 bg-cream position-relative">
            <div class="container py-lg-4">
                <!-- Section Header -->
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4 pb-2" data-aos="fade-up">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="ig-icon-badge"><i class="fa-brands fa-instagram"></i></span>
                            <span class="sub-label text-gold fw-bold text-uppercase tracking-wider">Social Feed</span>
                        </div>
                        <h2 class="section-title text-forest display-6 fw-bold mb-1">Connect with us</h2>
                        <p class="text-muted mb-0">Follow our daily stories, campus events, and student highlights on <a href="https://www.instagram.com/mis.sch.id/?hl=en" target="_blank" rel="noopener noreferrer" class="text-forest fw-semibold text-decoration-none">@mis.sch.id <i class="fa-solid fa-arrow-up-right-from-square small ms-1"></i></a></p>
                    </div>

                    <!-- Instagram Follow Badge & Filter Tabs -->
                    <div class="mt-3 mt-md-0 d-flex flex-wrap align-items-center gap-2">
                        <div class="feed-filters btn-group" role="group" aria-label="Feed Filter">
                            <button type="button" class="btn btn-sm btn-filter active" data-filter="all">All</button>
                            <button type="button" class="btn btn-sm btn-filter" data-filter="video"><i class="fa-solid fa-film me-1"></i> Reels</button>
                            <button type="button" class="btn btn-sm btn-filter" data-filter="image"><i class="fa-solid fa-camera me-1"></i> Photos</button>
                        </div>
                        <a href="https://www.instagram.com/mis.sch.id/?hl=en" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-instagram-follow">
                            <i class="fa-brands fa-instagram me-1"></i> Follow @mis.sch.id
                        </a>
                    </div>
                </div>

                <!-- Instagram Feed 4x2 Grid -->
                <div class="row g-3 g-lg-4 instagram-grid" id="instagram-feed-container">
                    <!-- Post 1 (Video / Reel) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="video" data-index="0" data-aos="fade-up" data-aos-delay="50">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1789437082356-1T76DOEKUFJ24H4L6595/image-asset.jpeg" alt="MISB Open House" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-play"></i> Reel</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 482</span>
                                    <span><i class="fa-solid fa-comment"></i> 34</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 2 (Photo) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="image" data-index="1" data-aos="fade-up" data-aos-delay="100">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1789363222011-RU4WYX598YMBL2CYVYZI/image-asset.jpeg" alt="Student Growth and Dedication" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-camera"></i> Photo</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 619</span>
                                    <span><i class="fa-solid fa-comment"></i> 41</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 3 (Video / Reel) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="video" data-index="2" data-aos="fade-up" data-aos-delay="150">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1788998088160-DHO2Q411J95RAFX309A5/image-asset.jpeg" alt="MISJ High School Open House" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-play"></i> Reel</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 530</span>
                                    <span><i class="fa-solid fa-comment"></i> 29</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 4 (Photo / Infographic) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="image" data-index="3" data-aos="fade-up" data-aos-delay="200">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1788855855131-TK6ACL7F6YHVG26S7NEK/image-asset.jpeg" alt="Volcanic Ash Aviation Safety" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-camera"></i> Photo</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 395</span>
                                    <span><i class="fa-solid fa-comment"></i> 18</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 5 (Photo) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="image" data-index="4" data-aos="fade-up" data-aos-delay="250">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1788765614909-PXRI9XVVLVJKA1NWG65I/image-asset.jpeg" alt="Family Connections at MIS" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-camera"></i> Photo</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 477</span>
                                    <span><i class="fa-solid fa-comment"></i> 22</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 6 (Photo / Safety Reminder) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="image" data-index="5" data-aos="fade-up" data-aos-delay="300">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1788666531002-570FOPJGWMRGHCZB7GH6/image-asset.jpeg" alt="Parent Advisory & Safety" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-camera"></i> Photo</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 734</span>
                                    <span><i class="fa-solid fa-comment"></i> 56</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 7 (Photo / High School Event) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="image" data-index="6" data-aos="fade-up" data-aos-delay="350">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1788495446904-9UF2KKGFW0PZIJPHHERO/image-asset.jpeg" alt="MISB High School Highlights" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-camera"></i> Photo</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 890</span>
                                    <span><i class="fa-solid fa-comment"></i> 64</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>

                    <!-- Post 8 (Video / Reel) -->
                    <div class="col-6 col-md-4 col-lg-3 ig-post-item" data-type="video" data-index="7" data-aos="fade-up" data-aos-delay="400">
                        <div class="ig-card rounded-3 overflow-hidden position-relative">
                            <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/1788254315180-FY5WBVO0V35KZP5ZR2RI/image-asset.jpeg" alt="Meaningful Learning at MIS" class="ig-thumb">
                            <span class="media-type-badge"><i class="fa-solid fa-play"></i> Reel</span>
                            <div class="ig-overlay d-flex flex-column align-items-center justify-content-center text-white">
                                <div class="d-flex align-items-center gap-3 fs-5 mb-2">
                                    <span><i class="fa-solid fa-heart"></i> 912</span>
                                    <span><i class="fa-solid fa-comment"></i> 78</span>
                                </div>
                                <span class="btn-view-post"><i class="fa-solid fa-expand me-1"></i> View Story</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom CTA: View on Instagram -->
                <div class="text-center mt-5" data-aos="fade-up">
                    <a href="https://www.instagram.com/mis.sch.id/?hl=en" target="_blank" rel="noopener noreferrer" class="btn btn-mis-primary btn-pill px-4 py-2">
                        <i class="fa-brands fa-instagram me-2"></i> Join Our Instagram Community @mis.sch.id
                    </a>
                </div>
            </div>
        </section>

        <!-- ================= SECTION: ONLINE ADMISSION CTA ================= -->
        <section id="admission" class="section-admission py-5 py-lg-6 bg-forest text-white">
            <div class="container py-lg-3">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8" data-aos="fade-right">
                        <span class="sub-label text-gold fw-bold text-uppercase tracking-wider d-block mb-2">Enrollment Open</span>
                        <h2 class="display-6 fw-bold text-white mb-3">Begin Your Child's Journey at Mentari</h2>
                        <p class="text-white-50 fs-5 mb-0">Admissions for Academic Year 2026/2027 are now open across all our campuses. Connect with our admissions counselors today.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                        <a href="#contact-footer" class="btn btn-gold btn-hero-pill px-4 py-3 fs-5">
                            Online Admission Form <i class="fa-solid fa-paper-plane ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
