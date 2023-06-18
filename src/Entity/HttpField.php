<?php
/**
 * Author: Jairo Rodríguez <jairo@bfunky.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BFunky\HttpParser\Entity;

class HttpField
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $value;

    /**
     * HttpHeaderField constructor.
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): HttpField
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): HttpField
    {
        $this->value = $value;

        return $this;
    }

    public static function fromKeyAndValue(string $key, string $value): self
    {
        return new self($key, $value);
    }
}
