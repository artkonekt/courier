<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfPackageResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageResult[] $PackageResult
     */
    protected $PackageResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageResult[]
     */
    public function getPackageResult()
    {
      return $this->PackageResult;
    }

    /**
     * @param PackageResult[] $PackageResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfPackageResult
     */
    public function setPackageResult(array $PackageResult = null)
    {
      $this->PackageResult = $PackageResult;
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
      return isset($this->PackageResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageResult
     */
    public function offsetGet($offset)
    {
      return $this->PackageResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PackageResult[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PackageResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageResult Return the current element
     */
    public function current()
    {
      return current($this->PackageResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageResult);
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
      reset($this->PackageResult);
    }

    /**
     * Countable implementation
     *
     * @return PackageResult Return count of elements
     */
    public function count()
    {
      return count($this->PackageResult);
    }

}
