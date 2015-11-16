<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="zajeciaStudent")
 */
class ZajeciaStudent
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zajecia", inversedBy="zajeciastudent")
     * @ORM\JoinColumn(name="zajecia_id", referencedColumnName="id")
     */
    protected $zajecia;
    
    /**
     * @ORM\ManyToOne(targetEntity="Student", inversedBy="zajeciastudent")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id")
     */
    protected $student;
    
    /**
     * @ORM\OneToMany(targetEntity="Ocena", mappedBy="zajeciastudent")
     */
    protected $ocena;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ocena = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set zajecia
     *
     * @param \AppBundle\Entity\Zajecia $zajecia
     *
     * @return ZajeciaStudent
     */
    public function setZajecia(\AppBundle\Entity\Zajecia $zajecia = null)
    {
        $this->zajecia = $zajecia;

        return $this;
    }

    /**
     * Get zajecia
     *
     * @return \AppBundle\Entity\Zajecia
     */
    public function getZajecia()
    {
        return $this->zajecia;
    }

    /**
     * Set student
     *
     * @param \AppBundle\Entity\Student $student
     *
     * @return ZajeciaStudent
     */
    public function setStudent(\AppBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \AppBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }

    /**
     * Add ocena
     *
     * @param \AppBundle\Entity\Ocena $ocena
     *
     * @return ZajeciaStudent
     */
    public function addOcena(\AppBundle\Entity\Ocena $ocena)
    {
        $this->ocena[] = $ocena;

        return $this;
    }

    /**
     * Remove ocena
     *
     * @param \AppBundle\Entity\Ocena $ocena
     */
    public function removeOcena(\AppBundle\Entity\Ocena $ocena)
    {
        $this->ocena->removeElement($ocena);
    }

    /**
     * Get ocena
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOcena()
    {
        return $this->ocena;
    }
}
