<?php

return [
    'page' => [
        'title' => 'Реєстр персональних даних',
        'navigation_label' => 'Персональні дані',
    ],

    'fields' => [
        'column' => 'Стовпець',
        'category' => 'Категорія',
        'purpose' => 'Мета',
        'legal_basis' => 'Правова підстава',
        'retention' => 'Зберігання',
        'anonymize' => 'Анонімізація',
    ],

    'category' => [
        'personal' => 'Персональні',
        'sensitive' => 'Чутливі',
    ],

    'legal_basis' => [
        'consent' => 'Згода (ст. 7, I)',
        'legal_obligation' => 'Юридичний обов\'язок (ст. 7, II)',
        'public_policy' => 'Державна політика (ст. 7, III)',
        'research' => 'Дослідження (ст. 7, IV)',
        'contract' => 'Виконання договору (ст. 7, V)',
        'exercise_of_rights' => 'Здійснення прав (ст. 7, VI)',
        'life_protection' => 'Захист життя (ст. 7, VII)',
        'health_protection' => 'Охорона здоров\'я (ст. 7, VIII)',
        'legitimate_interest' => 'Законний інтерес (ст. 7, IX)',
        'credit_protection' => 'Захист кредиту (ст. 7, X)',
        'fraud_prevention' => 'Запобігання шахрайству (ст. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Очистити',
        'hash' => 'Хеш',
        'mask' => 'Маскувати',
        'keep' => 'Зберегти (обов\'язкове зберігання)',
    ],

    'missing' => 'Не вказано',
    'empty' => 'Немає зареєстрованих моделей. Додайте моделі до lgpd.models у config/lgpd.php.',
];
