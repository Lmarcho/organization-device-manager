# Organization Device Manager

## Project Overview
The Organization Device Manager is a SaaS product designed to manage organizations, their locations, and associated devices. It provides features for creating, editing, viewing, and deleting organizations, locations, and devices. Each device can be assigned to a specific location within an organization.

## Technologies Used
- **Laravel**: PHP framework used for the backend.
- **MySQL**: Database for storing data.
- **Tailwind CSS**: Utility-first CSS framework used for styling.
- **Vite**: Tooling for front-end assets.

## Prerequisites
- **PHP >= 8.1**
- **Composer**
- **Node.js and npm**
- **MySQL**

## Installation
1. **Clone the repository:**
   ```sh
   git clone git@github.com:Lmarcho/organization-device-manager.git
   cd organization-device-manager
2. **Install PHP dependencies:**
   ```sh
    composer install
3. **Install Node.js dependencies:**
   ```sh
    npm install

## Setup
1. **Create a .env file:**
   ```sh
    cp .env.example .env
- Update the .env file with your database credentials and other necessary configurations.
2. **Generate application key:**
   ```sh
    php artisan key:generate
3. **Run migrations:**
   ```sh
    php artisan migrate
4. **Compile assets::**
   ```sh
    npm run build

## Running the Application
1. **Start the local development server:**
   ```sh
    php artisan serve
2. **Start the asset server:**
   ```sh
    npm run dev
3. **Access the application:**
   ```sh
    http://127.0.0.1:8000

## Testing
1. **Run tests:**
   ```sh
    php artisan test

## Usage
### Organizations
- **Create, edit, delete, and view organizations.**
- **Each organization can have multiple locations.**

### Locations
- **Create, edit, delete, and view locations within an organization.**
- **Each location can have multiple devices.**

### Devices
- **Create, edit, delete, and view devices within a location.**

## Project Structure
- **app/**: Contains the controllers, models, and other backend logic.
- **resources/views/**: Contains the Blade templates for the front-end.
- **public/**: Publicly accessible files like CSS, JavaScript, and images.
- **routes/**: Contains all route definitions.
- **database/migrations/**: Migration files for database schema.

## Troubleshooting
- **Ensure all prerequisites are installed correctly.**
- **Check `.env` configurations, especially database settings.**
- **If styles are not loading, check the `npm run dev` or `npm run build` process.**

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
