<?php

/**
 * A class which represent a User object.
 */
class User{

    /**
     * @var int $id This field is the unique id of a user
     */
    private int $id;

    /**
     * @var string $name This field is the name of a user
     */
    private string $name;

    /**
     * The constructor of the class.
     *
     * @param int $id The unique id of a new user object
     * @param string $name The name of a new user object
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * The get property of the $id field.
     * Currently, we do not need setter for this field.
     *
     * @return int $id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * The get property of the $name field.
     * Currently, we do not need setter for this field.
     *
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }

}