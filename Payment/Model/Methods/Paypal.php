<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Model\Methods;

use GingerPay\Payment\Model\AbstractPayment;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Paypal method class
 */
class Paypal extends AbstractPayment
{

    /** Payment Code */
    const METHOD_CODE = 'ginger_methods_paypal';

    /**
     * @var string
     */
    public $method_code = self::METHOD_CODE;

    /** Platform Method Code */
    public $platform_code = 'paypal';

    /**
     * @var string
     */
    protected $_code = self::METHOD_CODE;
}
