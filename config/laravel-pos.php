<?php

return [

    // Currencies
    'currencies'    => [
        'TRY'       => 949,
        'USD'       => 840,
        'EUR'       => 978,
        'GBP'       => 826,
        'JPY'       => 392,
        'RUB'       => 643,
    ],

    // Banks
    'banks'         => [
        'akbank'    => [
            'name'  => 'AKBANK T.A.S.',
            'class' => Pos\Gateways\EstPos::class,
            'urls'  => [
                'production'    => 'https://www.sanalakpos.com/fim/api',
                'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/api',
                'gateway'       => [
                    'production'    => 'https://www.sanalakpos.com/fim/est3Dgate',
                    'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/est3Dgate',
                ],
            ]
        ],
        'ziraat'    => [
            'name'  => 'Ziraat Bankası',
            'class' => Pos\Gateways\EstPos::class,
            'urls'  => [
                'production'    => 'https://sanalpos2.ziraatbank.com.tr/fim/api',
                'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/api',
                'gateway'       => [
                    'production'    => 'https://sanalpos2.ziraatbank.com.tr/fim/est3dgate',
                    'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/est3Dgate',
                ],
            ]
        ],
        'finansbank'    => [
            'name'  => 'QNB Finansbank',
            'class' => Pos\Gateways\EstPos::class,
            'urls'  => [
                'production'    => 'https://www.fbwebpos.com/fim/api',
                'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/api',
                'gateway'       => [
                    'production'    => 'https://www.fbwebpos.com/fim/est3dgate',
                    'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/est3Dgate',
                ],
            ]
        ],
        'halkbank'    => [
            'name'  => 'Halkbank',
            'class' => Pos\Gateways\EstPos::class,
            'urls'  => [
                'production'    => 'https://sanalpos.halkbank.com.tr/fim/api',
                'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/api',
                'gateway'       => [
                    'production'    => 'https://sanalpos.halkbank.com.tr/fim/est3dgate',
                    'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/est3Dgate',
                ],
            ]
        ],
        'teb'    => [
            'name'  => 'TEB',
            'class' => Pos\Gateways\EstPos::class,
            'urls'  => [
                'production'    => 'https://sanalpos.teb.com.tr/fim/api',
                'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/api',
                'gateway'       => [
                    'production'    => 'https://sanalpos.teb.com.tr/fim/est3Dgate',
                    'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/est3Dgate',
                ],
            ]
        ],
        'isbank'    => [
            'name'  => 'İşbank',
            'class' => Pos\Gateways\EstPos::class,
            'urls'  => [
                'production'    => 'https://sanalpos.isbank.com.tr/fim/api',
                'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/api',
                'gateway'       => [
                    'production'    => 'https://sanalpos.isbank.com.tr/fim/est3Dgate',
                    'test'          => 'https://entegrasyon.asseco-see.com.tr/fim/est3Dgate',
                ],
            ]
        ],
        'yapikredi' => [
            'name'  => 'Yapıkredi',
            'class' => Pos\Gateways\PosNet::class,
            'urls'  => [
                'production'    => 'https://posnet.yapikredi.com.tr/PosnetWebService/XML',
                'test'          => 'https://setmpos.ykb.com/PosnetWebService/XML',
                'gateway'       => [
                    'production'    => 'https://posnet.yapikredi.com.tr/3DSWebService/YKBPaymentService',
                    'test'          => 'https://setmpos.ykb.com/3DSWebService/YKBPaymentService',
                ],
            ],
        ],
        'garanti' => [
            'name'  => 'Garanti',
            'class' => Pos\Gateways\GarantiPos::class,
            'urls'  => [
                'production'    => 'https://sanalposprov.garanti.com.tr/VPServlet',
                'test'          => 'https://sanalposprovtest.garanti.com.tr/VPServlet',
                'gateway'       => [
                    'production'    => 'https://sanalposprov.garanti.com.tr/servlet/gt3dengine',
                    'test'          => 'https://sanalposprovtest.garanti.com.tr/servlet/gt3dengine',
                ],
            ]
        ],
        'qnbfinansbank-payfor' => [
            'name'  => 'QNBFinansbank-PayFor',
            'class' => Pos\Gateways\PayForPos::class,
            'urls'  => [
                'production'    => 'https://vpos.qnbfinansbank.com/Gateway/XMLGate.aspx',
                'test'          => 'https://vpostest.qnbfinansbank.com/Gateway/XmlGate.aspx',
                'gateway'       => [
                    'production'    => 'https://vpos.qnbfinansbank.com/Gateway/Default.aspx',
                    'test'          => 'https://vpostest.qnbfinansbank.com/Gateway/Default.aspx',
                ],
                'gateway_3d_host'       => [
                    'production'    => 'https://vpos.qnbfinansbank.com/Gateway/3DHost.aspx',
                    'test'          => 'https://vpostest.qnbfinansbank.com/Gateway/3DHost.aspx',
                ],
            ]
        ],
        'vakifbank' => [
            'name'  => 'VakifBank-VPOS',
            'class' => Pos\Gateways\VakifBankPos::class,
            'urls'  => [
                'production'    => 'https://onlineodeme.vakifbank.com.tr:4443/VposService/v3/Vposreq.aspx',
                'test'          => 'https://onlineodemetest.vakifbank.com.tr:4443/VposService/v3/Vposreq.aspx',
                'gateway'       => [
                    'production'    => 'https://3dsecure.vakifbank.com.tr:4443/MPIAPI/MPI_Enrollment.aspx',
                    'test'          => 'https://3dsecuretest.vakifbank.com.tr:4443/MPIAPI/MPI_Enrollment.aspx',
                ],
            ],
        ],
    ],

];
