<?php
return [
    //应用ID,您的APPID。
    'app_id' => "2016092800612592",

    'seller_id' => "2088102177415875",

    //商户私钥，您的原始格式RSA私钥
    'merchant_private_key' => "MIIEowIBAAKCAQEAoUTRjV3+2y43PVG8gzu+pqNHFNDKQctYzNCN5MLPJfH8itv5apV5Wq8Xpz83RE+WbEdKIQjY3WIBJrh6mgfx0QsR7R9R7d8kwOrbF5qpcKqHXhDxH1W6msUjXuePKzP2oPl4hd5zC6YR9tIxP1Ta5jnsC1BGykvO9h7aCK4NDwtLullrCGJQPo44FuMISQrMBbmxBQXZUhyXSJWOt6kIzBXiutbQk1vCAGTQpGJA867gsct9k3lO0dTQtra3++6IEProvIHB0b7dNz0DOm/6VsMIgyNWBXGYPb0vGPbV3JE5UmcxMbjkGypjYLUp1LuZEzn26G27WkLqFH3FZfxJHQIDAQABAoIBACR69dA9yA36uWI0oCkrlagKXWT3ChmyDyddsgtiigtyXwdmVVhn8aiy3O3nXfAk9MkPo1QvtSb3KX2B07IORARetbJnGFhv1teRCPig8t1apf6AZJsLAIhMOgEY7oj+Wzb01++ob2veKEgmKh/CaTYVOjEg+rJ+TZXdSsMV5DxXnNaeAZZT74W3TaO6+jVxCDL23Nrv+CopaFtJmz+A/aVLEambPnkfDRbtXfnALeUmTgim6Hwkfj6A7q+3gppTj+VqlIW4B0YARIiwqg0Vdl/Ph93QVkHXf0NasJrcU1xMCd9Hk6pDZCXL1ez2V3bAw8QjQgS6Zncz60/xFkBx650CgYEA0OX7s+doA5fMPb9aw4nDDiHySV+v3fbju3dDI+FJcmbN6HYxMD4WYYc01ShE9BRPX+6qc6+AZA6OdM9W1QxoM1bFN2l6yyubd09dJDkC5d6AYo2xp18lr/UfF5K26nuDtYefQrDS9kLBkfCQirQkMnCm0yYSOpp6+A79K71LeaMCgYEAxaGQ4JV1oYe/RyZk0XDPSRaUqC4nfopAJ3UThH71P22tq54QHhLDK+jaP27QuOVyr0iGvtwQXEiU7Pq6jk6vwNxbnVKabvSc0XynPHKgh/RMh/4b8dqj9Krfvvswzlcz/DtYGq2auCNjUHuw2UR4e2Sdxi73e4qAkTxs5No63j8CgYB7fvsGqE89kIgWGQI3h0HhIQBzkDYQKt0G/sKae51IHK6uNvFta8cfcScyvNPG2Br0w8vRCHgGrvRY6hqTaPpRH4MH9zu40Nbf+fM+btXfv2J24P2dzQois+7lqL6qcMq0jrEAZDjTjTOSa32IAmdDyoVVXrR4IMuBypqxOP9dsQKBgQCsnrlnoMRVKbemEt/+nBVCFqoT1/SBL4pnrHg2w5m9JDSMcQxM6EB3KvTucQF4bllkxumC7b6QjIkgEMRAJnSW9SJEYPEpNxl+VO3R+6FB/t2V7xtDfaC1xUaXjtoLcNmkV8VV0AsTCT3m/5Lxwz+lL7Yrc7yQuOIheXD317GRiwKBgHgQgPjVn+02asEApbS5FAP0uAEi7Div1MyicmjrvgGIv/mV9+4LCLnlvimXZ+EP+KbPgq9Z3VnfLIRFa8iAN+T1zDPx8XV3HIgOAHHVUZmEmTfAvYRTpo1lvd0MQowxonOzXWUw3RqYcX84DiaC1NZ5tzJ1d1SkVdcEkBXl9lpt",

    //异步通知地址
    'notify_url' => "http://wxshop.com/alipay/notify",

    //同步跳转
    'return_url' => "http://shop.com/index/returnAlipay",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAv+Vq6nW9QHpmlMy0+EkSnj2IXTD6KgwqS7mLNI3Quwv7KwRcYwNAs03ahEF+RTq/Fnx1c+fbhLpodVH+TVR6A/48y15sBD4v5VAdWLCZySjb2EDqdnxHKjHTqyFTvgnXB/wDGHc3lReczOknJIt2WLiwEn1+osYMQhJJR7Ec2FdwTsOIXz7GjEkG1eEfTA/aVeo3C/58RbM6d+83v+4FBwXHsBsjLNI2lF956Q4VhSsXXp34/UeE3+DAubNGdUS1ahJ2ndtBd/DBze2JO9kKlQqn4ZjAeqfGwog4pR+Lr0xqzeyjDFa6JeY2qgMoDSW+8CIOGoW4UhTQ0NzBEoBYVwIDAQAB",

    //标识沙箱环境
    "mode"=>'dev'
];