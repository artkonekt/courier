<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class ArrayOfServiceFeeRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceFeeRow[] $ServiceFeeRow
     */
    protected $ServiceFeeRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceFeeRow[]
     */
    public function getServiceFeeRow()
    {
      return $this->ServiceFeeRow;
    }

    /**
     * @param ServiceFeeRow[] $ServiceFeeRow
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrayOfServiceFeeRow
     */
    public function setServiceFeeRow(array $ServiceFeeRow = null)
    {
      $this->ServiceFeeRow = $ServiceFeeRow;
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
      return isset($this->ServiceFeeRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceFeeRow
     */
    public function offsetGet($offset)
    {
      return $this->ServiceFeeRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceFeeRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ServiceFeeRow[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ServiceFeeRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceFeeRow Return the current element
     */
    public function current()
    {
      return current($this->ServiceFeeRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceFeeRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceFeeRow);
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
      reset($this->ServiceFeeRow);
    }

    /**
     * Countable implementation
     *
     * @return ServiceFeeRow Return count of elements
     */
    public function count()
    {
      return count($this->ServiceFeeRow);
    }

}
