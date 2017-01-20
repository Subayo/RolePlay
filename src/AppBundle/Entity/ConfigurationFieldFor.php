<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ConfigurationFieldFor
 * @ORM\Entity()
 * @ORM\Table(name="Configuration_field_for")
 * @package AppBundle\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class ConfigurationFieldFor extends Status
{
    /**
     * @var ConfigurationField[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ConfigurationField", mappedBy="for")
     */
    protected $configurationFields;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->configurationFields = new ArrayCollection();
    }

    /**
     * Add configurationField
     *
     * @param \AppBundle\Entity\ConfigurationField $configurationField
     *
     * @return ConfigurationFieldFor
     */
    public function addConfigurationField(\AppBundle\Entity\ConfigurationField $configurationField)
    {
        $this->configurationFields[] = $configurationField;

        return $this;
    }

    /**
     * Remove configurationField
     *
     * @param \AppBundle\Entity\ConfigurationField $configurationField
     */
    public function removeConfigurationField(\AppBundle\Entity\ConfigurationField $configurationField)
    {
        $this->configurationFields->removeElement($configurationField);
    }

    /**
     * Get configurationFields
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConfigurationFields()
    {
        return $this->configurationFields;
    }
}
