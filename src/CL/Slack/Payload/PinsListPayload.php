<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/methods/pins.list
 */
class PinsListPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;


    /**
     * @return string
     */
    public function getMethod() {
        return 'pins.list';
    }

    /**
     * @return string
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel) {
        $this->channel = $channel;
    }
}
