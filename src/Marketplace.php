<?php
declare(strict_types=1);

namespace adityasetiono\AppDirect;

class Marketplace
{
    protected $baseUrl;
    protected $partner;

    public function getBaseUrl(): ?string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): Marketplace
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    public function getPartner(): ?string
    {
        return $this->partner;
    }

    public function setPartner(string $partner): Marketplace
    {
        $this->partner = $partner;

        return $this;
    }
}