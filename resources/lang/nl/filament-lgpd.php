<?php

return [
    'page' => [
        'title' => 'Overzicht persoonsgegevens',
        'navigation_label' => 'Persoonsgegevens',
    ],

    'fields' => [
        'column' => 'Kolom',
        'category' => 'Categorie',
        'purpose' => 'Doel',
        'legal_basis' => 'Rechtsgrond',
        'retention' => 'Bewaring',
        'anonymize' => 'Anonimisering',
    ],

    'category' => [
        'personal' => 'Persoonlijk',
        'sensitive' => 'Gevoelig',
    ],

    'legal_basis' => [
        'consent' => 'Toestemming (art. 7, I)',
        'legal_obligation' => 'Wettelijke verplichting (art. 7, II)',
        'public_policy' => 'Overheidsbeleid (art. 7, III)',
        'research' => 'Onderzoek (art. 7, IV)',
        'contract' => 'Uitvoering van een overeenkomst (art. 7, V)',
        'exercise_of_rights' => 'Uitoefening van rechten (art. 7, VI)',
        'life_protection' => 'Bescherming van het leven (art. 7, VII)',
        'health_protection' => 'Bescherming van de gezondheid (art. 7, VIII)',
        'legitimate_interest' => 'Gerechtvaardigd belang (art. 7, IX)',
        'credit_protection' => 'Kredietbescherming (art. 7, X)',
        'fraud_prevention' => 'Fraudepreventie (art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Leegmaken',
        'hash' => 'Hash',
        'mask' => 'Maskeren',
        'keep' => 'Behouden (wettelijke bewaring)',
    ],

    'missing' => 'Niet opgegeven',
    'empty' => 'Geen modellen geregistreerd. Voeg je modellen toe aan lgpd.models in config/lgpd.php.',
];
