<?php
/*
 * This file is part of SwiftMailer.
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Replaces the sender of a message.
 *
 * @package SwiftMailer
 * @subpackage Plugins
 * @author Arjen Brouwer
 */
class SwiftMailer_Plugins_ImpersonatePlugin implements \SwiftMailer_Events_SendListener {

    /**
     * The sender to impersonate.
     * 
     * @var String
     * @access private
     */
    private $_sender;

    /**
     * Create a new ImpersonatePlugin to impersonate $sender.
     * 
     * @param string $sender address
     */
    public function __construct($sender) {
        $this->_sender = $sender;
    }

    /**
     * Invoked immediately before the Message is sent.
     * 
     * @param SwiftMailer_Events_SendEvent $evt
     */
    public function beforeSendPerformed(SwiftMailer_Events_SendEvent $evt) {
        $message = $evt->getMessage();
        $headers = $message->getHeaders();

        // save current recipients
        $headers->addPathHeader('X-SwiftMailer-Return-Path', $message->getReturnPath());

        // replace them with the one to send to
        $message->setReturnPath($this->_sender);
    }

    /**
     * Invoked immediately after the Message is sent.
     * 
     * @param SwiftMailer_Events_SendEvent $evt
     */
    public function sendPerformed(SwiftMailer_Events_SendEvent $evt) {
        $message = $evt->getMessage();

        // restore original headers
        $headers = $message->getHeaders();

        if ($headers->has('X-SwiftMailer-Return-Path')) {
            $message->setReturnPath($headers->get('X-SwiftMailer-Return-Path')->getAddress());
            $headers->removeAll('X-SwiftMailer-Return-Path');
        }
    }
}
