@extends('welcome')

@section('title', 'Home Page')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <a href="addproduct.html" class="btn btn-added"><img src="{{ asset('assets/img/icons/plus.svg') }}"
                        alt="img" class="me-1">Add New Product</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-path">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="assets/img/icons/filter.svg" alt="img">
                                <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search"
                                        class="form-control form-control-sm" placeholder="Search..."
                                        aria-controls="DataTables_Table_0"></label></div>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    data-bs-original-title="pdf" aria-label="pdf"><img
                                        src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    data-bs-original-title="excel" aria-label="excel"><img
                                        src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                    data-bs-original-title="print" aria-label="print"><img
                                        src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-0" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select select2-hidden-accessible" data-select2-id="1"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="3">Choose Product</option>
                                                        <option>Macbook pro</option>
                                                        <option>Orange</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-yyq1-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-yyq1-container" role="textbox"
                                                                    aria-readonly="true" title="Choose Product">Choose
                                                                    Product</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select select2-hidden-accessible" data-select2-id="4"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="6">Choose Category</option>
                                                        <option>Computers</option>
                                                        <option>Fruits</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="5" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-q0ek-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-q0ek-container" role="textbox"
                                                                    aria-readonly="true" title="Choose Category">Choose
                                                                    Category</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select select2-hidden-accessible" data-select2-id="7"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="9">Choose Sub Category</option>
                                                        <option>Computer</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="8" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-9k5q-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-9k5q-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="Choose Sub Category">Choose Sub
                                                                    Category</span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select select2-hidden-accessible" data-select2-id="10"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="12">Brand</option>
                                                        <option>N/D</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="11" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-fz97-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-fz97-container" role="textbox"
                                                                    aria-readonly="true" title="Brand">Brand</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12 ">
                                                <div class="form-group">
                                                    <select class="select select2-hidden-accessible" data-select2-id="13"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="15">Price</option>
                                                        <option>150.00</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="14" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-igu5-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-igu5-container" role="textbox"
                                                                    aria-readonly="true" title="Price">Price</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <a class="btn btn-filters ms-auto"><img
                                                            src="assets/img/icons/search-whites.svg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <table class="table datanew dataTable no-footer" id="DataTables_Table_0" role="grid"
                            aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="




: activate to sort column descending" style="width: 55.1875px;">
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Product Name: activate to sort column ascending"
                                        style="width: 165.438px;">Product Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="SKU: activate to sort column ascending"
                                        style="width: 48.2875px;">SKU</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Category : activate to sort column ascending"
                                        style="width: 87.8px;">Category </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Brand: activate to sort column ascending"
                                        style="width: 62.1125px;">Brand</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="price: activate to sort column ascending"
                                        style="width: 53.2375px;">price</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Unit: activate to sort column ascending"
                                        style="width: 45.325px;">Unit</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Qty: activate to sort column ascending"
                                        style="width: 40.4px;">Qty</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Created By: activate to sort column ascending"
                                        style="width: 104.6px;">Created By</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Action: activate to sort column ascending"
                                        style="width: 117.213px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>











                                <tr class="odd">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product1.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Macbook pro</a>
                                    </td>
                                    <td>PT001</td>
                                    <td>Computers</td>
                                    <td>N/D</td>
                                    <td>1500.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product2.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Orange</a>
                                    </td>
                                    <td>PT002</td>
                                    <td>Fruits</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product3.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Pineapple</a>
                                    </td>
                                    <td>PT003</td>
                                    <td>Fruits</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product4.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Strawberry</a>
                                    </td>
                                    <td>PT004</td>
                                    <td>Fruits</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product5.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Avocat</a>
                                    </td>
                                    <td>PT005</td>
                                    <td>Accessories</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>150.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product6.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Macbook Pro</a>
                                    </td>
                                    <td>PT006</td>
                                    <td>Shoes</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product7.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Apple Earpods</a>
                                    </td>
                                    <td>PT007</td>
                                    <td>Shoes</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product8.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">iPhone 11 </a>
                                    </td>
                                    <td>PT008</td>
                                    <td>Fruits</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="odd">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product9.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">samsung </a>
                                    </td>
                                    <td>PT009</td>
                                    <td>Earphones</td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>pc</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="sorting_1">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="assets/img/product/product11.jpg" alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Banana</a>
                                    </td>
                                    <td>PT0010</td>
                                    <td>Health Care </td>
                                    <td>N/D</td>
                                    <td>10.00</td>
                                    <td>kg</td>
                                    <td>100.00</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="product-details.html">
                                            <img src="assets/img/icons/eye.svg" alt="img">
                                        </a>
                                        <a class="me-3" href="editproduct.html">
                                            <img src="assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);">
                                            <img src="assets/img/icons/delete.svg" alt="img">
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                        <div class="dataTables_paginate paging_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                        class="page-link">2</a></li>
                            </ul>
                        </div>
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 -
                            10 of 11 items</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
