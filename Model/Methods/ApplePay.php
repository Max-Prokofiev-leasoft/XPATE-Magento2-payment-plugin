<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Model\Methods;

use GingerPay\Payment\Model\AbstractPayment;
use Magento\Framework\Exception\LocalizedException;
use Magento\Sales\Api\Data\OrderInterface;

/**
 * Apple Pay method class
 */
class ApplePay extends AbstractPayment
{

    /** Payment Code */
    const METHOD_CODE = 'ginger_methods_applepay';

    /**
     * @var string
     */
    public $method_code = self::METHOD_CODE;

    /** Platform Method Code */
    public $platform_code = 'apple-pay';

    /**
     * @var string
     */
    protected $_code = self::METHOD_CODE;
}
