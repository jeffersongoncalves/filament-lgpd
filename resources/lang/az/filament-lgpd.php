<?php

return [
    'page' => [
        'title' => 'Şəxsi məlumatların inventarı',
        'navigation_label' => 'Şəxsi məlumatlar',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kateqoriya',
        'purpose' => 'Məqsəd',
        'legal_basis' => 'Hüquqi əsas',
        'retention' => 'Saxlama',
        'anonymize' => 'Anonimləşdirmə',
    ],

    'category' => [
        'personal' => 'Şəxsi',
        'sensitive' => 'Həssas',
    ],

    'legal_basis' => [
        'consent' => 'Razılıq (mad. 7, I)',
        'legal_obligation' => 'Hüquqi öhdəlik (mad. 7, II)',
        'public_policy' => 'Dövlət siyasəti (mad. 7, III)',
        'research' => 'Tədqiqat (mad. 7, IV)',
        'contract' => 'Müqavilənin icrası (mad. 7, V)',
        'exercise_of_rights' => 'Hüquqların həyata keçirilməsi (mad. 7, VI)',
        'life_protection' => 'Həyatın qorunması (mad. 7, VII)',
        'health_protection' => 'Sağlamlığın qorunması (mad. 7, VIII)',
        'legitimate_interest' => 'Qanuni maraq (mad. 7, IX)',
        'credit_protection' => 'Kreditin qorunması (mad. 7, X)',
        'fraud_prevention' => 'Fırıldaqçılığın qarşısının alınması (mad. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskala',
        'keep' => 'Saxla (hüquqi saxlama)',
    ],

    'missing' => 'Göstərilməyib',
    'empty' => 'Qeydə alınmış model yoxdur. Modellərinizi config/lgpd.php-də lgpd.models-ə əlavə edin.',
];
