<?php
 namespace Tests\Feature;

 use Tests\TestCase;

 class HomePageTest extends TestCase
 {
    public function test_home_page_is_accesible():void
    {
        $responde = $this->get('/');
        $responde->assertStatus(404);
    }
 }