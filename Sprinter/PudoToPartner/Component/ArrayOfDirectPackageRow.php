<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class ArrayOfDirectPackageRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DirectPackageRow[] $DirectPackageRow
     */
    protected $DirectPackageRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DirectPackageRow[]
     */
    public function getDirectPackageRow()
    {
      return $this->DirectPackageRow;
    }

    /**
     * @param DirectPackageRow[] $DirectPackageRow
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrayOfDirectPackageRow
     */
    public function setDirectPackageRow(array $DirectPackageRow = null)
    {
      $this->DirectPackageRow = $DirectPackageRow;
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
      return isset($this->DirectPackageRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DirectPackageRow
     */
    public function offsetGet($offset)
    {
      return $this->DirectPackageRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DirectPackageRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DirectPackageRow[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DirectPackageRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DirectPackageRow Return the current element
     */
    public function current()
    {
      return current($this->DirectPackageRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DirectPackageRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DirectPackageRow);
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
      reset($this->DirectPackageRow);
    }

    /**
     * Countable implementation
     *
     * @return DirectPackageRow Return count of elements
     */
    public function count()
    {
      return count($this->DirectPackageRow);
    }

}
