# Museum Gallery Project

## Overview
The Museum Gallery project is a web application designed to showcase various items in a museum setting. It allows users to view, add, and manage gallery items, while providing an admin dashboard for managing the application.

## Project Structure
```
museum-gallery
├── public
│   ├── index.php              # Entry point for the application
│   ├── css
│   │   └── styles.css         # CSS styles for the application
│   ├── js
│   │   ├── main.js            # Main JavaScript functionality
│   │   ├── sliders.js         # Slider functionality for the gallery
│   │   └── events.js          # Event handling for the application
│   └── uploads                # Directory for uploaded images/files
├── src
│   ├── Controllers
│   │   ├── GalleryController.php  # Manages gallery items
│   │   └── DashboardController.php # Manages the admin dashboard
│   ├── Models
│   │   └── Item.php           # Represents a gallery item
│   ├── Views
│   │   ├── gallery
│   │   │   ├── index.php      # Main gallery view
│   │   │   └── form.php       # Form for adding/editing items
│   │   └── admin
│   │       └── dashboard.php   # Admin dashboard view
│   └── Database
│       └── Connection.php      # Handles database connection
├── templates
│   ├── header.php              # HTML header template
│   └── footer.php              # HTML footer template
├── config
│   └── config.php              # Configuration settings
├── sql
│   └── schema.sql              # SQL schema for database setup
├── tests
│   └── GalleryTest.php         # Unit tests for the GalleryController
├── composer.json               # Composer configuration file
├── .env.example                # Template for environment variables
├── .gitignore                  # Git ignore file
└── README.md                   # Project documentation
```

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd museum-gallery
   ```
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Set up your environment variables by copying `.env.example` to `.env` and updating the values as needed.

5. Import the SQL schema into your database:
   ```
   mysql -u username -p database_name < sql/schema.sql
   ```

## Usage
- Access the application by navigating to `http://localhost/museum-gallery/public/index.php` in your web browser.
- Use the gallery to view items and the admin dashboard to manage them.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License.