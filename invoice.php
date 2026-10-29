<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4 no-print">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.print()">
                    <i class="bi bi-printer me-1"></i>Print
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm invoice-printable">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h3 class="fw-bold mb-1"><i class="bi bi-journal-richtext text-primary me-2"></i>OmniRead Systems</h3>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer:</strong><br>
                Alice Johnson<br>
                012-3456789<br>
                <span class="text-muted small">C001 - Retail Customer</span>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <strong>Staff:</strong><br>
                Jane Smith<br>
                janesmith@example.com<br>
                <span class="text-muted small">S001 - Sales Officer</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Product</th>
                        <th style="width: 20%;">Unit Price</th>
                        <th style="width: 15%;">Quantity</th>
                        <th style="width: 20%;" class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>Kindle Paperwhite (11th Gen)</strong><br><small class="text-muted">16GB · E-Ink Carta (Monochrome)</small></td>
                        <td>RM649.00</td>
                        <td>1</td>
                        <td class="text-end">RM649.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>reMarkable 2 Paper Tablet</strong><br><small class="text-muted">8GB · Canvas Paper Display</small></td>
                        <td>RM2,199.00</td>
                        <td>1</td>
                        <td class="text-end">RM2,199.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end fs-5 text-primary">RM2,848.00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="mt-4 no-print">
            <a href="orderdetails.php" class="btn btn-secondary">
                <i class="bi bi-arrow-left me-1"></i>Back to Details
            </a>
        </div>
    </div>
</div>

<style>
@media print {
    #mySidebar,
    #myBurger,
    .no-print,
    .btn {
        display: none !important;
    }

    body {
        background: #ffffff !important;
        color: #000000 !important;
    }

    .col.bg-light {
        background: #ffffff !important;
        padding: 0 !important;
    }

    .card {
        box-shadow: none !important;
        border: none !important;
    }

    .card-body {
        padding: 0 !important;
    }
}
</style>

<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>
