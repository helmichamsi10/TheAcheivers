<?php

namespace busBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bus
 *
 * @ORM\Table(name="bus")
 * @ORM\Entity(repositoryClass="busBundle\Repository\busRepository")
 */
class bus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenCh", type="string", length=255)
     */
    private $nomPrenCh;

    /**
     * @var string
     *
     * @ORM\Column(name="arrive", type="string", length=255)
     */
    private $arrive;

    /**
     * @var string
     *
     * @ORM\Column(name="aller", type="string", length=255)
     */
    private $aller;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculeBus", type="string", length=255)
     */
    private $matriculeBus;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPrenCh
     *
     * @param string $nomPrenCh
     *
     * @return bus
     */
    public function setNomPrenCh($nomPrenCh)
    {
        $this->nomPrenCh = $nomPrenCh;

        return $this;
    }

    /**
     * Get nomPrenCh
     *
     * @return string
     */
    public function getNomPrenCh()
    {
        return $this->nomPrenCh;
    }

    /**
     * Set arrive
     *
     * @param string $arrive
     *
     * @return bus
     */
    public function setArrive($arrive)
    {
        $this->arrive = $arrive;

        return $this;
    }

    /**
     * Get arrive
     *
     * @return string
     */
    public function getArrive()
    {
        return $this->arrive;
    }

    /**
     * Set aller
     *
     * @param string $aller
     *
     * @return bus
     */
    public function setAller($aller)
    {
        $this->aller = $aller;

        return $this;
    }

    /**
     * Get aller
     *
     * @return string
     */
    public function getAller()
    {
        return $this->aller;
    }

    /**
     * Set matriculeBus
     *
     * @param string $matriculeBus
     *
     * @return bus
     */
    public function setMatriculeBus($matriculeBus)
    {
        $this->matriculeBus = $matriculeBus;

        return $this;
    }

    /**
     * Get matriculeBus
     *
     * @return string
     */
    public function getMatriculeBus()
    {
        return $this->matriculeBus;
    }
}

