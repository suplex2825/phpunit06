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


    /** @test */
    function checkForObject()
    {
      $data = ['id' => '1',
               'title' => 'hello'];
      $listing = new ListingBasic($data);
      $this->assertIsObject($listing);         
    }

    /** @test */
    function checkForStatus()
    {
      $data = ['id' => 1,
               'title' => 'abc'];
      $expected_results = 'basic';
      $listing = new ListingBasic($data);
      $list_result = $listing->getStatus();
      $this->assertEquals($expected_results,$list_result);
    }



    /** @test */
    function checkForClassProperty()
    {
      $data = ['id' => 1,
               'title' => 'as',
               'website' => 'http://www.example123.com',
               'email' => '123@gmail.com',
               'twitter' => 'litwitter.com'];

      $listing = new ListingBasic($data);
      $this->assertEquals($data['id'], $listing->getId());
      $this->assertEquals($data['title'], $listing->getTitle());
      $this->assertEquals($data['website'], $listing->getWebsite());
      $this->assertEquals($data['email'], $listing->getEmail());
      $this->assertEquals($data['twitter'], $listing->getTwitter());  
    }


    /** @test */
    function checkForArray()
    {
      $data = ['id' => '1',
               'title' => 'as',
               'website' => 'http://www.example123.com',
               'email' => '123@gmail.com',
               'twitter' => 'litwitter.com',
               'status' => 'basic'];
      $listing = new ListingBasic($data);
      $this->assertEquals($data, $listing->toArray());       
    }
  }
?>