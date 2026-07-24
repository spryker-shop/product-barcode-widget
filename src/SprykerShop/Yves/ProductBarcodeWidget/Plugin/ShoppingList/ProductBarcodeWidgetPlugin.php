<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductBarcodeWidget\Plugin\ShoppingList;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\ProductBarcodeWidget\Widget\ProductBarcodeWidget;
use SprykerShop\Yves\ShoppingListPage\Dependency\Plugin\ProductBarcodeWidget\ProductBarcodeWidgetPluginInterface;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductBarcodeWidget\Widget\ProductBarcodeWidget} instead.
 *
 * @method \SprykerShop\Yves\ProductBarcodeWidget\ProductBarcodeWidgetFactory getFactory()
 */
class ProductBarcodeWidgetPlugin extends AbstractWidgetPlugin implements ProductBarcodeWidgetPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function initialize(ProductViewTransfer $productViewTransfer, ?string $barcodeGeneratorPlugin = null): void
    {
        $widget = new ProductBarcodeWidget($productViewTransfer, $barcodeGeneratorPlugin);

        $this->parameters = $widget->getParameters();
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getTemplate(): string
    {
        return ProductBarcodeWidget::getTemplate();
    }
}
