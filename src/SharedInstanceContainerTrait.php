<?php
declare(strict_types=1);

namespace Ueef\Sic;

trait SharedInstanceContainerTrait
{
    /** @var array */
    private $shared;


    protected function share(string $key, callable $constructor)
    {
        if (!isset($this->shared[$key])) {
            $this->shared[$key] = $constructor();
        }

        return $this->shared[$key];
    }
}