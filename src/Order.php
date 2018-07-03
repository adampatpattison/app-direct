<?php
declare(strict_types=1);

namespace adityasetiono\AppDirect;

class Order
{
    protected $editionCode;
    protected $pricingDuration;
    protected $items;

    public function getEditionCode(): ?string
    {
        return $this->editionCode;
    }

    public function setEditionCode(string $editionCode): Order
    {
        $this->editionCode = $editionCode;

        return $this;
    }

    public function getPricingDuration(): ?string
    {
        return $this->pricingDuration;
    }

    public function setPricingDuration(string $pricingDuration): Order
    {
        $this->pricingDuration = $pricingDuration;

        return $this;
    }

    public function getItems(): ?array
    {
        return $this->items;
    }

    public function setItems(array $items): Order
    {
        $this->items = array_merge($this->getItems(), $items);

        return $this;
    }

    public function setItem(array $items): Order
    {
        $this->items[] = $items;
        return $this;
    }

}