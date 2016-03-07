<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfC2CPackage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var C2CPackage[] $C2CPackage
     */
    protected $C2CPackage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return C2CPackage[]
     */
    public function getC2CPackage()
    {
      return $this->C2CPackage;
    }

    /**
     * @param C2CPackage[] $C2CPackage
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfC2CPackage
     */
    public function setC2CPackage(array $C2CPackage = null)
    {
      $this->C2CPackage = $C2CPackage;
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
      return isset($this->C2CPackage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return C2CPackage
     */
    public function offsetGet($offset)
    {
      return $this->C2CPackage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param C2CPackage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->C2CPackage[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->C2CPackage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return C2CPackage Return the current element
     */
    public function current()
    {
      return current($this->C2CPackage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->C2CPackage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->C2CPackage);
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
      reset($this->C2CPackage);
    }

    /**
     * Countable implementation
     *
     * @return C2CPackage Return count of elements
     */
    public function count()
    {
      return count($this->C2CPackage);
    }

}
