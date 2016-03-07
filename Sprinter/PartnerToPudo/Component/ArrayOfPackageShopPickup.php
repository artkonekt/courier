<?php

namespace Konekt\Courier\Sprinter\PartnerToPudo\Component;

class ArrayOfPackageShopPickup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageShopPickup[] $PackageShopPickup
     */
    protected $PackageShopPickup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageShopPickup[]
     */
    public function getPackageShopPickup()
    {
      return $this->PackageShopPickup;
    }

    /**
     * @param PackageShopPickup[] $PackageShopPickup
     * @return \Konekt\Courier\Sprinter\PartnerToPudo\Component\ArrayOfPackageShopPickup
     */
    public function setPackageShopPickup(array $PackageShopPickup = null)
    {
      $this->PackageShopPickup = $PackageShopPickup;
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
      return isset($this->PackageShopPickup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageShopPickup
     */
    public function offsetGet($offset)
    {
      return $this->PackageShopPickup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageShopPickup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PackageShopPickup[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PackageShopPickup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageShopPickup Return the current element
     */
    public function current()
    {
      return current($this->PackageShopPickup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageShopPickup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageShopPickup);
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
      reset($this->PackageShopPickup);
    }

    /**
     * Countable implementation
     *
     * @return PackageShopPickup Return count of elements
     */
    public function count()
    {
      return count($this->PackageShopPickup);
    }

}
