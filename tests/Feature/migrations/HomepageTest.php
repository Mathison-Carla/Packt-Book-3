<?php


use tests\TestCase;

class ProductsTest extends TestCase

{
public function display_flights() {

$response = $flights->get('resources\js\components\Home.vue');

    $response->assertStatus(200);
    $response->assertView('resources\js\components\listSeats.vue');
    $response->assertView('resources\js\components\stateView.vue');


    }}

