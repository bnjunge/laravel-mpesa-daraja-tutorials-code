<?php

$d = array (
    'TransactionType' => 'Pay Bill',
    'TransID' => 'PDN21HITWU',
    'TransTime' => '20210423044904',
    'TransAmount' => '400.00',
    'BusinessShortCode' => '603021',
    'BillRefNumber' => 'LaraTest',
    'InvoiceNumber' => NULL,
    'OrgAccountBalance' => '14353209.13',
    'ThirdPartyTransID' => '7324',
    'MSISDN' => '254708374149',
    'FirstName' => 'John',
    'MiddleName' => 'J.',
    'LastName' => 'Doe',
);

echo json_encode($d);