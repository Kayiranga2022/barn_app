# 🐐 Barn App – Goat Management System

The **Barn App** is a web-based system designed to manage goats and veterinary records for small-scale farms or personal livestock tracking. Built using **HTML**, **CSS**, **PHP**, and **JavaScript**, this application supports basic user management, animal record tracking, and veterinary visit logging.

---

## 🌟 Features

- 🧑‍🌾 User authentication and password reset
- 🐐 Manage goat profiles and data (add, edit, delete)
- 💉 Record veterinary visits and health status
- 📂 Organized folders for:
  - `user`: User-side functionalities
  - `veternel`: Veterinary visit logs
- 📊 Clean and user-friendly interface with responsive design

---

## 🛠️ Technologies Used

- **PHP** – Backend logic and database interaction
- **HTML/CSS** – Frontend layout and styling
- **JavaScript** – Basic frontend interactivity
- **MySQL** (assumed) – For database storage
- **Apache (XAMPP)** – Development server

---

## 📁 Folder Structure

barn_app/
│
├── admin/ # Admin dashboard and controls
├── user/ # User interface pages
├── veternel/ # Veterinary records and logs
├── css/ # Stylesheets
├── js/ # JavaScript scripts
├── fonts/ # Fonts used
├── images/ # Image assets
│
├── index.php # Main entry point
├── config.php # Database configuration
├── .htaccess # URL rewrite rules
├── logout.php # Logout logic
├── resetpassword.php # Password reset handler
├── create-new-pwd.php # New password creation form
├── reset.php # Password reset form
└── reset-pass.php # Password reset submission

yaml
Copy
Edit

---

## 🚀 Setup Instructions (Local Deployment)

To run the project locally:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/Kayiranga2022/barn_app.git
Move the project to your XAMPP htdocs folder:

makefile
Copy
Edit
C:\xampp\htdocs\barn_app
Create a MySQL database, import the required SQL file (if any), and update database details in config.php:

php
Copy
Edit
$con = mysqli_connect("localhost", "root", "", "your_database_name");
Start Apache and MySQL from your XAMPP control panel.

Access the app in your browser:

arduino
Copy
Edit
http://localhost/barn_app
🧠 Author
Kayiranga Ernest

GitHub Profile

Kigali, Rwanda

📌 License
This project is open-source and free to use for educational or livestock management purposes.
👨‍💻 Author
Kayiranga Ernest
📍 Kigali, Rwanda
🌐 LinkedIn
📧 kayinesta23@gmail.com

