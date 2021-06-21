<?php
namespace App\CreationalPatterns\Builder\Computer;

class Mouse
{
    private bool $withExtraUtilities;

    /**
     * Mouse constructor.
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    /**
     * @return bool
     */
    public function isWithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }
}