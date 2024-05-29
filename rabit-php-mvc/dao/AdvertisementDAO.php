<?php

include 'Connection.php';
include '../model/Advertisement.php';

/**
 * The Data Access Object of the Advertisement class.
 */
class AdvertisementDAO{

    /**
     * Default constructor to make an instance of the class.
     */
    public function __construct()
    {
    }

    /**
     * This function runs a query which retrieves all advertisement from the database.
     * It Also converts the data into an Advertisement type array.
     *
     * @return array $advertisements
     */
    public function getAllAdvertisement()
    {
        /**
         * An instance of the database connection.
         */
        $conn = connect();

        /**
         * The query which will run to retrieve all advertisement from the database.
         */
        $query = "SELECT advertisements.id AS id,
                  advertisements.title AS title,
                  users.name AS user_name
                  FROM advertisements
                  JOIN users ON advertisements.userid = users.id;";

        $result = $conn->query($query);

        $advertisements = [];

        /**
         * All row from the database convert to an Advertisement object one by one and add to the $advertisements array, the key of an element will be the advertisement's id field value.
         */
        while($advertisement = $result->fetch_assoc()){
            $advertisements[$advertisement['id']] = new Advertisement($advertisement['id'], $advertisement['user_name'], $advertisement['title']);
        }

        return $advertisements;

    }
}