<?php

require __DIR__ . "/vendor/autoload.php";

class Address
{
    private $street;
    private $postCode;
    private $town;

    public function __construct($street, $postCode, $town)
    {
        $this->street = $street;
        $this->postCode = $postCode;
        $this->town = $town;
    }

    public function fullAddress()
    {
        // $addressParts = [$this->street, $this->postCode, $this->town];
        // return $addressParts;

        $street = $this->street;
        $town = $this->town;
        $postCode=$this->postCode;

        return "{$street}, {$town}, {$postCode}";
    }

    public function setStreet($newStreet)
    {
        $this->street = $newStreet;
    }

    public function setPostcode($newPostcode)
    {
        $this->postCode = $newPostcode;
    }

    public function setTown($newTown)
    {
        $this->town = $newTown;
    }
    
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"