<?php
declare(strict_types=1);

namespace BolCom\RetailerApi\Infrastructure;

use BolCom\RetailerApi\Model\ClientPoolInterface;
use BolCom\RetailerApi\Model\MessageBusInterface;
use GuzzleHttp\Exception\RequestException;

final class MessageBusRetry implements MessageBusInterface
{
	/** @var MessageBusInterface */
	private $_messageBus;
	private $_attempts = 3;

	public function __construct(MessageBusInterface $messageBus, $attempts = 3)
	{
		$this->_messageBus = $messageBus;
		$this->_attempts = $attempts;
	}

	public function dispatch($message, string $clientName = ClientPoolInterface::DEFAULT_CLIENT_NAME)
	{
		$attempts = $this->_attempts;
		while (true) {
			try {
				return $this->_messageBus->dispatch($message, $clientName);
			} catch (RequestException $e) {
				$attempts--;
				if ($attempts <= 0 || false === stripos($e->getMessage(), '401 JWT expired')) {
					throw $e;
				}
				echo 'MessageBus: Retry on exception: '.$e->getMessage()."\n";
			}
		}
		throw new \RuntimeException('Unreachable');
	}
}