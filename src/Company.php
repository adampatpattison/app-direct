<?php
declare(strict_types=1);

namespace adampatpattison\AppDirectWrapper;

class Company
{
    protected $country;
    protected $name;
    protected $email;
    protected $phoneNumber;
    protected $uuid;
    protected $externalId;
    protected $website;

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): Company
    {
        $this->country = $country;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): Company
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): Company
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): Company
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): Company
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(string $externalId): Company
    {
        $this->externalId = $externalId;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): Company
    {
        $this->website = $website;

        return $this;
    }
}