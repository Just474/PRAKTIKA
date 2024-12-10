<?php

namespace Tests;

use Tests\Support\AcceptanceTester;

class LoginCest 
{

//    public function createProduct(AcceptanceTester $i)
//    {
//        $i->amOnPage('/');
//        $i->click('#createProduct');
//        $i->fillField('input[name="name"]', 'Test Product');
//        $i->fillField('input[name="price"]', '322');
//        $i->click('input[type="submit"]');
//        $i->see('Test Product');
//    }
    public function createProductEntrance(AcceptanceTester $i)
    {
        $i->amOnPage('/');
        $i->click('#createEntrance');
        $i->selectOption('#selectProduct', "5");
        $i->fillField('input[name="count_product"]', '3222');
        $i->click('input[type="submit"]');
        $i->see('3222');
        $i->wait("10");
    }
    

}