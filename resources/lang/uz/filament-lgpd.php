<?php

return [
    'page' => [
        'title' => 'Shaxsiy ma\'lumotlar ro\'yxati',
        'navigation_label' => 'Shaxsiy ma\'lumotlar',
    ],

    'fields' => [
        'column' => 'Ustun',
        'category' => 'Toifa',
        'purpose' => 'Maqsad',
        'legal_basis' => 'Huquqiy asos',
        'retention' => 'Saqlash',
        'anonymize' => 'Anonimlashtirish',
    ],

    'category' => [
        'personal' => 'Shaxsiy',
        'sensitive' => 'Maxfiy',
    ],

    'legal_basis' => [
        'consent' => 'Rozilik (7-modda, I)',
        'legal_obligation' => 'Qonuniy majburiyat (7-modda, II)',
        'public_policy' => 'Davlat siyosati (7-modda, III)',
        'research' => 'Tadqiqot (7-modda, IV)',
        'contract' => 'Shartnomani bajarish (7-modda, V)',
        'exercise_of_rights' => 'Huquqlarni amalga oshirish (7-modda, VI)',
        'life_protection' => 'Hayotni himoya qilish (7-modda, VII)',
        'health_protection' => 'Sog\'liqni himoya qilish (7-modda, VIII)',
        'legitimate_interest' => 'Qonuniy manfaat (7-modda, IX)',
        'credit_protection' => 'Kreditni himoya qilish (7-modda, X)',
        'fraud_prevention' => 'Firibgarlikning oldini olish (11-modda, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Bo\'shatish',
        'hash' => 'Xesh',
        'mask' => 'Niqoblash',
        'keep' => 'Saqlab qolish (qonuniy saqlash)',
    ],

    'missing' => 'Ko\'rsatilmagan',
    'empty' => 'Ro\'yxatdan o\'tgan model yo\'q. Modellaringizni config/lgpd.php dagi lgpd.models ga qo\'shing.',
];
