<?php
$json = '{
    "root": {
        "D_EDRPOU": "8878979878978989",
        "D_NAME": "jkjjnjnj",
        "REGDATE": "2018-02-08",
        "REGNUM": "9090909090",
        "STD": "2019-05-23",
        "FID": "2019-05-23",
        "NREG": "True",
        "TTYPE": "010"
    },
    "DTSTITUL_O": {
        "DAT_PODP": "2018-06-07",
        "POS_PODP": "ygnygnygn",
        "FIO_PODP": "fbbftgbtf",
        "E_NAME": "nygngynygn",
        "E_OPF": "590",
        "E_OBL": "05000",
        "E_POST": "345345",
        "E_ADRES": "ygynygn",
        "E_STREET": "ftgnfnfyn",
        "E_PHONE": "545445",
        "E_FAX": "534534534",
        "E_MAIL": "gyhnyny",
        "ARM_NAME": "fnjygfny",
        "ARM_EDRPOU": "545465454",
        "ARM_CONT": "368",
        "ARM_LICNUM": "435435345",
        "ADR_WWW": "yngygnygnyyg",
        "DAT_WWW": "2017-06-15"
    }
}';

var_dump(json_decode($json));
var_dump(json_decode($json, true));
