<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductBarcodeWidget\Dependency\Client;

use Generated\Shared\Transfer\BarcodeResponseTransfer;

interface ProductBarcodeWidgetToProductBarcodeClientInterface
{
    public function generateBarcodeBySku(
        string $sku,
        ?string $barcodeGeneratorPlugin = null
    ): BarcodeResponseTransfer;
}
