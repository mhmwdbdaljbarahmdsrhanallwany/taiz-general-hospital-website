@extends('front.layouts.app')

@section('title', 'الرئيسية')

@section('content')


<!-- طبقة التعتيم للجوال -->
<div class="overlay" id="overlay"></div>

<!-- محتوى تجريبي مع صور للعرض -->
<section class="hero-section" id="home">
    <div class="hero-pattern"></div>
    <div class="hero-content">
        <div class="hero-text">
            <h2>صحتم أولاً<br>نحن هنا لخدمتكم</h2>
            <p>مستشفى تعز العام - صرح طبي متكامل يقدم أحدث الخدمات الطبية بأيدي أمهر الكوادر. من العطاء والتميز في خدمة
                المجتمع.</p>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">سرير</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">200+</span>
                    <span class="stat-label">طبيب استشاري</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">800+</span>
                    <span class="stat-label">كادر تمريضي</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
            alt="مستشفى تعز العام">
        <div class="hero-badge">
            <i class="fas fa-certificate"></i> معتمد دولياً
        </div>
    </div>
</section>

<!-- قسم صور تجريبي لتوضيح تأثير الدوران -->
{{-- <h2 class="demo-text">بعض خدماتنا الطبية - جرب تمرير الماوس على الصور</h2>
<div class="image-gallery">
    <div class="image-card"></div>
    <div class="image-card"></div>
    <div class="image-card"></div>
</div> --}}

<!-- ============================= -->
<!--        قسم الخدمات           -->
<!-- ============================= -->

    <!-- قسم الخدمات -->
    <section class="services-section" id="services">
        <div class="section-header">
            <h3>خدماتنا الطبية</h3>
            <p>نقدم أحدث الخدمات الطبية بأعلى معايير الجودة والسلامة</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h4>الطوارئ 24 ساعة</h4>
                <p>فريق طبي متخصص على مدار الساعة لاستقبال الحالات الطارئة</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <h4>العيادات التخصصية</h4>
                <p>جميع التخصصات الطبية تحت سقف واحد بأحدث الأجهزة</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-flask"></i>
                </div>
                <h4>المختبر والتحاليل</h4>
                <p>أحدث الأجهزة المعملية لتحاليل دقيقة وسريعة</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-x-ray"></i>
                </div>
                <h4>الأشعة والتشخيص</h4>
                <p>أجهزة أشعة رقمية حديثة للتصوير المقطعي والرنين</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-baby"></i>
                </div>
                <h4>النساء والولادة</h4>
                <p>رعاية متكاملة للأم والطفل بأحدث التقنيات</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-procedures"></i>
                </div>
                <h4>العناية المركزة</h4>
                <p>وحدات عناية مركزة مجهزة بأحدث الأجهزة</p>
            </div>
        </div>
    </section>

<!-- قسم الأطباء -->
    <section class="doctors-section" id="doctors">
        <div class="doctors-container">
            <div class="section-header">
                <h3>كادرنا الطبي</h3>
                <p>نخبة من أمهر الأطباء والاستشاريين في جميع التخصصات</p>
            </div>
            
            <div class="doctors-grid">
                <div class="doctor-card">
                    <div class="doctor-img">
                        <!-- صورة الدكتور -->
                        <img src="{{ asset('assets/front/images/d.png') }}" alt="">
                    </div>
                    <div class="doctor-info">
                        <h4>د. أحمد محمد</h4>
                        <p>استشاري جراحة القلب</p>
                        <div class="doctor-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="doctor-card">
                    <div class="doctor-img">
                        <img src="{{ asset('assets/front/images/d.png') }}" alt="">
                    </div>
                    <div class="doctor-info">
                        <h4>د. فاطمة علي</h4>
                        <p>استشارية أمراض النساء</p>
                        <div class="doctor-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="doctor-card">
                    <div class="doctor-img">
                        <!-- صورة الدكتور -->
                    </div>
                    <div class="doctor-info">
                        <h4>د. خالد عبدالله</h4>
                        <p>استشاري الأطفال</p>
                        <div class="doctor-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="doctor-card">
                    <div class="doctor-img">
                        <!-- صورة الدكتور -->
                    </div>
                    <div class="doctor-info">
                        <h4>د. محمد حسين</h4>
                        <p>استشاري العظام</p>
                        <div class="doctor-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div> 

            </div>
        </div>
    </section>

    
@endsection