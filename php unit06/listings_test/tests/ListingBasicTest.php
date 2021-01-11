<?php 
  require __DIR__ .'/../classes/ListingBasic.php';

  use PHPUnit\Framework\TestCase;
  
  class ListingBasicTest extends TestCase 
  {
    /** @test */
    function checkForDataException()
    {
        $this->expectExceptionMessage("Unable to create a listing, data unavailable");
        $data = [];
        $listing = new ListingBasic($data);
    }


    /** @test */
    function checkForDataId()
    {
        $this->expectExceptionMessage("Unable to create a listing, invalid id");
        $data = ['id' => 0,
                 'title' => 'asdad'];
        $listing = new ListingBasic($data);
    }
  }
?>