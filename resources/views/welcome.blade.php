<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtream Services Limited — Smart, Secure, Connected</title>
    <meta name="description" content="Xtream Services Limited delivers CCTV surveillance, telecommunications, software &amp; ICT, fibre optic, and support solutions for offices, homes and industries.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">
    <link rel="icon" href="/logo.png" type="image/x-icon">
</head>
<body>

  {{-- ================= NAV ================= --}}
    <header class="site-nav">

        <div class="container nav-inner">

            <a href="#" class="brand">
                <span class="mark">X</span>
                <span>
                    XTREAM
                    <small>Services Limited</small>
                </span>
            </a>

            <button class="nav-toggle" id="navToggle">

                <span></span>
                <span></span>
                <span></span>

            </button>

            <nav class="nav-links" id="navMenu">

                <a href="#services">Services</a>

                <a href="#why">Why Xtream</a>

                <a href="#projects">Projects</a>

                <a href="#contact">Contact</a>

                <a href="{{ route('login') }}" class="mobile-login">

                    Login

                </a>
                
                <a href="#contact" class="btn btn-dark">

                    Get a Quote

                </a>

            </nav>

            <div class="nav-cta">

                <a href="tel:+2349068589698" class="nav-phone">

                    +234 906 858 9698

                </a>

                <a href="{{ route('login') }}" class="btn btn-outline">

                    Login

                </a>

                <a href="#contact" class="btn btn-dark">

                    Get a Quote

                </a>

            </div>

        </div>

    </header>

    {{-- ================= HERO ================= --}}
    <section class="hero">
        <div class="hero-dark" aria-hidden="true">
            <div class="hero-grid" id="heroGrid"></div>
        </div>
        <div class="container hero-inner">
        <div class="hero-left">
            <span class="eyebrow">Port Harcourt, Nigeria · Security · Telecom · ICT</span>
            <h1>Every camera, cable, and connection — <span class="hl">built to hold.</span></h1>
            <p class="lede">Xtream Services Limited designs, installs, and maintains the CCTV, telecommunications, fibre and IT systems that offices, homes, and industries depend on every day.</p>
            <div class="hero-actions">
            <a href="#contact" class="btn btn-primary">Request a site assessment</a>
            <a href="tel:+2348099300040" class="btn btn-ghost" style="border-color:rgba(15,30,59,.18);color:var(--navy-900);">Call +234 809 930 0040</a>
            </div>
            <div class="trust-row">
            <div class="trust-item">
                <span class="ic">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 3 6v6c0 5 4 9 9 10 5-1 9-5 9-10V6l-9-4Z"/></svg>
                </span>
                <div><span>Secure</span><small>Solutions you can trust</small></div>
            </div>
            <div class="trust-item">
                <span class="ic">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12 16 8"/><circle cx="12" cy="12" r="9"/></svg>
                </span>
                <div><span>Reliable</span><small>Performance you can count on</small></div>
            </div>
            <div class="trust-item">
                <span class="ic">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="2"/><circle cx="5" cy="19" r="2"/><circle cx="19" cy="19" r="2"/><path d="M12 7v5m0 0-5.5 5M12 12l5.5 5"/></svg>
                </span>
                <div><span>Connected</span><small>Bridging gaps, building networks</small></div>
            </div>
            </div>
        </div>

        <div class="hero-right">
            <div class="status-card">
            <div class="sc-head">
                <span class="live"><span class="pulse-dot"></span> Monitoring active</span>
                <span class="id">XTS · NOC‑01</span>
            </div>
            <div class="status-row"><span>CCTV network</span><span class="val ok">ONLINE</span></div>
            <div class="status-row"><span>Fibre link integrity</span><span class="val ok">STABLE</span></div>
            <div class="status-row"><span>Telecom uptime</span><span class="val blue">NOMINAL</span></div>
            <div class="status-row"><span>ICT infrastructure</span><span class="val ok">SECURED</span></div>
            <div class="status-row"><span>Support desk</span><span class="val warn">24/7 STANDBY</span></div>
            <div class="sc-foot">One partner, every layer. <strong>Xtream Services</strong> keeps your surveillance, network, and systems running — quietly, in the background, always on.</div>
            </div>
        </div>
        </div>
    </section>

  {{-- ================= SERVICES ================= --}}
    <section class="section services" id="services">
        <div class="container light-on-dark">
        <div class="section-head">
            <span class="eyebrow">Our services</span>
            <h2>Five disciplines. One accountable partner.</h2>
            <p>From the camera on the wall to the software behind the front desk, each service is delivered by the same team — so nothing gets lost between installers, engineers, and support.</p>
        </div>

        <div class="svc-grid">
            <div class="svc-card">
            <span class="num">01 / SURVEILLANCE</span>
            <div class="svc-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h11l4-3v14l-4-3H3z"/><path d="M14 9v6"/><circle cx="19" cy="12" r="1"/></svg>
            </div>
            <h3>Security Surveillance</h3>
            <p>Supply, installation, and configuration of CCTV systems for offices, homes, industries, and public facilities — built for real‑time monitoring.</p>
            </div>

            <div class="svc-card">
            <span class="num">02 / TELECOM</span>
            <div class="svc-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v6"/><path d="M12 8 5 20h14L12 8Z"/><path d="M8.5 4.5a5 5 0 0 1 7 0M6 2.5a8.5 8.5 0 0 1 12 0"/></svg>
            </div>
            <h3>Telecommunications</h3>
            <p>End‑to‑end network design, deployment, and optimisation, so voice and data move without interruption.</p>
            </div>

            <div class="svc-card">
            <span class="num">03 / SOFTWARE &amp; ICT</span>
            <div class="svc-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/><circle cx="16" cy="10" r="1.6"/></svg>
            </div>
            <h3>Software &amp; ICT Solutions</h3>
            <p>Custom enterprise systems, EMR/ERP builds, and IT infrastructure engineered around how your team actually works.</p>
            </div>

            <div class="svc-card">
            <span class="num">04 / FIBRE</span>
            <div class="svc-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 14c4 4 12 4 16 0"/><path d="M4 10c4-4 12-4 16 0"/><circle cx="12" cy="12" r="1.4"/></svg>
            </div>
            <h3>Fibre Optic Services</h3>
            <p>Cable installation, splicing, and testing for high‑speed, low‑loss data transmission that holds under load.</p>
            </div>

            <div class="svc-card">
            <span class="num">05 / SUPPORT</span>
            <div class="svc-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 13a8 8 0 0 1 16 0"/><rect x="2" y="13" width="5" height="6" rx="1.5"/><rect x="17" y="13" width="5" height="6" rx="1.5"/><path d="M20 19a4 4 0 0 1-4 3h-2"/></svg>
            </div>
            <h3>Support &amp; Maintenance</h3>
            <p>Ongoing technical support and after‑sales service, so systems keep running long after installation day.</p>
            </div>

            <div class="svc-card" style="display:flex;flex-direction:column;justify-content:center;">
            <h3 style="margin-bottom:14px;">Not sure where to start?</h3>
            <p style="margin-bottom:22px;">Tell us what you're protecting or connecting — we'll recommend the right combination.</p>
            <a href="#contact" class="btn btn-primary" style="align-self:flex-start;">Talk to an engineer</a>
            </div>
        </div>
        </div>
    </section>

    {{-- ================= WHY ================= --}}
    <section class="section why" id="why">
        <div class="container why-grid">
        <div class="why-visual">
            <div class="core">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="m12 2 8.5 5v10L12 22l-8.5-5V7L12 2Z"/><path d="M12 12v10M3.5 7 12 12l8.5-5"/></svg>
            </div>
        </div>
        <div class="why-list">
            <div class="section-head" style="margin-bottom:8px;">
            <span class="eyebrow">Why Xtream</span>
            <h2>Built for the client who can't afford downtime.</h2>
            </div>
            <div class="why-item">
            <span class="tag">01</span>
            <div><h4>One team, every layer</h4><p>Cameras, cabling, network, and software come from a single accountable team — not four vendors pointing at each other.</p></div>
            </div>
            <div class="why-item">
            <span class="tag">02</span>
            <div><h4>Engineered, not just installed</h4><p>Every job starts with a site assessment, so the system fits the building — not the other way around.</p></div>
            </div>
            <div class="why-item">
            <span class="tag">03</span>
            <div><h4>Support that continues</h4><p>Installation is day one. Ongoing maintenance keeps footage, fibre, and networks reliable long after.</p></div>
            </div>
        </div>
        </div>
    </section>

    <section class="trusted-section">
        <div class="container">

            <div class="section-header">
                <span class="section-tag">Trusted Across Nigeria</span>
                <h2>Businesses trust Xtream to keep their systems running.</h2>
                <p>
                    From corporate offices to schools, estates and industrial facilities,
                    we provide dependable CCTV, fibre, telecommunications and ICT solutions.
                </p>
            </div>

            <div class="trusted-grid">

                <div class="trust-card">
                    <div class="trust-icon">🏢</div>
                    <h3>Corporate Offices</h3>
                    <span>Enterprise Security</span>
                </div>

                <div class="trust-card">
                    <div class="trust-icon">🏫</div>
                    <h3>Schools</h3>
                    <span>Campus Surveillance</span>
                </div>

                <div class="trust-card">
                    <div class="trust-icon">🏨</div>
                    <h3>Hotels</h3>
                    <span>24/7 Monitoring</span>
                </div>

                <div class="trust-card">
                    <div class="trust-icon">🏭</div>
                    <h3>Industries</h3>
                    <span>Infrastructure Protection</span>
                </div>

                <div class="trust-card">
                    <div class="trust-icon">🏘️</div>
                    <h3>Residential Estates</h3>
                    <span>Access Control</span>
                </div>

                <div class="trust-card">
                    <div class="trust-icon">🏥</div>
                    <h3>Healthcare</h3>
                    <span>Critical Monitoring</span>
                </div>

            </div>

        </div>
    </section>

    <section class="why-choose" id="why">
        <div class="container">

            <div class="section-header">
                <span class="section-tag">Why Choose Xtream</span>
                <h2>Technology that protects today and scales for tomorrow.</h2>
                <p>
                    Since our founding in December 2021, we've helped businesses,
                    organizations, and homeowners deploy secure, reliable, and
                    future-ready technology solutions.
                </p>
            </div>

            <div class="why-grid">

                <div class="why-card featured">
                    <span class="badge">Founded</span>

                    <h3>19 December 2021</h3>

                    <p>
                        Built with one mission — delivering smart, secure,
                        and connected technology solutions businesses
                        can depend on every day.
                    </p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L4 6v6c0 5.2 3.4 9.2 8 10 4.6-.8 8-4.8 8-10V6l-8-4z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                    </div>

                    <h3>Security First</h3>

                    <p>
                        Every CCTV, network and fibre installation is designed
                        with reliability, uptime and long-term protection in mind.
                    </p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2L3 14h7l-1 8 12-14h-7l1-6z"/>
                        </svg>
                    </div>

                    <h3>Rapid Deployment</h3>

                    <p>
                        From planning to installation, projects are completed
                        efficiently without compromising quality.
                    </p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="M3 12h18"/>
                            <path d="M12 3c3 3 3 15 0 18"/>
                            <path d="M12 3c-3 3-3 15 0 18"/>
                        </svg>
                    </div>

                    <h3>Complete Solutions</h3>

                    <p>
                        CCTV, telecommunications, fibre optics, networking,
                        software and ICT—all from one trusted partner.
                    </p>
                </div>
            </div>

            <div class="stats-grid">

                <div class="stat-box">
                    <h2>2021</h2>
                    <span>Company Founded</span>
                </div>

                <div class="stat-box">
                    <h2>24/7</h2>
                    <span>Support Available</span>
                </div>

                <div class="stat-box">
                    <h2>5+</h2>
                    <span>Core Service Areas</span>
                </div>

                <div class="stat-box">
                    <h2>100%</h2>
                    <span>Commitment to Quality</span>
                </div>

            </div>

        </div>
    </section>

    <section class="plans-section" id="plans">

        <div class="container">

            <div class="section-header">

                <span class="section-tag">
                    Maintenance & Support
                </span>

                <h2>
                    Keep your systems performing at their best.
                </h2>

                <p>
                    Whether you need routine inspections or complete infrastructure
                    management, Xtream Services provides flexible maintenance plans
                    to keep your security, networking and ICT systems operating
                    efficiently.
                </p>

            </div>

            <div class="plans-grid">

                <!-- Basic -->

                <div class="plan-card">

                    <span class="plan-type">Basic Care</span>

                    <h3>Preventive Maintenance</h3>

                    <p>
                        Perfect for homes and small businesses needing scheduled
                        system inspections.
                    </p>

                    <ul>

                        <li>✔ Quarterly inspections</li>
                        <li>✔ CCTV health check</li>
                        <li>✔ Network diagnostics</li>
                        <li>✔ Software updates</li>
                        <li>✔ Phone support</li>

                    </ul>

                    <a href="#contact" class="plan-btn">
                        Get Started
                    </a>

                </div>

                <!-- Popular -->

                <div class="plan-card featured">

                    <div class="popular">
                        Most Popular
                    </div>

                    <span class="plan-type">
                        Business Plus
                    </span>

                    <h3>Managed Support</h3>

                    <p>
                        Designed for offices, schools, hotels and medium-sized
                        businesses requiring ongoing technical support.
                    </p>

                    <ul>

                        <li>✔ Monthly maintenance</li>
                        <li>✔ Priority support</li>
                        <li>✔ Emergency call-outs</li>
                        <li>✔ Fibre & network optimisation</li>
                        <li>✔ CCTV monitoring checks</li>
                        <li>✔ System reports</li>

                    </ul>

                    <a href="#contact" class="plan-btn">
                        Request Quote
                    </a>

                </div>

                <!-- Enterprise -->

                <div class="plan-card">

                    <span class="plan-type">
                        Enterprise
                    </span>

                    <h3>Infrastructure Management</h3>

                    <p>
                        Complete maintenance for large organisations,
                        industrial facilities and multi-site deployments.
                    </p>

                    <ul>

                        <li>✔ 24/7 support</li>
                        <li>✔ Dedicated engineer</li>
                        <li>✔ Preventive servicing</li>
                        <li>✔ Priority response</li>
                        <li>✔ Performance reporting</li>
                        <li>✔ Custom SLA</li>

                    </ul>

                    <a href="#contact" class="plan-btn">
                        Contact Sales
                    </a>

                </div>

            </div>

        </div>

    </section>

    <section class="testimonials-section" id="testimonials">

        <div class="container">

            <div class="section-header">

                <span class="section-tag">Testimonials</span>

                <h2>Trusted by Businesses Across Nigeria</h2>

                <p>
                    Our clients trust us to deliver secure, reliable and future-ready
                    technology solutions that keep their businesses connected and protected.
                </p>

            </div>

            <div class="testimonial-carousel">

                <!-- Previous -->

                <button class="carousel-btn prev" id="testimonialPrev">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="15 18 9 12 15 6"/>
                    </svg>

                </button>

                <!-- Slides -->

                <div class="testimonial-wrapper">

                    <div class="testimonial-track" id="testimonialTrack">

                        <!-- CARD 1 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                Xtream Services delivered our CCTV installation
                                professionally. The quality of work exceeded
                                expectations and support has been outstanding.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=12" alt="">

                                <div>

                                    <h4>John Adebayo</h4>

                                    <span>Operations Manager</span>

                                </div>

                            </div>

                        </div>

                        <!-- CARD 2 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                Fibre deployment was completed ahead of schedule.
                                Communication throughout the project was excellent.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=32" alt="">

                                <div>

                                    <h4>Grace Williams</h4>

                                    <span>IT Administrator</span>

                                </div>

                            </div>

                        </div>

                        <!-- CARD 3 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                Their maintenance team responds quickly whenever
                                we need assistance. Reliable service every time.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=25" alt="">

                                <div>

                                    <h4>Michael Okafor</h4>

                                    <span>Estate Manager</span>

                                </div>

                            </div>

                        </div>

                        <!-- CARD 4 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                The structured cabling project was completed with
                                exceptional attention to detail.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=47" alt="">

                                <div>

                                    <h4>Daniel Peters</h4>

                                    <span>Project Supervisor</span>

                                </div>

                            </div>

                        </div>

                        <!-- CARD 5 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                Their CCTV solution has given us complete peace
                                of mind. We can monitor everything remotely.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=56" alt="">

                                <div>

                                    <h4>Samuel Bello</h4>

                                    <span>Business Owner</span>

                                </div>

                            </div>

                        </div>

                        <!-- CARD 6 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                Professional engineers, quality equipment and
                                excellent after-sales support.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=18" alt="">

                                <div>

                                    <h4>Sarah Johnson</h4>

                                    <span>Facility Manager</span>

                                </div>

                            </div>

                        </div>

                        <!-- CARD 7 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                Their network optimization significantly improved
                                our office productivity.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=44" alt="">

                                <div>

                                    <h4>David Collins</h4>

                                    <span>Network Administrator</span>

                                </div>

                            </div>

                        </div>

                        <!-- CARD 8 -->

                        <div class="testimonial-card">

                            <div class="quote-mark">“</div>

                            <div class="stars">★★★★★</div>

                            <p>
                                One of the most dependable ICT companies we've
                                worked with. Highly recommended.
                            </p>

                            <div class="client">

                                <img src="https://i.pravatar.cc/150?img=63" alt="">

                                <div>

                                    <h4>Mary Eze</h4>

                                    <span>Procurement Officer</span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Next -->

                <button class="carousel-btn next" id="testimonialNext">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9 18 15 12 9 6"/>
                    </svg>

                </button>

            </div>

            <!-- Dots -->

            <div class="testimonial-dots" id="testimonialDots"></div>

        </div>

    </section>

    <section class="projects-section" id="projects">

        <div class="container">

            <div class="section-header">

                <span class="section-tag">
                    Featured Projects
                </span>

                <h2>
                    Delivering reliable technology solutions across industries.
                </h2>

                <p>
                    Every project reflects our commitment to security,
                    connectivity and long-term reliability for businesses,
                    institutions and residential developments.
                </p>

            </div>

            <div class="projects-grid">

                <!-- LARGE PROJECT -->

                <article class="project-card large">

                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80">

                    <div class="project-overlay">

                        <span class="project-category">
                            CCTV Infrastructure
                        </span>

                        <h3>
                            Enterprise Surveillance Deployment
                        </h3>

                        <p>
                            Complete CCTV installation, remote monitoring
                            and structured network integration for a
                            corporate facility.
                        </p>

                        <div class="project-tags">

                            <span>CCTV</span>

                            <span>Networking</span>

                            <span>Security</span>

                        </div>

                    </div>

                </article>

                <!-- LARGE PROJECT -->

                <article class="project-card large">

                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1200&q=80">

                    <div class="project-overlay">

                        <span class="project-category">
                            Fibre Optics
                        </span>

                        <h3>
                            High-Speed Fibre Backbone
                        </h3>

                        <p>
                            Fibre optic installation and backbone deployment
                            providing fast and reliable connectivity.
                        </p>

                        <div class="project-tags">

                            <span>Fibre</span>

                            <span>Infrastructure</span>

                            <span>Networking</span>

                        </div>

                    </div>

                </article>

                <!-- SMALL -->

                <article class="project-card">

                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80">

                    <div class="project-overlay">

                        <span class="project-category">
                            ICT
                        </span>

                        <h3>
                            Modern Server Room
                        </h3>

                    </div>

                </article>

                <!-- SMALL -->

                <article class="project-card">

                    <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?auto=format&fit=crop&w=800&q=80">

                    <div class="project-overlay">

                        <span class="project-category">
                            Telecommunications
                        </span>

                        <h3>
                            Structured Cabling
                        </h3>

                    </div>

                </article>

                <!-- SMALL -->

                <article class="project-card">

                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80">

                    <div class="project-overlay">

                        <span class="project-category">
                            Smart Security
                        </span>

                        <h3>
                            Access Control System
                        </h3>

                    </div>

                </article>

            </div>

        </div>

    </section>

   <section class="faq-section" id="faq">
        <div class="container">

            <div class="faq-wrapper">

                <!-- LEFT SIDE -->
                <div class="faq-left">

                    <div class="faq-image">

                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80"
                            alt="Xtream Services Engineer">

                        <div class="floating-card">

                            <div class="fc-top">
                                <span class="pulse-dot"></span>
                                Support Available
                            </div>

                            <h3>24/7 Technical Assistance</h3>

                            <p>
                                Our engineers are ready to provide installation,
                                maintenance and emergency support whenever your
                                business needs it.
                            </p>

                            <ul>

                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>

                                    CCTV Systems
                                </li>

                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>

                                    Fibre Optics
                                </li>

                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>

                                    ICT Infrastructure
                                </li>

                                <li>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>

                                    Telecommunications
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- RIGHT SIDE -->
                <div class="faq-right">

                    <div class="section-header left">

                        <span class="section-tag">
                            Frequently Asked Questions
                        </span>

                        <h2>
                            Everything you need to know before working with Xtream.
                        </h2>

                        <p>
                            Still have questions? Here are some of the most common
                            things our clients ask before starting a project.
                        </p>

                    </div>

                    <div class="faq-list">

                        <div class="faq-item active">

                            <button class="faq-question">

                                <span>
                                    Do you install CCTV systems for homes and businesses?
                                </span>

                                <span class="faq-icon">+</span>

                            </button>

                            <div class="faq-answer">

                                <p>
                                    Yes. We install CCTV solutions for homes,
                                    offices, schools, estates, hotels and industrial
                                    facilities using high-quality surveillance
                                    equipment.
                                </p>

                            </div>

                        </div>

                        <div class="faq-item">

                            <button class="faq-question">

                                <span>
                                    Do you provide maintenance after installation?
                                </span>

                                <span class="faq-icon">+</span>

                            </button>

                            <div class="faq-answer">

                                <p>
                                    Absolutely. We provide preventive maintenance,
                                    troubleshooting, upgrades and ongoing technical
                                    support to keep your systems operating at peak
                                    performance.
                                </p>

                            </div>

                        </div>

                        <div class="faq-item">

                            <button class="faq-question">

                                <span>
                                    Can I monitor my CCTV remotely?
                                </span>

                                <span class="faq-icon">+</span>

                            </button>

                            <div class="faq-answer">

                                <p>
                                    Yes. We configure secure remote access so you
                                    can monitor your property from your phone,
                                    tablet or computer wherever you are.
                                </p>

                            </div>

                        </div>

                        <div class="faq-item">

                            <button class="faq-question">

                                <span>
                                    Do you install fibre optic networks?
                                </span>

                                <span class="faq-icon">+</span>

                            </button>

                            <div class="faq-answer">

                                <p>
                                    Yes. Our team handles fibre installation,
                                    fusion splicing, testing and structured cabling
                                    for businesses and institutions.
                                </p>

                            </div>

                        </div>

                        <div class="faq-item">

                            <button class="faq-question">

                                <span>
                                    Which areas do you cover?
                                </span>

                                <span class="faq-icon">+</span>

                            </button>

                            <div class="faq-answer">

                                <p>
                                    Xtream Services is based in Lagos and delivers
                                    projects across Nigeria depending on client
                                    requirements.
                                </p>

                            </div>

                        </div>

                        <div class="faq-item">

                            <button class="faq-question">

                                <span>
                                    How do I request a quotation?
                                </span>

                                <span class="faq-icon">+</span>

                            </button>

                            <div class="faq-answer">

                                <p>
                                    Simply contact us by phone, email or through
                                    the enquiry form on this website and our team
                                    will arrange a consultation and site assessment.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- ================= CTA BAND ================= --}}
    <section class="container" style="padding-bottom:0;">
        <div class="cta-band">
        <div>
            <h3>Let's power your world with innovative technology.</h3>
            <p>Get a free site assessment and a quote tailored to your building.</p>
        </div>
        <div class="actions">
            <a href="#contact" class="btn btn-white">Request a quote</a>
            <a href="tel:+2348099300040" class="btn btn-ghost">Call now</a>
        </div>
        </div>
    </section>

    {{-- ================= CONTACT ================= --}}
    <section class="section contact" id="contact">
        <div class="container contact-grid">
        <div class="contact-info">
            <span class="eyebrow" style="color:var(--blue-400);margin-bottom:16px;display:inline-flex;">Get in touch</span>
            <h2>Tell us what you need secured or connected.</h2>
            <p>Reach out directly, or send the details through the form and an engineer will get back to you.</p>

            <div class="contact-line">
            <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8 9.9a16 16 0 0 0 6 6l1.4-1.4a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.8 2Z"/></svg></span>
            <div><small>Phone</small><a href="tel:+2349068589698">+234 906 858 9698</a></div>
            </div>
            <div class="contact-line">
            <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg></span>
            <div><small>Email</small><a href="mailto:info@xtreamservices.com">info@xtreamservicesltd.com</a></div>
            </div>
            <div class="contact-line">
            <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a15 15 0 0 1 0 18 15 15 0 0 1 0-18Z"/></svg></span>
            <div><small>Web</small><a href="https://www.xtreamservicesltd.com">www.xtreamservicesltd.com</a></div>
            </div>
        </div>

        <form class="form-card" method="POST" action="">
            @csrf
            <div class="form-row">
            <div class="field">
                <label for="name">Full name</label>
                <input type="text" id="name" name="name" placeholder="Adaeze Okafor" required>
            </div>
            <div class="field">
                <label for="phone">Phone number</label>
                <input type="tel" id="phone" name="phone" placeholder="080X XXX XXXX" required>
            </div>
            </div>
            <div class="form-row">
            <div class="field full">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="you@company.com" required>
            </div>
            </div>
            <div class="form-row">
            <div class="field full">
                <label for="service">Service needed</label>
                <select id="service" name="service">
                <option>Security Surveillance (CCTV)</option>
                <option>Telecommunications</option>
                <option>Software &amp; ICT Solutions</option>
                <option>Fibre Optic Services</option>
                <option>Support &amp; Maintenance</option>
                <option>Not sure yet</option>
                </select>
            </div>
            </div>
            <div class="form-row">
            <div class="field full">
                <label for="message">Tell us about the site</label>
                <textarea id="message" name="message" placeholder="Location, building size, current setup..."></textarea>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Send request</button>
        </form>
        </div>
    </section>

    {{-- ================= FOOTER ================= --}}
    <footer>
        <div class="container footer-inner">
        <a href="#" class="brand">
            <span class="mark">X</span>
            <span>XTREAM<small>Delivering Smart, Secure, and Connected Solutions</small></span>
        </a>
        <div class="footer-links">
            <a href="#services">Services</a>
            <a href="#why">Why Xtream</a>
            <a href="#contact">Contact</a>
        </div>
        <span class="copy">© {{ date('Y') }} Xtream Services Limited. All rights reserved.</span>
        </div>
    </footer>


<script>
    document.addEventListener("DOMContentLoaded", () => {

    /* =========================================
        NAV TOGGLE (mobile menu)
    ========================================= */

    const navToggle = document.getElementById("navToggle");
    const navMenu = document.getElementById("navMenu");

    navToggle.addEventListener("click", () => {
        navMenu.classList.toggle("active");
    });

    document.querySelectorAll(".nav-links a").forEach(link => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("active");
        });
    });

    /* =========================================
        HERO GRID RIPPLE
    ========================================= */

    const grid = document.getElementById("heroGrid");
    const heroDark = document.querySelector(".hero-dark");

    const cellSize = 46;

    let cols, rows, cells;

    function buildGrid() {

        grid.innerHTML = "";

        cols = Math.ceil(heroDark.offsetWidth / cellSize);
        rows = Math.ceil(heroDark.offsetHeight / cellSize);

        grid.style.gridTemplateColumns = `repeat(${cols}, ${cellSize}px)`;

        for (let i = 0; i < cols * rows; i++) {

            const cell = document.createElement("div");
            cell.className = "grid-cell";
            grid.appendChild(cell);

        }

        cells = [...grid.children];

    }

    buildGrid();

    window.addEventListener("resize", buildGrid);

    heroDark.addEventListener("mousemove", e => {

        const rect = heroDark.getBoundingClientRect();

        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const col = Math.floor(x / cellSize);
        const row = Math.floor(y / cellSize);

        const center = row * cols + col;

        ripple(center);

    });

    function ripple(center) {

        const offsets = [
            [0, 1],
            [-1, .7], [1, .7],
            [-cols, .7], [cols, .7],
            [-cols - 1, .4], [-cols + 1, .4],
            [cols - 1, .4], [cols + 1, .4]
        ];

        offsets.forEach(([offset, strength]) => {

            const index = center + offset;

            if (!cells[index]) return;

            const cell = cells[index];

            cell.style.background = `rgba(47,127,255,${0.45 * strength})`;
            cell.style.boxShadow = `0 0 ${35 * strength}px rgba(47,127,255,.9)`;

            clearTimeout(cell.timer);

            cell.timer = setTimeout(() => {

                cell.style.background = "";
                cell.style.boxShadow = "";

            }, 250);

        });

    }

    /* =========================================
        FAQ ACCORDION
    ========================================= */

    document.querySelectorAll(".faq-question").forEach(question => {

        question.addEventListener("click", () => {

            const item = question.parentElement;

            document.querySelectorAll(".faq-item").forEach(faq => {

                if (faq !== item) {

                    faq.classList.remove("active");

                }

            });

            item.classList.toggle("active");

        });

    });

    /* =========================================
        TESTIMONIAL CAROUSEL
    ========================================= */

    const track = document.getElementById("testimonialTrack");
    const wrapper = document.querySelector(".testimonial-wrapper");
    const prev = document.getElementById("testimonialPrev");
    const next = document.getElementById("testimonialNext");
    const dotsContainer = document.getElementById("testimonialDots");

    let slides = [...track.children];

    let visible = getVisible();

    function getVisible() {
        if (window.innerWidth <= 768) return 1;
        if (window.innerWidth <= 1024) return 2;
        return 3;
    }

    // Clone first and last slides
    function setupCarousel() {

        track.innerHTML = "";

        slides.forEach(s => track.appendChild(s));

        const first = slides.slice(0, visible).map(x => x.cloneNode(true));
        const last = slides.slice(-visible).map(x => x.cloneNode(true));

        last.forEach(x => track.prepend(x));
        first.forEach(x => track.appendChild(x));

    }

    setupCarousel();

    let allSlides = [...track.children];

    let current = visible;

    let autoplay;

    function slideWidth() {

        const gap = 30;

        if (!allSlides.length) return 0;

        if (!allSlides[current]) return allSlides[0].offsetWidth + gap;

        return allSlides[current].offsetWidth + gap;

    }

    function move(animate = true) {

        track.style.transition = animate
            ? "transform .65s cubic-bezier(.22,.61,.36,1)"
            : "none";

        track.style.transform =
            `translateX(-${current * slideWidth()}px)`;

        updateDots();

        highlightCenter();

    }

    // dots
    function buildDots() {

        dotsContainer.innerHTML = "";

        slides.forEach((_, i) => {

            const dot = document.createElement("button");

            if (i === 0)
                dot.classList.add("active");

            dot.onclick = () => {

                current = i + visible;

                move();

            }

            dotsContainer.appendChild(dot);

        });

    }

    function updateDots() {

        const dots = [...dotsContainer.children];

        let index = current - visible;

        if (index >= slides.length)
            index = 0;

        if (index < 0)
            index = slides.length - 1;

        dots.forEach(d => d.classList.remove("active"));

        if (dots[index])
            dots[index].classList.add("active");

    }

    // Highlight middle card
    function highlightCenter() {

        allSlides.forEach(card => {

            card.style.transform = "scale(.95)";
            card.style.opacity = ".65";

        });

        const center = current + Math.floor(visible / 2);

        if (allSlides[center]) {

            allSlides[center].style.transform = "scale(1)";
            allSlides[center].style.opacity = "1";

        }

    }

    next.onclick = () => {

        current++;

        move();

    };

    prev.onclick = () => {

        current--;

        move();

    };

    track.addEventListener("transitionend", () => {

        if (current >= slides.length + visible) {

            current = visible;

            move(false);

        }

        if (current < visible) {

            current = slides.length + visible - 1;

            move(false);

        }

    });

    function start() {

        autoplay = setInterval(() => {

            current++;

            move();

        }, 5000);

    }

    function stop() {

        clearInterval(autoplay);

    }

    wrapper.addEventListener("mouseenter", stop);
    wrapper.addEventListener("mouseleave", start);

    window.addEventListener("resize", () => {

        visible = getVisible();

        track.style.transition = "none";

        track.style.transform = "";

        setupCarousel();

        allSlides = [...track.children];

        current = visible;

        move(false);

        buildDots();

    });

    buildDots();

    move(false);

    start();

});
</script>

</body>
</html>