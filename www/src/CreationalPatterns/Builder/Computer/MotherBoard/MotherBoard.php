<?php
namespace App\CreationalPatterns\Builder\Computer\MotherBoard;

use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\CPU;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\Disk;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\GPU;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\NetworkCard;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\RAM;
use App\CreationalPatterns\Builder\Computer\MotherBoard\MainPart\Sockets;

class MotherBoard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    /**
     * MotherBoard constructor.
     * @param CPU $cpu
     * @param RAM $ram
     * @param GPU $gpu
     * @param Sockets $sockets
     * @param NetworkCard $networkCard
     * @param Disk $disk
     */
    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
        $this->disk = $disk;
    }

    /**
     * @return CPU
     */
    public function getCpu(): CPU
    {
        return $this->cpu;
    }

    /**
     * @return RAM
     */
    public function getRam(): RAM
    {
        return $this->ram;
    }

    /**
     * @return GPU
     */
    public function getGpu(): GPU
    {
        return $this->gpu;
    }

    /**
     * @return Sockets
     */
    public function getSockets(): Sockets
    {
        return $this->sockets;
    }

    /**
     * @return NetworkCard
     */
    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }

    /**
     * @return Disk
     */
    public function getDisk(): Disk
    {
        return $this->disk;
    }

}