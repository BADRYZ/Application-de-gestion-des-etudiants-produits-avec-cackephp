<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID' => 1,
                'Product_Name' => 'Lorem ipsum dolor sit amet',
                'Product_Type' => 'Lorem ipsum dolor sit amet',
                'Product_Vendor' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
