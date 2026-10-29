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
                <p class="text-muted mb-0">Official Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer Information:</strong><br>
                Alice Johnson<br>
                012-3456789<br>
                <span class="text-muted small">C001 - Registered Retail Client</span>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <strong>Handled By (Staff):</strong><br>
                Jane Smith<br>
                janesmith@example.com<br>
                <span class="text-muted small">S001 - Senior Account Officer</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th>Product Description</th>
                        <th style="width: 18%;">Unit Price</th>
                        <th style="width: 12%;">Quantity</th>
                        <th style="width: 18%;" class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>Kindle Scribe 10.2"</strong><br><small class="text-muted">32GB · E-Ink Carta 1200</small></td>
                        <td>$339.99</td>
                        <td>1</td>
                        <td class="text-end">$339.99</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>reMarkable 2 Paper Tablet</strong><br><small class="text-muted">8GB · Canvas Monochrome</small></td>
                        <td>$299.00</td>
                        <td>1</td>
                        <td class="text-end">$299.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end fs-5 text-primary">$638.99</th>
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
    /* Hide navigation, mobile burger bar, buttons, and top accent header */
    #mySidebar,
    #myBurger,
    .no-print,
    .btn,
    .border-5 {
        display: none !important;
    }

    /* Reset background and text colors */
    body {
        background: #ffffff !important;
        color: #000000 !important;
        font-size: 11pt;
    }

    /* Remove padding and background from main column wrapper */
    .col.bg-light {
        background: #ffffff !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    /* Remove card borders, shadow, and radius for clean printout */
    .card,
    .invoice-printable {
        box-shadow: none !important;
        border: none !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .card-body {
        padding: 0 !important;
    }

    /* Ensure table headers and zebra strips print properly with contrast */
    .table-dark {
        background-color: #212529 !important;
        color: #ffffff !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }

    .table-striped > tbody > tr:nth-of-type(odd) > * {
        background-color: #f8f9fa !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }
}
</style>

<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>
