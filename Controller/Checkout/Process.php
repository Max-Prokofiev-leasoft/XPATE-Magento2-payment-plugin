<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace GingerPay\Payment\Controller\Checkout;

use GingerPay\Payment\Api\Config\RepositoryInterface as ConfigRepository;
use GingerPay\Payment\Model\Builders\ControllerCheckoutActionBuilder as ActionRedefiner;
use GingerPay\Payment\Model\PaymentLibrary as PaymentLibraryModel;
use Magento\Checkout\Model\Session;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Sales\Model\Order\Payment;

/**
 * Checkout process controller class
 */
class Process extends ActionRedefiner
{
    /**
     * Success constructor.
     *
     * @param Context $context
     * @param Session $checkoutSession
     * @param PaymentHelper $paymentHelper
     * @param PaymentLibraryModel $paymentLibraryModel
     * @param ConfigRepository $configRepository
     */
    public function __construct(
        Context $context,
        Session $checkoutSession,
        PaymentHelper $paymentHelper,
        PaymentLibraryModel $paymentLibraryModel,
        ConfigRepository $configRepository
    ) {
        $this->checkoutSession = $checkoutSession;
        $this->paymentHelper = $paymentHelper;
        $this->paymentLibraryModel = $paymentLibraryModel;
        $this->configRepository = $configRepository;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        return $this->process();
    }
}
