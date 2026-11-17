<?php

return [
    'page' => [
        'title' => 'Inventário de dados pessoais',
        'navigation_label' => 'Dados pessoais',
    ],

    'fields' => [
        'column' => 'Coluna',
        'category' => 'Categoria',
        'purpose' => 'Finalidade',
        'legal_basis' => 'Fundamento legal',
        'retention' => 'Retenção',
        'anonymize' => 'Anonimização',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'sensitive' => 'Sensível',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 7.º, I)',
        'legal_obligation' => 'Obrigação legal (art. 7.º, II)',
        'public_policy' => 'Políticas públicas (art. 7.º, III)',
        'research' => 'Investigação (art. 7.º, IV)',
        'contract' => 'Execução de contrato (art. 7.º, V)',
        'exercise_of_rights' => 'Exercício de direitos (art. 7.º, VI)',
        'life_protection' => 'Proteção da vida (art. 7.º, VII)',
        'health_protection' => 'Tutela da saúde (art. 7.º, VIII)',
        'legitimate_interest' => 'Interesse legítimo (art. 7.º, IX)',
        'credit_protection' => 'Proteção do crédito (art. 7.º, X)',
        'fraud_prevention' => 'Prevenção da fraude (art. 11.º, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (conservação legal)',
    ],

    'missing' => 'Não declarado',
    'empty' => 'Nenhum modelo registado. Adicione os seus modelos a lgpd.models em config/lgpd.php.',
];
