<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Client;

class ClientConfig implements ClientConfigInterface
{
    const API_URL = 'https://api.bol.com/retailer/';
    const TEST_API_URL = 'https://api.bol.com/retailer-demo/';

    /** @var string $clientId */
    private $clientId;

    /** @var string $clientSecret */
    private $clientSecret;

    /** @var string $clientUrl */
    private $clientUrl;

    /** @var string $accessTokenPath */
    private $accessTokenPath;

    /** @var bool $enabled */
    private $enabled;

    /** @var string */
	private $proxy;

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @param bool $testMode
     * @param string $accessTokenPath
     * @param bool $enabled
     */
    public function __construct(
        string $clientId,
        string $clientSecret,
        bool $testMode = false,
        string $accessTokenPath = '/tmp/bol_access_token.json',
        bool $enabled = true
    ) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->clientUrl = $testMode === false ? static::API_URL : static::TEST_API_URL;
        $this->accessTokenPath = $accessTokenPath;
        $this->enabled = $enabled;
    }

    public function clientId(): string
    {
        return $this->clientId;
    }

    public function clientSecret(): string
    {
        return $this->clientSecret;
    }

    public function clientUrl(): string
    {
        return $this->clientUrl;
    }

    public function accessTokenPath(): string
    {
        return $this->accessTokenPath;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }

	public function getProxy(): ?string
	{
		return $this->proxy;
	}

	public function setProxy($proxy = null): self
	{
		$this->proxy = (string) $proxy;
		return $this;
	}
}
