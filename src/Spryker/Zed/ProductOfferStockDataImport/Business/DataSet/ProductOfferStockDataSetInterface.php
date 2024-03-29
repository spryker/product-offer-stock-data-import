<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ProductOfferStockDataImport\Business\DataSet;

interface ProductOfferStockDataSetInterface
{
    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const IS_NEVER_OUT_OF_STOCK = 'is_never_out_of_stock';

    /**
     * @var string
     */
    public const FK_PRODUCT_OFFER = 'fk_product_offer';

    /**
     * @var string
     */
    public const FK_STOCK = 'fk_stock';

    /**
     * @var string
     */
    public const PRODUCT_OFFER_REFERENCE = 'product_offer_reference';

    /**
     * @var string
     */
    public const PRODUCT_STOCK_NAME = 'stock_name';
}
