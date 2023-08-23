<?php

use Core\Modules\Category\Domain\Entities\Category;

describe("Category Unit Test", function () {
    beforeEach(fn() => $this->category = new Category(
        name: 'testing category',
        description: 'testing description',
    ));

    test("constructor of category, getters and setters", function () {
        expect($this->category->name)->not->toBeNull()
            ->and($this->category->name)->toBeString()
            ->and($this->category->name)->toBe('testing category')
            ->and($this->category->description)->toBe('testing description')
            ->and($this->category->isActive)->toBeTrue()
            ->and($this->category->isActive)->toBeBool()
            ->and($this->category->createdAt)->not->toBeNull()
            ->and($this->category->createdAt)->toBeInstanceOf(DateTime::class)
            ->and($this->category->createdAt())->toBeString();

        $category = new Category(
            name: 'testing category',
            isActive: false,
            createdAt: $date = new DateTime('2020-01-01')
        );

        expect($category->description)->toBeNull()
            ->and($category->isActive)->toBeFalse()
            ->and($category->isActive)->toBeBool()
            ->and($category->createdAt)->toBe($date)
            ->and($category->createdAt())->toBe($date->format('Y-m-d H:i:s'));
    });
});