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

use Nia\Collection\Map\StringMap\MapInterface;

/**
 * Interface for all request implementations.
 * Request implementations are used to represent a requestable environment like CLI, HTTP, FTP, ...
 */
interface RequestInterface
{

    /**
     * Returns the used request method.
     * Usually a value of a constant of the concrete request interface declaration.
     *
     * @return string The used request method.
     */
    public function getMethod(): string;

    /**
     * Returns the header of the request as a map.
     *
     * @return MapInterface The header of the request as a map.
     */
    public function getHeader(): MapInterface;

    /**
     * Returns the request arguments as a map.
     *
     * @return MapInterface The request arguments as a map.
     */
    public function getArguments(): MapInterface;

    /**
     * Returns the request path.
     *
     * @return string The request path.
     */
    public function getPath(): string;

    /**
     * Returns the request content.
     *
     * @return string The request content.
     */
    public function getContent() : string;

    /**
     * Creates a response based of the current request.
     *
     * @return ResponseInterface The created response.
     */
    public function createResponse(): ResponseInterface;
}
