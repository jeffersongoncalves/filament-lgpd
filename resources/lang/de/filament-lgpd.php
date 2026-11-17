<?php

return [
    'page' => [
        'title' => 'Verzeichnis personenbezogener Daten',
        'navigation_label' => 'Personenbezogene Daten',
    ],

    'fields' => [
        'column' => 'Spalte',
        'category' => 'Kategorie',
        'purpose' => 'Zweck',
        'legal_basis' => 'Rechtsgrundlage',
        'retention' => 'Aufbewahrung',
        'anonymize' => 'Anonymisierung',
    ],

    'category' => [
        'personal' => 'Personenbezogen',
        'sensitive' => 'Sensibel',
    ],

    'legal_basis' => [
        'consent' => 'Einwilligung (Art. 7, I)',
        'legal_obligation' => 'Rechtliche Verpflichtung (Art. 7, II)',
        'public_policy' => 'Öffentliche Aufgaben (Art. 7, III)',
        'research' => 'Forschung (Art. 7, IV)',
        'contract' => 'Vertragserfüllung (Art. 7, V)',
        'exercise_of_rights' => 'Ausübung von Rechten (Art. 7, VI)',
        'life_protection' => 'Schutz des Lebens (Art. 7, VII)',
        'health_protection' => 'Gesundheitsschutz (Art. 7, VIII)',
        'legitimate_interest' => 'Berechtigtes Interesse (Art. 7, IX)',
        'credit_protection' => 'Kreditschutz (Art. 7, X)',
        'fraud_prevention' => 'Betrugsprävention (Art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Leeren',
        'hash' => 'Hash',
        'mask' => 'Maskieren',
        'keep' => 'Behalten (gesetzliche Aufbewahrung)',
    ],

    'missing' => 'Nicht angegeben',
    'empty' => 'Keine Modelle registriert. Fügen Sie Ihre Modelle in config/lgpd.php unter lgpd.models hinzu.',
];
