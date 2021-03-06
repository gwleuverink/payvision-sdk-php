<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 *
 * Warning! This file is auto-generated! Any changes made to this file will be deleted in the future!
 */

namespace Payvision\SDK\Domain\Payments\ValueObject\Payment;

class RequestTransaction
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $trackingCode;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $returnUrl;

    /**
     * @var bool
     */
    private $tokenize;

    /**
     * @var string
     */
    private $token;

    /**
     * @var int
     */
    private $storeId;

    /**
     * @var string
     */
    private $source;

    /**
     * @var int
     */
    private $payTimeout;

    /**
     * @var string
     */
    private $purchaseId;

    /**
     * @var int
     */
    private $brandId;

    /**
     * @var string
     */
    private $notifyUrl;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * @var string
     */
    private $invoiceId;

    /**
     * @var string
     */
    private $descriptor;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $type;

    /**
     * RequestTransaction constructor.
     *
     * @param float $amount
     * @param string $trackingCode
     * @param string $currencyCode
     * @param string $returnUrl
     * @param bool $tokenize
     * @param string $token
     * @param int $storeId
     * @param string $source
     * @param int $payTimeout
     * @param string $purchaseId
     * @param int $brandId
     * @param string $notifyUrl
     * @param string $languageCode
     * @param string $invoiceId
     * @param string $descriptor
     * @param string $countryCode
     * @param string $type
     */
    public function __construct(
        float $amount,
        string $trackingCode,
        string $currencyCode,
        string $returnUrl = null,
        bool $tokenize = null,
        string $token = null,
        int $storeId = null,
        string $source = null,
        int $payTimeout = null,
        string $purchaseId = null,
        int $brandId = null,
        string $notifyUrl = null,
        string $languageCode = null,
        string $invoiceId = null,
        string $descriptor = null,
        string $countryCode = null,
        string $type = null
    ) {
        $this->amount = $amount;
        $this->trackingCode = $trackingCode;
        $this->currencyCode = $currencyCode;
        $this->returnUrl = $returnUrl;
        $this->tokenize = $tokenize;
        $this->token = $token;
        $this->storeId = $storeId;
        $this->source = $source;
        $this->payTimeout = $payTimeout;
        $this->purchaseId = $purchaseId;
        $this->brandId = $brandId;
        $this->notifyUrl = $notifyUrl;
        $this->languageCode = $languageCode;
        $this->invoiceId = $invoiceId;
        $this->descriptor = $descriptor;
        $this->countryCode = $countryCode;
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getTrackingCode(): string
    {
        return $this->trackingCode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @return bool|null
     */
    public function getTokenize(): ?bool
    {
        return $this->tokenize;
    }

    /**
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @return int|null
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @return int|null
     */
    public function getPayTimeout(): ?int
    {
        return $this->payTimeout;
    }

    /**
     * @return string|null
     */
    public function getPurchaseId(): ?string
    {
        return $this->purchaseId;
    }

    /**
     * @return int|null
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @return string|null
     */
    public function getNotifyUrl(): ?string
    {
        return $this->notifyUrl;
    }

    /**
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * @return string|null
     */
    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    /**
     * @return string|null
     */
    public function getDescriptor(): ?string
    {
        return $this->descriptor;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
