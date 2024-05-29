<?php

include '../dao/UserDAO.php';

/**
 * The UserController class which will connect the View with the DAO.
 */
class UserController {

    /**
     * @var UserDAO $userDAO This field is an instance of the UserDAO class to use the functions in the class
     */
    private UserDAO $userDAO;

    /**
     * Default constructor to make an instance of the class and set the $userDAO field.
     */
    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    /**
     * This function calls the getAllUser() function from the UserDAO class.
     *
     * @return array
     */
    public function getAllUser(): array
    {
        return $this->userDAO->getAllUser();
    }
}