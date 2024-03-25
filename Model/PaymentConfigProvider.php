<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Model;

use GingerPay\Payment\Api\Config\RepositoryInterface as ConfigRepository;
use GingerPay\Payment\Model\AbstractPayment as PaymentLibraryModel;
use GingerPay\Payment\Model\Builders\LibraryConfigProvider;
use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\Escaper;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Payment\Model\MethodInterface;

/**
 * PaymentConfigProvider model class
 */
class PaymentConfigProvider extends LibraryConfigProvider
{
    /**
     * @var array
     */
    protected $methodCodes = [
        Methods\Creditcard::METHOD_CODE,
        Methods\ApplePay::METHOD_CODE,
        Methods\Googlepay::METHOD_CODE,
    ];

    /**
     * PaymentConfigProvider constructor.
     *
     * @param PaymentLibrary              $paymentLibraryModel
     * @param ConfigRepository $configRepository
     * @param PaymentHelper    $paymentHelper
     * @param Escaper          $escaper
     */
    public function __construct(
        PaymentLibraryModel         $paymentLibraryModel,
        ConfigRepository $configRepository,
        PaymentHelper    $paymentHelper,
        Escaper          $escaper
    ) {
        $this->paymentLibraryModel = $paymentLibraryModel;
        $this->configRepository = $configRepository;
        $this->escaper = $escaper;
        $this->paymentHelper = $paymentHelper;
        foreach ($this->methodCodes as $code) {
            $this->methods[$code] = $this->getMethodInstance($code);
        }
    }


}
