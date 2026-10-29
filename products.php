<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your products</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i> Product Form
                </h5>
                <small class="text-muted">Fill in the details of a product</small>
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
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" required min="0" step="0.01">
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Amazon Kindle">Amazon Kindle</option>
                        <option value="Kobo">Kobo</option>
                        <option value="reMarkable">reMarkable</option>
                        <option value="Sony Reader">Sony Reader</option>
                        <option value="Barnes & Noble">Barnes & Noble</option>
                        <option value="PocketBook">PocketBook</option>
                        <option value="Bookeen">Bookeen</option>
                        <option value="Tolino">Tolino</option>
                        <option value="Onyx Boox">Onyx Boox</option>
                    </select>
                </div>

                <!-- Custom Categorical Field 1: Screen Type (Replacing Condition) -->
                <div class="col-md-3">
                    <label for="product_screen" class="form-label">Screen Type <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_screen" id="product_screen" class="form-select" required>
                        <option value="">Select Screen Type</option>
                        <option value="E-Ink Carta (Monochrome)">E-Ink Carta (Monochrome)</option>
                        <option value="E-Ink Kaleido (Color)">E-Ink Kaleido (Color)</option>
                        <option value="E-Ink Pearl (Monochrome)">E-Ink Pearl (Monochrome)</option>
                        <option value="Canvas Paper Display">Canvas Paper Display</option>
                    </select>
                </div>

                <!-- Custom Categorical Field 2: Storage Capacity (Replacing Manufacturing Year) -->
                <div class="col-md-3">
                    <label for="product_storage" class="form-label">Storage Capacity <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_storage" id="product_storage" class="form-select" required>
                        <option value="">Select Storage</option>
                        <option value="2 GB">2 GB</option>
                        <option value="4 GB">4 GB</option>
                        <option value="8 GB">8 GB</option>
                        <option value="16 GB">16 GB</option>
                        <option value="32 GB">32 GB</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename" value="">
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
                    <i class="bi bi-table text-primary me-2"></i> Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 20 items</span>
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
                    <?php
                    $products = [
                        ['id' => 'P001', 'name' => 'Kindle Paperwhite (11th Gen)', 'price' => 'RM649.00', 'brand' => 'Amazon Kindle', 'image' => 'P001.jpg'],
                        ['id' => 'P002', 'name' => 'Kobo Clara Colour', 'price' => 'RM749.00', 'brand' => 'Kobo', 'image' => 'P002.jpg'],
                        ['id' => 'P003', 'name' => 'reMarkable Paper Tablet', 'price' => 'RM1,899.00', 'brand' => 'reMarkable', 'image' => 'P003.jpg'],
                        ['id' => 'P004', 'name' => 'Kobo Libra Colour', 'price' => 'RM1,099.00', 'brand' => 'Kobo', 'image' => 'P004.jpg'],
                        ['id' => 'P005', 'name' => 'Sony Reader PRS-T2', 'price' => 'RM399.00', 'brand' => 'Sony Reader', 'image' => 'P005.jpg'],
                        ['id' => 'P006', 'name' => 'Nook Simple Touch', 'price' => 'RM299.00', 'brand' => 'Barnes & Noble', 'image' => 'P006.jpg'],
                        ['id' => 'P007', 'name' => 'Kobo Aura', 'price' => 'RM499.00', 'brand' => 'Kobo', 'image' => 'P007.jpg'],
                        ['id' => 'P008', 'name' => 'Cybook Odyssey HD', 'price' => 'RM450.00', 'brand' => 'Bookeen', 'image' => 'P008.jpg'],
                        ['id' => 'P009', 'name' => 'Kobo Touch eReader', 'price' => 'RM350.00', 'brand' => 'Kobo', 'image' => 'P009.jpg'],
                        ['id' => 'P010', 'name' => 'Sony Reader PRS-505', 'price' => 'RM320.00', 'brand' => 'Sony Reader', 'image' => 'P010.jpg'],
                        ['id' => 'P011', 'name' => 'Tolino Vision 5', 'price' => 'RM780.00', 'brand' => 'Tolino', 'image' => 'P011.jpg'],
                        ['id' => 'P012', 'name' => 'Sony Digital Paper DPT', 'price' => 'RM2,499.00', 'brand' => 'Sony Reader', 'image' => 'P012.jpg'],
                        ['id' => 'P013', 'name' => 'Kindle Paperwhite (Angle View)', 'price' => 'RM699.00', 'brand' => 'Amazon Kindle', 'image' => 'P013.jpg'],
                        ['id' => 'P014', 'name' => 'PocketBook 360', 'price' => 'RM310.00', 'brand' => 'PocketBook', 'image' => 'P014.jpg'],
                        ['id' => 'P015', 'name' => 'Kobo Glo', 'price' => 'RM420.00', 'brand' => 'Kobo', 'image' => 'P015.jpg'],
                        ['id' => 'P016', 'name' => 'Kobo Clara HD', 'price' => 'RM580.00', 'brand' => 'Kobo', 'image' => 'P016.jpg'],
                        ['id' => 'P017', 'name' => 'Kindle Paperwhite 3', 'price' => 'RM480.00', 'brand' => 'Amazon Kindle', 'image' => 'P017.jpg'],
                        ['id' => 'P018', 'name' => 'Sony Reader PRS-600', 'price' => 'RM360.00', 'brand' => 'Sony Reader', 'image' => 'P018.jpg'],
                        ['id' => 'P019', 'name' => 'Onyx Boox M92', 'price' => 'RM1,250.00', 'brand' => 'Onyx Boox', 'image' => 'P019.jpg'],
                        ['id' => 'P020', 'name' => 'reMarkable 2 Paper Tablet', 'price' => 'RM2,199.00', 'brand' => 'reMarkable', 'image' => 'P020.jpg']
                    ];

                    foreach ($products as $p):
                    ?>
                    <tr>
                        <td><strong><?= $p['id'] ?></strong></td>
                        <td><?= $p['name'] ?></td>
                        <td><?= $p['price'] ?></td>
                        <td><?= $p['brand'] ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="View Image" data-bs-toggle="modal" data-bs-target="#modal-<?= $p['id'] ?>">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Product Image Modals -->
<?php foreach ($products as $p): ?>
<div class="modal fade" id="modal-<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalLabel-<?= $p['id'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel-<?= $p['id'] ?>"><?= $p['name'] ?> (<?= $p['id'] ?>)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-3">
                <img src="images/<?= $p['image'] ?>" class="img-fluid rounded shadow-sm" style="max-height: 420px; object-fit: contain;" alt="<?= $p['name'] ?>">
                <div class="mt-3">
                    <span class="badge bg-secondary me-1"><?= $p['brand'] ?></span>
                    <span class="badge bg-primary"><?= $p['price'] ?></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
