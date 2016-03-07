<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfParcelResultInternational implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ParcelResultInternational[] $ParcelResultInternational
     */
    protected $ParcelResultInternational = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParcelResultInternational[]
     */
    public function getParcelResultInternational()
    {
      return $this->ParcelResultInternational;
    }

    /**
     * @param ParcelResultInternational[] $ParcelResultInternational
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfParcelResultInternational
     */
    public function setParcelResultInternational(array $ParcelResultInternational = null)
    {
      $this->ParcelResultInternational = $ParcelResultInternational;
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
      return isset($this->ParcelResultInternational[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ParcelResultInternational
     */
    public function offsetGet($offset)
    {
      return $this->ParcelResultInternational[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ParcelResultInternational $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ParcelResultInternational[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ParcelResultInternational[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ParcelResultInternational Return the current element
     */
    public function current()
    {
      return current($this->ParcelResultInternational);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ParcelResultInternational);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ParcelResultInternational);
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
      reset($this->ParcelResultInternational);
    }

    /**
     * Countable implementation
     *
     * @return ParcelResultInternational Return count of elements
     */
    public function count()
    {
      return count($this->ParcelResultInternational);
    }

}
