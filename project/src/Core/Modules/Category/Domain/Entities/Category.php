<?php

namespace Core\Modules\Category\Domain\Entities;

use DateTime;

class Category
{
    public function __construct(
        protected string $name,
        protected ?string $description = null,
        protected bool $isActive = true,
        protected ?DateTime $createdAt = null,
    ) {
        $this->createdAt = $createdAt ?: new DateTime();
    }

    public function __get($name)
    {
        return $this->{$name};
    }

    public function createdAt(): string
    {
        return $this->createdAt->format('Y-m-d H:i:s');
    }
}