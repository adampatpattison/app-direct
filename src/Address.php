<?php
declare(strict_types=1);

namespace adampatpattison\AppDirect;

class Address
{
    protected $city;
    protected $country;
    protected $state;
    protected $street1;
    protected $street2;
    protected $zip;

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): Address
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): Address
    {
        $this->country = $country;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): Address
    {
        $this->state = $state;

        return $this;
    }

    public function getStreet1(): ?string
    {
        return $this->street1;
    }

    public function setStreet1(string $street1): Address
    {
        $this->street1 = $street1;

        return $this;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function setStreet2(string $street2): Address
    {
        $this->street2 = $street2;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): Address
    {
        $this->zip = $zip;

        return $this;
    }
}