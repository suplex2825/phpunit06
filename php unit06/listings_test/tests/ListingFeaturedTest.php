<?php 
require __DIR__ .'/../classes/ListingFeatured.php';

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{
    /** @test */
    function checkForFeaturedStatus()
    {
        $expected_results = 'featured';
        $data = ['id' => 1,
                 'title' => 'abs'];
        $listFeatured = new ListingFeatured($data);
        $this->assertEquals($listFeatured->getStatus(), $expected_results);
    }
}
?>