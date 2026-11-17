<?php

return [
    'page' => [
        'title' => '个人数据清单',
        'navigation_label' => '个人数据',
    ],

    'fields' => [
        'column' => '列',
        'category' => '类别',
        'purpose' => '目的',
        'legal_basis' => '法律依据',
        'retention' => '保留期限',
        'anonymize' => '匿名化',
    ],

    'category' => [
        'personal' => '个人',
        'sensitive' => '敏感',
    ],

    'legal_basis' => [
        'consent' => '同意（第7条 I）',
        'legal_obligation' => '法定义务（第7条 II）',
        'public_policy' => '公共政策（第7条 III）',
        'research' => '研究（第7条 IV）',
        'contract' => '履行合同（第7条 V）',
        'exercise_of_rights' => '行使权利（第7条 VI）',
        'life_protection' => '保护生命（第7条 VII）',
        'health_protection' => '保护健康（第7条 VIII）',
        'legitimate_interest' => '合法利益（第7条 IX）',
        'credit_protection' => '信用保护（第7条 X）',
        'fraud_prevention' => '防止欺诈（第11条 II g）',
    ],

    'anonymize' => [
        'nullify' => '置空',
        'hash' => '哈希',
        'mask' => '掩码',
        'keep' => '保留（法定留存）',
    ],

    'missing' => '未声明',
    'empty' => '尚未注册模型。请在 config/lgpd.php 的 lgpd.models 中添加你的模型。',
];
