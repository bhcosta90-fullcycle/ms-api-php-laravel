<?php

namespace Core\Modules\Category\Domain\Entities;

use Core\Shared\Domain\ValueObjects\Uuid;
use DateTime;

class Category
{
    public function __construct(
        protected string    $name,
        protected ?string   $description = null,
        protected bool      $isActive = true,
        protected ?DateTime $createdAt = null,
        protected ?Uuid     $id = null,
    )
    {
        $this->createdAt = $createdAt ?: new DateTime();
        $this->id = $this->id ?: Uuid::random();
    }

    public function __get($name)
    {
        return $this->{$name};
    }

    public function createdAt(): string
    {
        return $this->createdAt->format('Y-m-d H:i:s');
    }

    public function id(): string
    {
        return $this->id;
    }
}