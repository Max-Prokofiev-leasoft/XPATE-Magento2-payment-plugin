<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Model\Methods;

use GingerPay\Payment\Model\AbstractPayment;

/**
 * General method class
 */
class General extends AbstractPayment
{

    /** Payment Code */
    const METHOD_CODE = 'ginger_methods_general';

    /**
     * @var string
     */
    protected $_code = self::METHOD_CODE;
}
