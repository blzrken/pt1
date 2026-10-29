<?php
ob_start();
?>

<!-- Hero Banner Card -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body p-4">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 mb-2">TTTM2113 Project Task 1</span>
                <h1 class="display-6 fw-bold mb-2">OmniRead Systems</h1>
                <p class="lead text-muted mb-3">
                    Centralized back-office inventory, customer profiles, staff management, and sales order processing system for premium <strong>E-Readers &amp; Digital Paper Tablets</strong>.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="products.php" class="btn btn-primary">
                        <i class="bi bi-tablet me-1"></i>Explore Products
                    </a>
                    <a href="orders.php" class="btn btn-outline-primary">
                        <i class="bi bi-cart me-1"></i>View Orders
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                <div class="p-3 bg-light rounded-3 border d-inline-block text-start">
                    <small class="text-muted d-block text-uppercase fw-semibold mb-1">Developer Information</small>
                    <div class="fw-bold">Muhammad Lutfil Hadi</div>
                    <div class="text-secondary small font-monospace">Matric: A223536</div>
                    <div class="text-muted small">Course: TTTM2113 Web Development</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Key Performance Indicators / Quick Stats -->
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-3 bg-primary bg-opacity-10 text-primary p-3 me-3 fs-3">
                    <i class="bi bi-tablet"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0 small text-uppercase">Catalog Products</h6>
                    <h3 class="fw-bold mb-0">20</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-3 bg-success bg-opacity-10 text-success p-3 me-3 fs-3">
                    <i class="bi bi-people"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0 small text-uppercase">Active Clients</h6>
                    <h3 class="fw-bold mb-0">4</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-3 bg-info bg-opacity-10 text-info p-3 me-3 fs-3">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0 small text-uppercase">Staff Members</h6>
                    <h3 class="fw-bold mb-0">4</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-3 bg-warning bg-opacity-10 text-warning p-3 me-3 fs-3">
                    <i class="bi bi-receipt"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-0 small text-uppercase">Processed Orders</h6>
                    <h3 class="fw-bold mb-0">4</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel & System Modules -->
<div class="row g-4 mb-4">
    <!-- Featured Device Carousel -->
    <div class="col-lg-7">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="card-title mb-0">
                    <i class="bi bi-stars text-warning me-2"></i>Featured E-Paper Hardware
                </h5>
            </div>
            <div class="card-body p-4">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded-3 bg-dark text-white p-4" style="min-height: 240px;">
                        <div class="carousel-item active text-center py-4">
                            <span class="badge bg-primary mb-2">Amazon Kindle</span>
                            <h3 class="fw-bold">Kindle Scribe 10.2"</h3>
                            <p class="text-white-50 px-md-5">
                                First Kindle that includes a digital notebook and pen. Read and write thoughts in books or a dedicated notebook without distractions.
                            </p>
                            <div class="fw-bold text-info fs-5">RM339.99 · 300 ppi Glare-Free</div>
                        </div>
                        <div class="carousel-item text-center py-4">
                            <span class="badge bg-success mb-2">reMarkable</span>
                            <h3 class="fw-bold">reMarkable 2 Paper Tablet</h3>
                            <p class="text-white-50 px-md-5">
                                The world's thinnest tablet at just 4.7mm. Replace your paper notebooks, printouts, and documents with paper-like digital writing feel.
                            </p>
                            <div class="fw-bold text-info fs-5">RM299.00 · Canvas Display Tech</div>
                        </div>
                        <div class="carousel-item text-center py-4">
                            <span class="badge bg-danger mb-2">Onyx Boox</span>
                            <h3 class="fw-bold">BOOX Note Air 3C (Color)</h3>
                            <p class="text-white-50 px-md-5">
                                Full-color Kaleido 3 E-Ink screen running open Android 12 with Google Play Store support, dual-touch control, and handwriting recognition.
                            </p>
                            <div class="fw-bold text-info fs-5">RM499.99 · Kaleido 3 Color E-Ink</div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Navigation Modules -->
    <div class="col-lg-5">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white border-bottom py-3">
                <h5 class="card-title mb-0">
                    <i class="bi bi-grid-fill text-primary me-2"></i>Quick Navigation
                </h5>
            </div>
            <div class="card-body p-3">
                <div class="list-group list-group-flush">
                    <a href="products.php" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-0 rounded-2 mb-1">
                        <div class="rounded-circle bg-primary bg-opacity-10 text-primary p-2 me-3">
                            <i class="bi bi-tablet fs-5"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">Products Inventory</div>
                            <small class="text-muted">Manage product IDs, screen types, storage &amp; prices</small>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                    <a href="customers.php" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-0 rounded-2 mb-1">
                        <div class="rounded-circle bg-success bg-opacity-10 text-success p-2 me-3">
                            <i class="bi bi-people fs-5"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">Customer Records</div>
                            <small class="text-muted">Manage customer directory and contact information</small>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                    <a href="staffs.php" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-0 rounded-2 mb-1">
                        <div class="rounded-circle bg-info bg-opacity-10 text-info p-2 me-3">
                            <i class="bi bi-person-badge fs-5"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">Staff Administration</div>
                            <small class="text-muted">Register staff accounts and employee details</small>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                    <a href="orders.php" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-0 rounded-2">
                        <div class="rounded-circle bg-warning bg-opacity-10 text-warning p-2 me-3">
                            <i class="bi bi-receipt fs-5"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="fw-semibold">Orders &amp; Invoices</div>
                            <small class="text-muted">Process client orders, line items, and print invoices</small>
                        </div>
                        <i class="bi bi-chevron-right text-muted"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>
