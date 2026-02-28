
        // تشغيل قائمة الجوال
        const menuToggle = document.getElementById('menuToggle');
        const navContainer = document.getElementById('navContainer');
        const overlay = document.getElementById('overlay');
        
        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation(); // منع انتشار الحدث
            navContainer.classList.toggle('active');
            overlay.classList.toggle('active');
            
            // تغيير شكل زر القائمة
            const icon = menuToggle.querySelector('i');
            if (navContainer.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        overlay.addEventListener('click', () => {
            navContainer.classList.remove('active');
            overlay.classList.remove('active');
            const icon = menuToggle.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        });
        
        // منع إغلاق القائمة عند النقر داخلها
        navContainer.addEventListener('click', (e) => {
            e.stopPropagation();
        });
        
        // تشغيل القوائم المنسدلة في الجوال
        function toggleDropdown(element) {
            if (window.innerWidth <= 992) {
                const navItem = element.closest('.nav-item');
                navItem.classList.toggle('active');
                
                // تغيير شكل السهم
                const icon = element.querySelector('i');
                if (navItem.classList.contains('active')) {
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    icon.style.transform = 'rotate(-90deg)';
                }
            }
        }
        
        // إضافة الحدث لجميع روابط القوائم المنسدلة
        document.querySelectorAll('.nav-link .fa-chevron-down').forEach(icon => {
            icon.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const link = icon.closest('.nav-link');
                toggleDropdown(link);
            });
        });
        
        // إغلاق القائمة عند النقر على رابط (للروابط التي ليس لها قائمة منسدلة)
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                // إذا كان الرابط لا يحتوي على سهم (أي ليس له قائمة منسدلة)
                if (!link.querySelector('.fa-chevron-down') && window.innerWidth <= 992) {
                    navContainer.classList.remove('active');
                    overlay.classList.remove('active');
                    const icon = menuToggle.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });

        // إغلاق القائمة عند تغيير حجم الشاشة
        window.addEventListener('resize', () => {
            if (window.innerWidth > 992) {
                navContainer.classList.remove('active');
                overlay.classList.remove('active');
                const icon = menuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                
                // إعادة ضبط حالة العناصر النشطة
                document.querySelectorAll('.nav-item.active').forEach(item => {
                    item.classList.remove('active');
                });
                
                // إعادة ضبط دوران الأسهم
                document.querySelectorAll('.nav-link i').forEach(icon => {
                    icon.style.transform = '';
                });
            }
        });
