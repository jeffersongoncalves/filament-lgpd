<?php

return [
    'page' => [
        'title' => 'Реестр персональных данных',
        'navigation_label' => 'Персональные данные',
    ],

    'fields' => [
        'column' => 'Столбец',
        'category' => 'Категория',
        'purpose' => 'Цель',
        'legal_basis' => 'Правовое основание',
        'retention' => 'Хранение',
        'anonymize' => 'Анонимизация',
    ],

    'category' => [
        'personal' => 'Персональные',
        'sensitive' => 'Чувствительные',
    ],

    'legal_basis' => [
        'consent' => 'Согласие (ст. 7, I)',
        'legal_obligation' => 'Юридическая обязанность (ст. 7, II)',
        'public_policy' => 'Государственная политика (ст. 7, III)',
        'research' => 'Исследования (ст. 7, IV)',
        'contract' => 'Исполнение договора (ст. 7, V)',
        'exercise_of_rights' => 'Осуществление прав (ст. 7, VI)',
        'life_protection' => 'Защита жизни (ст. 7, VII)',
        'health_protection' => 'Охрана здоровья (ст. 7, VIII)',
        'legitimate_interest' => 'Законный интерес (ст. 7, IX)',
        'credit_protection' => 'Защита кредита (ст. 7, X)',
        'fraud_prevention' => 'Предотвращение мошенничества (ст. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Очистить',
        'hash' => 'Хеш',
        'mask' => 'Маскировать',
        'keep' => 'Сохранить (обязательное хранение)',
    ],

    'missing' => 'Не указано',
    'empty' => 'Нет зарегистрированных моделей. Добавьте модели в lgpd.models в config/lgpd.php.',
];
