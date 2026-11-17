<?php

return [
    'page' => [
        'title' => 'Inventaire des données personnelles',
        'navigation_label' => 'Données personnelles',
    ],

    'fields' => [
        'column' => 'Colonne',
        'category' => 'Catégorie',
        'purpose' => 'Finalité',
        'legal_basis' => 'Base légale',
        'retention' => 'Conservation',
        'anonymize' => 'Anonymisation',
    ],

    'category' => [
        'personal' => 'Personnelle',
        'sensitive' => 'Sensible',
    ],

    'legal_basis' => [
        'consent' => 'Consentement (art. 7, I)',
        'legal_obligation' => 'Obligation légale (art. 7, II)',
        'public_policy' => 'Politiques publiques (art. 7, III)',
        'research' => 'Recherche (art. 7, IV)',
        'contract' => 'Exécution d\'un contrat (art. 7, V)',
        'exercise_of_rights' => 'Exercice des droits (art. 7, VI)',
        'life_protection' => 'Protection de la vie (art. 7, VII)',
        'health_protection' => 'Protection de la santé (art. 7, VIII)',
        'legitimate_interest' => 'Intérêt légitime (art. 7, IX)',
        'credit_protection' => 'Protection du crédit (art. 7, X)',
        'fraud_prevention' => 'Prévention de la fraude (art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Vider',
        'hash' => 'Hachage',
        'mask' => 'Masquer',
        'keep' => 'Conserver (obligation légale)',
    ],

    'missing' => 'Non déclarée',
    'empty' => 'Aucun modèle enregistré. Ajoutez vos modèles à lgpd.models dans config/lgpd.php.',
];
