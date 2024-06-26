<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Service\Order;

use GingerPay\Payment\Api\Config\RepositoryInterface as ConfigRepository;
use GingerPay\Payment\Model\Builders\ServiceOrderBuilder;
use GingerPay\Payment\Model\Methods\Klarna;
use Magento\Framework\HTTP\Header;
use Magento\Framework\Locale\Resolver;
use Magento\Sales\Api\Data\OrderInterface;

/**
 * Order Customer Data class
 */
class CustomerData extends ServiceOrderBuilder
{
    /**
     * CustomerData constructor.
     *
     * @param Resolver $resolver
     * @param Header $httpHeader
     * @param ConfigRepository $configRepository
     */
    public function __construct(
        Resolver $resolver,
        Header $httpHeader,
        ConfigRepository $configRepository
    )
    {
        $this->resolver = $resolver;
        $this->httpHeader = $httpHeader;
        $this->configRepository = $configRepository;
    }
}
