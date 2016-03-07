<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfParcelResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ParcelResult[] $ParcelResult
     */
    protected $ParcelResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParcelResult[]
     */
    public function getParcelResult()
    {
      return $this->ParcelResult;
    }

    /**
     * @param ParcelResult[] $ParcelResult
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfParcelResult
     */
    public function setParcelResult(array $ParcelResult = null)
    {
      $this->ParcelResult = $ParcelResult;
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
      return isset($this->ParcelResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ParcelResult
     */
    public function offsetGet($offset)
    {
      return $this->ParcelResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ParcelResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ParcelResult[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ParcelResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ParcelResult Return the current element
     */
    public function current()
    {
      return current($this->ParcelResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ParcelResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ParcelResult);
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
      reset($this->ParcelResult);
    }

    /**
     * Countable implementation
     *
     * @return ParcelResult Return count of elements
     */
    public function count()
    {
      return count($this->ParcelResult);
    }

}
