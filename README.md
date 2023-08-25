# phpmailer-config

# Configuring PHPMailer on Ubuntu

This guide will walk you through the process of setting up and using PHPMailer, a popular PHP library for sending emails, on an Ubuntu system.


## Installation

1. **Install Composer:**

   Composer is a dependency management tool for PHP. If you don't have it installed, you can follow these steps to install it:

   ```bash
   sudo apt update
   sudo apt install curl php-cli php-mbstring git unzip
   cd ~
   curl -sS https://getcomposer.org/installer -o composer-setup.php
   HASH=`curl -sS https://composer.github.io/installer.sig`
   php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
   sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
   composer

2. **Create a New PHP Project:**

    Create a directory for your PHP project and navigate to it:
    ```bash
    mkdir my_php_project
    cd my_php_project

3. **Install PHPMAILER:**

    Inside your project directory, install PHPMailer using Composer:
    ```bash
    composer require phpmailer/phpmailer

## USAGE

1. **Clone:**

    ```bash
    git clone https://github.com/pembattech/phpmailer-config.git

2. **Configure PHPmailer Setting:**
    Inside the PHP script, configure the PHPMailer settings according to your needs. This includes SMTP server details, authentication, sender and recipient information, and the email content.

3. **Run the PHP Script:**
    ```bash
    php send_email.php



## Additional Resources

- [PHPMailer GitHub Repository](https://github.com/PHPMailer/PHPMailer)
- [PHPMailer Documentation](https://github.com/PHPMailer/PHPMailer/wiki)
