<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="formaZajec")
 */
class FormaZajec
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nazwa;
    
    /**
     * @ORM\OneToMany(targetEntity="Grupa", mappedBy="formazajec")
     */
    protected $grupa;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->grupa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return FormaZajec
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Add grupa
     *
     * @param \AppBundle\Entity\Grupa $grupa
     *
     * @return FormaZajec
     */
    public function addGrupa(\AppBundle\Entity\Grupa $grupa)
    {
        $this->grupa[] = $grupa;

        return $this;
    }

    /**
     * Remove grupa
     *
     * @param \AppBundle\Entity\Grupa $grupa
     */
    public function removeGrupa(\AppBundle\Entity\Grupa $grupa)
    {
        $this->grupa->removeElement($grupa);
    }

    /**
     * Get grupa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrupa()
    {
        return $this->grupa;
    }
}
