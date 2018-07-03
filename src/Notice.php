<?php
declare(strict_types=1);

namespace adampatpattison\AppDirectWrapper;

class Notice
{
    protected $type;
    protected $message;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): Notice
    {
        $this->type = $type;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): Notice
    {
        $this->message = $message;

        return $this;
    }
}