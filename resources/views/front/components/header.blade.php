  <header class="main-header">
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">
                    <!-- الصورة هنا ستقوم بالدوران عند تمرير الماوس -->
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='45' fill='%234A90E2'/%3E%3Ctext x='50' y='70' font-size='50' text-anchor='middle' fill='white' font-family='Arial'%3E🏥%3C/text%3E%3C/svg%3E" style="width: 60px; height: 60px; border-radius: 50%;" alt="مستشفى تعز العام">
                </div>
                <div class="logo-text">
                    <h1>مستشفى تعز العام</h1>
                    <span>Taiz General Hospital</span>
                </div>
            </div>

            <!-- زر القائمة للجوال -->
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>

            <!-- القائمة الرئيسية -->
            <div class="nav-container" id="navContainer">
                <!-- بحث للجوال -->
                <div class="mobile-search">
                    <input type="text" placeholder="ابحث في الموقع...">
                </div>
                <ul class="nav-menu">
                    <!-- الرئيسية -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-home"></i> الرئيسية
                        </a>
                    </li>
                    <!-- عن المستشفى -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> عنا <i class="fas fa-chevron-down"></i> </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> <i class="fas fa-history"></i> <span>نبذة عن المستشفى</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-eye"></i> <span>الرؤية والرسالة</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-certificate"></i> <span>الشهادات والاعتمادات</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-trophy"></i> <span>الجوائز والتكريمات</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-images"></i> <span>معرض الصور</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-video"></i> <span>الفيديوهات</span> </a>
                        </div>
                    </li>
                    <!-- الأقسام (Mega Menu) -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> الأقسام <i class="fas fa-chevron-down"></i> </a>
                        <div class="mega-menu">
                            <div class="mega-section">
                                <h4>الأقسام الطبية</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-heart"></i> قسم القلب</a></li>
                                    <li><a href="#"><i class="fas fa-brain"></i> قسم المخ والأعصاب</a></li>
                                    <li><a href="#"><i class="fas fa-bone"></i> قسم العظام</a></li>
                                    <li><a href="#"><i class="fas fa-lungs"></i> قسم الصدر</a></li>
                                    <li><a href="#"><i class="fas fa-kidney"></i> قسم الكلى</a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i> قسم العيون</a></li>
                                </ul>
                            </div>
                            <div class="mega-section">
                                <h4>الأقسام الجراحية</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-cut"></i> الجراحة العامة</a></li>
                                    <li><a href="#"><i class="fas fa-heart"></i> جراحة القلب</a></li>
                                    <li><a href="#"><i class="fas fa-brain"></i> جراحة المخ</a></li>
                                    <li><a href="#"><i class="fas fa-bone"></i> جراحة العظام</a></li>
                                    <li><a href="#"><i class="fas fa-tooth"></i> جراحة الفم</a></li>
                                    <li><a href="#"><i class="fas fa-procedures"></i> جراحة التجميل</a></li>
                                </ul>
                            </div>
                            <div class="mega-section">
                                <h4>الأقسام المساندة</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-flask"></i> المختبر</a></li>
                                    <li><a href="#"><i class="fas fa-x-ray"></i> الأشعة</a></li>
                                    <li><a href="#"><i class="fas fa-pharmacy"></i> الصيدلية</a></li>
                                    <li><a href="#"><i class="fas fa-tint"></i> بنك الدم</a></li>
                                    <li><a href="#"><i class="fas fa-heartbeat"></i> العلاج الطبيعي</a></li>
                                    <li><a href="#"><i class="fas fa-utensils"></i> التغذية</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- العيادات -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> العيادات <i class="fas fa-chevron-down"></i> </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> <i class="fas fa-stethoscope"></i> <span>عيادة الباطنة</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-heart"></i> <span>عيادة القلب</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-child"></i> <span>عيادة الأطفال</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-female"></i> <span>عيادة النساء</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-tooth"></i> <span>عيادة الأسنان</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-eye"></i> <span>عيادة العيون</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-ear-deaf"></i> <span>عيادة الأنف والأذن</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-bone"></i> <span>عيادة العظام</span> </a>
                        </div>
                    </li>
                    <!-- المراكز -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> المراكز <i class="fas fa-chevron-down"></i> </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> <i class="fas fa-heart"></i> <span>مركز القلب</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-brain"></i> <span>مركز الأورام</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-procedures"></i> <span>مركز الكلى والغسيل الكلوي</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-baby"></i> <span>مركز الخداج</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-flask"></i> <span>مركز الأبحاث</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-heartbeat"></i> <span>مركز التأهيل</span> </a>
                        </div>
                    </li>
                    <!-- الأجهزة -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> الأجهزة <i class="fas fa-chevron-down"></i> </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> <i class="fas fa-x-ray"></i> <span>الرنين المغناطيسي</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-camera"></i> <span>المقطعي CT Scan</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-wave-square"></i> <span>أجهزة الموجات فوق الصوتية</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-heart"></i> <span>قسطرة القلب</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-flask"></i> <span>أجهزة المختبر</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-lungs"></i> <span>أجهزة التنفس الصناعي</span> </a>
                        </div>
                    </li>
                    <!-- الإدارات مع إدارة التدريب -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> الإدارات <i class="fas fa-chevron-down"></i> </a>
                        <div class="mega-menu">
                            <div class="mega-section">
                                <h4>الإدارات الطبية</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-user-md"></i> إدارة الشؤون الطبية</a></li>
                                    <li><a href="#"><i class="fas fa-procedures"></i> إدارة التمريض</a></li>
                                    <li><a href="#"><i class="fas fa-flask"></i> إدارة المختبرات</a></li>
                                    <li><a href="#"><i class="fas fa-x-ray"></i> إدارة الأشعة</a></li>
                                    <li><a href="#"><i class="fas fa-pharmacy"></i> إدارة الصيدلية</a></li>
                                </ul>
                            </div>
                            <div class="mega-section">
                                <h4>الإدارات الإدارية</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-users"></i> إدارة الموارد البشرية</a></li>
                                    <li><a href="#"><i class="fas fa-money-bill"></i> إدارة المالية</a></li>
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i> إدارة المشتريات</a></li>
                                    <li><a href="#"><i class="fas fa-tools"></i> إدارة الصيانة</a></li>
                                    <li><a href="#"><i class="fas fa-shield-alt"></i> إدارة الأمن والسلامة</a></li>
                                </ul>
                            </div>
                            <div class="mega-section">
                                <h4>إدارات نوعية</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-chart-line"></i> إدارة الجودة</a></li>
                                    <li><a href="#"><i class="fas fa-laptop-medical"></i> إدارة المعلومات</a></li>
                                    <li><a href="#"><i class="fas fa-graduation-cap"></i> <strong>إدارة التدريب والتأهيل</strong></a></li>
                                    <li><a href="#"><i class="fas fa-microphone"></i> إدارة العلاقات العامة</a></li>
                                    <li><a href="#"><i class="fas fa-truck"></i> إدارة الخدمات العامة</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- الاستشاريين والأخصائيين -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> الاستشاريين <i class="fas fa-chevron-down"></i> </a>
                        <div class="mega-menu">
                            <div class="mega-section">
                                <h4>استشاريين</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-user-md"></i> استشاريو القلب</a></li>
                                    <li><a href="#"><i class="fas fa-user-md"></i> استشاريو المخ</a></li>
                                    <li><a href="#"><i class="fas fa-user-md"></i> استشاريو العظام</a></li>
                                    <li><a href="#"><i class="fas fa-user-md"></i> استشاريو الأطفال</a></li>
                                    <li><a href="#"><i class="fas fa-user-md"></i> استشاريو النساء</a></li>
                                </ul>
                            </div>
                            <div class="mega-section">
                                <h4>أخصائيين</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-user-nurse"></i> أخصائيي الباطنة</a></li>
                                    <li><a href="#"><i class="fas fa-user-nurse"></i> أخصائيي الجراحة</a></li>
                                    <li><a href="#"><i class="fas fa-user-nurse"></i> أخصائيي التخدير</a></li>
                                    <li><a href="#"><i class="fas fa-user-nurse"></i> أخصائيي الأشعة</a></li>
                                    <li><a href="#"><i class="fas fa-user-nurse"></i> أخصائيي المختبر</a></li>
                                </ul>
                            </div>
                            <div class="mega-section">
                                <h4>أطباء امتياز</h4>
                                <ul class="mega-links">
                                    <li><a href="#"><i class="fas fa-user-graduate"></i> أطباء الامتياز</a></li>
                                    <li><a href="#"><i class="fas fa-user-graduate"></i> برنامج التدريب</a></li>
                                    <li><a href="#"><i class="fas fa-user-graduate"></i> الزمالات</a></li>
                                    <li><a href="#"><i class="fas fa-user-graduate"></i> البورد العربي</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- الأخبار -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> الأخبار <i class="fas fa-chevron-down"></i> </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> <i class="fas fa-newspaper"></i> <span>آخر الأخبار</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-calendar-alt"></i> <span>الفعاليات</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-bullhorn"></i> <span>الإعلانات</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-award"></i> <span>إنجازات</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-hand-holding-heart"></i> <span>المبادرات</span> </a>
                        </div>
                    </li>
                    <!-- اتصل بنا -->
                    <li class="nav-item">
                        <a href="#" class="nav-link"> اتصل بنا <i class="fas fa-chevron-down"></i> </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> <i class="fas fa-map-marker-alt"></i> <span>الموقع</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-phone"></i> <span>أرقام الاتصال</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-envelope"></i> <span>البريد الإلكتروني</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-comment"></i> <span>الشكاوى والاقتراحات</span> </a>
                            <a href="#" class="dropdown-item"> <i class="fas fa-question-circle"></i> <span>الأسئلة الشائعة</span> </a>
                        </div>
                    </li>
                </ul>
                <!-- زر حجز موعد -->
                <div class="appointment-wrapper">
                    <a href="#" class="nav-link appointment-btn">
                        <i class="fas fa-calendar-check"></i> حجز موعد
                    </a>
                </div>
            </div>
        </div>
    </header>