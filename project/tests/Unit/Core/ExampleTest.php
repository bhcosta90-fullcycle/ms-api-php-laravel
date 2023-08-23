<?php

test("should return text equals string", function(){
    $example = new \Core\Example();
    expect($example->say())->toBe("hello");
});