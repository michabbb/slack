<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Tests\Payload;

use CL\Slack\Payload\ChatPostmessagePayloadResponse;
use CL\Slack\Payload\PayloadResponseInterface;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class ChatPostMessagePayloadResponseTest extends AbstractPayloadResponseTest
{
    /**
     * {@inheritdoc}
     */
    protected function createResponseData()
    {
        return [
            'channel' => 'C1234567',
            'ts'      => floatval('12345678'),
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @param array                          $responseData
     * @param ChatPostmessagePayloadResponse $payloadResponse
     */
    protected function assertResponse(array $responseData, PayloadResponseInterface $payloadResponse)
    {
        $this->assertEquals($responseData['channel'], $payloadResponse->getChannel());
        $this->assertEquals($responseData['ts'], $payloadResponse->getTimestamp());
    }
}