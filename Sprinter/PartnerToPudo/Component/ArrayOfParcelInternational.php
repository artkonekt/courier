<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfParcelInternational implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ParcelInternational[] $ParcelInternational
     */
    protected $ParcelInternational = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParcelInternational[]
     */
    public function getParcelInternational()
    {
      return $this->ParcelInternational;
    }

    /**
     * @param ParcelInternational[] $ParcelInternational
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfParcelInternational
     */
    public function setParcelInternational(array $ParcelInternational = null)
    {
      $this->ParcelInternational = $ParcelInternational;
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
      return isset($this->ParcelInternational[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ParcelInternational
     */
    public function offsetGet($offset)
    {
      return $this->ParcelInternational[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ParcelInternational $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ParcelInternational[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ParcelInternational[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ParcelInternational Return the current element
     */
    public function current()
    {
      return current($this->ParcelInternational);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ParcelInternational);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ParcelInternational);
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
      reset($this->ParcelInternational);
    }

    /**
     * Countable implementation
     *
     * @return ParcelInternational Return count of elements
     */
    public function count()
    {
      return count($this->ParcelInternational);
    }

}
