<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Mentari Intercultural School is one of the top and fastest growing international schools in Jakarta. Nurturing minds, building characters, shaping futures.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mentari Intercultural School - More than lessons, it's life</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- 1. Header / Navbar -->
    <header id="header" class="site-header">
        <div class="container-fluid container-header px-lg-5 px-3">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="navbar-brand d-flex align-items-center me-3 me-xl-4"> <img
                        src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/d6e41847-b8e8-4150-9b20-8c32cd909701/jhbjhj%402x.png"
                        alt="Mentari Intercultural School" class="mis-logo-img"
                        onerror="this.style.display='none'; document.getElementById('fallback-logo').style.display='flex';">
                    <div id="fallback-logo" class="fallback-logo-wrap" style="display:none;">
                        <span class="logo-symbol">MIS</span>
                        <span class="logo-name">Mentari Intercultural School</span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu (Visible on lg and above: >= 992px) -->
                <nav class="main-navigation d-none d-lg-flex align-items-center">
                    <ul class="nav-menu list-unstyled d-flex align-items-center mb-0">
                        <li class="nav-item active"><a href="<?php echo esc_url(home_url('/')); ?>"
                                class="nav-link">HOME</a></li>

                        <!-- ABOUT Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="mis-story.html" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ABOUT <i class="fa-solid fa-chevron-down nav-arrow ms-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="mis-story.html"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> MIS Story</a></li>
                                <li><a class="dropdown-item" href="positive-education.html"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Positive Education At
                                        MIS</a></li>
                            </ul>
                        </li>

                        <!-- PROGRAMS Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="early-years.html" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                PROGRAMS <i class="fa-solid fa-chevron-down nav-arrow ms-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="early-years.html"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Early Years (Ages
                                        2-5)</a></li>
                                <li><a class="dropdown-item" href="elementary.html"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Elementary (PYP)</a>
                                </li>
                                <li><a class="dropdown-item" href="middle-school.html"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Middle School (MYP)</a>
                                </li>
                                <li><a class="dropdown-item" href="high-school.html"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> High School
                                        (DP/IGCSE)</a></li>
                                <li><a class="dropdown-item" href="university-counseling.html"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> University
                                        Counseling</a></li>
                            </ul>
                        </li>

                        <!-- CAMPUS Dropdown -->
                        <li class="nav-item dropdown">
                            <a href="mis-jakarta.html" class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                CAMPUS <i class="fa-solid fa-chevron-down nav-arrow ms-1"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="mis-jakarta.html"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> MIS Jakarta
                                        (Cipete)</a></li>
                                <li><a class="dropdown-item" href="mis-bintaro.html"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> MIS Bintaro</a></li>
                                <li><a class="dropdown-item" href="mis-grand-surya.html"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> MIS Grand Surya</a>
                                </li>
                                <li><a class="dropdown-item" href="mentari-preschool.html"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> Mentari Preschool
                                        Jakarta</a></li>
                                <li><a class="dropdown-item" href="sunflower-preschool.html"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> Sunflower Preschool</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="admission.html" class="nav-link">ONLINE ADMISSION</a></li>
                        <li class="nav-item"><a href="index.html#connect" class="nav-link nav-connect-link"><i
                                    class="fa-brands fa-instagram text-danger me-1"></i> CONNECT</a></li>
                    </ul>
                </nav>

                <!-- Header Actions: Language Switcher, Contact CTA & Mobile Hamburger -->
                <div class="header-actions d-flex align-items-center gap-2 gap-sm-3">
                    <div class="lang-switcher d-none d-sm-inline-flex align-items-center">
                        <i class="fa-solid fa-globe text-forest me-1"></i>
                        <button type="button" class="btn-lang btn-lang-en active" data-lang="en">EN</button>
                        <span class="lang-divider">|</span>
                        <button type="button" class="btn-lang btn-lang-id" data-lang="id">ID</button>
                    </div>
                    <a href="contact.html" class="btn btn-mis-primary btn-contact-pill d-none d-sm-inline-flex">Contact
                        Us!</a>

                    <!-- Mobile Hamburger Button -->
                    <button class="btn-hamburger d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
                        <span class="hamburger-bar"></span>
                        <span class="hamburger-bar"></span>
                        <span class="hamburger-bar"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Offcanvas Menu (Accordion Dropdowns) -->
    <div class="offcanvas offcanvas-end mobile-drawer" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header border-bottom py-3 px-4 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
                <img src="https://images.squarespace-cdn.com/content/v1/60c9a5215a821d628e0e1c65/d6e41847-b8e8-4150-9b20-8c32cd909701/jhbjhj%402x.png"
                    alt="MIS Logo" style="height: 38px;">
            </div>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0 d-flex flex-column">
            <!-- Navigation Accordion -->
            <div class="mobile-nav-accordion flex-grow-1 p-3">
                <ul class="mobile-nav-list list-unstyled mb-0">
                    <li class="mobile-nav-item">
                        <a href="index.html" class="mobile-nav-link active" data-bs-dismiss="offcanvas">
                            <i class="fa-solid fa-house me-2 text-forest"></i> HOME
                        </a>
                    </li>

                    <!-- Accordion Item: ABOUT -->
                    <li class="mobile-nav-item">
                        <a class="mobile-nav-link d-flex align-items-center justify-content-between collapsed"
                            data-bs-toggle="collapse" href="#mobileAboutCollapse" role="button" aria-expanded="false"
                            aria-controls="mobileAboutCollapse">
                            <span><i class="fa-solid fa-circle-info me-2 text-forest"></i> ABOUT</span>
                            <i class="fa-solid fa-chevron-down accordion-arrow"></i>
                        </a>
                        <div class="collapse mobile-sub-collapse" id="mobileAboutCollapse">
                            <ul class="mobile-sub-menu list-unstyled ps-4 py-2">
                                <li><a href="mis-story.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> MIS Story</a></li>
                                <li><a href="positive-education.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Positive Education At
                                        MIS</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Accordion Item: PROGRAMS -->
                    <li class="mobile-nav-item">
                        <a class="mobile-nav-link d-flex align-items-center justify-content-between collapsed"
                            data-bs-toggle="collapse" href="#mobileProgramsCollapse" role="button" aria-expanded="false"
                            aria-controls="mobileProgramsCollapse">
                            <span><i class="fa-solid fa-graduation-cap me-2 text-forest"></i> PROGRAMS</span>
                            <i class="fa-solid fa-chevron-down accordion-arrow"></i>
                        </a>
                        <div class="collapse mobile-sub-collapse" id="mobileProgramsCollapse">
                            <ul class="mobile-sub-menu list-unstyled ps-4 py-2">
                                <li><a href="early-years.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Early Years (Ages
                                        2-5)</a></li>
                                <li><a href="elementary.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Elementary (PYP)</a>
                                </li>
                                <li><a href="middle-school.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> Middle School (MYP)</a>
                                </li>
                                <li><a href="high-school.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> High School
                                        (DP/IGCSE)</a></li>
                                <li><a href="university-counseling.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-angle-right me-2 text-gold"></i> University
                                        Counseling</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Accordion Item: CAMPUS -->
                    <li class="mobile-nav-item">
                        <a class="mobile-nav-link d-flex align-items-center justify-content-between collapsed"
                            data-bs-toggle="collapse" href="#mobileCampusCollapse" role="button" aria-expanded="false"
                            aria-controls="mobileCampusCollapse">
                            <span><i class="fa-solid fa-school me-2 text-forest"></i> CAMPUS</span>
                            <i class="fa-solid fa-chevron-down accordion-arrow"></i>
                        </a>
                        <div class="collapse mobile-sub-collapse" id="mobileCampusCollapse">
                            <ul class="mobile-sub-menu list-unstyled ps-4 py-2">
                                <li><a href="mis-jakarta.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> MIS Jakarta
                                        (Cipete)</a></li>
                                <li><a href="mis-bintaro.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> MIS Bintaro</a></li>
                                <li><a href="mis-grand-surya.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> MIS Grand Surya</a>
                                </li>
                                <li><a href="mentari-preschool.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> Mentari Preschool
                                        Jakarta</a></li>
                                <li><a href="sunflower-preschool.html" class="mobile-sub-link"><i
                                            class="fa-solid fa-location-dot me-2 text-gold"></i> Sunflower Preschool</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="mobile-nav-item">
                        <a href="admission.html" class="mobile-nav-link">
                            <i class="fa-solid fa-file-signature me-2 text-forest"></i> ONLINE ADMISSION
                        </a>
                    </li>
                    <li class="mobile-nav-item">
                        <a href="index.html#connect" class="mobile-nav-link">
                            <i class="fa-brands fa-instagram me-2 text-danger"></i> CONNECT WITH US
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Drawer Bottom Area -->
            <div class="mobile-drawer-footer p-3 p-sm-4 border-top bg-cream">
                <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                    <span class="fw-semibold fs-7 text-dark-slate"><i class="fa-solid fa-globe text-forest me-2"></i>
                        Language</span>
                    <div class="lang-switcher d-inline-flex align-items-center">
                        <button type="button" class="btn-lang btn-lang-en active" data-lang="en">EN</button>
                        <span class="lang-divider">|</span>
                        <button type="button" class="btn-lang btn-lang-id" data-lang="id">ID</button>
                    </div>
                </div>
                <a href="contact.html" class="btn btn-mis-primary w-100 btn-pill mb-3">
                    Contact Us! <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
                <div class="d-flex align-items-center justify-content-between text-muted fs-7">
                    <span><i class="fa-solid fa-phone me-1"></i> +62 21 725 5410</span>
                    <div class="d-flex gap-2">
                        <a href="https://www.instagram.com/mis.sch.id/?hl=en" target="_blank" class="text-forest"><i
                                class="fa-brands fa-instagram fa-lg"></i></a>
                        <a href="https://www.youtube.com/channel/UCj50_pq1NlKjWuh9pTeQ-xg" target="_blank"
                            class="text-forest"><i class="fa-brands fa-youtube fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>