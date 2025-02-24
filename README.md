# Installation Guide

Follow these steps to set up the Laravel application:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/oozaw/coal-transport.git
    cd coal-transport
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```

3. **Copy the `.env` file and generate an application key:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure your environment variables in the `.env` file.**

5. **Run database migrations:**
    ```bash
    php artisan migrate:fresh --seed
    ```

6. **Start the development server:**
    ```bash
    php artisan serve
    ```

7. **Compile assets:**
    ```bash
    npm run dev
    ```

Your Laravel application should now be up and running.
