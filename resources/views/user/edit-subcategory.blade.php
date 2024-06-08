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
                <li><a href="{{ route('subcategories') }}">Sve podkategorije</a></li>
                <li>Uredi podkategoriju</li>
            </ul>
        </div>
        <h1>Uredi podkategoriju</h1>
    </div>
    <!-- /page_header -->

    <form action="{{ route('user.update-subcategory', ['id' => $subcategories->subcategory_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="step first">
                        <h3>1. Informacije o podkategoriji</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <div class="form-group">
                                    <label for="name">Naziv podkategorije</label>
                                    <input type="text" class="form-control" value="{{ $subcategories->subcategory_name }}" id="name" name="name" required>
                                </div>
                                <div class="form-group">
    <label for="category">Kategorija</label>
    <select class="form-control" name="category" id="category" required>
        <?php
        // Assume $categories is an array fetched from your database
        foreach ($categories as $category) {
            $selectedCategory = ($category['category_id'] == $subcategories->category_id) ? 'selected' : '';
            echo "<option id='{$category['category_id']}' value='{$category['category_id']}' $selectedCategory>{$category['category_name']}</option>";
        }
        ?>
    </select>
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
</style>


