<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfParcel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Parcel[] $Parcel
     */
    protected $Parcel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Parcel[]
     */
    public function getParcel()
    {
      return $this->Parcel;
    }

    /**
     * @param Parcel[] $Parcel
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfParcel
     */
    public function setParcel(array $Parcel = null)
    {
      $this->Parcel = $Parcel;
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
      return isset($this->Parcel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Parcel
     */
    public function offsetGet($offset)
    {
      return $this->Parcel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Parcel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Parcel[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Parcel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Parcel Return the current element
     */
    public function current()
    {
      return current($this->Parcel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Parcel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Parcel);
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
      reset($this->Parcel);
    }

    /**
     * Countable implementation
     *
     * @return Parcel Return count of elements
     */
    public function count()
    {
      return count($this->Parcel);
    }

}
