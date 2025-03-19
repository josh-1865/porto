<p align="center">
  <h1 align="center">🪐 Warriorfolio 2 - Saturn UI </h1>
</p>

<p align="center">
  <img src="https://raw.githubusercontent.com/mviniciusca/warriorfolio/main/public/img/gif/ezgif-7-41f5195607.gif" alt="Warriorfolio 2 Preview">
</p>


## 📋 Introduction

**Warriorfolio** is a modern and flexible application for creating professional portfolios. In version 2.1, it brings a more robust, intelligent, and intuitive platform, designed with a modular concept that allows you to easily customize the structure and appearance of your site.

From a simple Landing Page to a complete site with multiple pages, the modules integrate like true LEGO pieces, making Warriorfolio 2 the ideal tool for those seeking a simple, fast, and effective portfolio.

Developed to be 100% managed through the Control Panel, without the need for deep technical knowledge in programming, PHP, or Laravel.

## ✨ Features

### New in version 2.1.3 - March, 2025
- 🪐 Saturn UI


### Core
- 🛠️ Robust and flexible Control Panel
- 🔄 Maintenance Mode and Discovery Mode
- 🧩 Customizable core modules
- 📱 Responsive and optimized design
- 📷 Portfolio image gallery
- 🖼️ Image slideshow
- 👥 Customer showcase
- 🎯 Skills display
- 📧 Email capture for mailing lists
- 📈 Google Analytics integration
- 📄 Downloadable resume
- 🟢 Linkedin "Open to Work" icon
- 📚 Bio, certificates, and courses
- 💬 WhatsApp Web contact
- ✉️ Contact form
- 📥 Inbox

## 🚀 Installation

### Composer

```bash
composer create-project mviniciusca/warriorfolio
```

The installation will automatically:
- Generate application key
- Create symbolic links for storage
- Run migrations and seeds
- Install NPM dependencies
- Start the local server

### Clone and setup
```
git clone https://github.com/mviniciusca/warriorfolio.git
cd warriorfolio
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate:fresh --seed
php artisan serve

In a new terminal:
npm run dev
```


## 🔧 Additional Resources

### Content Blocks
You don't need to stick to Warriorfolio's default design. The application offers extremely versatile code blocks and structural components that allow countless combinations and customizations. These elements are divided into: Components, Design, and Core.

### Maintenance Mode
Put your application in maintenance mode with the option to keep the contact form and social networks active.

### Discovery Mode
Activate this feature to view your application while it's in maintenance mode. An informative stripe will be displayed at the top indicating that Discovery Mode is enabled.

### Core Modules Decoupling
Customize which main modules will be displayed on your site. By default, Warriorfolio includes: Header, Hero Section, About You, Projects, Customers, Contact, Newsletter, and Footer. You can enable or disable these modules in the application settings.

## 🖥️ Requirements

- 🐘 PHP 8.2 or higher
- 🧪 PHP Extensions: OpenSSL, PDO, Zip
- 💾 Database: MySQL, PostgreSQL, SQLite
- 🤵🏻 Composer 2.0 or higher
- 🌱 NPM 10.2 or higher
- 💎 2GB disk space or more

## 📚 Documentation

[Visit the Official Documentation](https://warriorfolio.vercel.app/) for Warriorfolio hosted on Vercel.

## ⚙️ Technologies

Warriorfolio is built with modern and robust technologies:

- **Laravel**: PHP framework created by Taylor Otwell
- **Filament**: Toolkit for creating admin panels, developed by Dan Harrin, Zep Fietje, and the community
- **Livewire**: Laravel framework that allows the creation of real-time applications, by Caleb Porzio

## 🤝 Contributions and Feedback

If you've found a bug, want to contribute, or provide feedback, feel free to open an issue or a pull request. Your opinion is very important!

## 👏 Acknowledgments

- To Warriorfolio 1 users
- For feedback and contributions received
- To Taylor Otwell, creator of Laravel
- To Dan Harrin, Zep Fietje, and the entire PHP community, creators of Filament
- To Caleb Porzio, creator of Livewire
- To the entire PHP and Laravel community

## 📄 License

Warriorfolio 2 is an Open Source application under the MIT license.

---

<p align="center">
  Developed with ❤️ by <a href="http://twitter.com/marcosvca_">Marcos Coelho</a>
</p>
