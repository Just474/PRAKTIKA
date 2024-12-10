<?php

namespace Tests;

use Tests\Support\AcceptanceTester;

class TestProduct
{

    public function createProduct(AcceptanceTester $i)
    {
        $i->amOnPage('/');
        $i->click('#createProduct');
        $i->fillField('input[name="name"]', 'Новый продукт');
        $i->fillField('input[name="price"]', '322');
        $i->click('input[type="submit"]');
        $i->see('Test Product');
    }

    

}