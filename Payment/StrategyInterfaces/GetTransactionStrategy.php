<?php

namespace GingerPay\Payment\StrategyInterfaces;

interface GetTransactionStrategy extends BaseStrategy
{
    public function getTransactions($platformCode, $issuerId = null, $verifiedTermsOfService = null);

}
