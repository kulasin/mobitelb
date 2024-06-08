<!-- resources/views/user/edit_category.blade.php -->

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
                <li><a href="{{ route('categories') }}">Sve kategorije</a></li>
                <li>Uredi kategoriju</li>
            </ul>
        </div>
        <h1>Uredi kategoriju</h1>
    </div>
    <!-- /page_header -->

    <form action="{{ route('user.update-category', ['id' => $category->category_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="step first">
                        <h3>1. Informacije o kategoriji</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <div class="form-group">
                                    <label for="name">Naziv kategorije</label>
                                    <input type="text" class="form-control" value="{{ $category->category_name }}" id="name" name="name" required>
                                </div>
                               
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


