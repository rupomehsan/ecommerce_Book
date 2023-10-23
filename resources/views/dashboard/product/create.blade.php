@extends('dashboard.layouts.dashboard')
@section('content')
    <div layout_title="Product Management">
        <h3 class="mb-2">Product Management</h3>
        <div class="container">
            <div class="card list_card">
                <div class="card-header">
                    <h4>Create</h4>
                    <div class="btns">
                        <a href="https://dibyo-bd.com/admin#/product/"
                            class="btn rounded-pill btn-outline-warning router-link-active">
                            <i class="fa fa-arrow-left me-5px"></i>
                            Back
                        </a>
                    </div>
                </div>
                <form autocomplete="false" class="create_form">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="admin_form form_1">
                                    <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="product_name" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    Name
                                                </span>
                                                <input type="text" id="product_name" name="product_name"
                                                    class="form-control" />
                                                <!---->
                                            </label>
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="search_keywords" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    search keywords
                                                </span>
                                                <input type="text" id="search_keywords" name="search_keywords"
                                                    class="form-control" />
                                                <!---->
                                            </label>
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="form-group d-grid align-content-start gap-1 mb-2">
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
                                    </div>
                                    <div class="form-group d-grid align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="sales_price" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    price
                                                </span>
                                                <input type="text" id="sales_price" name="sales_price"
                                                    class="form-control" />
                                                <!---->
                                            </label>
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="form-group d-grid align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="stock" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    stock
                                                </span>
                                                <input type="number" id="stock" name="stock" class="form-control" />
                                                <!---->
                                            </label>
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="form-group d-grid align-content-start gap-1 mb-2">
                                        <div class="field_wrapper">
                                            <label for="low_stock" class="text-capitalize d-block">
                                                <span class="mb-2 d-block">
                                                    low stock
                                                </span>
                                                <input type="number" id="low_stock" name="low_stock"
                                                    class="form-control" />
                                                <!---->
                                            </label>
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="form-group d-grid align-content-start gap-1 mb-2">
                                        <div>
                                            <label class="mb-2 text-capitalize">
                                                Select Brand
                                            </label>
                                            <div id="brand_id" class="multiple_select_body">
                                                <div class="multiple_select_data">
                                                    <div class="btn btn-sm btn-outline-danger">
                                                        no data selected
                                                    </div>
                                                </div>
                                                <!---->
                                                <div class="canvas_backdrop">
                                                    <!---->
                                                </div>
                                                <div class="canvas_backdrop">
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                        <div>
                                            <label class="mb-2 text-capitalize">
                                                Select Cateogry
                                            </label>
                                            <div id="category_id" class="multiple_select_body">
                                                <div id="selected_categories" class="multiple_select_data">
                                                    <div class="btn btn-sm btn-outline-danger">
                                                        no data selected
                                                    </div>
                                                </div>
                                                <div class="multiple_select_modal" style="display: none;">
                                                    <div class="multiple_select_modal_backdrop"></div>
                                                    <div class="multiple_select_modal_body" style="overflow: unset;">
                                                        <div class="header">
                                                            <div class="search"><input type="text"
                                                                    class="rounded-pill d-none form-control" /></div>
                                                            <div class="action_btns">
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="selected"></div>
                                                        <div class="data_list text-nowrap">
                                                            <div class="category_card_dropdown custom_scroll"
                                                                style="height: 568px; overflow-y: scroll; padding-left: 5px;">
                                                                <ul class="list">
                                                                    <div class="left_line"></div>
                                                                    <li>
                                                                        <div class="details">
                                                                            <input type="checkbox" data-id="1"
                                                                                class="form-check-input" />
                                                                            <div class="title">
                                                                                T-shirt
                                                                            </div>
                                                                            <div class="collpse"><i
                                                                                    class="fa fa-plus fa-minus"></i></div>
                                                                            <div class="append_sub_btn">
                                                                                <i class="fa fa-plus"></i>
                                                                                add sub category
                                                                            </div>
                                                                        </div>
                                                                        <ul class="list">
                                                                            <div class="left_line"></div>
                                                                            <li>
                                                                                <div class="details">
                                                                                    <input type="checkbox" data-id="4"
                                                                                        class="form-check-input" />
                                                                                    <div class="title">
                                                                                        Half Sleeve Solid
                                                                                    </div>
                                                                                    <!---->
                                                                                    <div class="append_sub_btn">
                                                                                        <i class="fa fa-plus"></i>
                                                                                        add sub category
                                                                                    </div>
                                                                                </div>
                                                                                <ul class="list">
                                                                                    <div class="left_line"></div>
                                                                                    <li class="new_cat_li">
                                                                                        <div class="details">
                                                                                            <input class="form-control" />
                                                                                            <button>CANCEL</button>
                                                                                            <button>DONE</button>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li>
                                                                                <div class="details">
                                                                                    <input type="checkbox" data-id="5"
                                                                                        class="form-check-input" />
                                                                                    <div class="title">
                                                                                        Half Sleeve Print
                                                                                    </div>
                                                                                    <!---->
                                                                                    <div class="append_sub_btn">
                                                                                        <i class="fa fa-plus"></i>
                                                                                        add sub category
                                                                                    </div>
                                                                                </div>
                                                                                <ul class="list">
                                                                                    <div class="left_line"></div>
                                                                                    <li class="new_cat_li">
                                                                                        <div class="details">
                                                                                            <input class="form-control" />
                                                                                            <button>CANCEL</button>
                                                                                            <button>DONE</button>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                            <li class="new_cat_li">
                                                                                <div class="details">
                                                                                    <input class="form-control" />
                                                                                    <button>CANCEL</button>
                                                                                    <button>DONE</button>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="details">
                                                                            <input type="checkbox" data-id="2"
                                                                                class="form-check-input" />
                                                                            <div class="title">
                                                                                Polo T-Shirt
                                                                            </div>
                                                                            <!---->
                                                                            <div class="append_sub_btn">
                                                                                <i class="fa fa-plus"></i>
                                                                                add sub category
                                                                            </div>
                                                                        </div>
                                                                        <ul class="list">
                                                                            <div class="left_line"></div>
                                                                            <li class="new_cat_li">
                                                                                <div class="details">
                                                                                    <input class="form-control" />
                                                                                    <button>CANCEL</button>
                                                                                    <button>DONE</button>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <div class="details">
                                                                            <input type="checkbox" data-id="3"
                                                                                class="form-check-input" />
                                                                            <div class="title">
                                                                                Panjabi
                                                                            </div>
                                                                            <!---->
                                                                            <div class="append_sub_btn">
                                                                                <i class="fa fa-plus"></i>
                                                                                add sub category
                                                                            </div>
                                                                        </div>
                                                                        <ul class="list">
                                                                            <div class="left_line"></div>
                                                                            <li class="new_cat_li">
                                                                                <div class="details">
                                                                                    <input class="form-control" />
                                                                                    <button>CANCEL</button>
                                                                                    <button>DONE</button>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="new_cat_li">
                                                                        <div class="details">
                                                                            <input class="form-control" />
                                                                            <button>CANCEL</button>
                                                                            <button>DONE</button>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="footer_modal d-flex justify-content-between align-items-start">
                                                            <button type="button" href="#"
                                                                class="btn rounded-pill btn-outline-secondary">
                                                                <i class="fa fa-floppy-disk"></i>
                                                                Save &amp; Close
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                        <div>
                                            <label class="mb-2 text-capitalize">
                                                Select Variants
                                            </label>
                                            <div class="variants">
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
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
                                            <input type="checkbox" value="1" id="is_tba"
                                                class="form-check-input" />
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
                                    </div>
                                    <div class="full_width mb-2 row">
                                        <div class="col-lg-3">
                                            <div class="field_wrapper">
                                                <label for="image1" class="text-capitalize d-block">
                                                    <span class="mb-2 d-block">
                                                        Thumb Image
                                                    </span>
                                                    <input type="file" accept="image/*" id="image1" name="image1"
                                                        class="form-control" />
                                                    <!---->
                                                </label>
                                                <div class="file_preview"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="field_wrapper">
                                                <label for="image2" class="text-capitalize d-block">
                                                    <span class="mb-2 d-block">
                                                        Related Image 1
                                                    </span>
                                                    <input type="file" accept="image/*" id="image2" name="image2"
                                                        class="form-control" />
                                                    <!---->
                                                </label>
                                                <div class="file_preview"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="field_wrapper">
                                                <label for="image3" class="text-capitalize d-block">
                                                    <span class="mb-2 d-block">
                                                        Related Image 2
                                                    </span>
                                                    <input type="file" accept="image/*" id="image3" name="image3"
                                                        class="form-control" />
                                                    <!---->
                                                </label>
                                                <div class="file_preview"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="field_wrapper">
                                                <label for="image4" class="text-capitalize d-block">
                                                    <span class="mb-2 d-block">
                                                        Related Image 3
                                                    </span>
                                                    <input type="file" accept="image/*" id="image4" name="image4"
                                                        class="form-control" />
                                                    <!---->
                                                </label>
                                                <div class="file_preview"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="field_wrapper">
                                                <label for="image5" class="text-capitalize d-block">
                                                    <span class="mb-2 d-block">
                                                        Related Image 4
                                                    </span>
                                                    <input type="file" accept="image/*" id="image5" name="image5"
                                                        class="form-control" />
                                                    <!---->
                                                </label>
                                                <div class="file_preview"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="field_wrapper">
                                                <label for="image6" class="text-capitalize d-block">
                                                    <span class="mb-2 d-block">
                                                        Related Image 5
                                                    </span>
                                                    <input type="file" accept="image/*" id="image6" name="image6"
                                                        class="form-control" />
                                                    <!---->
                                                </label>
                                                <div class="file_preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-grid align-content-start full_width gap-1 mb-2">
                                        <label for="short_description">Short Description</label>
                                        <textarea id="tiny-vue_9255584751698062461505" style="display: none;" aria-hidden="true"></textarea>
                                        <div role="application" class="tox tox-tinymce" aria-disabled="false"
                                            style="visibility: hidden; height: 200px;">
                                            <div class="tox-editor-container">
                                                <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                                    <div role="menubar" data-alloy-tabstop="true" class="tox-menubar">
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">File</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">Edit</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">View</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">Format</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div role="group" class="tox-toolbar-overlord"
                                                        aria-disabled="false">
                                                        <div role="group" class="tox-toolbar__primary">
                                                            <div title="history" role="toolbar" data-alloy-tabstop="true"
                                                                tabindex="-1" class="tox-toolbar__group">
                                                                <button aria-label="Undo" title="Undo" type="button"
                                                                    tabindex="-1" class="tox-tbtn tox-tbtn--disabled"
                                                                    aria-disabled="true">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z"
                                                                                fill-rule="nonzero"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Redo" title="Redo" type="button"
                                                                    tabindex="-1" class="tox-tbtn tox-tbtn--disabled"
                                                                    aria-disabled="true">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z"
                                                                                fill-rule="nonzero"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div title="styles" role="toolbar" data-alloy-tabstop="true"
                                                                tabindex="-1" class="tox-toolbar__group">
                                                                <button title="Formats" aria-label="Formats"
                                                                    aria-haspopup="true" type="button" tabindex="-1"
                                                                    unselectable="on"
                                                                    class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                                    aria-expanded="false" style="user-select: none;">
                                                                    <span class="tox-tbtn__select-label">Paragraph</span>
                                                                    <div class="tox-tbtn__select-chevron">
                                                                        <svg width="10" height="10"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                                fill-rule="nonzero"></path>
                                                                        </svg>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div title="formatting" role="toolbar"
                                                                data-alloy-tabstop="true" tabindex="-1"
                                                                class="tox-toolbar__group">
                                                                <button aria-label="Bold" title="Bold" type="button"
                                                                    tabindex="-1" class="tox-tbtn" aria-disabled="false"
                                                                    aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Italic" title="Italic" type="button"
                                                                    tabindex="-1" class="tox-tbtn" aria-disabled="false"
                                                                    aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div title="alignment" role="toolbar"
                                                                data-alloy-tabstop="true" tabindex="-1"
                                                                class="tox-toolbar__group">
                                                                <button aria-label="Align left" title="Align left"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Align center" title="Align center"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Align right" title="Align right"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Justify" title="Justify"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div title="indentation" role="toolbar"
                                                                data-alloy-tabstop="true" tabindex="-1"
                                                                class="tox-toolbar__group">
                                                                <button aria-label="Decrease indent"
                                                                    title="Decrease indent" type="button" tabindex="-1"
                                                                    class="tox-tbtn tox-tbtn--disabled"
                                                                    aria-disabled="true">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm1.6-3.8a1 1 0 01-1.2 1.6l-3-2a1 1 0 010-1.6l3-2a1 1 0 011.2 1.6L6.8 12l1.8 1.2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Increase indent"
                                                                    title="Increase indent" type="button" tabindex="-1"
                                                                    class="tox-tbtn" aria-disabled="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 011.2-1.6l3 2a1 1 0 010 1.6l-3 2a1 1 0 11-1.2-1.6z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tox-anchorbar"></div>
                                                </div>
                                                <div class="tox-sidebar-wrap">
                                                    <div class="tox-edit-area">
                                                        <iframe id="tiny-vue_9255584751698062461505_ifr" frameborder="0"
                                                            allowtransparency="true" title="Rich Text Area"
                                                            class="tox-edit-area__iframe"
                                                            src="./Dashboard_files/saved_resource.html"></iframe>
                                                    </div>
                                                    <div role="complementary" class="tox-sidebar">
                                                        <div data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                            style="width: 0px;">
                                                            <div class="tox-sidebar__pane-container"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tox-statusbar">
                                                <div class="tox-statusbar__text-container">
                                                    <div role="navigation" data-alloy-tabstop="true"
                                                        class="tox-statusbar__path" aria-disabled="false">
                                                        <div role="button" data-index="0" tab-index="-1" aria-level="1"
                                                            tabindex="-1" class="tox-statusbar__path-item"
                                                            aria-disabled="false">p</div>
                                                    </div>
                                                    <span class="tox-statusbar__branding">
                                                        <a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5"
                                                            rel="noopener" target="_blank" tabindex="-1"
                                                            aria-label="Powered by Tiny">
                                                            Powered by Tiny
                                                        </a>
                                                    </span>
                                                </div>
                                                <div title="Resize" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-statusbar__resize-handle">
                                                    <svg width="10" height="10" focusable="false">
                                                        <g fill-rule="nonzero">
                                                            <path
                                                                d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group d-grid align-content-start full_width gap-1 mb-2">
                                        <label for="specification">Specification</label>
                                        <textarea id="tiny-vue_72867914961698062461505" style="display: none;" aria-hidden="true"></textarea>
                                        <div role="application" class="tox tox-tinymce" aria-disabled="false"
                                            style="visibility: hidden; height: 200px;">
                                            <div class="tox-editor-container">
                                                <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                                    <div role="menubar" data-alloy-tabstop="true" class="tox-menubar">
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">File</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">Edit</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">View</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <button aria-haspopup="true" role="menuitem" type="button"
                                                            tabindex="-1" data-alloy-tabstop="true" unselectable="on"
                                                            class="tox-mbtn tox-mbtn--select" aria-expanded="false"
                                                            style="user-select: none;">
                                                            <span class="tox-mbtn__select-label">Format</span>
                                                            <div class="tox-mbtn__select-chevron">
                                                                <svg width="10" height="10" focusable="false">
                                                                    <path
                                                                        d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                        fill-rule="nonzero"></path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div role="group" class="tox-toolbar-overlord"
                                                        aria-disabled="false">
                                                        <div role="group" class="tox-toolbar__primary">
                                                            <div title="history" role="toolbar" data-alloy-tabstop="true"
                                                                tabindex="-1" class="tox-toolbar__group">
                                                                <button aria-label="Undo" title="Undo" type="button"
                                                                    tabindex="-1" class="tox-tbtn tox-tbtn--disabled"
                                                                    aria-disabled="true">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z"
                                                                                fill-rule="nonzero"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Redo" title="Redo" type="button"
                                                                    tabindex="-1" class="tox-tbtn tox-tbtn--disabled"
                                                                    aria-disabled="true">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z"
                                                                                fill-rule="nonzero"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div title="styles" role="toolbar" data-alloy-tabstop="true"
                                                                tabindex="-1" class="tox-toolbar__group">
                                                                <button title="Formats" aria-label="Formats"
                                                                    aria-haspopup="true" type="button" tabindex="-1"
                                                                    unselectable="on"
                                                                    class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                                    aria-expanded="false" style="user-select: none;">
                                                                    <span class="tox-tbtn__select-label">Paragraph</span>
                                                                    <div class="tox-tbtn__select-chevron">
                                                                        <svg width="10" height="10"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                                fill-rule="nonzero"></path>
                                                                        </svg>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                            <div title="formatting" role="toolbar"
                                                                data-alloy-tabstop="true" tabindex="-1"
                                                                class="tox-toolbar__group">
                                                                <button aria-label="Bold" title="Bold" type="button"
                                                                    tabindex="-1" class="tox-tbtn" aria-disabled="false"
                                                                    aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Italic" title="Italic" type="button"
                                                                    tabindex="-1" class="tox-tbtn" aria-disabled="false"
                                                                    aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div title="alignment" role="toolbar"
                                                                data-alloy-tabstop="true" tabindex="-1"
                                                                class="tox-toolbar__group">
                                                                <button aria-label="Align left" title="Align left"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Align center" title="Align center"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Align right" title="Align right"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Justify" title="Justify"
                                                                    type="button" tabindex="-1" class="tox-tbtn"
                                                                    aria-disabled="false" aria-pressed="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <div title="indentation" role="toolbar"
                                                                data-alloy-tabstop="true" tabindex="-1"
                                                                class="tox-toolbar__group">
                                                                <button aria-label="Decrease indent"
                                                                    title="Decrease indent" type="button" tabindex="-1"
                                                                    class="tox-tbtn tox-tbtn--disabled"
                                                                    aria-disabled="true">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm1.6-3.8a1 1 0 01-1.2 1.6l-3-2a1 1 0 010-1.6l3-2a1 1 0 011.2 1.6L6.8 12l1.8 1.2z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                                <button aria-label="Increase indent"
                                                                    title="Increase indent" type="button" tabindex="-1"
                                                                    class="tox-tbtn" aria-disabled="false">
                                                                    <span class="tox-icon tox-tbtn__icon-wrap">
                                                                        <svg width="24" height="24"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 011.2-1.6l3 2a1 1 0 010 1.6l-3 2a1 1 0 11-1.2-1.6z"
                                                                                fill-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tox-anchorbar"></div>
                                                </div>
                                                <div class="tox-sidebar-wrap">
                                                    <div class="tox-edit-area">
                                                        <iframe id="tiny-vue_72867914961698062461505_ifr" frameborder="0"
                                                            allowtransparency="true" title="Rich Text Area"
                                                            class="tox-edit-area__iframe"
                                                            src="./Dashboard_files/saved_resource(1).html"></iframe>
                                                    </div>
                                                    <div role="complementary" class="tox-sidebar">
                                                        <div data-alloy-tabstop="true" tabindex="-1"
                                                            class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                            style="width: 0px;">
                                                            <div class="tox-sidebar__pane-container"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tox-statusbar">
                                                <div class="tox-statusbar__text-container">
                                                    <div role="navigation" data-alloy-tabstop="true"
                                                        class="tox-statusbar__path" aria-disabled="false">
                                                        <div role="button" data-index="0" tab-index="-1" aria-level="1"
                                                            tabindex="-1" class="tox-statusbar__path-item"
                                                            aria-disabled="false">p</div>
                                                    </div>
                                                    <span class="tox-statusbar__branding">
                                                        <a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5"
                                                            rel="noopener" target="_blank" tabindex="-1"
                                                            aria-label="Powered by Tiny">
                                                            Powered by Tiny
                                                        </a>
                                                    </span>
                                                </div>
                                                <div title="Resize" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-statusbar__resize-handle">
                                                    <svg width="10" height="10" focusable="false">
                                                        <g fill-rule="nonzero">
                                                            <path
                                                                d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="form-group d-grid align-content-start full_width gap-1 mb-2">
                                        <label for="description">Description</label>
                                        <div id="description">
                                            <textarea id="tiny-vue_61455323571698062461505" style="display: none;" aria-hidden="true"></textarea>
                                            <div role="application" class="tox tox-tinymce" aria-disabled="false"
                                                style="visibility: hidden; height: 200px;">
                                                <div class="tox-editor-container">
                                                    <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                                        <div role="menubar" data-alloy-tabstop="true"
                                                            class="tox-menubar">
                                                            <button aria-haspopup="true" role="menuitem" type="button"
                                                                tabindex="-1" data-alloy-tabstop="true"
                                                                unselectable="on" class="tox-mbtn tox-mbtn--select"
                                                                aria-expanded="false" style="user-select: none;">
                                                                <span class="tox-mbtn__select-label">File</span>
                                                                <div class="tox-mbtn__select-chevron">
                                                                    <svg width="10" height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg>
                                                                </div>
                                                            </button>
                                                            <button aria-haspopup="true" role="menuitem" type="button"
                                                                tabindex="-1" data-alloy-tabstop="true"
                                                                unselectable="on" class="tox-mbtn tox-mbtn--select"
                                                                aria-expanded="false" style="user-select: none;">
                                                                <span class="tox-mbtn__select-label">Edit</span>
                                                                <div class="tox-mbtn__select-chevron">
                                                                    <svg width="10" height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg>
                                                                </div>
                                                            </button>
                                                            <button aria-haspopup="true" role="menuitem" type="button"
                                                                tabindex="-1" data-alloy-tabstop="true"
                                                                unselectable="on" class="tox-mbtn tox-mbtn--select"
                                                                aria-expanded="false" style="user-select: none;">
                                                                <span class="tox-mbtn__select-label">View</span>
                                                                <div class="tox-mbtn__select-chevron">
                                                                    <svg width="10" height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg>
                                                                </div>
                                                            </button>
                                                            <button aria-haspopup="true" role="menuitem" type="button"
                                                                tabindex="-1" data-alloy-tabstop="true"
                                                                unselectable="on" class="tox-mbtn tox-mbtn--select"
                                                                aria-expanded="false" style="user-select: none;">
                                                                <span class="tox-mbtn__select-label">Format</span>
                                                                <div class="tox-mbtn__select-chevron">
                                                                    <svg width="10" height="10" focusable="false">
                                                                        <path
                                                                            d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                            fill-rule="nonzero"></path>
                                                                    </svg>
                                                                </div>
                                                            </button>
                                                        </div>
                                                        <div role="group" class="tox-toolbar-overlord"
                                                            aria-disabled="false">
                                                            <div role="group" class="tox-toolbar__primary">
                                                                <div title="history" role="toolbar"
                                                                    data-alloy-tabstop="true" tabindex="-1"
                                                                    class="tox-toolbar__group">
                                                                    <button aria-label="Undo" title="Undo"
                                                                        type="button" tabindex="-1"
                                                                        class="tox-tbtn tox-tbtn--disabled"
                                                                        aria-disabled="true">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z"
                                                                                    fill-rule="nonzero"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                    <button aria-label="Redo" title="Redo"
                                                                        type="button" tabindex="-1"
                                                                        class="tox-tbtn tox-tbtn--disabled"
                                                                        aria-disabled="true">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z"
                                                                                    fill-rule="nonzero"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div title="styles" role="toolbar"
                                                                    data-alloy-tabstop="true" tabindex="-1"
                                                                    class="tox-toolbar__group">
                                                                    <button title="Formats" aria-label="Formats"
                                                                        aria-haspopup="true" type="button"
                                                                        tabindex="-1" unselectable="on"
                                                                        class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                                        aria-expanded="false" style="user-select: none;">
                                                                        <span
                                                                            class="tox-tbtn__select-label">Paragraph</span>
                                                                        <div class="tox-tbtn__select-chevron">
                                                                            <svg width="10" height="10"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                                    fill-rule="nonzero"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <div title="formatting" role="toolbar"
                                                                    data-alloy-tabstop="true" tabindex="-1"
                                                                    class="tox-toolbar__group">
                                                                    <button aria-label="Bold" title="Bold"
                                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                    <button aria-label="Italic" title="Italic"
                                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div title="alignment" role="toolbar"
                                                                    data-alloy-tabstop="true" tabindex="-1"
                                                                    class="tox-toolbar__group">
                                                                    <button aria-label="Align left" title="Align left"
                                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                    <button aria-label="Align center"
                                                                        title="Align center" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                    <button aria-label="Align right" title="Align right"
                                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                    <button aria-label="Justify" title="Justify"
                                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false" aria-pressed="false">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0 4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div title="indentation" role="toolbar"
                                                                    data-alloy-tabstop="true" tabindex="-1"
                                                                    class="tox-toolbar__group">
                                                                    <button aria-label="Decrease indent"
                                                                        title="Decrease indent" type="button"
                                                                        tabindex="-1"
                                                                        class="tox-tbtn tox-tbtn--disabled"
                                                                        aria-disabled="true">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm1.6-3.8a1 1 0 01-1.2 1.6l-3-2a1 1 0 010-1.6l3-2a1 1 0 011.2 1.6L6.8 12l1.8 1.2z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                    <button aria-label="Increase indent"
                                                                        title="Increase indent" type="button"
                                                                        tabindex="-1" class="tox-tbtn"
                                                                        aria-disabled="false">
                                                                        <span class="tox-icon tox-tbtn__icon-wrap">
                                                                            <svg width="24" height="24"
                                                                                focusable="false">
                                                                                <path
                                                                                    d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 011.2-1.6l3 2a1 1 0 010 1.6l-3 2a1 1 0 11-1.2-1.6z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tox-anchorbar"></div>
                                                    </div>
                                                    <div class="tox-sidebar-wrap">
                                                        <div class="tox-edit-area">
                                                            <iframe id="tiny-vue_61455323571698062461505_ifr"
                                                                frameborder="0" allowtransparency="true"
                                                                title="Rich Text Area" class="tox-edit-area__iframe"
                                                                src="./Dashboard_files/saved_resource(2).html"></iframe>
                                                        </div>
                                                        <div role="complementary" class="tox-sidebar">
                                                            <div data-alloy-tabstop="true" tabindex="-1"
                                                                class="tox-sidebar__slider tox-sidebar--sliding-closed"
                                                                style="width: 0px;">
                                                                <div class="tox-sidebar__pane-container"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tox-statusbar">
                                                    <div class="tox-statusbar__text-container">
                                                        <div role="navigation" data-alloy-tabstop="true"
                                                            class="tox-statusbar__path" aria-disabled="false">
                                                            <div role="button" data-index="0" tab-index="-1"
                                                                aria-level="1" tabindex="-1"
                                                                class="tox-statusbar__path-item" aria-disabled="false">p
                                                            </div>
                                                        </div>
                                                        <span class="tox-statusbar__branding">
                                                            <a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5"
                                                                rel="noopener" target="_blank" tabindex="-1"
                                                                aria-label="Powered by Tiny">
                                                                Powered by Tiny
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div title="Resize" data-alloy-tabstop="true" tabindex="-1"
                                                        class="tox-statusbar__resize-handle">
                                                        <svg width="10" height="10" focusable="false">
                                                            <g fill-rule="nonzero">
                                                                <path
                                                                    d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div aria-hidden="true" class="tox-throbber" style="display: none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="seo_section full_width mt-5">
                                        <div class="heading mb-4">
                                            <h4 class="d-flex justify-content-center">Seo section</h4>
                                            <h6 class="d-flex justify-content-center">Boost traffic to your online
                                                business.</h6>
                                        </div>
                                        <hr />
                                        <div class="admin_form form_1 col_2 mt-3">
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper">
                                                    <label for="page_title" class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            Page Title
                                                        </span>
                                                        <input type="text" id="page_title" name="page_title"
                                                            class="form-control" />
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group d-grid align-content-start gap-1 mb-2">
                                                <div class="field_wrapper">
                                                    <label for="product_url" class="text-capitalize d-block">
                                                        <span class="mb-2 d-block">
                                                            product url
                                                        </span>
                                                        <input type="text" id="product_url" name="product_url"
                                                            class="form-control" />
                                                        <!---->
                                                    </label>
                                                    <!---->
                                                </div>
                                            </div>
                                            <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                                <label for="meta_description">Meta Description</label>
                                                <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
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
            </div>
        </div>
    </div>
@endsection
