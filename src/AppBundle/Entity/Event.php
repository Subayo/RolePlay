<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Event
 * @ORM\Entity()
 * @ORM\Table(name="event")
 * @package AppBundle\Entity
 * @ORM\HasLifecycleCallbacks()
 * @Serializer\ExclusionPolicy("none")
 */
class Event
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    protected $value;
    /**
     * @var \DateTime
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    protected $dateTime;
    /**
     * @var boolean
     * @ORM\Column(name="play", type="boolean", nullable=false)
     */
    protected $play;
    /**
     * @var EventAnimation
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EventAnimation", inversedBy="events", cascade={"persist"})
     * @Serializer\MaxDepth(1)
     */
    protected $animation;
    /**
     * @var EventFor
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EventFor", inversedBy="events", cascade={"persist"})
     * @Serializer\MaxDepth(1)
     */
    protected $for;

    /**
     * constructor.
     */
    public function __construct()
    {

    }

    /**
     *
     */
    public function __destruct()
    {

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
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Event
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     *
     * @return Event
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get play
     *
     * @return boolean
     */
    public function getPlay()
    {
        return $this->play;
    }

    /**
     * Set play
     *
     * @param boolean $play
     *
     * @return Event
     */
    public function setPlay($play)
    {
        $this->play = $play;

        return $this;
    }

    /**
     * Get animation
     *
     * @return \AppBundle\Entity\EventAnimation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * Set animation
     *
     * @param \AppBundle\Entity\EventAnimation $animation
     *
     * @return Event
     */
    public function setAnimation(\AppBundle\Entity\EventAnimation $animation = null)
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get for
     *
     * @return \AppBundle\Entity\EventFor
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * Set for
     *
     * @param \AppBundle\Entity\EventFor $for
     *
     * @return Event
     */
    public function setFor(\AppBundle\Entity\EventFor $for = null)
    {
        $this->for = $for;

        return $this;
    }
}
