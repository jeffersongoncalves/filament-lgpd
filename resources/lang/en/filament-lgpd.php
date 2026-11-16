<?php

return [
    'page' => [
        'title' => 'Personal data inventory',
        'navigation_label' => 'Personal data',
    ],

    'fields' => [
        'column' => 'Column',
        'category' => 'Category',
        'purpose' => 'Purpose',
        'legal_basis' => 'Legal basis',
        'retention' => 'Retention',
        'anonymize' => 'Anonymization',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensitive',
    ],

    'legal_basis' => [
        'consent' => 'Consent (art. 7, I)',
        'legal_obligation' => 'Legal obligation (art. 7, II)',
        'public_policy' => 'Public policy (art. 7, III)',
        'research' => 'Research (art. 7, IV)',
        'contract' => 'Contract (art. 7, V)',
        'exercise_of_rights' => 'Exercise of rights (art. 7, VI)',
        'life_protection' => 'Protection of life (art. 7, VII)',
        'health_protection' => 'Health protection (art. 7, VIII)',
        'legitimate_interest' => 'Legitimate interest (art. 7, IX)',
        'credit_protection' => 'Credit protection (art. 7, X)',
        'fraud_prevention' => 'Fraud prevention (art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Nullify',
        'hash' => 'Hash',
        'mask' => 'Mask',
        'keep' => 'Keep (legal retention)',
    ],

    'missing' => 'Not declared',
    'empty' => 'No models registered. Add your models to lgpd.models in config/lgpd.php.',
];
