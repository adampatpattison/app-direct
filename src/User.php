<?php
declare(strict_types=1);

namespace adampatpattison\AppDirect;

class User
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

    public function setAddress(Address $address): User
    {
        $this->address = $address;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): User
    {
        $this->language = $language;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): User
    {
        $this->locale = $locale;

        return $this;
    }

    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    public function setOpenId(string $openId): User
    {
        $this->openId = $openId;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): User
    {
        $this->uuid = $uuid;

        return $this;
    }
}