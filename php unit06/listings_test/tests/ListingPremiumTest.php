<?php
// require __DIR__ .'/../classes/ListingPremium.php';

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    /** @test */
    function checkForPremiumStatus()
    {   
        $data = ['id' => 1,
                 'title' => 'abc'];
        $listPremium = new ListingPremium($data);
        $expected_resuls = 'premium';

        $this->assertEquals($listPremium->getStatus(),$expected_resuls);
    }


    /** @test */
    function checkForDescription()
    {
        $data = ['id' => 1,
                 'title' => 'abc',
                 'description' => 'yes'];
        $listPremium = new ListingPremium($data);

        $this->assertEquals($data['description'], $listPremium->getDescription());
    }
} 
?>