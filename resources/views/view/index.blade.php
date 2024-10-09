@extends('view.layouts.view')

@section('title')
{{ env('APP_NAME') }}
@endsection
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2>
                        <span style="color:#71c55d">Green</span>
                        Space</h2>
                        <h4>Together We Thrive: Women and Nature United</h4>
                    <div class="d-flex">
                        <a href="/application" class="btn-get-started">Get Started</a>
                        <a style="color: red; font-weight: bold; text-decoration: none; animation: blink 2s infinite;" href="https://www.youtube.com/watch?v=kXf3PUicYkY&list=PLA0113C84B340CFAE" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a target="_blank" href="https://www.youtube.com/watch?v=luO8phhdfsA" class="stretched-link">Gender Disparities in Climate Impact</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a target="_blank" href="https://www.youtube.com/watch?v=YKmvdiXlDFI" class="stretched-link">Gender-Sensitive Climate Finance</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a target="_blank" href="https://www.youtube.com/watch?v=01RVCzHXZFU" class="stretched-link">Women as Climate Leaders</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a target="_blank" href="https://www.youtube.com/watch?v=VbEZ-SfyX38" class="stretched-link">Community Resilience and Gender</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->


    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
{{--                <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column align-items-center justify-content-center text-right text-bold">--}}
{{--                    <ol>--}}
{{--                        <li><h4> <a href="" class="mb-3 text-primary fw-bold fs-8">Sugd</a></h4></li>--}}
{{--                        <li><h4> <a href="" class="mb-3 text-primary fw-bold fs-8">Khatlon</a></h4></li>--}}
{{--                        <li><h4> <a href="" class="mb-3 text-primary fw-bold fs-8">Badakhshon</a></h4></li>--}}
{{--                        <li><h4> <a href="" class="mb-3 text-primary fw-bold fs-8">Nohiyai Tobei Markaz</a></h4></li>--}}
{{--                    </ol>--}}
{{--                </div>--}}
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h1 class="mb-3 text-center">Tajikistan</h1>
                    <div>
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div>
                        <h1 class="mb-3 text-center">Tajikistan</h1>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const ctx2 = document.getElementById('myChart2');
        const data = {
            labels: [
                'Sugd',
                'Khatlon',
                'Badakhshon',
                'Nohiyai Tobei Markaz'
            ],
            datasets: [{
                label: 'Count  of participants',
                data: [50, 35, 90.9, 55],
                backgroundColor: [
                    'rgb(98, 212, 75 )',
                    'rgb(58,224,246)',
                    'rgb(255,51,98)',
                    'rgb(255,252,0)'
                ],
                hoverOffset: 4
            }]
        };

        const data2 = {
            labels: [
                'Sugd',
                'Khatlon',
                'Badakhshon',
                'Nohiyai Tobei Markaz'
            ],
            datasets: [{
                label: 'Count  of participants',
                data: [50, 35, 90.9, 55],
                backgroundColor: [
                    'rgb(98, 212, 75 )',
                    'rgb(58,224,246)',
                    'rgb(255,51,98)',
                    'rgb(255,252,0)'
                ],
                hoverOffset: 4
            }]
        };

        // Конфигурация графика
        const config2 = {
            type: 'doughnut',
            data: data2,
        };
        const config3 = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        new Chart(ctx, config3);
        new Chart(ctx2, config2);
    </script>

    <section id="features" class="features section light-background">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <div><span class="description-title">Main Directions</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5 justify-content-between">

                <div class="col-xl-5 aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{asset('assets/assets/img//template/eStartup/features.svg')}}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-6 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Gender Disparities in Climate Impact</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Gender-Sensitive Climate Finance</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Women as Climate Leaders</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Community Resilience and Gender</h3>
                            </div>
                        </div><!-- End Feature Item -->

                    </div>
                </div>

            </div>

        </div>

    </section>



    <section id="faq" class="faq section light-background">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="content px-xl-5">
                        <h3><strong>Gender  </strong>and <br><strong>Climate</strong></h3>
                        <p>
                            Women and marginalized groups face the greatest impacts of climate change
                        </p>
                    </div>
                </div>

                <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">
                        <div class="faq-item">
                            <h3><span class="num">1.</span> <span>Climate Finance and Gender Aspects</span></h3>
                            <div class="faq-content">
                                <p>
                                    Climate finance should incorporate gender considerations to enhance effectiveness and equity.
                                    Gender-sensitive financing addresses the needs of women, men, and individuals of diverse gender identities.
                                    Access to climate-resilient enterprises and clean technologies empowers women to adapt to climate change and reduce emissions.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item faq-active">
                            <h3><span class="num">2.</span> <span>Role of Governments and Partners</span></h3>
                            <div class="faq-content">
                                <p>Governments should create conditions that enable women's access to financial products and services.

                                    The private sector and development partners must invest in projects that benefit women.

                                    Communities should scale up solutions that consider gender aspects.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item faq-active">
                            <h3><span class="num">3.</span> <span>Financial Institutions and Gender Aspects</span></h3>
                            <div class="faq-content">
                                <p>

                                    Financial institutions and partners can establish funds for women, enhance their financial literacy, and develop gender-sensitive financial products.

                                    Women and other marginalized groups must have an equal seat at the table in financial decision-making.

                                    Gender-sensitive climate finance contributes to creating a more equitable and sustainable future for all.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>
            </div>

        </div>

    </section>
@endsection
<style>
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.2; }
    }
</style>
