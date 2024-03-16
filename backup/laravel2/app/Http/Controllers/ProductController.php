<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Subcategories;


class ProductController extends Controller
{   
    
    
    public function grid()
    {
        


        $products = Product::paginate(12)->onEachSide(1);
        $categories = Categories::with('subcategories')->get();
        $selectedCategories = [];
        $selectedSubcategories = []; // New array to hold selected subcategories
        $selectedColors = [];
        $selectedBrands = [];
        $selectedSaleActive = [];
        $selectedStartPrice = request()->input('start_price');
        $selectedEndPrice = request()->input('end_price');
        $selectedSort = request()->input('sort');
    
        return view('grid', compact('products', 'categories', 'selectedCategories', 'selectedSubcategories', 'selectedColors', 'selectedBrands', 'selectedSaleActive', 'selectedStartPrice', 'selectedEndPrice', 'selectedSort'));
    }
    
    public function filter(Request $request)
    {
        // Fetch all categories from the Categories model along with their subcategories
        $categories = Categories::with('subcategories')->get();
      
        // Retrieve filter parameters from the request
        $selectedCategories = $request->input('category', []);
        $selectedSubcategories = $request->input('subcategory', []);
        $selectedColors = $request->input('color', []);
        $selectedBrands = $request->input('brand', []);
        $selectedSaleActive = $request->input('sale_active');
        $selectedStartPrice = $request->input('start_price');
        $selectedEndPrice = $request->input('end_price');
        $selectedSort = $request->input('sort', 'latest'); // Default sort option is "latest"
        $searchTerm = $request->input('query');

        
  

        // Query products based on selected filters
        $productsQuery = Product::when($selectedCategories, function ($query) use ($selectedCategories) {
            return $query->whereIn('category', $selectedCategories);
        })
        ->when($selectedSubcategories, function ($query) use ($selectedSubcategories) {
            return $query->whereIn('subcategory', $selectedSubcategories);
        })
        ->when($selectedColors, function ($query) use ($selectedColors) {
            return $query->whereIn('color', $selectedColors);
        })
        ->when($selectedBrands, function ($query) use ($selectedBrands) {
            return $query->whereIn('brand', $selectedBrands);
        })
        ->when($selectedSaleActive !== null, function ($query) use ($selectedSaleActive) {
            return $query->where('sale_active', $selectedSaleActive);
        })
        ->when($selectedStartPrice && $selectedEndPrice, function ($query) use ($selectedStartPrice, $selectedEndPrice) {
            return $query->whereBetween('price', [$selectedStartPrice, $selectedEndPrice]);
        })
        ->when($selectedStartPrice && !$selectedEndPrice, function ($query) use ($selectedStartPrice) {
            return $query->where('price', '>=', $selectedStartPrice);
        })
        ->when(!$selectedStartPrice && $selectedEndPrice, function ($query) use ($selectedEndPrice) {
            return $query->where('price', '<=', $selectedEndPrice);
        })
        ->when($searchTerm !== null, function ($query) use ($searchTerm) {
            return $query->where('name', 'LIKE', "%$searchTerm%")
            ->orWhere('category', 'LIKE', "%$searchTerm%")
            ->orWhere('subcategory', 'LIKE', "%$searchTerm%")
            ->orWhere('description', 'LIKE', "%$searchTerm%")
            
            ;
        })
        ;

        // Apply sorting based on the selected option
        switch ($selectedSort) {
            case 'low_to_high':
                $productsQuery->orderByRaw('CAST(price AS DECIMAL(10, 2)) ASC');
                break;
            case 'high_to_low':
                $productsQuery->orderByRaw('CAST(price AS DECIMAL(10, 2)) DESC');
                break;
            default:
                $productsQuery->orderBy('id', 'asc'); // Default sort by latest
                break;
        }

        $paginationData = [
            'sort' => $selectedSort,
            'start_price' => $selectedStartPrice,
            'end_price' => $selectedEndPrice,
            'category' => $selectedCategories,
            'subcategory' => $selectedSubcategories,
            'color' => $selectedColors,
            'brand' => $selectedBrands,
            'sale_active' => $selectedSaleActive,
            'query' => $searchTerm,
        ];

        $products = $productsQuery->paginate(12)->onEachSide(1);

        // Append the filter parameters to the pagination links
$products->appends($paginationData);


        return view('grid', compact('products', 'categories', 'selectedCategories', 'selectedSubcategories', 'selectedColors', 'selectedBrands', 'selectedSaleActive', 'selectedStartPrice', 'selectedEndPrice', 'selectedSort', 'searchTerm'));
    }

    


    

    public function show($id)
    {
        // Implement code to fetch the product by ID
        $product = Product::find($id);
        $categories = Categories::all();
        $products = Product::take(12)->get();
        return view('product', compact('categories','products','product'));
    }

   
}
