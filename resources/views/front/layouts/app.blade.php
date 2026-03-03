

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
</head>
<body>

    @include('front.components.topbar')
    @include('front.components.header')

    @yield('content')

    <div class="overlay" id="overlay"></div>



     <!-- أزرار ثابتة للتواصل السريع -->
    <div style="position: fixed; bottom: 30px; left: 30px; z-index: 999;">
        <a href="#" style="background: #25D366; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 30px; box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4); transition: transform 0.3s; margin-bottom: 15px;">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="#" style="background: #1A4D8C; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 30px; box-shadow: 0 5px 20px rgba(26, 77, 140, 0.4); transition: transform 0.3s;">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    @include("front.components.footer")
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>
</html> 