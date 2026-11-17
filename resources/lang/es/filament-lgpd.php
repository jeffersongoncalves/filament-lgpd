<?php

return [
    'page' => [
        'title' => 'Inventario de datos personales',
        'navigation_label' => 'Datos personales',
    ],

    'fields' => [
        'column' => 'Columna',
        'category' => 'Categoría',
        'purpose' => 'Finalidad',
        'legal_basis' => 'Base legal',
        'retention' => 'Retención',
        'anonymize' => 'Anonimización',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensible',
    ],

    'legal_basis' => [
        'consent' => 'Consentimiento (art. 7, I)',
        'legal_obligation' => 'Obligación legal (art. 7, II)',
        'public_policy' => 'Políticas públicas (art. 7, III)',
        'research' => 'Investigación (art. 7, IV)',
        'contract' => 'Ejecución de contrato (art. 7, V)',
        'exercise_of_rights' => 'Ejercicio de derechos (art. 7, VI)',
        'life_protection' => 'Protección de la vida (art. 7, VII)',
        'health_protection' => 'Tutela de la salud (art. 7, VIII)',
        'legitimate_interest' => 'Interés legítimo (art. 7, IX)',
        'credit_protection' => 'Protección del crédito (art. 7, X)',
        'fraud_prevention' => 'Prevención del fraude (art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Enmascarar',
        'keep' => 'Conservar (guarda legal)',
    ],

    'missing' => 'No declarada',
    'empty' => 'No hay modelos registrados. Añade tus modelos a lgpd.models en config/lgpd.php.',
];
