<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->

<a id="readme-top"></a>

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

<!-- PROJECT LOGO -->
<br />
<div align="center">

   <a href="https://github.com/ransuhaneda/nsight-index-blog">
    <img src="public/assets/favicon.svg" alt="Logo" width="96" height="96">
  </a>
  <h3 align="center">Nsight Index - Blog & Article Management System</h3>
  <p align="center">
    A full-featured Laravel blog platform with multi-role authentication, CRUD operations, and media management.
    <br />
    <a href="https://github.com/ransuhaneda/nsight-index-blog"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/ransuhaneda/nsight-index-blog/issues">Report Bug</a>
    ·
    <a href="https://github.com/ransuhaneda/nsight-index-blog/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#user-roles">User Roles</a></li>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#email-configuration">Email Configuration</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

This Blog & Article Management System is a full-stack web application built with
Laravel. It features a multi-role user system (Admin, Author, Reader), full CRUD
functionality for blog posts, comments, categories, and likes, all supported by
a robust and elegant backend.

### User Roles & Features

| User Role  | Permissions & Features                                                   | Status  |
| :--------- | :----------------------------------------------------------------------- | :------ |
| **Admin**  | Full system access, user management, content moderation.                 | TODO    |
| **Author** | Create, edit, delete, and publish their own posts; manage their profile. | ✅ Done |
| **Reader** | View published posts, leave comments, like posts, and create an account. | ✅ Done |

**Database Tables Implemented:** Posts (✅), Comments (✅), Categories (✅),
Likes (✅)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

- [![PHP][PHP-shield]][PHP-url]
- [![Laravel][Laravel-shield]][Laravel-url]
- [![Bootstrap][Bootstrap-shield]][Bootstrap-url]
- [![TailwindCSS][TailwindCSS-shield]][TailwindCSS-url]
- [Alpine.js](https://alpinejs.dev/)
- [Spatie Media Library](https://spatie.be/docs/laravel-medialibrary/v11/introduction)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

Follow these instructions to get a copy of the project up and running on your
local machine for development and testing purposes.

### Prerequisites

- PHP (^8.2)
- Composer
- Node.js (v18 or higher) & PNPM
- A MySQL Database

### Installation

1.  Clone the repo

    ```bash
    git clone https://github.com/ransuhaneda/nsight-index_blog-management-system.git
    cd nsight-index-blog
    ```

2.  Install PHP Dependencies

    ```bash
    composer install
    ```

3.  Install NPM Dependencies and Build Assets

    ```bash
    pnpm install
    pnpm run build
    ```

4.  Start the Laravel Queue Worker in another terminal to process jobs (like
    media conversion):

    ```bash
    php artisan queue:listen
    ```

5.  Environment Configuration

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

    Edit the `.env` file with your database credentials:

    ```env
    DB_DATABASE=your_database_name
    DB_USERNAME=your_db_username
    DB_PASSWORD=your_db_password
    ```

6.  Run Database Migrations and Seeders

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

    _This creates sample posts, an admin user, and a test user._

7.  Start the Development Server
    ```bash
    composer run dev
    ```
    The application will be available at `http://localhost:8000`.

### Email Configuration

This project uses **Mailpit** to catch and preview emails sent in the
development environment.

1.  **Install Mailpit** (if not already installed). See the
    <a href="#mailpit-installation">installation guide below</a>.
2.  Start the Mailpit service in a new terminal:
    ```bash
    mailpit --verbose -d database/mailDB.sqlite
    ```
    Access the Mailpit interface at `http://localhost:8025`.

#### Mailpit Installation

Mailpit can be installed via script (Linux & Mac):

```bash
sudo sh -c "$(curl -sL https://raw.githubusercontent.com/axllent/mailpit/develop/install.sh)"
```

For Windows and other systems, download the static binary from the
[Mailpit releases page](https://github.com/axllent/mailpit/releases).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->

### Usage

Once the installation is complete, you can access the system:

- Main Application: http://localhost:8000

- Mailpit Dashboard: http://localhost:8025

- Telescope Dashboard (Logs): http://localhost:8000/telescope (after login)

### Login Credentials

Seeded users for testing:

#### Admin User

- Email: admin@example.com
- Password: admin123

#### Regular User

- Email: user1@example.com
- Password: password

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- TODO -->

### TODO

- [ ] Multi role implementation
- [ ] Admin Dashboard
- [ ] Fully migrate to Bootstrap 5
- [ ] Comment edit function
- [ ] Hover on username shows user profile modal

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->

### License

Distributed under the MIT License. See LICENSE.txt for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->

### Contact

Lance Carteciano - @ransuhaneda - ransuhaneda@gmail.com Project Link:
https://github.com/ransuhaneda/nsight-index-blog Social Link:
https://linktr.ee/ransuhaneda

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[PHP-shield]:
  https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/
[Laravel-shield]:
  https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap-shield]:
  https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[TailwindCSS-shield]:
  https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[TailwindCSS-url]: https://tailwindcss.com/
