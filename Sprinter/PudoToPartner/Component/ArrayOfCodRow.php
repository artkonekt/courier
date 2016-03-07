<?php

namespace Konekt\Courier\Sprinter\PudoToPartner\Component;

class ArrayOfCodRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CodRow[] $CodRow
     */
    protected $CodRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CodRow[]
     */
    public function getCodRow()
    {
      return $this->CodRow;
    }

    /**
     * @param CodRow[] $CodRow
     * @return \Konekt\Courier\Sprinter\PudoToPartner\Component\ArrayOfCodRow
     */
    public function setCodRow(array $CodRow = null)
    {
      $this->CodRow = $CodRow;
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
      return isset($this->CodRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CodRow
     */
    public function offsetGet($offset)
    {
      return $this->CodRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CodRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CodRow[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CodRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CodRow Return the current element
     */
    public function current()
    {
      return current($this->CodRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CodRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CodRow);
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
      reset($this->CodRow);
    }

    /**
     * Countable implementation
     *
     * @return CodRow Return count of elements
     */
    public function count()
    {
      return count($this->CodRow);
    }

}
