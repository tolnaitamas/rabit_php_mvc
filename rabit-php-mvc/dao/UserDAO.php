<?php

include 'Connection.php';
include '../model/User.php';

/**
 * The Data Access Object of the User class.
 */
class UserDAO{

    /**
     * Default constructor to make an instance of the class.
     */
    public function __construct()
    {
    }

    /**
     * This function runs a query which retrieves all user from the database.
     * It Also converts the data into a User type array.
     *
     * @return array $users
     */
    public function getAllUser(): array
    {
        /**
         * An instance of the database connection.
         */
        $conn = connect();

        /**
         * The query which will run to retrieve all user from the database.
         */
        $query = "SELECT * FROM USERS";
        $result = $conn->query($query);

        $users = [];

        /**
         * All row from the database convert to a User object one by one and add to the $users array, the key of an element will be the user's id field value.
         */
        while($user = $result->fetch_assoc()){
            $users[$user['id']] = new User($user['id'], $user['name']);
        }

        return $users;
    }
}