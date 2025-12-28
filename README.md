# Beans Scenes ☕

A modern, responsive coffee shop website built with PHP, Bootstrap 5, and custom CSS. Features an elegant design with product showcase, customer testimonials, and newsletter subscription.

## 📸 Screenshots

![Complete Webpage](https://raw.githubusercontent.com/MuhammadSohaib-pro/Beans-Scenes/main/assets/images/beans-scene.png)

## ✨ Features

- Fully responsive design for desktop, tablet, and mobile
- Reusable PHP components for easy content management
- Interactive product showcase with 4 coffee varieties
- Customer testimonials carousel
- Newsletter subscription form
- Fixed navigation bar with smooth scrolling
- Custom styling with Google Fonts (Playfair Display & Clicker Script)

## 🛠️ Technologies

- **Frontend:** HTML5, CSS3, JavaScript
- **Framework:** Bootstrap 5.3.8 & Bootstrap Icons
- **Backend:** PHP 7.4+
- **Fonts:** Google Fonts (Playfair Display, Clicker Script)

## 📁 Project Structure

```
beans-scenes/
├── assets/
│   └── images/        # All product and design images
├── css/
│   ├── bootstrap.min.css
│   └── script.js
├── js/
│   ├── bootstrap.bundle.min.js
│   └── style.css
├── includes/
│   ├── about-card.php        # Feature cards component
│   ├── footer.php            # Footer with links and contact
│   ├── header.php            # Navigation and head tags
│   ├── product-card.php      # Product display component
│   └── testimonial-card.php  # Customer review component
└── index.php                 # Main homepage
```

## 🚀 Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/yourusername/beans-scenes.git
   cd beans-scenes
   ```

2. **Start a PHP server**

   **Option 1:** Using PHP built-in server

   ```bash
   php -S localhost:8000
   ```

   **Option 2:** Using XAMPP/WAMP/MAMP

   - Place folder in `htdocs` or `www` directory
   - Start Apache server
   - Access via `http://localhost/beans-scenes`

3. **Open in browser**
   - Navigate to `http://localhost:8000`

## 💻 Editing Content

### Products

Update product details in `index.php`:

```php
$product_image_url = "assets/images/product-1.png";
$product_name = "Cappuccino";
$product_description = "Espresso, Steamed Milk & Milk Foam";
$product_price = "$8.50";
include "includes/product-card.php";
```

### Testimonials

Modify customer reviews in `index.php`:

```php
$testimonial_avatar = "assets/images/testimonial-2.jpg";
$testimonial_description = "Your customer feedback here...";
$testimonial_title = "Customer Name";
include "includes/testimonial-card.php";
```

### About Cards

Edit feature cards in `index.php`:

```php
$card_icon = "assets/images/coffee-beans-icon.png";
$card_title = "Supreme Beans";
$card_description = "Beans that provides great taste";
include "includes/about-card.php";
```

## 🎨 Customization

### Color Scheme

Edit CSS variables in `assets/css/style.css`:

```css
:root {
  --primary-color: #f9c06a; /* Golden yellow */
  --secondary-color: #603809; /* Dark brown */
  --body-color: #fffefc; /* Off-white background */
  --grey-color: #707070; /* Text gray */
  --card-bgcolor: #fff9f1; /* Card background */
}
```

### Fonts

Change fonts in `includes/header.php` Google Fonts import and update CSS variables:

```css
:root {
  --clicker-font: "Clicker Script", serif;
  --playfair-font: "Playfair Display", serif;
}
```

## 📄 Page Sections

- **Hero Section** - Full-width banner with call-to-action
- **Discover Section** - About the coffee shop and quality
- **Products** - Showcase of 4 coffee varieties
- **About** - Key differentiators and features
- **Promotion** - Special offer banner
- **Testimonials** - Customer reviews carousel
- **Subscribe** - Newsletter signup form
- **Footer** - Links, contact info, and social media

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/new-feature`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature/new-feature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License.

---

**Built with ❤️ and ☕ by Muhammas Sohaib**
