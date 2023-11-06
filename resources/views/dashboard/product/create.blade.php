@extends('dashboard.layouts.dashboard')
@section('content')
@push('js')
<script src="/assets/backend/tinymice.js"></script>
@endpush
<div layout_title="Product Management">
    <h4 class="mb-2 py-2">Product Management</h4>
    <div class="container">
        <div class="card list_card">
            <div class="card-header d-flex flex-wrap justify-content-between">
                <h4>Create</h4>
                <div class="btns">
                    <a href="{{ route('dashboard.product.view') }}"
                        class="btn rounded-pill btn-outline-warning router-link-active">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form action="{{route('dashboard.product.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="admin_form form_1 d-grid">
                                <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                    <div class="field_wrapper">
                                        <label class="text-capitalize d-block">
                                            <span class="mb-2 d-block">
                                                Product Name
                                            </span>
                                            <input onkeyup="createUrl(event.target.value)" type="text" value="{{ old('product_name') }}" name="product_name" class="form-control" />
                                        </label>
                                        @error('product_name')
                                            <div class="text-warning my-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                    <div class="field_wrapper">
                                        <label class="text-capitalize d-block">
                                            <span class="mb-2 d-block">
                                                Product Url
                                            </span>
                                            <input type="text" value="{{ old('product_url') }}" id="product_url" name="product_url" class="form-control" />
                                        </label>
                                        @error('product_url')
                                            <div class="text-warning my-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="full_width row">
                                    {{-- <div class="form-group d-grid col-lg-4  align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="cost" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    cost
                                                </span>
                                                <input type="text" id="cost" name="cost" class="form-control" />
                                                <!---->
                                            </label>
                                            <!---->
                                        </div>
                                    </div> --}}
                                    <div class="form-group d-grid col-lg-4 align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="sales_price" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    sales price
                                                </span>
                                                <input type="text" value="{{ old('sales_price') }}" id="sales_price" name="sales_price" class="form-control" />
                                            </label>
                                            @error('sales_price')
                                                <div class="text-warning my-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-grid col-lg-4 align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="stock" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    initial stock
                                                </span>
                                                <input type="text" value="{{ old('stock') }}" name="stock" class="form-control" />
                                            </label>
                                            @error('stock')
                                                <div class="text-warning my-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group d-grid col-lg-4 align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="low_stock" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    low stock
                                                </span>
                                                <input type="text" value="{{ old('low_stock') }}" id="low_stock" name="low_stock" class="form-control" />
                                            </label>
                                            @error('low_stock')
                                                <div class="text-warning my-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="form-group d-grid col-lg-4 align-content-start gap-1 mb-2">
                                        <label class="mb-2 text-capitalize">
                                            is top product
                                        </label>
                                        <input type="number" name="is_top_product" class="form-control">
                                    </div> --}}

                                    <div class="form-group full_width d-grid align-content-start gap-1 mb-4">
                                        <div>
                                            <label class="mb-2 text-capitalize">
                                                category
                                            </label>
                                            <select name="selected_categories" id="selected_categories" class="form-control">
                                                <option value="">select</option>
                                                @foreach ( $product_categories as $product_catagory)
                                                    <option {{ old('selected_categories') == $product_catagory->id ? 'selected':'' }} value="{{$product_catagory->id}}">
                                                        {{$product_catagory->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('selected_categories')
                                                <div class="text-warning my-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                        <h5 class="text-capitalize">
                                            Product status
                                        </h5>
                                        <label for="call_for_price">
                                            <input type="checkbox" value="1" id="call_for_price"
                                                class="form-check-input" />
                                            &nbsp; &nbsp; Call for price
                                        </label>
                                        <label for="is_upcomming">
                                            <input type="checkbox" value="1" id="is_upcomming"
                                                class="form-check-input" />
                                            &nbsp; &nbsp; Upcomming
                                        </label>
                                        <label for="is_tba">
                                            <input type="checkbox" value="1" id="is_tba" class="form-check-input" />
                                            &nbsp; &nbsp; TBA
                                        </label>
                                        <label for="is_pre_order">
                                            <input type="checkbox" value="1" id="is_pre_order"
                                                class="form-check-input" />
                                            &nbsp; &nbsp; Pre order
                                        </label>
                                        <label for="is_in_stock">
                                            <input checked="checked" type="checkbox" value="1" id="is_in_stock"
                                                class="form-check-input" />
                                            &nbsp; &nbsp; In stock available
                                        </label>
                                        <br />
                                    </div> --}}
                                    <div class="full_width mb-2 row mb-4">
                                        <div class="col-lg-3">
                                            <div class="field_wrapper">
                                                <label class="text-capitalize d-block">
                                                    <span class="mb-2 d-block">
                                                        Image
                                                    </span>
                                                    <input type="file" accept=".jpg,.jpeg,.png" onchange="preview('preview_image')" name="image" class="form-control" />
                                                    <div>
                                                        <img src="" id="preview_image" style="max-height: 100px;" class="img-thumbnail" alt="">
                                                    </div>
                                                </label>
                                                @error('image')
                                                    <div class="text-warning my-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- @for ($i = 0; $i < 3; $i++)
                                            <div class="col-lg-3">
                                                <div class="field_wrapper">
                                                    <label for="rimage{{$i+1}}" class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            Related Image {{$i+1}}
                                                        </span>
                                                        <input type="file" accept=".jpg,.jpeg,.png" id="image{{$i+1}}" name="related_image[]" class="form-control" />
                                                    </label>
                                                    <div class="file_preview"></div>
                                                </div>
                                            </div>
                                        @endfor --}}
                                    </div>

                                    <div class="form-group d-grid align-content-start full_width  gap-1 mb-2 ">
                                        <label for="short_description">Short Description</label>
                                        @error('short_description')
                                            <div class="text-warning my-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <textarea id="short_description" name="short_description">{{ old('short_description') }}</textarea>
                                    </div>

                                    <div class="form-group d-grid align-content-start full_width gap-1 mb-2">
                                        <label for="description">Description</label>
                                        @error('description')
                                            <div class="text-warning my-1">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <textarea id="description" name="description">{{ old('description') }}</textarea>
                                    </div>

                                    <div class="seo_section full_width mt-5">
                                        <div class="heading mb-4">
                                            <h4 class="d-flex justify-content-center">Seo section</h4>
                                            <h6 class="d-flex justify-content-center">
                                                Boost traffic to your online business.
                                            </h6>
                                        </div>
                                        <hr />
                                        <div class="admin_form form_1 col_2 mt-3">
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper">
                                                    <label for="meta_title" class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            meta title
                                                        </span>
                                                        <input type="text" id="meta_title" value="{{ old('meta_title') }}" name="meta_title" class="form-control" />
                                                    </label>
                                                    @error('meta_title')
                                                        <div class="text-warning my-1">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper">
                                                    <label for="meta_keywords" class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            meta keywords
                                                        </span>
                                                        <input type="text" id="meta_keywords" value="{{ old('meta_keywords') }}" name="meta_keywords" class="form-control" />
                                                    </label>
                                                    @error('meta_keywords')
                                                        <div class="text-warning my-1">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper">
                                                    <label for="page_title" class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            meta description
                                                        </span>
                                                        <textarea type="text" id="meta_description" value="{{ old('meta_description') }}" name="meta_description" class="form-control"></textarea>
                                                    </label>
                                                    @error('meta_description')
                                                        <div class="text-warning my-1">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper">
                                                    <label class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            video_url
                                                        </span>
                                                        <input type="text" name="video_url" value="{{ old('video_url') }}" class="form-control" />
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper">
                                                    <label class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            schema_tag
                                                        </span>
                                                        <textarea type="text" name="schema_tag" value="{{ old('schema_tag') }}" class="form-control" ></textarea>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-outline-info">
                            <i class="fa fa-upload"></i>
                            Submit
                        </button>
                    </div>
            </form>
            <script>
                tinymce.init({
                        selector: '#short_description'
                    });
                    tinymce.init({
                        selector: '#description'
                    });
            </script>
        </div>
    </div>
</div>
@endsection
