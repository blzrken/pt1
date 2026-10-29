# OmniRead Systems — TTTM2113 Project Task 1 (PT1)

> **Course**: TTTM2113 Web Development  
> **Student Name**: Muhammad Lutfil Hadi bin Mohd Azian  
> **Matric No**: A223536  
> **System Name**: OmniRead Systems (E-Readers & Digital Paper Tablets)

---

## 📌 Project Overview
**OmniRead Systems** is a modern, responsive back-office administrative portal developed for an enterprise retailer specializing in premium E-Readers and Digital Paper Tablets.

This project delivers **Project Task 1 (PT1)** for the course **TTTM2113 Web Development**, establishing the core HTML5/CSS3 frontend architecture, responsive layout grid, component hierarchy, and navigation workflows using **Bootstrap 5** and **Poppins** typography.

---

## 🚀 Key Modules & Pages

1. **Dashboard & Overview (`home.php`)**
   - KPI metrics (Catalog Products, Active Clients, Team Members, Completed Orders)
   - Quick navigation shortcuts & developer verification banner
   - Recent orders overview & warehouse status indicators

2. **Product Catalog (`products.php`)**
   - Comprehensive table listing e-reader models, specifications, price, and stock levels
   - Bootstrap modals for Creating New Products, Editing Details, and Image Previews

3. **Customer Management (`customers.php`)**
   - Client records with contact info, shipping addresses, and account creation modals

4. **Staff Administration (`staffs.php`)**
   - Team listings with role assignments (Admin, Inventory Manager, Sales Lead)

5. **Sales Order Processing (`orders.php` & `orderdetails.php`)**
   - Order history tracking with fulfillment badges and itemized line-item views

6. **Printable Invoice (`invoice.php`)**
   - Formal customer invoice layout with subtotal, tax calculation, and print-ready CSS

7. **Responsive Master Layout (`header.php`, `sidebar.php`, `footer.php`, `layout.php`)**
   - Fixed desktop sidebar with collapsible offcanvas navigation for mobile screens
   - Unified Google Fonts (Poppins) and Bootstrap Icons styling

---

## 🛠️ Tech Stack
- **HTML5 & CSS3**
- **Bootstrap 5.3.0-alpha3** (Grid system, Offcanvas, Modals, Cards, Tables, Badges)
- **Bootstrap Icons 1.13.1**
- **Google Fonts (Poppins)**
- **PHP 8** (Modular layout templating via `require_once`)

---

## 💻 Local Setup & Running
1. Clone the repository into your local server root (e.g., Laragon `/www/` or XAMPP `/htdocs/`):
   ```bash
   git clone https://github.com/blzrken/pt1.git
   ```
2. Start Apache/PHP in Laragon or XAMPP.
3. Open in your browser:
   ```
   http://localhost/pt1/home.php
   ```

---

## 📄 License & Attribution
Academic coursework submission for **Universiti Kebangsaan Malaysia (UKM)** — Faculty of Information Science & Technology (FTSM).  
Developed by **Muhammad Lutfil Hadi bin Mohd Azian (A223536)**.
