# Email Sending in Laravel
This repository contains laravel code how a user can send mails with or without attachments.

## Project Structure

- **Frontend**: Built with HTML and Tailwind CSS.
- **Backend**: Built with Laravel.

### Prerequisites

Make sure you have the following installed:

- [Composer](https://getcomposer.org/) (for Laravel)
- [PHP](https://www.php.net/) (for Laravel)

### Setting Up the Backend (Laravel)

1. **Clone the Repository**:
    ```bash
    go to your directory after cloning
    cd your-directory
    ```

2. **Install PHP Dependencies**:
    ```bash
    cd backend
    composer install
    ```

3. **Set Up Environment Variables**:
    - Copy the example environment file:
        ```bash
        cp .env.example .env
        ```
    - Edit the `.env` file to configure your database and other settings.
    - Go to your gmail or google account and search app paswords to generate passwords for your account to send mail.
    - Enable the two factor authorization.
    - Set your app password and mailing settings in env variable like MAIL_SMTP,MAIL_ADDRESS etc.

4. **Generate Application Key**:
    ```bash
    php artisan key:generate
    ```

5. **Run Migrations**:
    ```bash
    php artisan migrate
    ```
    - you can use existing database as well

6. **Start the Laravel Server**:
    ```bash
    php artisan serve --port=8001
    ```

   The backend should now be running at `http://127.0.0.1:8001`.

7. **Set the Laravel Mail**:
    ```bash
    php artisan make:mail mail-class-name
    ```
    - A mailable class created in app directory like this app/mail/mail-class-name
    - Write your code
