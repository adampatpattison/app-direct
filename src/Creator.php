<?php
declare(strict_types=1);

namespace adampatpattison\AppDirect;

class Creator
{
    protected $address;
    protected $email;
    protected $firstName;
    protected $language;
    protected $lastName;
    protected $locale;
    protected $openId;
    protected $uuid;

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): Creator
    {
        $this->address = $address;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): Creator
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): Creator
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): Creator
    {
        $this->language = $language;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): Creator
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): Creator
    {
        $this->locale = $locale;

        return $this;
    }

    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    public function setOpenId(string $openId): Creator
    {
        $this->openId = $openId;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): Creator
    {
        $this->uuid = $uuid;

        return $this;
    }
}