<?php

class AppTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInitial()
    {
        $response = $this->get('/');
        $response->seeStatusCode(200);
    }
    public function testShouldReturnApp(){
        $this->get("/app/21824", []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure(
            [
                'id',
                'author_info',
                'title',
                'version',
                'url',
                'short_description',
                'license',
                'thumbnail',
                'rating',
                'total_downloads',
                'compatible',
            ]
        );        
    }
    public function testNotReturnApp(){
        $this->get("/app/abc", []);
        $this->seeStatusCode(404);       
    }
}
