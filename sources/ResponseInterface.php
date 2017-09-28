<?php
/*
 * This file is part of the nia framework architecture.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Nia\RequestResponse;

use Nia\Collection\Map\StringMap\WriteableMapInterface;

/**
 * Interface for all response implementations.
 * Response implementations are used to represent a responsable environment like CLI, HTTP, FTP, ...
 */
interface ResponseInterface
{

    /**
     * Sets the status code.
     *
     * @param int $statusCode
     *            The status code.
     * @return ResponseInterface Reference to this instance.
     */
    public function setStatusCode(int $statusCode): ResponseInterface;

    /**
     * Returns the current status code.
     *
     * @return int The current status code.
     */
    public function getStatusCode(): int;

    /**
     * Sets the response content.
     *
     * @param string $content
     *            The response content to set.
     * @return ResponseInterface Reference to this instance.
     */
    public function setContent(string $content): ResponseInterface;

    /**
     * Returns the response content.
     *
     * @return string The response content.
     */
    public function getContent(): string;

    /**
     * Adds a header to the response object.
     *
     * @param string $header
     *              Name of the header
     * @param string $content
     *              Value of the header
     *
     * @return ResponseInterface Reference to this instance.
     */
    public function addHeader(string $header, string $content): ResponseInterface;

    /**
     * Returns the header as a writeable map.
     *
     * @return WriteableMapInterface Header as a writeable map.
     */
    public function getHeader(): WriteableMapInterface;

    /**
     * Returns the request which created this response.
     *
     * @return RequestInterface The request which created this response.
     */
    public function getRequest(): RequestInterface;
}
