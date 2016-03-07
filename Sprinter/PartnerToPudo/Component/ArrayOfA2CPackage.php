<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfA2CPackage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var A2CPackage[] $A2CPackage
     */
    protected $A2CPackage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return A2CPackage[]
     */
    public function getA2CPackage()
    {
      return $this->A2CPackage;
    }

    /**
     * @param A2CPackage[] $A2CPackage
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfA2CPackage
     */
    public function setA2CPackage(array $A2CPackage = null)
    {
      $this->A2CPackage = $A2CPackage;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->A2CPackage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return A2CPackage
     */
    public function offsetGet($offset)
    {
      return $this->A2CPackage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param A2CPackage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->A2CPackage[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->A2CPackage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return A2CPackage Return the current element
     */
    public function current()
    {
      return current($this->A2CPackage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->A2CPackage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->A2CPackage);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->A2CPackage);
    }

    /**
     * Countable implementation
     *
     * @return A2CPackage Return count of elements
     */
    public function count()
    {
      return count($this->A2CPackage);
    }

}
