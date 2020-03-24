<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Client;

use kamermans\OAuth2\GrantType\ClientCredentials;
use kamermans\OAuth2\GrantType\RefreshToken;
use kamermans\OAuth2\Persistence\FileTokenPersistence;

class Oauth2Middleware
{
    /** @var \kamermans\OAuth2\OAuth2Middleware $middleware */
    private $middleware;

    /**
     * @param string $clientId
     * @param string $clientSecret
     * @param string $accessTokenPath
     */
    public function __construct(
        string $clientId,
        string $clientSecret,
        string $accessTokenPath
    ) {
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://login.bol.com/token']);
		$config = [
			'client_id' => $clientId,
			'client_secret' => $clientSecret
		];
        $clientCredentials = new ClientCredentials($client, $config);
        $refreshGrantType = new RefreshToken($client, $config);

        $this->middleware = new \kamermans\OAuth2\OAuth2Middleware($clientCredentials, $refreshGrantType);
        $this->middleware->setTokenPersistence(new FileTokenPersistence($accessTokenPath));
    }

    public function __invoke(callable $handler)
    {
        return $this->middleware->__invoke($handler);
    }
}
