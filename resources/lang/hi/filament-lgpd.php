<?php

return [
    'page' => [
        'title' => 'व्यक्तिगत डेटा सूची',
        'navigation_label' => 'व्यक्तिगत डेटा',
    ],

    'fields' => [
        'column' => 'कॉलम',
        'category' => 'श्रेणी',
        'purpose' => 'उद्देश्य',
        'legal_basis' => 'कानूनी आधार',
        'retention' => 'प्रतिधारण',
        'anonymize' => 'अनामीकरण',
    ],

    'category' => [
        'personal' => 'व्यक्तिगत',
        'sensitive' => 'संवेदनशील',
    ],

    'legal_basis' => [
        'consent' => 'सहमति (अनु. 7, I)',
        'legal_obligation' => 'कानूनी दायित्व (अनु. 7, II)',
        'public_policy' => 'सार्वजनिक नीति (अनु. 7, III)',
        'research' => 'अनुसंधान (अनु. 7, IV)',
        'contract' => 'अनुबंध का निष्पादन (अनु. 7, V)',
        'exercise_of_rights' => 'अधिकारों का प्रयोग (अनु. 7, VI)',
        'life_protection' => 'जीवन की सुरक्षा (अनु. 7, VII)',
        'health_protection' => 'स्वास्थ्य सुरक्षा (अनु. 7, VIII)',
        'legitimate_interest' => 'वैध हित (अनु. 7, IX)',
        'credit_protection' => 'क्रेडिट सुरक्षा (अनु. 7, X)',
        'fraud_prevention' => 'धोखाधड़ी की रोकथाम (अनु. 11, II, g)',
    ],

    'anonymize' => [
        'nullify' => 'खाली करें',
        'hash' => 'हैश',
        'mask' => 'मास्क करें',
        'keep' => 'रखें (कानूनी प्रतिधारण)',
    ],

    'missing' => 'घोषित नहीं',
    'empty' => 'कोई मॉडल पंजीकृत नहीं है। अपने मॉडल config/lgpd.php में lgpd.models में जोड़ें।',
];
