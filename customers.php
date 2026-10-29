<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Customers</h2>
        <p class="text-muted mb-0">Manage customer accounts and contact profiles</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">

        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-person-plus text-primary me-2"></i>
                    Customer Form
                </h5>
                <small class="text-muted">Enter customer registration details</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="customer_num" class="form-label">Customer ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_num" id="customer_num" type="text" class="form-control" placeholder="Enter Customer ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="customer_name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_name" id="customer_name" type="text" class="form-control" placeholder="Enter Customer Name" value="" required>
                </div>
                <div class="col-md-2">
                    <label for="customer_gender" class="form-label">Gender <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="customer_gender" id="customer_gender" class="form-select" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="customer_phone" class="form-label">Phone Number <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_phone" id="customer_phone" type="text" class="form-control" placeholder="Enter Phone Number" value="" required>
                </div>
                <div class="col-md-2">
                    <label for="register_date" class="form-label">Register Date <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="register_date" id="register_date" type="date" class="form-control" required>
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
                    <i class="bi bi-people text-primary me-2"></i>
                    Customer List
                </h5>
                <small class="text-muted">Registered clients in the system</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 4 items</span>
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Register Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>C001</strong></td>
                        <td>Alice Johnson</td>
                        <td>Female</td>
                        <td>012-3456789</td>
                        <td>2026-09-15</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>C002</strong></td>
                        <td>Brian Lee</td>
                        <td>Male</td>
                        <td>013-8877665</td>
                        <td>2026-09-20</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>C003</strong></td>
                        <td>Siti Nurhaliza</td>
                        <td>Female</td>
                        <td>019-2233445</td>
                        <td>2026-10-01</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>C004</strong></td>
                        <td>David Tan</td>
                        <td>Male</td>
                        <td>017-5544332</td>
                        <td>2026-10-05</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
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
