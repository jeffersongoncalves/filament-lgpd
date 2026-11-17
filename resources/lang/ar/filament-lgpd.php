<?php

return [
    'page' => [
        'title' => 'جرد البيانات الشخصية',
        'navigation_label' => 'البيانات الشخصية',
    ],

    'fields' => [
        'column' => 'العمود',
        'category' => 'الفئة',
        'purpose' => 'الغرض',
        'legal_basis' => 'الأساس القانوني',
        'retention' => 'الاحتفاظ',
        'anonymize' => 'التجهيل',
    ],

    'category' => [
        'personal' => 'شخصية',
        'sensitive' => 'حساسة',
    ],

    'legal_basis' => [
        'consent' => 'الموافقة (المادة 7، I)',
        'legal_obligation' => 'التزام قانوني (المادة 7، II)',
        'public_policy' => 'السياسات العامة (المادة 7، III)',
        'research' => 'البحث (المادة 7، IV)',
        'contract' => 'تنفيذ عقد (المادة 7، V)',
        'exercise_of_rights' => 'ممارسة الحقوق (المادة 7، VI)',
        'life_protection' => 'حماية الحياة (المادة 7، VII)',
        'health_protection' => 'حماية الصحة (المادة 7، VIII)',
        'legitimate_interest' => 'المصلحة المشروعة (المادة 7، IX)',
        'credit_protection' => 'حماية الائتمان (المادة 7، X)',
        'fraud_prevention' => 'منع الاحتيال (المادة 11، II، g)',
    ],

    'anonymize' => [
        'nullify' => 'إفراغ',
        'hash' => 'تجزئة',
        'mask' => 'إخفاء',
        'keep' => 'الإبقاء (احتفاظ قانوني)',
    ],

    'missing' => 'غير محدد',
    'empty' => 'لا توجد نماذج مسجلة. أضف نماذجك إلى lgpd.models في config/lgpd.php.',
];
