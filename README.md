# 🎮 Lunar Arcade (space1.5)

A modern, stylish, and simple e-commerce platform for buying and selling games online.

---

## ✨ Features

### 🛒 User-Facing

- **Home/Product Listing:**  
  Browse, search, and filter games by name, franchise, category, or price.
- **Authentication:**  
  Secure sign-in, sign-up, and password reset.
- **Shopping Cart:**  
  Add or remove games, view cart details, and proceed to online payment (PayHere integration).
- **Wishlist:**  
  Save your favorite games for future purchases.
- **Order History & Invoices:**  
  Track past orders and download detailed invoices for each transaction.

### 🧑‍💼 Admin/Management

- **Admin Dashboard:**  
  Central panel for all administrative actions.
- **User Management:**  
  View, add, or block users.
- **Product Management:**  
  Add/edit games, manage categories and franchises.
- **Stock Management:**  
  Track and update game inventory.
- **Reports:**  
  Generate reports for stock, products, and users.

### 🖥️ Tech Stack

- **Frontend:** HTML, Bootstrap 5, JavaScript
- **Backend:** PHP (with sessions for authentication)
- **Database:** MySQL
- **Payment:** PayHere integration

---

## 🚀 Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/Kaveesha06/space1.5.git
   cd space1.5
   ```

2. **Set up the environment**
   - Ensure you have PHP and MySQL installed.
   - Import the database schema
   - Update `connection.php` with your database credentials.

3. **Install dependencies**
   - No Node.js dependencies required.
   - All libraries (Bootstrap, SweetAlert, PayHere) are included via CDN or local files.

4. **Run the application**
   - Start your local PHP server:
     ```bash
     php -S localhost:8000
     ```
   - Open [http://localhost:8000](http://localhost:8000) in your browser.

---

## 🗂️ Project Structure

```
space1.5/
├── admin*.php            # Admin features (dashboard, reports, management)
├── cart.php              # Shopping cart for users
├── index.php             # Homepage, product listings
├── invoice.php           # Invoices for orders
├── navBar.php            # Navigation bar (user)
├── adminNavBar.php       # Navigation bar (admin)
├── footer.php            # Footer for all pages
├── style.css             # Custom CSS
├── script.js             # Main JavaScript for dynamic actions
├── connection.php        # DB connection logic
├── resource/             # Images and icons
└── ...                   # Other app files
```

---

## 🤝 Contributing

Contributions are welcome!  
1. Fork this repository  
2. Create a new branch
3. Commit your changes  
4. Open a Pull Request

---

---

## 💬 Support

For questions or support, open an [issue](https://github.com/Kaveesha06/space1.5/issues) or contact [@Kaveesha06](https://github.com/Kaveesha06).

---

