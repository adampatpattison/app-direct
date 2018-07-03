<?php
declare(strict_types=1);

namespace adampatpattison\AppDirectWrapper;

class Order
{
    protected $editionCode;
    protected $pricingDuration;
    protected $items = [];

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
        if(isset($items['quantity'])){
            $items = [$items];
        }
        $this->items = $items;
        return $this;
    }

    public function setItem(array $items): Order
    {
        return $this->setItems($items);
    }

}