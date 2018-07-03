<?php
declare(strict_types=1);

namespace adampatpattison\AppDirect;

class Account
{
    protected $accountIdentifier;
    protected $status;

    public function getAccountIdentifier(): ?string
    {
        return $this->accountIdentifier;
    }

    public function setAccountIdentifier(string $accountIdentifier): Account
    {
        $this->accountIdentifier = $accountIdentifier;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): Account
    {
        $this->status = $status;

        return $this;
    }
}