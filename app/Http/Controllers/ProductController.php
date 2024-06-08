<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Subcategories;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{   
    
    
    public function grid()
    {
        


        $products = Product::orderBy('id', 'desc')->paginate(12)->onEachSide(1);
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

    
    public function products()
    {
        


        $products = Product::all();
        $categories = Categories::with('subcategories')->get();
        $selectedCategories = [];
        $selectedSubcategories = []; // New array to hold selected subcategories
        $selectedColors = [];
        $selectedBrands = [];
        $selectedSaleActive = [];
        $selectedStartPrice = request()->input('start_price');
        $selectedEndPrice = request()->input('end_price');
        $selectedSort = request()->input('sort');
    
        return view('user.products', compact('products', 'categories', 'selectedCategories', 'selectedSubcategories', 'selectedColors', 'selectedBrands', 'selectedSaleActive', 'selectedStartPrice', 'selectedEndPrice', 'selectedSort'));
    }


    public function category()
    {

        $categories = Categories::all();

    
        return view('user.categories', compact('categories'));
    }
    

    
    public function subcategory()
    {

        $subcategories = Subcategories::with('category')->get();

    
        return view('user.subcategories', compact('subcategories'));
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

    // Add Open Graph meta tags
    $ogTags = [
        'og:site_name' => 'MobitelBA | '.$product->name,
        'og:title' => 'MobitelBA | '.$product->name,
        'og:description' => htmlspecialchars(strip_tags($product->description ?? 'Default Description')),
        'og:image' => $product->images ? asset('resources/img/uploads/' . $product->images[0]) : asset('resources/img/default-image.jpg'),
        'og:type' => 'product',
    ];
    
        // Add the general <title> tag
    $ogTags['title'] = 'MobitelBA | '.$product->name;

     return view('product', compact('categories', 'products', 'product', 'ogTags'));
}

    public function create()
    {
        $categories = Categories::all(); // Fetch all categories from the database
        $subcategories = Subcategories::all(); // Fetch all subcategories from the database
        // You may need to fetch additional data or perform other actions here based on your requirements.
    
        return view('user.create', compact('categories', 'subcategories'));
    }


    public function CreateCategory()
    {
        $categories = Categories::all(); // Fetch all categories from the database
        $subcategories = Subcategories::all(); // Fetch all subcategories from the database
        // You may need to fetch additional data or perform other actions here based on your requirements.
    
        return view('user.create-category', compact('categories', 'subcategories'));
    }


    public function StoreCategory(Request $request)
    {
        // Store the product in the database
        $category = new Categories();
        $category->category_name = $request->input('name');
  
        $category->save();

    
    session()->flash('success', 'Kategorija uspješno dodana');

    // Assuming the route name is 'user.products'
    return redirect()->route('categories');
    }

    public function editCategory($id)
    {
        // Find the category by its category_id
        $category = Categories::where('category_id', $id)->first();

    
        // You may need to fetch additional data or perform other actions here based on your requirements.
    
        return view('user.edit-category', compact('category'));
    }
    

    public function updateCategory(Request $request, $id)
    {
        // Find the category by its category_id
        $category = Categories::where('category_id', $id)->first();
    
        // Update the category attributes
        $category->update([
            'category_name' => $request->input('name'),
            // Update other attributes as needed
        ]);
    
        // Redirect or return a response as needed
        return redirect()->route('categories')->with('success', 'Kategorija uspješno izmijenjena!');
    }
    

public function destroyCategory($id)
{
    // Find the category by ID and delete it
    Categories::destroy($id);

    // Redirect or respond as needed
    return redirect()->route('categories')->with('success', 'Kategorija uspješno obrisana!');
}


public function CreateSubcategory()
{
    $categories = Categories::all(); // Fetch all categories from the database
    // You may need to fetch additional data or perform other actions here based on your requirements.

    return view('user.create-subcategory', compact('categories'));
}

public function StoreSubcategory(Request $request)
{
    // Store the subcategory in the database
    $subcategory = new Subcategories();
    $subcategory->subcategory_name = $request->input('name');
    $subcategory->category_id = $request->input('category'); // Assuming you have a category_id field in your form

    $subcategory->save();

    session()->flash('success', 'Podkategorija uspješno dodana');

    // Assuming the route name is 'user.products'
    return redirect()->route('subcategories');
}

public function editSubcategory($id)
{
    // Find the subcategory by its subcategory_id
    $categories = Categories::all(); 
    $subcategories = Subcategories::where('subcategory_id', $id)->first();

    // You may need to fetch additional data or perform other actions here based on your requirements.

    return view('user.edit-subcategory', compact('categories','subcategories'));
}

public function updateSubcategory(Request $request, $id)
{
    // Find the subcategory by its subcategory_id
    $subcategory = Subcategories::where('subcategory_id', $id)->first();

    // Update the subcategory attributes
    $subcategory->update([
        'subcategory_name' => $request->input('name'),
        'category_id' => $request->input('category'),
        // Update other attributes as needed
    ]);

    // Redirect or return a response as needed
    return redirect()->route('subcategories')->with('success', 'Podkategorija uspješno izmijenjena!');
}

public function destroySubcategory($id)
{
    // Find the subcategory by ID and delete it
    Subcategories::destroy($id);

    // Redirect or respond as needed
    return redirect()->route('subcategories')->with('success', 'Podkategorija uspješno obrisana!');
}


    
    public function store(Request $request)
    {
        // Store the product in the database
        $product = new Product();
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->subcategory = $request->input('subcategory');
        $product->brand = $request->input('brand');
        $product->specifications = $request->input('specifications');
        $product->color = $request->input('color');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

         // Handle the file uploads
    $uploadedImages = [];

    if ($request->hasFile('images')) {
        $uploadedImages = [];
    
        foreach ($request->file('images') as $image) {
            // Check if the file is valid
            if ($image->isValid()) {
                // Your file upload logic here
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(base_path('resources/img/uploads'), $imageName);
                $uploadedImages[] = $imageName;
            } else {
                // Log or print any errors
                echo "Error uploading file: " . $image->getErrorMessage();
            }
        }
    
        // Now you can use $uploadedImages as needed
        $product->images = implode(',', $uploadedImages);
    } else {
        // No files uploaded
        echo "No files uploaded.";
    }

    $product->images = implode(',', $uploadedImages);


        $product->sale_old_price = $request->input('sale_old_price');
        $product->sale_price_ends = $request->input('sale_price_ends');
        $product->sale_active = $request->input('aktivnaAkcija') ? 1 : 0;
        $product->featured = $request->input('istaknutiProizvod') ? 1 : 0;

        $product->save();

        // Redirect or respond accordingly
        $products = Product::all();
        $categories = Categories::with('subcategories')->get();
        $selectedCategories = [];
        $selectedSubcategories = []; // New array to hold selected subcategories
        $selectedColors = [];
        $selectedBrands = [];
        $selectedSaleActive = [];
        $selectedStartPrice = request()->input('start_price');
        $selectedEndPrice = request()->input('end_price');
        $selectedSort = request()->input('sort');
    
            // Flash a success message to the session
    session()->flash('success', 'Proizvod uspješno dodan');

    // Assuming the route name is 'user.products'
    return redirect()->route('products');
    }
    public function edit($id)
{
    $product = Product::find($id);

    // Fetch categories
    $categories = Categories::all();

    // Fetch subcategories (assuming they have a foreign key relationship with categories)
    $subcategories = Subcategories::all();
    // Add any additional data needed for the form
    return view('user.edit', compact('product', 'categories', 'subcategories'));
}

public function update(Request $request, $id)
{
    // Find the product by ID
    $product = Product::findOrFail($id);

    // Update the product attributes
    $product->update([
        'name' => $request->input('name'),
        'category' => $request->input('category'),
        'subcategory' => $request->input('subcategory'),
        'brand' => $request->input('brand'),
        'color' => $request->input('color'),
        'specifications' => $request->input('specifications'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'sale_active' => $request->input('aktivnaAkcija', 0),
        'sale_old_price' => $request->input('sale_old_price'),
        'sale_price_ends' => $request->input('sale_price_ends'),
        'featured' => $request->input('istaknutiProizvod', 0),
    ]);

    // Handle the file uploads only if new images are selected
    if ($request->hasFile('images')) {
        $uploadedImages = [];

        foreach ($request->file('images') as $image) {
            // Check if the file is valid
            if ($image->isValid()) {
                // Your file upload logic here
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(base_path('resources/img/uploads'), $imageName);
                $uploadedImages[] = $imageName;
            } else {
                // Log or print any errors
                echo "Error uploading file: " . $image->getErrorMessage();
            }
        }

        // Merge existing images with new ones
        $existingImages = is_array($product->images) ? implode(',', $product->images) : $product->images;
        $existingImages = array_filter(explode(',', $existingImages));
        $allImages = array_merge($existingImages, $uploadedImages);

        // Save the combined array as a comma-separated string
        $product->images = implode(',', $allImages);
    }

    // Save the changes to the product
    $product->save();

    // Redirect or return a response as needed
    return redirect()->route('product.edit', ['id' => $product->id])->with('success', 'Proizvod uspješno izmijenjen!');
}




public function deleteImage(Request $request)
{
    try {
        $productId = $request->input('product_id');
        $imagePath = $request->input('image_path');

        // Get the current images as a comma-separated string from the database
        $images = DB::table('products')->where('id', $productId)->value('images');

        // Convert the string to an array
        $imagesArray = explode(',', $images);

        // Remove the image path from the array
        $updatedImagesArray = array_diff($imagesArray, [$imagePath]);

        // Convert the array back to a string
        $updatedImages = implode(',', $updatedImagesArray);

        // Update the 'images' attribute in the database
        DB::table('products')->where('id', $productId)->update(['images' => $updatedImages]);

        // Return a response
        return response()->json([
            'message' => 'Image deleted successfully',
            'old_images' => $images,
            'new_images' => $updatedImages,
            'deleted_image_path' => $imagePath,
        ]);

    } catch (\Exception $e) {
        // Handle exceptions if needed
        return response()->json([
            'message' => 'Error deleting image',
            'error' => $e->getMessage(),
        ], 500);
    }
}












public function destroy($id)
{
    // Find the product by ID and delete it
    Product::destroy($id);

    // Redirect or respond as needed
    return redirect()->route('products')->with('success', 'Proizvod uspješno obrisan!');
}


   
}
