<?php

return [
    'page' => [
        'title' => 'فهرست داده‌های شخصی',
        'navigation_label' => 'داده‌های شخصی',
    ],

    'fields' => [
        'column' => 'ستون',
        'category' => 'دسته',
        'purpose' => 'هدف',
        'legal_basis' => 'مبنای قانونی',
        'retention' => 'نگهداری',
        'anonymize' => 'ناشناس‌سازی',
    ],

    'category' => [
        'personal' => 'شخصی',
        'sensitive' => 'حساس',
    ],

    'legal_basis' => [
        'consent' => 'رضایت (ماده 7، I)',
        'legal_obligation' => 'تعهد قانونی (ماده 7، II)',
        'public_policy' => 'سیاست عمومی (ماده 7، III)',
        'research' => 'پژوهش (ماده 7، IV)',
        'contract' => 'اجرای قرارداد (ماده 7، V)',
        'exercise_of_rights' => 'اعمال حقوق (ماده 7، VI)',
        'life_protection' => 'حفاظت از جان (ماده 7، VII)',
        'health_protection' => 'حفاظت از سلامت (ماده 7، VIII)',
        'legitimate_interest' => 'منافع مشروع (ماده 7، IX)',
        'credit_protection' => 'حفاظت از اعتبار (ماده 7، X)',
        'fraud_prevention' => 'پیشگیری از تقلب (ماده 11، II، g)',
    ],

    'anonymize' => [
        'nullify' => 'خالی کردن',
        'hash' => 'هش',
        'mask' => 'پوشاندن',
        'keep' => 'نگه‌داشتن (نگهداری قانونی)',
    ],

    'missing' => 'اعلام نشده',
    'empty' => 'هیچ مدلی ثبت نشده است. مدل‌های خود را به lgpd.models در config/lgpd.php اضافه کنید.',
];
