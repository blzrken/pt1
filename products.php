<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your e-readers and digital paper tablets</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">

        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of an e-reader or digital paper device</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID (e.g. P001)" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price (RM)" value="" required min="0" step="0.01">
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Amazon Kindle">Amazon Kindle</option>
                        <option value="Kobo">Kobo</option>
                        <option value="Onyx Boox">Onyx Boox</option>
                        <option value="reMarkable">reMarkable</option>
                        <option value="Supernote">Supernote</option>
                        <option value="PocketBook">PocketBook</option>
                    </select>
                </div>

                <!-- Custom Categorical Field 1: Screen Type (Replacing Condition) -->
                <div class="col-md-3">
                    <label for="screen_type" class="form-label">Screen Type <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_screen" id="screen_type" class="form-select" required>
                        <option value="">Select Screen Type</option>
                        <option value="E-Ink Carta 1200 (B&W)">E-Ink Carta 1200 (B&W)</option>
                        <option value="E-Ink Kaleido 3 (Color)">E-Ink Kaleido 3 (Color)</option>
                        <option value="E-Ink Gallery 3 (Full Color)">E-Ink Gallery 3 (Full Color)</option>
                        <option value="E-Ink Mobius (Flexible)">E-Ink Mobius (Flexible)</option>
                        <option value="Canvas Monochrome Paper">Canvas Monochrome Paper</option>
                    </select>
                </div>

                <!-- Custom Categorical Field 2: Storage Capacity (Replacing Manufacturing Year) -->
                <div class="col-md-3">
                    <label for="storage" class="form-label">Storage Capacity <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_storage" id="storage" class="form-select" required>
                        <option value="">Select Storage</option>
                        <option value="16 GB">16 GB</option>
                        <option value="32 GB">32 GB</option>
                        <option value="64 GB">64 GB</option>
                        <option value="128 GB">128 GB</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image Filename</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="e.g. P001.jpg" value="">
                </div>
            </div>
            
            <hr class="mt-4 mb-3">
            
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
 
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 6 items</span>
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>P001</strong></td>
                        <td>Kindle Scribe 10.2"</td>
                        <td>RM339.99</td>
                        <td>Amazon Kindle</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="View Image">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>P002</strong></td>
                        <td>Kobo Elipsa 2E 10.3"</td>
                        <td>RM399.99</td>
                        <td>Kobo</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="View Image">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>P003</strong></td>
                        <td>BOOX Note Air 3C Color</td>
                        <td>RM499.99</td>
                        <td>Onyx Boox</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="View Image">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>P004</strong></td>
                        <td>reMarkable 2 Paper Tablet</td>
                        <td>RM299.00</td>
                        <td>reMarkable</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="View Image">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>P005</strong></td>
                        <td>Supernote Nomad A6 X2</td>
                        <td>RM299.99</td>
                        <td>Supernote</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="View Image">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>P006</strong></td>
                        <td>PocketBook InkPad Color 3</td>
                        <td>RM329.00</td>
                        <td>PocketBook</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="View Image">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>
