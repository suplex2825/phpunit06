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
    function checkForDataIdException()
    {
        $this->expectException(Exception::class);
        $data = ['id' => ''];
        $listing = new ListingBasic($data);
    }

    
    /** @test */
    function checkFortitleException()
    {
        $this->expectException(Exception::class);
        $data = ['title' => ''];
        $listing = new ListingBasic($data);
    }
  }
?>