<?php
namespace App\CreationalPatterns\Builder\Computer;

class Mouse
{

    /**
     * Mouse constructor.
     * @param bool $withExtraUtilities
     */
    public function __construct(private bool $withExtraUtilities)
    {
    }

    /**
     * @return bool
     */
    public function isWithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }
}