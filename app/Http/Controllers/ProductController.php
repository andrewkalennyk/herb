<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\ProductCategory;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;
use Vis\Builder\TreeController;

class ProductController extends TreeController
{
    public function showProduction($category = null, $subCategory = null)
    {
        $page = $this->node;

        if (!$page) {
            $page =  ProductCategory::with('subCategories')
                ->findCategory($category, $subCategory)
                ->firstOrFail();
        }

        /*$products = Cache::tags([Product::CACHE_TAG, ProductPrice::CACHE_TAG])->rememberForever('product_category_' . $page->id, function () use($page) {
            return Product::with('product_prices','category.parent')->active()->byCategory($page)->filter()->get();
        });*/

        $products = Product::with('category.parent')
            ->productDefaultPrices()
            ->active()
            ->byCategory($page)
            ->order()
            ->paginate(1);

        return view('products.index', compact('page','products'));
    }

    public function showProduct($category, $subCategory, $slug) {

        $page = Product::with('product_prices')->slug($slug)->firstOrFail();
        $pictures = $page->getOtherImgWithOriginal($nameField = "additional_pictures");

        $defaultPrice = $page->product_prices->where('is_default', 1)->first();

        $cardContent = Cart::content();

        $productPrices = $page->product_prices->map(function ($item, $id) use ($cardContent, $page) {
            $cartPrice = $cardContent->filter(function ($cartItem, $rowId) use ($item) {
                return $cartItem->id == $item->id;
            })->first();
            $item->rowId = $cartPrice ? $cartPrice->rowId : '';
            $item->qty = $cartPrice ? $cartPrice->qty : '';
            return $item;
        });

        $cartProduct = $cardContent->filter(function ($cartItem, $rowId) use($page, $defaultPrice) {
            return $cartItem->options->product_id == $page->id && $cartItem->id == $defaultPrice->id;
        })->first();


        return view('products.product', compact('page', 'pictures', 'defaultPrice', 'cartProduct', 'productPrices'));
    }
}
