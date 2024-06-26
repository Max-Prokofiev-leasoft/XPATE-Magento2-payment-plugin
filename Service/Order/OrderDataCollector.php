<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Service\Order;

use GingerPay\Payment\Api\Config\RepositoryInterface as ConfigRepository;
use GingerPay\Payment\Model\Builders\ServiceOrderBuilder;
use Magento\Framework\App\ProductMetadataInterface;

/**
 * ClientLines order class
 */
class OrderDataCollector extends ServiceOrderBuilder
{
    /**
     * ClientLines constructor.
     *
     * @param ConfigRepository $configRepository
     * @param ProductMetadataInterface $productMetadata
     */
    public function __construct(
        ConfigRepository $configRepository,
        ProductMetadataInterface $productMetadata
    )
    {
        $this->configRepository = $configRepository;
        $this->productMetadata = $productMetadata;
    }
}


