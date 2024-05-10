# MyNal - Article and Wiki Posting Platform for API

### versão em português / version in portuguese ->[here (aqui)](https://github.com/DaviJoseMach/MYNAL/blob/main/pt-br.md)

MyNal is a platform designed to facilitate article posting and serve as a wiki for documenting APIs. It uses a combination of modern technologies, including PHP, MySQL, Bootstrap, HTML5, CSS3, JavaScript, React, Laravel, Tailwind and jQuery. Below are links to the documentation for each of these technologies:

- [PHP](https://www.php.net/docs.php)
- [MySQL](https://dev.mysql.com/doc/)
- [Bootstrap](https://getbootstrap.com/docs/4.5/)
- [HTML5](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
- [CSS3](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [React](https://reactjs.org/docs/getting-started.html)
- [Laravel](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [jQuery](https://api.jquery.com/)

## Technologies Used

Here is a table with the technologies used in the project, along with their most recent versions:

| Technology | Version |
|----------------|-------------|
| PHP | 8.1 |
| MySQL | 8.0 |
| Bootstrap | 4.5.2 |
| HTML5 | current |
| CSS3 | current |
| JavaScript | current |
| React | current |
| Laravel | current |
| Tailwind CSS | current |
| jQuery | 3.5.1 |

## Installation

To install MyNal in your local environment, follow these steps:

1. **Install MySQL**: Download and install MySQL on your system. You can find installation instructions in [official MySQL documentation](https://dev.mysql.com/doc/).

2. **Install PHPMyAdmin**: PHPMyAdmin is a graphical tool for managing MySQL databases. Download and install PHPMyAdmin by following the instructions on [PHPMyAdmin downloads page](https://www.phpmyadmin.net/ downloads/).

3. **Download the repository files**: Download the files from the MyNal repository and extract them to a folder on your local server.

4. **Database Configuration**: Open PHPMyAdmin and create a new database called `mynal`. Then import the `mynal.sql` file provided with the MyNal files to create the required tables in the database.

5. **Configuring the `connect.php` File**: Open the `connect.php` file and replace the host, user, password and database name information with your own credentials.

Example of the `connect.php` file:
```php
<?php
     $host = 'localhost';
     $user = 'your_user';
     $password = 'your_password';
     $database = 'mynal';

     // making the connection
     $connection = new mysqli($host, $user, $password, $database);

    ?>
```


**Getting More Information and Additional Support**: If you need more information, guidance, or additional support, you can go directly to the MyNal debug page. There, you will find detailed log information and instructions on how to troubleshoot common issues. You can access this page at [DEBUG](https://github.com/DaviJoseMach/MYNAL/blob/main/front/debug-page/page.html).

**Contact Us**: If you need additional help or have any specific questions, please feel free to contact me directly on [Twitter/X](https://twitter.com/davvzin). I am always available to help and answer your questions.


---
