<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Model\Api;

use GingerPay\Payment\Model\Builders\LibraryConfigProvider;
use Magento\Framework\UrlInterface;

/**
 * UrlProvider API class
 */
class UrlProvider extends LibraryConfigProvider
{
    /**
     * UrlProvider constructor.
     *
     * @param UrlInterface $urlBuilder
     */
    public function __construct(
        UrlInterface $urlBuilder
    )
    {
        $this->urlBuilder = $urlBuilder;
    }
}
