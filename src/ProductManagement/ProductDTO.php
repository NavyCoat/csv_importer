<?php

namespace Acme\ProductManagement;

final readonly class ProductDTO
{
    /**
     * Everything here is a string
     * but probably can be other scalar type
     * It will not create as much of the dependency between objects in case of Modular Monolith
     * and will allow for easily separate it into services if needs occurs,
     * and will not create dependencies for strange creations like CommonBundle/CommonContext/CommonModule TradeMark
     */
    public function __construct(
        public string $id,
        public string $type,
        public string $sku,
        public string $name,
        public string $published,
        public string $isFeatured,
        public string $visibilityInCatalog,
        public string $shortDescription,
        public string $description,
        public string $dateSalePriceStarts,
        public string $dateSalePriceEnds,
        public string $taxStatus,
        public string $taxClass,
        public string $inStock,
        public string $stock,
        public string $lowStockAmount,
        public string $backordersAllowed,
        public string $soldIndividually,
        public string $weight,
        public string $length,
        public string $width,
        public string $height,
        public string $allowCustomerReviews,
        public string $purchaseNote,
        public string $salePrice,
        public string $regularPrice,
        public string $categories,
        public string $tags,
        public string $shippingClass,
        public string $images,
        public string $downloadLimit,
        public string $downloadExpiryDays,
        public string $parent,
        public string $groupedProducts,
        public string $upsells,
        public string $crossSells,
        public string $externalUrl,
        public string $buttonText,
        public string $position,
        public string $attribute1Name,
        public string $attribute1Values,
        public string $attribute1Visible,
        public string $attribute1Global,
        public string $metaEtPbPostHideNav,
        public string $metaEtPbPageLayout,
        public string $metaEtPbSideNav,
        public string $metaEtPbUseBuilder,
        public string $metaEtPbFirstImage,
        public string $metaEtPbTruncatePost,
        public string $metaEtPbTruncatePostDate,
        public string $metaEtPbOldContent,
        public string $attribute1Default,
        public string $attribute2Name,
        public string $attribute2Values,
        public string $attribute2Visible,
        public string $attribute2Global,
        public string $attribute2Default,
        public string $attribute3Name,
        public string $attribute3Values,
        public string $attribute3Visible,
        public string $attribute3Global,
        public string $attribute3Default,
    )
    {
        //"Plain Old PHP Object"
    }

}