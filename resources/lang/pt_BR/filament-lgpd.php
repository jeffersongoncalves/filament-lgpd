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
        'legal_basis' => 'Base legal',
        'retention' => 'Retenção',
        'anonymize' => 'Anonimização',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'sensitive' => 'Sensível',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 7º, I)',
        'legal_obligation' => 'Obrigação legal (art. 7º, II)',
        'public_policy' => 'Políticas públicas (art. 7º, III)',
        'research' => 'Estudos por órgão de pesquisa (art. 7º, IV)',
        'contract' => 'Execução de contrato (art. 7º, V)',
        'exercise_of_rights' => 'Exercício regular de direitos (art. 7º, VI)',
        'life_protection' => 'Proteção da vida (art. 7º, VII)',
        'health_protection' => 'Tutela da saúde (art. 7º, VIII)',
        'legitimate_interest' => 'Legítimo interesse (art. 7º, IX)',
        'credit_protection' => 'Proteção do crédito (art. 7º, X)',
        'fraud_prevention' => 'Prevenção à fraude (art. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (guarda legal)',
    ],

    'missing' => 'Não declarada',
    'empty' => 'Nenhum modelo registrado. Adicione seus modelos em lgpd.models no config/lgpd.php.',
];
