@extends('front.layouts.app')

@section('title', 'الرئيسية')

@section('content')


    <!-- طبقة التعتيم للجوال -->
    <div class="overlay" id="overlay"></div>

    <!-- محتوى تجريبي مع صور للعرض -->
    <section class="hero-section">
        <h1>مرحباً بكم في مستشفى تعز العام</h1>
        <p>رعاية صحية متكاملة بقلب يمني - أكثر من 30 عاماً من العطاء</p>
    </section>
    
    <!-- قسم صور تجريبي لتوضيح تأثير الدوران -->
    <h2 class="demo-text">بعض خدماتنا الطبية - جرب تمرير الماوس على الصور</h2>
    <div class="image-gallery">
        <div class="image-card"></div>
        <div class="image-card"></div>
        <div class="image-card"></div>
    </div>

@endsection