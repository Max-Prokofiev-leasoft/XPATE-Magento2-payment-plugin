<?php

namespace GingerPay\Payment\Strategies;

use GingerPay\Payment\StrategyInterfaces\GetTransactionStrategy;

class DefaultGetTransactionStrategy implements GetTransactionStrategy
{

    public function getTransactions($platformCode, $issuerId = null, $verifiedTermsOfService = null)
    {
        return [
            array_filter([
                "payment_method"         => $platformCode,
                "payment_method_details" => array_filter(
                    [
                        "issuer_id" => $issuerId,
                        "verified_terms_of_service" => $verifiedTermsOfService
                    ]
                )
            ])
        ];
    }
}
