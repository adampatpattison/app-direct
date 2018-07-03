<?php
declare(strict_types=1);

namespace adampatpattison\AppDirect;

class Payload
{
    protected $company;
    protected $order;
    protected $user;
    protected $configuration;
    protected $account;

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): Payload
    {
        $this->company = $company;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): Payload
    {
        $this->order = $order;

        return $this;
    }

    public function getUser(): ?Creator
    {
        return $this->user;
    }

    public function setUser(Creator $user): Payload
    {
        $this->user = $user;

        return $this;
    }

    public function getConfiguration(): ?array
    {
        return $this->configuration;
    }

    public function setConfiguration(array $configuration): Payload
    {
        $this->configuration = $configuration;

        return $this;
    }

    public function getAccount(): ?Account
    {
        return $this->account;
    }

    public function setAccount(Account $account): Payload
    {
        $this->account = $account;

        return $this;
    }
}