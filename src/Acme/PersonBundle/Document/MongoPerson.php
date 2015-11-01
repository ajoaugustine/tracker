<?php
namespace Acme\PersonBundle\Document;
 
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
 
/**
 * @MongoDB\Document
 */
class MongoPerson
{
/**
     * @MongoDB\Id
     */
    protected $id;
 
    /**
     * @MongoDB\Field(type="string")
     */
    protected $first_name;
 
    /**
     * @MongoDB\Field(type="string")
     */
    protected $last_name;
 
    /**
     * @MongoDB\Field(type="int")
     */
    protected $age;
 

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set age
     *
     * @param int $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Get age
     *
     * @return int $age
     */
    public function getAge()
    {
        return $this->age;
    }
}
