<?php

return [
    'page' => [
        'title' => '個人データ一覧',
        'navigation_label' => '個人データ',
    ],

    'fields' => [
        'column' => '列',
        'category' => 'カテゴリ',
        'purpose' => '目的',
        'legal_basis' => '法的根拠',
        'retention' => '保持期間',
        'anonymize' => '匿名化',
    ],

    'category' => [
        'personal' => '個人',
        'sensitive' => 'センシティブ',
    ],

    'legal_basis' => [
        'consent' => '同意（第7条I）',
        'legal_obligation' => '法的義務（第7条II）',
        'public_policy' => '公共政策（第7条III）',
        'research' => '研究（第7条IV）',
        'contract' => '契約の履行（第7条V）',
        'exercise_of_rights' => '権利の行使（第7条VI）',
        'life_protection' => '生命の保護（第7条VII）',
        'health_protection' => '健康の保護（第7条VIII）',
        'legitimate_interest' => '正当な利益（第7条IX）',
        'credit_protection' => '信用の保護（第7条X）',
        'fraud_prevention' => '不正防止（第11条II g）',
    ],

    'anonymize' => [
        'nullify' => '空にする',
        'hash' => 'ハッシュ',
        'mask' => 'マスク',
        'keep' => '保持（法定保存）',
    ],

    'missing' => '未申告',
    'empty' => '登録されたモデルがありません。config/lgpd.php の lgpd.models にモデルを追加してください。',
];
