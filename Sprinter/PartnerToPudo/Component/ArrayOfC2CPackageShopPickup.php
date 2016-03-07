<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfC2CPackageShopPickup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var C2CPackageShopPickup[] $C2CPackageShopPickup
     */
    protected $C2CPackageShopPickup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return C2CPackageShopPickup[]
     */
    public function getC2CPackageShopPickup()
    {
      return $this->C2CPackageShopPickup;
    }

    /**
     * @param C2CPackageShopPickup[] $C2CPackageShopPickup
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfC2CPackageShopPickup
     */
    public function setC2CPackageShopPickup(array $C2CPackageShopPickup = null)
    {
      $this->C2CPackageShopPickup = $C2CPackageShopPickup;
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
      return isset($this->C2CPackageShopPickup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return C2CPackageShopPickup
     */
    public function offsetGet($offset)
    {
      return $this->C2CPackageShopPickup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param C2CPackageShopPickup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->C2CPackageShopPickup[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->C2CPackageShopPickup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return C2CPackageShopPickup Return the current element
     */
    public function current()
    {
      return current($this->C2CPackageShopPickup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->C2CPackageShopPickup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->C2CPackageShopPickup);
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
      reset($this->C2CPackageShopPickup);
    }

    /**
     * Countable implementation
     *
     * @return C2CPackageShopPickup Return count of elements
     */
    public function count()
    {
      return count($this->C2CPackageShopPickup);
    }

}
