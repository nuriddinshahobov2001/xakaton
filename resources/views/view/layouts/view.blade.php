<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">
    <link href="{{asset("assets/img/favicon.ico")}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        .service-item .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }

        .service-item .avatar {
            width: 70px; /* Ширина аватарки */
            height: 70px; /* Высота аватарки */
            border-radius: 50%; /* Делает аватарку круглой */
            object-fit: cover; /* Обрезает изображение, чтобы оно полностью вписывалось в круг */
        }
        .form-check {
            width: 100%;
            height: 60px; /* Высота каждого варианта */
            display: flex;
            align-items: center;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
            cursor: pointer; /* Курсор указывает, что на элемент можно нажимать */
        }

        .form-check:hover {
            background-color: #f0f8ff; /* Цвет фона при наведении */
        }

        .form-check-input {
            display: none; /* Скрываем стандартный чекбокс */
        }

        .form-check-label {
            position: relative;
            padding-left: 30px; /* Отступ для создания пространства для кастомного чекбокса */
            cursor: pointer; /* Указатель на то, что элемент можно нажимать */
        }

        /* Стили кастомного чекбокса */
        .form-check-label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            transition: background-color 0.3s, border-color 0.3s;
        }

        /* Активный стиль при выборе */
        .form-check.active {
            background-color: #d1e7dd;
        }

        /* Кастомный чекбокс при выборе */
        .form-check-input:checked + .form-check-label::before {
            background-color: #21c824; /* Цвет фона при выборе */
        }

        /* Красная рамка, если нет ответа */
        .form-check.invalid {
            border: 1px solid #e87272; /* Красная рамка */
        }

        /* Кастомный чекбокс с красным цветом при невыборе */
        .form-check.invalid .form-check-label::before {
            border-color: #e87272; /* Красный цвет рамки */
        }

        /* Стили для кнопок */
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        /* Стили для прогресса */
        .progress-text {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }

    </style>
</head>

<body class="index-page">

@include('view.layouts.header')
    <main class="main">
        @yield('content')
    </main>
@include('view.layouts.footer')

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>


</body>

</html>
