@extends('view.layouts.view')
@section('title')
    About
@endsection

@section('content')

    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content aos-init aos-animate pt-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/about.png" class="mt-5" style="width:100%">
                </div>
                <div class="col-lg-6 content aos-init aos-animate" style="text-align: justify" data-aos="fade-up" data-aos-delay="100">
                    <p class="who-we-are">Who We Are</p>
                    <h3>About Green Space</h3>
                    <p>At Green Space, we are dedicated to exploring the intricate connections between gender, climate, and ecology. Our mission is to raise awareness about how climate change disproportionately affects women and marginalized communities, while also highlighting the critical role they play in driving sustainable solutions.</p>
                    <p>In recent years, issues such as gender-based violence exacerbated by climate crises, the impact of natural disasters on women's livelihoods, and the need for inclusive decision-making in climate policy have become increasingly urgent. We aim to address these topics through research, discussions, and community engagement, focusing on the unique challenges faced by women in different regions and contexts.</p>
                    <p>We also emphasize the importance of women's leadership in climate action, advocating for greater representation in environmental organizations and policy-making processes. By amplifying women's voices and experiences, we can promote innovative solutions that benefit both communities and ecosystems.</p>
                    <p>Join us as we delve into these pressing challenges and opportunities at the intersection of gender and climate. Together, we can foster a deeper understanding of these issues and inspire collective efforts toward a healthier planet for everyone.</p>
                </div>

            </div>

        </div>
    </section>


    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <div><span class="description-title">Our team</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="{{asset('assets/img/davlatjon.jpg')}}" alt="Avatar" class="avatar">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Hakimov Davlatjon</h3>
                        </a>
                        <p style="text-align: justify">Oversee team organization, ensure effective communication, make key decisions, represent the team, resolve conflicts, and manage resources efficiently.</p>
                        <a target="_blank" href="https://t.me/Davlat_Hakimov" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="{{asset('assets/img/muminjon.jpg')}}" alt="Avatar" class="avatar">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Fayziev Muminjon</h3>
                        </a>
                        <p style="text-align: justify">As a dedicated web development team lead, I bring extensive experience in managing projects and driving team success. With a strong foundation in both front-end and back-end technologies, my ultimate focus is on delivering high-quality solutions in OJSC Bank Eskhata</p>
                        <a target="_blank" href="https://t.me/muminf" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="{{asset('assets/img/n.jpg')}}" alt="Avatar" class="avatar">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Shahobov Nuriddin</h3>
                        </a>
                        <p style="text-align: justify">As a skilled middle PL/SQL and web developer, I specialize in creating efficient database solutions and dynamic web applications. With a solid foundation in SQL and programming languages, I excel in designing and optimizing database structures while ensuring seamless integration with front-end technologies.</p>
                        <a target="_blank" href="https://t.me/shahobovN" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="{{asset('assets/img/salmon.jpg')}}" alt="Avatar" class="avatar">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Narzulloev Salmon</h3>
                        </a>
                        <p style="text-align: justify">Positions: Graphic Designer and Business Analyst. Creating project designs and presentations, developing business processes, designing and BPMN diagrams of processes. Preliminary analysis and defining the next steps of the project.</p>
                        <a target="_blank" href="https://t.me/salmon_narzulloev_work" class="stretched-link"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="{{asset('assets/img/parviz.jpg')}}" alt="Avatar" class="avatar">
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Karimov Parviz</h3>
                        </a>
                        <p style="text-align: justify">Business Analyst. Creating project requirements, developing a business plan, assigning tasks to team members, and testing the developed product.</p>
                        <a target="_blank" href="https://t.me/ParvizKarimov_10" class="stretched-link"></a>
                    </div>
                </div>

            </div>

        </div>

    </section>



    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Contact</h2>
            <div><span>Need Help?</span> <span class="description-title">Contact Us</span></div>
        </div><!-- End Section Title -->

        <div class="container aos-init aos-animate" data-aos="fade" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Tajikistan, Khujang</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <a href="tel:+992927513838">+992 92 751 3838</a>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>fayzievmuminjon@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
@endsection
