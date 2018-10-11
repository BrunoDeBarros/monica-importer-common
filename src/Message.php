<?php

declare(strict_types=1);

namespace Brunodebarros\Monica\Importer;

use \DateTime;

/**
 * An interface for Monica chat messages.
 *
 * @package Brunodebarros\Monica\Importer
 */
interface Message
{

    /**
     * Get the unique ID of the message.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Get the name of the contact involved in this message.
     *
     * @return string
     */
    public function getContactName(): string;

    /**
     * Get the content of the message (in Markdown).
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Get the mime type of the message, for storage purposes.
     *
     * @return string
     */
    public function getMimeType(): string;

    /**
     * Get any messages attached to this message (e.g. a photo sent along with a text message).
     *
     * @return Message[]
     */
    public function getAttachments(): array;

    /**
     * Get the date/time at which a message was sent.
     *
     * @return DateTime
     */
    public function getWrittenAt(): DateTime;

    /**
     * Get whether or not the message was written by me (the Monica user), or the contact.
     *
     * @return bool
     */
    public function getWrittenByMe(): bool;

}