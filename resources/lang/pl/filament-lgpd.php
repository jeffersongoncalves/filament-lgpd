<?php

return [
    'page' => [
        'title' => 'Inwentarz danych osobowych',
        'navigation_label' => 'Dane osobowe',
    ],

    'fields' => [
        'column' => 'Kolumna',
        'category' => 'Kategoria',
        'purpose' => 'Cel',
        'legal_basis' => 'Podstawa prawna',
        'retention' => 'Retencja',
        'anonymize' => 'Anonimizacja',
    ],

    'category' => [
        'personal' => 'Osobowe',
        'sensitive' => 'Wrażliwe',
    ],

    'legal_basis' => [
        'consent' => 'Zgoda (art. 7, I)',
        'legal_obligation' => 'Obowiązek prawny (art. 7, II)',
        'public_policy' => 'Polityka publiczna (art. 7, III)',
        'research' => 'Badania (art. 7, IV)',
        'contract' => 'Wykonanie umowy (art. 7, V)',
        'exercise_of_rights' => 'Wykonywanie praw (art. 7, VI)',
        'life_protection' => 'Ochrona życia (art. 7, VII)',
        'health_protection' => 'Ochrona zdrowia (art. 7, VIII)',
        'legitimate_interest' => 'Prawnie uzasadniony interes (art. 7, IX)',
        'credit_protection' => 'Ochrona kredytu (art. 7, X)',
        'fraud_prevention' => 'Zapobieganie oszustwom (art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Wyczyść',
        'hash' => 'Hash',
        'mask' => 'Maskuj',
        'keep' => 'Zachowaj (obowiązek prawny)',
    ],

    'missing' => 'Nie zadeklarowano',
    'empty' => 'Brak zarejestrowanych modeli. Dodaj swoje modele do lgpd.models w config/lgpd.php.',
];
