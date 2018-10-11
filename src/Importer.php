<?php

declare(strict_types=1);

namespace Brunodebarros\Monica\Importer;

use \Traversable;

/**
 * An interface for Monica chat importers.
 *
 * @package Brunodebarros\Monica\Importer
 */
interface Importer
{

    /**
     * Get the version of the current importer, for display purposes (e.g. 0.1.0).
     *
     * @return string
     */
    public function getVersion(): string;

    /**
     * Get the name of the current importer, for display purposes (e.g. Skype, iMessage, Discord).
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get an array containing default, auto-detected settings (e.g. Skype's Database file).
     *
     * @return array
     */
    public function getDefaults(): array;

    /**
     * Get an array of supported/required CLI arguments for this importer.
     *
     * @return array
     */
    public function getCliArguments(): array;

    /**
     * Get an iterable object that returns all available messages.
     *
     * @param array $arguments
     * @return iterable
     */
    public function getMessagesIterator(array $arguments): Traversable;

}
