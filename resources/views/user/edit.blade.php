<!-- resources/views/user/edit_product.blade.php -->

@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container margin_30">
    <div class="page_header">
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">Početna stranica</a></li>
                <li><a href="{{ route('products') }}">Svi proizvodi</a></li>
                <li>Uredi proizvod</li>
            </ul>
        </div>
        <h1>Uredi proizvod</h1>
    </div>
    <!-- /page_header -->

    <form action="{{ route('product.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="step first">
                        <h3>1. Informacije o proizvodu</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <div class="form-group">
                                    <label for="name">Naziv proizvoda</label>
                                    <input type="text" class="form-control" value="{{ $product->name }}" id="name" name="name" required>
                                </div>
                                <div class="form-group">
    <label for="category">Kategorija</label>
    <select class="form-control" name="category" id="category" onchange="updateSubcategories()" required>
        <?php
        // Assume $categories is an array fetched from your database
        foreach ($categories as $category) {
            $selectedCategory = ($category['category_name'] == $product->category) ? 'selected' : '';
            echo "<option id='{$category['category_id']}' value='{$category['category_name']}' $selectedCategory>{$category['category_name']}</option>";
        }
        ?>
    </select>
</div>

<div class="form-group">
    <label for="subcategory">Podkategorija:</label>
    <select name="subcategory" class="form-control" id="subcategory">
        <?php
        // Assume $subcategories is an array fetched from your database
        foreach ($subcategories as $subcategory) {
            $selectedSubcategory = ($subcategory['subcategory_name'] == $product->subcategory) ? 'selected' : '';
            echo "<option id='{$subcategory['subcategory_name']}' value='{$subcategory['subcategory_name']}' $selectedSubcategory>{$subcategory['subcategory_name']}</option>";
        }
        ?>
    </select>
</div>

<!-- Your HTML code remains unchanged -->


<script>
    // Assume $subcategories is an array fetched from your database
    const subcategories = <?php echo json_encode($subcategories); ?>;
    const selectedSubcategory = <?php echo json_encode($product->subcategory); ?>;

    function updateSubcategories(preselectedSubcategory) {
        // Get the selected category element
        const categorySelect = document.getElementById('category');
        // Get the selected option
        const selectedOption = categorySelect.options[categorySelect.selectedIndex];
        // Get the id attribute of the selected option
        const selectedCategoryId = selectedOption.getAttribute('id');

        // Get the subcategory select element
        const subcategorySelect = document.getElementById('subcategory');

        // Clear existing options
        subcategorySelect.innerHTML = '';

        // Add new options based on the selected category
        subcategories.forEach(subcategory => {
            if (subcategory.category_id == selectedCategoryId) {
                const option = document.createElement('option');
                option.value = subcategory.subcategory_name;
                option.textContent = subcategory.subcategory_name;

                // Check if the current subcategory matches the preselected subcategory
                if (subcategory.subcategory_name === preselectedSubcategory) {
                    option.selected = true;
                }

                subcategorySelect.appendChild(option);
            }
        });
    }

    // Initial call to populate subcategories based on the default category and selected subcategory
    updateSubcategories(selectedSubcategory);
</script>






<div class="form-group">
    <label for="brand">Brend</label>
    <select class="form-control" id="brand" name="brand" required>
        <?php
      
      foreach ($brands as $brand) {
        $selectedBrand = ($brand['name'] == $product->brand) ? 'selected' : '';
        echo "<option id='{$brand['id']}' value='{$brand['name']}' $selectedBrand>" . ucfirst($brand['name']) . "</option>";
    }
    
        ?>
    </select>
</div>

                                <div class="form-group">
                                    <label for="color">Boja</label>
                                    <select class="form-control" id="color" name="color" required>
        <?php
        $colorTranslations = [
            'white' => 'Bijela',
            'red' => 'Crvena',
            'blue' => 'Plava',
            'green' => 'Zelena',
            'yellow' => 'Žuta',
            'black' => 'Crna',
            'orange' => 'Narandžasta',
            'purple' => 'Ljubičasta',
            'pink' => 'Roza',
            'brown' => 'Smeđa',
            'gray' => 'Siva',
            'cyan' => 'Tirkizna',
            'magenta' => 'Magenta',
            'olive' => 'Maslinasta',
            'lime' => 'Limun zelena',
            'teal' => 'Tirkizno zelena',
            'maroon' => 'Tamno crvena',
            'navy' => 'Tamno plava',
            'silver' => 'Srebrna',
            'gold' => 'Zlatna',
        ];

        foreach ($colorTranslations as $colorValue => $colorTranslation) {
            $selected = ($colorValue === $product->color) ? 'selected' : '';
            echo "<option value=\"$colorValue\" $selected>$colorTranslation</option>";
        }
        ?>
    </select>

                                </div>
                                <div class="form-group">
                                   <label for="editor">Specifikacije</label>
    <textarea id="editor" name="specifications">{{ $product->specifications }}</textarea>

   
</div>
<div class="form-group">
    <label for="editor2">Opis</label>
    <textarea id="editor2" name="description">{{ $product->description }}</textarea>
</div>
   
                            
                                <div class="form-group">
                                    <label for="price">Cijena</label>
                                    <input style="width:100%" value="{{ $product->price }}" type="number" class="form-control full-width" id="price" name="price" step="0.01" required>
                                </div>
                                <!-- Replace your dropdowns with switches -->
                                <div class="form-group" style="display:flex; justify-content:space-between; margin-top:20px">
    <label for="aktivnaAkcija" style="margin-top:5px">Aktivna akcija:</label>
    <input type="checkbox" id="aktivnaAkcija" name="aktivnaAkcija" data-toggle="switch" value="1" {{ $product->sale_active ? 'checked' : '' }} data-on-text="Da" data-off-text="Ne">
</div>





                                
                                <div class="form-group">
                                    <label for="sale_old_price">Stara cijena (samo ako je Aktivna akcija)</label>
                                    <input style="width:100%" type="number" class="form-control" id="sale_old_price" name="sale_old_price" value="{{ $product->sale_old_price }}">
                                </div>
                             
                                
                                <div class="form-group">
                                    <label for="sale_price_ends">Datum završetka akcije</label>
                                    <input type="date" class="form-control" id="sale_price_ends" name="sale_price_ends" value="{{ $product->sale_price_ends }}">
                                </div>
                              
                                
                                
                                <div class="form-group" style="display:flex; justify-content:space-between; margin-top:20px">
    <label for="istaknutiProizvod" style="margin-top:5px">Istaknuti proizvod:</label>
    <input type="checkbox" id="istaknutiProizvod" name="istaknutiProizvod" value="1" {{ $product->featured ? 'checked' : '' }} data-toggle="switch" data-on-text="Da" data-off-text="Ne">
</div>


 <div class="form-group">
    <label for="images">Galerija</label>
    <br>
    <div class="upload__box">
    <div class="upload__btn-box">
        <label class="upload__btn">
            Dodaj slike u galeriju
            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" id="imageUpload" name="images[]">
        </label>
    </div>
   <div class="upload__img-wrap">
    @foreach ($product->images as $image)
        @php
            $imagePaths = explode(',', $image);
            $processedPaths = [];
        @endphp
    @endforeach

    @foreach ($imagePaths as $imagePath)
        @if (trim($imagePath) !== '' && !in_array(trim($imagePath), $processedPaths))
            @php
                $processedPaths[] = trim($imagePath);
            @endphp
            <div class="upload__img-box">
                <div style="background-image: url('{{ asset('resources/img/uploads/' . trim($imagePath)) }}')" data-file="{{ trim($imagePath) }}" class="img-bg">
                    <button type="button" class="delete-image-btn delete__btn" data-image="{{ trim($imagePath) }}" style="width:100%">X Obriši</button>
                </div>
            </div>
        @endif
    @endforeach
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
$(document).ready(function () {
    var url = window.location.href;
    var regex = /\/product\/\d+\/edit$/;
    if (regex.test(url)) {
        $('.upload__img-wrap').sortable({
            update: function (event, ui) {
                // Get the new order of images as a comma-separated string
                var newOrder = $('.upload__img-wrap .img-bg').map(function() {
                    return $(this).data('file');
                }).get().join(',');
                console.log('New Order:', newOrder); // Log the new order to the console
                
                // Generate the URL for the reorder-images route
                var url = "{{ route('reorder-images', ['id' => $product->id]) }}";
                console.log('URL:', url); // Log the URL to the console

                // Send the new order to the server to update the database
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: { 
                        order: newOrder,
                        _token: '{{ csrf_token() }}' // Include the CSRF token
                    },
                    success: function (response) {
                        console.log('Image order updated successfully');
                    },
                    error: function () {
                        console.log('Error updating image order');
                    }
                });
            }
        });
    }
});
</script>
<script>
    $(document).ready(function () {
        $('.delete-image-btn').on('click', function () {
            // Store $(this) in a variable to maintain the correct context
            var deleteButton = $(this);

            // Get the image path
            var imagePath = deleteButton.data('image');

            // Make an AJAX request to delete the image
            $.ajax({
                type: 'POST',
                url: '{{ route("product.deleteImage") }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: '{{ $product->id }}',
                    image_path: imagePath
                },
                success: function (response) {
                    // Handle success, maybe remove the deleted image from the UI
                    console.log(response);
                    // Assuming you want to remove the entire container
                    deleteButton.closest('.upload__img-box').remove();
                },
                error: function (error) {
                    // Handle error
                    console.error(error);
                }
            });
        });
    });
</script>
</div>

</div>


                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn_1" style="width:100%">Spasi izmjene</button>
                    </div>
                </div>
            </div>

        </form>
</div>
<!-- /container -->
@endsection

@section('scripts')

<script>
    // Assume $categories and $subcategories are arrays fetched from your database
    const categories = <?php echo json_encode($categories); ?>;
    const subcategories = <?php echo json_encode($subcategories); ?>;

    function updateSubcategories() {
        // Get the selected category
        const categorySelect = document.getElementById('category');
        const selectedCategory = categorySelect.value;

        // Get the subcategory select element
        const subcategorySelect = document.getElementById('subcategory');

        // Clear existing options
        subcategorySelect.innerHTML = '';

        // Add new options based on the selected category
        subcategories.forEach(subcategory => {
            if (subcategory.category_id == selectedCategory) {
                const option = document.createElement('option');
                option.value = subcategory.subcategory_name;
                option.textContent = subcategory.subcategory_name;
                subcategorySelect.appendChild(option);
            }
        });
    }

    // Initial call to populate subcategories based on the default category
    updateSubcategories();
</script>
@endsection
<style>
    body {
        background-color: black;
        color: white;
    }

    .black-bg {
        padding: 40px 0;
    }

    .step {
        background-color: #1a1a1a;
        padding: 30px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .step h3 {
        color: #fff;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .tab-content.checkout {
        padding-top: 10px;
        color: #fff;
    }

    .form-group label {
        color: #fff;
    }

    .form-control {
        background-color: #333333;
        border: none;
        border-radius: 0;
        color: #fff;
    }

    .form-control:focus {
        box-shadow: none;
        background-color: #333333;
        color: #fff;
    }

    .form-control[disabled] {
        background-color: #333333;
    }

    .form-control::placeholder {
        color: #aaa;
    }

    .btn_1 {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn_1:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn_1:focus {
        box-shadow: none;
    }
    .ck-editor__editable_inline {
    min-height: 400px;
}
.ck-editor__editable  {background:black!important;}

.ck-powered-by {display:none;}
.upload__img-close {display:none;}

.img-bg {cursor: pointer;}

</style>



