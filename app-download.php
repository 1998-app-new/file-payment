<?php 
require_once 'includes/session.php'; 
include 'templates/header.php'; 
?>

<div class="container my-5" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h1 class="h3 mb-3">تحميل تطبيق النظام</h1>
                    <p class="text-muted mb-4">قم بتحميل وتثبيت التطبيق للاستفادة من جميع الميزات.</p>

                    <div class="row g-4 align-items-start">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <h2 class="h5">روابط التحميل</h2>
                                <div class="d-flex flex-wrap gap-2">
                                    <!-- استبدل مسار APK بالمسار الحقيقي عند توفره -->
                                    <a href="downloads/app-latest.apk" class="btn btn-primary">
                                        <i class="fas fa-download ms-1"></i> تحميل Android (APK)
                                    </a>
                                    <!-- رابط المتجر (اختياري) -->
                                    <a href="#" class="btn btn-outline-secondary disabled" tabindex="-1" aria-disabled="true">
                                        <i class="fab fa-google-play ms-1"></i> متجر Google Play (قريبًا)
                                    </a>
                                    <a href="#" class="btn btn-outline-secondary disabled" tabindex="-1" aria-disabled="true">
                                        <i class="fab fa-apple ms-1"></i> App Store (قريبًا)
                                    </a>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h2 class="h6">ملاحظات التثبيت على أجهزة Android</h2>
                                <ol class="mb-2">
                                    <li>بعد التحميل، افتح ملف <strong>APK</strong>.</li>
                                    <li>قد يُطلب منك تفعيل خيار <strong>التثبيت من مصادر غير معروفة</strong> لمرة واحدة.</li>
                                    <li>أكمل خطوات التثبيت ثم افتح التطبيق.</li>
                                </ol>
                            </div>

                            <div class="mb-4">
                                <h2 class="h6">أذونات التطبيق</h2>
                                <small class="text-muted">يمكنك تعديل الأذونات لاحقًا من إعدادات النظام.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
<?php include 'templates/footer.php'; ?>


