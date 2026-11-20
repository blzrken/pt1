# OmniRead Systems | TTTM2113 Project Task 1 (PT1)

OmniRead Systems is a responsive administration prototype for an e-reader and digital paper tablet retailer. PT1 uses sample records and PHP templates to demonstrate the interface. The forms do not save changes, and no database is required. The database-backed implementation is available in [Project Task 2](https://github.com/blzrken/pt2).

**Course** · TTTM2113 Web Development, Universiti Kebangsaan Malaysia (UKM)

**Student** · Muhammad Lutfil Hadi bin Mohd Azian (A223536)

[Open the live PT1 demo on LRGS](http://lrgs.ftsm.ukm.my/users/a223536/pt1/home.php)

## Pages

| Page | What it shows |
| --- | --- |
| [Dashboard](home.php) | Sample summary counts, featured products, and shortcuts to the main pages |
| [Products](products.php) | A 20-product catalog, a sample product form, and image previews |
| [Customers](customers.php) | A sample customer form and records with names, gender, and phone numbers |
| [Staff](staffs.php) | A sample staff form and records with staff IDs, names, and phone numbers |
| [Orders](orders.php) | A sample order form, order records, and links to the order details and invoice pages |
| [Order details](orderdetails.php) | A sample add-product form, line items, quantities, and an order total |
| [Invoice](invoice.php) | An itemized sample invoice with a grand total and a print button |

The pages share a PHP layout with a responsive sidebar. The interface uses Bootstrap 5.3.0-alpha3, Bootstrap Icons 1.13.1, and the Poppins font.

## Run locally

1. From your PHP server’s document root (Laragon `www` or XAMPP `htdocs`), clone the repository.

   ```bash
   git clone https://github.com/blzrken/pt1.git
   ```

2. Start Apache with PHP enabled.
3. Open [http://localhost/pt1/home.php](http://localhost/pt1/home.php).

Bootstrap, Bootstrap Icons, and Poppins load from external CDNs.
