<?php

return [
    'page' => [
        'title' => 'Kişisel veri envanteri',
        'navigation_label' => 'Kişisel veriler',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kategori',
        'purpose' => 'Amaç',
        'legal_basis' => 'Hukuki dayanak',
        'retention' => 'Saklama',
        'anonymize' => 'Anonimleştirme',
    ],

    'category' => [
        'personal' => 'Kişisel',
        'sensitive' => 'Hassas',
    ],

    'legal_basis' => [
        'consent' => 'Açık rıza (md. 7, I)',
        'legal_obligation' => 'Yasal yükümlülük (md. 7, II)',
        'public_policy' => 'Kamu politikası (md. 7, III)',
        'research' => 'Araştırma (md. 7, IV)',
        'contract' => 'Sözleşmenin ifası (md. 7, V)',
        'exercise_of_rights' => 'Hakların kullanılması (md. 7, VI)',
        'life_protection' => 'Hayatın korunması (md. 7, VII)',
        'health_protection' => 'Sağlığın korunması (md. 7, VIII)',
        'legitimate_interest' => 'Meşru menfaat (md. 7, IX)',
        'credit_protection' => 'Kredinin korunması (md. 7, X)',
        'fraud_prevention' => 'Dolandırıcılığın önlenmesi (md. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskele',
        'keep' => 'Koru (yasal saklama)',
    ],

    'missing' => 'Belirtilmemiş',
    'empty' => 'Kayıtlı model yok. Modellerinizi config/lgpd.php içindeki lgpd.models\'e ekleyin.',
];
