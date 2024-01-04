# My Portfolio
## Description
This is a from scratch built protfolio to highline my skills as Software developer
## Installation
The project uses PHPMAILER to send email after the visitor fills the contact form. The [Composer](https://getcomposer.org/) is the recommended way to install the library.
Run
```
composer require phpmailer/phpmailer
```
The Composer will generate the `vendor` folder containing the PHPMAILER subfolder.
Now install some packages dependencies
```
cd assets
```
Run
```
npm install
```
You can now remane the file `inc/config.php.sample` to `inc/config.php` and update the corresponding key-values to access your SMTP server.
