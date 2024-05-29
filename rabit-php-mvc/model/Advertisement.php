<?php

/**
 * A class which represent an Advertisement object.
 */
class Advertisement {

    /**
     * @var int $id This field is the unique id of an advertisement
     */
    private int $id;

    /**
     * @var string $username This field is the name of a user to whom the advertisement belongs
     */
    private string $username;

    /**
     * @var string $title This field is the title of an advertisement
     */
    private string $title;

    /**
     * The constructor of the class.
     *
     * @param int $id The unique id of a new advertisement
     * @param string $username The name of a user to whom the new advertisement belongs
     * @param string $title The title of a new advertisement
     */
    public function __construct(int $id, string $username, string $title)
    {
        $this->id = $id;
        $this->username = $username;
        $this->title = $title;
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
     * The get property of the $username field.
     * Currently, we do not need setter for this field.
     *
     * @return string $username
     */
    public function getUserName(): string
    {
        return $this->username;
    }

    /**
     * The get property of the $title field.
     * Currently, we do not need setter for this field.
     *
     * @return string $title
     */
    public function getTitle(): string
    {
        return $this->title;
    }


}