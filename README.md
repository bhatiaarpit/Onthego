T![Screenshot 2023-12-18 000131](https://github.com/bhatiaarpit/Onthego/assets/118626392/8c33dc72-c35b-4a90-a759-dc612d86e5b4)

This project is a responsive travel website built with HTML, CSS, JavaScript, PHP, and MySQL. The website features various sections including Home, Book, Packages, Services, Gallery, Reviews, and Contact. It utilizes external libraries such as Font Awesome for icons and Swiper.js for creating responsive sliders.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Dependencies](#dependencies)
- [Database Setup](#database-setup)
- [Contributing](#contributing)
- [License](#license)
- [Live Demo](#live-demo)

## Installation

To get a local copy up and running, follow these simple steps:

1. **Clone the repository**:
   ```sh
   git clone https://github.com/yourusername/onthego.git
   ```

2. **Navigate to the project directory**:
   ```sh
   cd onthego
   ```

3. **Set up your local server** (e.g., XAMPP, WAMP, MAMP).
   - Move the project directory to the `htdocs` folder (for XAMPP) or the equivalent directory in your server setup.

4. **Start your local server**.

5. **Open your web browser** and go to `http://localhost/onthego`.

## Usage

The website includes the following main sections:

1. **Header**: Contains the navigation menu and search functionality.
2. **Home**: Introduction to the travel website.
3. **Book**: Form for booking travel packages.
4. **Packages**: Display various travel packages.
5. **Services**: Outline of the services offered.
6. **Gallery**: Showcase of travel destinations.
7. **Reviews**: Customer testimonials.
8. **Contact**: Contact form for user inquiries.

## Dependencies

This project uses the following external libraries:

1. **Font Awesome**: For icons.
   - CDN: `https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css`

2. **Swiper.js**: For creating responsive sliders.
   - CDN: `https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css`

## Database Setup

1. **Create a database** in MySQL (e.g., `onthego`).

2. **Import the database structure**:
   - Open your database management tool (e.g., phpMyAdmin).
   - Select the `onthego` database.
   - Import the `db/database.sql` file to create the necessary tables.

3. **Update the database connection** in your PHP files (e.g., `book.php`) with your MySQL credentials:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "onthego";

   $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ```

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project.
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`).
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the Branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Live Demo

Check out the live demo of the website [here](https://onthegotravel.netlify.app/).

---

Feel free to customize this README file further to fit your specific project requirements!
