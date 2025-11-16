# Viaggio Classico

[![License](https://img.shields.io/github/license/Mateus-F-Moura/Viaggio-Classico)](https://github.com/Mateus-F-Moura/Viaggio-Classico/blob/main/LICENSE)
[![GitHub Stars](https://img.shields.io/github/stars/Mateus-F-Moura/Viaggio-Classico)](https://github.com/Mateus-F-Moura/Viaggio-Classico/stargazers)

## 📝 About The Project

**Viaggio Classico** is a complete CRUD project with frontend and backend developed in **pure PHP**. Beyond traditional registration operations (create, read, update, and delete), it integrates an external weather API from [OpenMeteo](https://open-meteo.com/) to enrich the user experience with dynamic weather information about registered destinations.

This repository was created to demonstrate proficiency in PHP web development without frameworks, integration with external APIs, and attention to organization and best practices, making it ideal as a portfolio piece for recruiters.

---

## ✨ Features

- **Travel CRUD** (Create, Read, Update, Delete)
- **Integration with OpenMeteo API** to display weather by location
- **Responsive frontend** with easy navigation
- **Robust PHP backend** with clean, well-documented code
- **Frontend and backend validations**
- **Organized structure**, separating presentation, logic, and data
- **Ready for customization or extension**

---

## 🛠️ Technologies Used

- **PHP** (backend, external API integration, frontend rendering)
- **HTML5 and CSS3** (structure and visual presentation)
- **MySQL** (data persistence)
- **OpenMeteo API** (real-time weather data consumption)

---

## 📂 Project Structure

```
.
├── index.php              # Initial page/listing
├── /pages                 # CRUD (create.php, update.php, etc.)
├── /includes              # Database connection, API control, and helpers
├── /assets                # Images, CSS
├── /sql                   # Database creation/import script
└── README.md
```

---

## 🚀 How to Run Locally

### Prerequisites

- PHP >= 7.x
- Web server (Apache, Nginx, or PHP built-in)
- MySQL/MariaDB
- Web browser

### Steps

1. **Clone the repository:**

```bash
git clone https://github.com/Mateus-F-Moura/Viaggio-Classico.git
cd Viaggio-Classico
```

2. **Import the SQL script** (`/sql/viaggio_classico.sql`) into your database.

3. **Configure the database connection** in `/includes/db.php`.

4. **(Optional) Configure environment variables** for the OpenMeteo API endpoint if you wish to customize.

5. **Run on a local web server** and access `http://localhost/Viaggio-Classico/index.php`.

---

## 🎯 Project Highlights

- Real integration with external API (OpenMeteo)
- Clean, separated, and well-commented code
- Classic PHP and web best practices
- Ready for customization, study, and professional use
- Easy understanding for recruiters; ideal for PHP or fullstack job applications

---

**This repository was designed to showcase real web development skills with PHP and external API integration. Feel free to explore, run, or get in touch!**
