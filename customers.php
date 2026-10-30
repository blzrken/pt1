<?php ob_start(); ?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Customers</h2>
        <p class="text-muted mb-0">Manage customer records</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i> Customer Form
                </h5>
                <small class="text-muted">Fill in the details of a customer</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>

        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="cid" class="form-label">Customer ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_num" id="cid" type="text" class="form-control" placeholder="Enter Customer ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="cname" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_name" id="cname" type="text" class="form-control" placeholder="Enter Customer Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="cgender" class="form-label">Gender <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="customer_gender" id="cgender" class="form-select" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="cphone" class="form-label">Phone Number <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_phone" id="cphone" type="text" class="form-control" placeholder="Enter Phone Number" value="" required>
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
                    <i class="bi bi-table text-primary me-2"></i> Customer List
                </h5>
                <small class="text-muted">View and manage all customers</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C001</td>
                        <td>Alice Johnson</td>
                        <td>Female</td>
                        <td>012-3456789</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">No customers found</td>
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
