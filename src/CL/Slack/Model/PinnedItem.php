<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Model;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/types/channel
 */
class PinnedItem extends AbstractModel
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $channel;

    /**
     * @var Message
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getChannel() {
        return $this->channel;
    }

    /**
     * @return Message
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

}
