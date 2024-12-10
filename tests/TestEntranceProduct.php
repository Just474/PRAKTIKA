<?php
namespace Tests;

use Tests\Support\AcceptanceTester;

class TestProduct
{
    public function createProductEntrance(AcceptanceTester $i)
    {
        $i->amOnPage('/');
        $i->click('#createEntrance');
        $i->selectOption('#selectProduct', "22");
        $i->fillField('input[name="count_product"]', '3222');
        $i->click('input[type="submit"]');
        $i->see('3222');
        $i->wait("10");
    }
}