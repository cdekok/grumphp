<?php

namespace GrumPHP\Configuration;

use Zend\Stdlib\AbstractOptions;

/**
 * Phpcs configuration
 */
class Phpcs extends AbstractOptions implements ConfigurationInterface
{
    /**
     * @var string
     */
    protected $standard;

    /**
     * @var string
     */
    protected $taskClass;

    /**
     * @return string
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * @param string $standard
     */
    public function setStandard($standard)
    {
        // TODO: add validation of standard
        $this->standard = $standard;
    }

    /**
     * @return string
     */
    public function getTaskClass()
    {
        return $this->taskClass;
    }

    /**
     * @param string $taskClass
     */
    public function setTaskClass($taskClass)
    {
        $this->taskClass = $taskClass;
    }

    /**
     * {@inheritdoc}
     */
    public function buildTaskInstance(GrumPHP $grumPHP)
    {
        return new $this->taskClass($grumPHP);
    }

}