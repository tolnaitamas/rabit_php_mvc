<?php

include '../dao/AdvertisementDAO.php';

/**
 * The AdvertisementController class which will connect the View with the DAO.
 */
class AdvertisementController{

    /**
     * @var AdvertisementDAO $advertisementDAO This field is an instance of the AdvertisementDAO class to use the functions in the class
     */
    private AdvertisementDAO $advertisementDAO;

    /**
     * Default constructor to make an instance of the class and set the $advertisementDAO field.
     */
    public function __construct()
    {
        $this->advertisementDAO = new AdvertisementDAO();
    }

    /**
     * This function calls the getAllAdvertisement() function from the AdvertisementDAO class.
     *
     * @return array
     */
    public function getAllAdvertisement(): array
    {
        return $this->advertisementDAO->getAllAdvertisement();
    }
}