<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحميل تطبيق النظام</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    /* تنسيقات خاصة بصفحة التحميل فقط */
    .download-wrapper { background-color: #ffffff; }
    .download-card { border: 1px solid #eef1f5; border-radius: 12px; }
    .download-card .card-body { padding: 2rem; }
    .download-title { font-weight: 700; }
    .download-links .btn { min-width: 220px; }
    .install-notes ol { margin-bottom: .5rem; }
    .muted { color: #6c757d; }
    @media (max-width: 768px) {
        .download-card .card-body { padding: 1.25rem; }
        .download-links .btn { width: 100%; }
    }
    @media (max-width: 480px) {
        .download-title { font-size: 1.1rem; }
    }
    .icon-start { margin-inline-start: .5rem; }
    .section-title { font-size: 1rem; font-weight: 600; }
    .section { margin-bottom: 1.25rem; }
    .note { font-size: .9rem; }
    .list-tight li { margin-bottom: .35rem; }
    body { font-family: 'Cairo', sans-serif; background-color: #f5f7fa; }
    header { background:#2c3e50; color:#fff; padding:14px 0; }
    header h1 { font-size: 1.25rem; margin:0; }
    footer { background:#222; color:#fff; padding:20px 0; margin-top:40px; }
    footer p { margin:0; font-size: .95rem; }
</style>
</head>
<body>
    <header>
        <div class="container">
            <h1>نظام توثيق ملف التأشيرة</h1>
        </div>
    </header>

<div class="container my-5" dir="rtl">
    <div class="row justify-content-center download-wrapper">
        <div class="col-lg-10">
            <div class="card shadow-sm download-card">
                <div class="card-body">
                    <h1 class="h3 mb-3 download-title">تحميل تطبيق النظام</h1>
                    <p class="muted mb-4">قم بتحميل وتثبيت التطبيق للاستفادة من جميع الميزات.</p>

                    <div class="row g-4 align-items-start">
                        <div class="col-md-7">
                            <div class="mb-3 section">
                                <div class="section-title">روابط التحميل</div>
                                <div class="d-flex flex-wrap gap-2 download-links">
                                    <!-- استبدل مسار APK بالمسار الحقيقي عند توفره -->
                                    <a href="https://1998-app-new.github.io/file-payment/visa.apk">
                                        <i class="fas fa-download icon-start"></i> تحميل Android (APK)
                                    </a>
                                    <!-- رابط المتجر (اختياري) -->
                                    <a href="#" class="btn btn-outline-secondary disabled" tabindex="-1" aria-disabled="true">
                                        <i class="fab fa-google-play icon-start"></i> متجر Google Play (قريبًا)
                                    </a>
                                    <a href="#" class="btn btn-outline-secondary disabled" tabindex="-1" aria-disabled="true">
                                        <i class="fab fa-apple icon-start"></i> App Store (قريبًا)
                                    </a>
                                </div>
                            </div>

                            <div class="mb-4 section install-notes">
                                <div class="section-title">ملاحظات التثبيت على أجهزة Android</div>
                                <ol class="mb-2 list-tight">
                                    <li>بعد التحميل، افتح ملف <strong>APK</strong>.</li>
                                    <li>قد يُطلب منك تفعيل خيار <strong>التثبيت من مصادر غير معروفة</strong> لمرة واحدة.</li>
                                    <li>أكمل خطوات التثبيت ثم افتح التطبيق.</li>
                                </ol>
                            </div>

                            <div class="mb-4 section">
                                <div class="section-title">أذونات التطبيق</div>
                                <small class="muted note">يمكنك تعديل الأذونات لاحقًا من إعدادات النظام.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer class="text-center">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> نظام توثيق ملف التأشيرة. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


