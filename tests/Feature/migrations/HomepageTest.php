<?php


use app\Products;
use tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductsTest extends TestCase 

{
public function display_flights() {

$response = $flights->get('resources\js\components\Home.vue');

    $response->assertStatus(200);
    $response->assertView('resources\js\components\listSeats.vue');
    $response->assertView('resources\js\components\stateView.vue');
    

    }}

