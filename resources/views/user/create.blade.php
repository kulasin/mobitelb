<!-- resources/views/admin/add_product.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('home') }}">Početna stranica</a></li> 
                    <li>Admin Panel</li>
                    <li>Dodaj proizvod</li>
                </ul>
            </div>
            <h1>Dodaj novi proizvod</h1>
        </div>
        <!-- /page_header -->
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="step first">
                        <h3>1. Informacije o proizvodu</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <div class="form-group">
                                    <label for="name">Naziv proizvoda</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    
                               
                                <label for="category">Kategorija</label>
  <select class="form-control" name="category" id="category" onchange="updateSubcategories()" required>
    <?php
    // Assume $categories is an array fetched from your database
    foreach ($categories as $category) {
      echo "<option  id='{$category['category_id']}' value='{$category['category_name']}'>{$category['category_name']}</option>";
    }
    ?>
  </select>
  </div>
  <div class="form-group">
  <label for="subcategory">Podkategorija:</label>
  <select name="subcategory" class="form-control" id="subcategory">
    <!-- Options will be dynamically added here -->
  </select>
</div>
<script>
  // Assume $subcategories is an array fetched from your database
  const subcategories = <?php echo json_encode($subcategories); ?>;

  function updateSubcategories() {
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
        subcategorySelect.appendChild(option);
      }
    });
  }

  // Initial call to populate subcategories based on the default category
  updateSubcategories();
</script>



                                <div class="form-group">
    <label for="brand">Brand</label>
    <select class="form-control" id="brand" name="brand" onchange="updateSubcategories()" required>
        <option value="apple">Apple</option>
        <option value="samsung">Samsung</option>
        <option value="xiaomi">Xiaomi</option>
        <option value="google">Google</option>
        <option value="ps">Playstation</option>
        <option value="lenovo">Lenovo</option>
        <option value="razer">Razer</option>
        <option value="honor">Honor</option>
        <option value="inkax">Inkax</option>
        <option value="homtom">HomTom</option>
        <option value="digicell">Digicell</option>
        <option value="ipro">iPro</option>
        <option value="ldnio">Ldnio</option>
        <option value="imilab">Imilab</option>
        <option value="rockymile">Rockymile</option>
        <option value="bigben">Bigben</option>
        <option value="hp">HP</option>
        <option value="gateway">Gateway</option>
        <option value="microsoft">Microsoft</option>
        <option value="mercusys">Mercusys</option>
        <option value="esperanza">Esperanza</option>
        <option value="borg">Borg</option>
        <option value="genius">Genius</option>
        <option value="logitech">Logitech</option>
        <option value="xo">XO</option>
        <option value="tp_link">Tp link</option>
        <option value="logilink">LogiLink</option>
        <option value="hoco">Hoco</option>
        <option value="spigen">SPIGEN</option>
        <option value="celebrat">Celebrat</option>
        <option value="haylou">Haylou</option>
        <option value="struke">Struke</option>
        <option value="uag">UAG</option>
        <option value="jbl">JBL</option>
        <option value="karl_lagerlfield">Karl Lagerlfield</option>
        <option value="panasonic">Panasonic</option>
        <option value="guess">Guess</option>
        <option value="redragon">Redragon</option>
        <option value="cubot">Cubot</option>
        <option value="allcall">AllCall</option>
          <option value="Sony">Sony</option>
    <option value="Nokia">Nokia</option>
    <option value="DJI">DJI</option>
    <option value="FUJIFILM">FUJIFILM</option>
    <option value="Nintendo">Nintendo</option>
    <option value="Garmin">Garmin</option>
        <option value="ostalo">Ostalo</option>
    </select>
</div>

                                <div class="form-group">
                                    <label for="color">Boja</label>
                                    <select class="form-control" id="color" name="color" required>
    <option value="white">Bijela</option>
    <option value="red">Crvena</option>
    <option value="blue">Plava</option>
    <option value="green">Zelena</option>
    <option value="yellow">Žuta</option>
    <option value="black">Crna</option>
    <option value="orange">Narandžasta</option>
    <option value="purple">Ljubičasta</option>
    <option value="pink">Roza</option>
    <option value="brown">Smeđa</option>
    <option value="gray">Siva</option>
    <option value="cyan">Tirkizna</option>
    <option value="magenta">Magenta</option>
    <option value="olive">Maslinasta</option>
    <option value="lime">Limun zelena</option>
    <option value="teal">Tirkizno zelena</option>
    <option value="maroon">Tamno crvena</option>
    <option value="navy">Tamno plava</option>
    <option value="silver">Srebrna</option>
    <option value="gold">Zlatna</option>
</select>

                                </div>
                                <div class="form-group">
                                   <label for="editor1">Specifikacije</label>
    <textarea id="editor1" name="specifications"></textarea>

   
</div>
<div class="form-group">
    <label for="editor2">Opis</label>
    <textarea id="editor2" name="description"></textarea>
</div>
   
                            
                                <div class="form-group">
                                    <label for="price">Cijena</label>
                                    <input style="width:100%" type="number" class="form-control full-width" id="price" name="price" step="0.01" required>
                                </div>
                                <!-- Replace your dropdowns with switches -->
<div class="form-group" style="display:flex; justify-content:space-between; margin-top:20px">
    <label for="aktivnaAkcija" style="margin-top:5px">Aktivna akcija:</label>
    <input type="checkbox" id="aktivnaAkcija" name="aktivnaAkcija" data-toggle="switch" data-on-text="Da" data-off-text="Ne">
</div>




                                
                                <div class="form-group">
                                    <label for="sale_old_price">Stara cijena (samo ako je Aktivna akcija)</label>
                                    <input style="width:100%" type="number" class="form-control" id="sale_old_price" name="sale_old_price">
                                </div>
                             
                                
                                <div class="form-group">
                                    <label for="sale_price_ends">Datum završetka akcije</label>
                                    <input type="date" class="form-control" id="sale_price_ends" name="sale_price_ends">
                                </div>
                                
                                
                                <div class="form-group" style="display:flex; justify-content:space-between; margin-top:20px">
    <label for="istaknutiProizvod" style="margin-top:5px">Istaknuti proizvod:</label>
    <input type="checkbox" id="istaknutiProizvod" name="istaknutiProizvod" data-toggle="switch" data-on-text="Da" data-off-text="Ne">
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
    <div class="upload__img-wrap"></div>
</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn_1" style="width:100%">Dodaj proizvod</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /container -->
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
