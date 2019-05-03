<?php

return [
    'alipay' => [
        'app_id'         => '2016100100636004',
        'ali_public_key' =>'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtrAMBGPpFuLi+5vA6is0C8IMfCBjEA4uOC6OLYKWl8SmRSSPzUOAAWP+VyVXNHq64HfK4Hh69yihEdCo8ko2xqUS85qL0gXsm8LEL25QkuZcgDmWa+K8EAEMeVDEj38FMU0J9ea8i0FYqX51OMYJCSKup9M695leCt5UCtPyxhwVogpdZgvBElo24ZxtMphpWJF2pQelRzOm8Cc7HwOMyZaBN7A5A0PysgBQ9JlW7aVxOXpWOW7yEAuxiRo2gBmv3blgjZMRHSx0Usn4BkNpmLgaAuX7QdEobaLYlOJ6DlHRCX3KgWis33ksZK5m+Djup+RLZrh4x86yA/auA8NnAQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEArCLIA4LR+DckBONreChyd1L0DDXt+HSXkSAM4sLpBgCl7BvdGMZSxStZyv5e0KPE/af4/KZtI46npaJHoITyH8fho3m5XlT6RCnTFId2Iuj7mMd4b8lqc9xi+lRE1yoamLpubOQmwqdNWocV2k7kOaPiqJthK4EGSmzOjdQTaDFjCK+ogD3dNUV6gX7SK/DwJrYckf4giVGESYHPKiVHjeactow+qKEtkH5jiIYF2hiSv5mfwCM/ynbQMs3qYJnmD3PpsTiAJEz5wMWSTzo38SzPE1gGT8HmKms9xbVOSlK8Jv2so02mK1vofztRf6USmGALIcd5MCAtUdRx/Ujv8wIDAQABAoIBAEgf+rad5eSfFhSGRc1/BRdCRsenASMNl0RTrZKGIKVHOD6KHkX3M08yLtmDY68AL9Yov4b9JNW1PEGGkYSMr/bpBX49zpHcAVD2RV9gsvtFq8YELk6IknYhbcd976pIFgTQeNxfbG47M4ou99UVIUOVi68iC8DyuvQMSy/aIJeTCXnEAgLcTjMHCD2g3SBZ5eGsGb9nr3DccSn48STnoAzMMHfXsFiqucKBNbxWzNfPd/Wx+rBCtdGz87/iC4CWZnXgi9rgrRI45UPXdm5i0+rh5UmM95j7u3YlsDtxysksguXmh+sqz4d5J0r3ZkvtSoMyWcS4MjIYZQs2jyQoOuECgYEA4xwGuvCy5YjiMPXWAG+rtAzRmLUdd4bSnP3XXt0KBaQ6xG+GjkYuwSqG5VuOJM3/OExZpbeOImnve2Pb6klHUZT+pDVs03Dcs3ey9FSiK3qCh81csQwqlWRljfuxYH+IXmGR2U6z+tWs0N5gHwsnFWnXBHow+2p5++hIRdqxfzUCgYEAwgiAi1kKJ+V34ObmNhK4Gzb/hNZDh0G0UnI97mabJ8SjtCR9WlCE0oabDBbZlo234LkKMzdoDF5i9ZtkmaEX99FkSb11m751UEW/QFy7J6tzpWZnUOIB//J/yo2ffAc1NAU/18odZE/lxZaAa4QVXbj8utBwpsU3AB4mT0/nz4cCgYEAmvCY6tqhwhUD89EUAdItuzVvnRYbF1uEvpQzZcW5O6YSbceEbfYVmbVQuJMgw51CPH9iPbufnXzWZED5XLpHjLHwk8jbCNmbyFimXyiKRs1a1hlV3nflaWxIGHiZR7NaLsG0BiQ6h6tVLl44B5XNQT+m8KgIWM4IkMKk4/tSUu0CgYBx98h5EN2UPYZCRZ1mmWwmIBHJloing4JFAvE5fG8Z1rhI8T3ntG+vsHyVhz5a3fbpOgaxupOU4EPD+3gFfMe1OfpsDapsxlvlwHHrfgw36s7Mke+RZI7EJU3GTZUlpp4rZgHv37mP2BYgDpxzimt6V1Oq7w+cBS6fFRZvc4G3NQKBgQDB2CGRqF1aLnDRaw09ypWsrHC3d1WxxT1k0G6GSKwTOwnSKrcRLbmFTQA58TzW6TAQSlGBomyfOU8UtVcFcy1sGQmj7Ox4CEXHPuWpYEXEiYB0Agpek9tQYeUFqMSu0uukrQ2zNjbCphwR6keKBosAYnfRO17elfL3U4j6X/93/g==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
