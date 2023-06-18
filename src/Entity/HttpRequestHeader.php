<?php
/**
 * Author: Jairo Rodríguez <jairo@bfunky.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BFunky\HttpParser\Entity;

class HttpRequestHeader implements HttpHeaderInterface
{
    /** @var string */
    protected $method;

    /** @var string */
    protected $path;

    /** @var string */
    protected $protocol;

    /**
     * HttpRequestHeader constructor.
     */
    public function __construct(string $method, string $path, string $protocol)
    {
        $this->method = $method;
        $this->path = $path;
        $this->protocol = $protocol;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): HttpRequestHeader
    {
        $this->method = $method;

        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): HttpRequestHeader
    {
        $this->path = $path;

        return $this;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function setProtocol(string $protocol): HttpRequestHeader
    {
        $this->protocol = $protocol;

        return $this;
    }
}
