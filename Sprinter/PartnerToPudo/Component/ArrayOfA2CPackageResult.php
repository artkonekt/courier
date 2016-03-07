<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfA2CPackageResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var A2CPackageResult[] $A2CPackageResult
     */
    protected $A2CPackageResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return A2CPackageResult[]
     */
    public function getA2CPackageResult()
    {
      return $this->A2CPackageResult;
    }

    /**
     * @param A2CPackageResult[] $A2CPackageResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfA2CPackageResult
     */
    public function setA2CPackageResult(array $A2CPackageResult = null)
    {
      $this->A2CPackageResult = $A2CPackageResult;
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
      return isset($this->A2CPackageResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return A2CPackageResult
     */
    public function offsetGet($offset)
    {
      return $this->A2CPackageResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param A2CPackageResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->A2CPackageResult[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->A2CPackageResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return A2CPackageResult Return the current element
     */
    public function current()
    {
      return current($this->A2CPackageResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->A2CPackageResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->A2CPackageResult);
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
      reset($this->A2CPackageResult);
    }

    /**
     * Countable implementation
     *
     * @return A2CPackageResult Return count of elements
     */
    public function count()
    {
      return count($this->A2CPackageResult);
    }

}
