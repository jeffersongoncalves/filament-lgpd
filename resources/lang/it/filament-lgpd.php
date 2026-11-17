<?php

return [
    'page' => [
        'title' => 'Inventario dei dati personali',
        'navigation_label' => 'Dati personali',
    ],

    'fields' => [
        'column' => 'Colonna',
        'category' => 'Categoria',
        'purpose' => 'Finalità',
        'legal_basis' => 'Base giuridica',
        'retention' => 'Conservazione',
        'anonymize' => 'Anonimizzazione',
    ],

    'category' => [
        'personal' => 'Personale',
        'sensitive' => 'Sensibile',
    ],

    'legal_basis' => [
        'consent' => 'Consenso (art. 7, I)',
        'legal_obligation' => 'Obbligo legale (art. 7, II)',
        'public_policy' => 'Politiche pubbliche (art. 7, III)',
        'research' => 'Ricerca (art. 7, IV)',
        'contract' => 'Esecuzione di un contratto (art. 7, V)',
        'exercise_of_rights' => 'Esercizio dei diritti (art. 7, VI)',
        'life_protection' => 'Tutela della vita (art. 7, VII)',
        'health_protection' => 'Tutela della salute (art. 7, VIII)',
        'legitimate_interest' => 'Legittimo interesse (art. 7, IX)',
        'credit_protection' => 'Tutela del credito (art. 7, X)',
        'fraud_prevention' => 'Prevenzione delle frodi (art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Svuota',
        'hash' => 'Hash',
        'mask' => 'Maschera',
        'keep' => 'Conserva (obbligo legale)',
    ],

    'missing' => 'Non dichiarata',
    'empty' => 'Nessun modello registrato. Aggiungi i tuoi modelli a lgpd.models in config/lgpd.php.',
];
