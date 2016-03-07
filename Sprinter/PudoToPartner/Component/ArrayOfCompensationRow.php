<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class ArrayOfCompensationRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CompensationRow[] $CompensationRow
     */
    protected $CompensationRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompensationRow[]
     */
    public function getCompensationRow()
    {
      return $this->CompensationRow;
    }

    /**
     * @param CompensationRow[] $CompensationRow
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrayOfCompensationRow
     */
    public function setCompensationRow(array $CompensationRow = null)
    {
      $this->CompensationRow = $CompensationRow;
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
      return isset($this->CompensationRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompensationRow
     */
    public function offsetGet($offset)
    {
      return $this->CompensationRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompensationRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CompensationRow[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CompensationRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CompensationRow Return the current element
     */
    public function current()
    {
      return current($this->CompensationRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CompensationRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CompensationRow);
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
      reset($this->CompensationRow);
    }

    /**
     * Countable implementation
     *
     * @return CompensationRow Return count of elements
     */
    public function count()
    {
      return count($this->CompensationRow);
    }

}
