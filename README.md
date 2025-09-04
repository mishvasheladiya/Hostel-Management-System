# Hostel-Management-System

The **Hostel Management System** is a web-based application built using **PHP, MySQL, HTML, CSS, and JavaScript**.  
It is designed to simplify and automate hostel operations like student registration, room allocation, fee management, complaints, and food management.

---

## 🚀 Features
- 👨‍🎓 Student registration & login
- 🏠 Room allocation & management
- 💳 Fees management & payment tracking
- 🍴 Food menu management
- 📝 Complaint & feedback system
- 📊 Admin dashboard with analytics
- 🔒 Secure login system with session management
- 🤖 Student chatbot (optional module)

---

## 🛠️ Technologies Used
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP (XAMPP)  
- **Database:** MySQL  
- **Dependencies:** Composer (`vendor/` folder)  

---

## 📂 Project Structure
hostel/
|
│── assets/              # Images, CSS, JS files
|
│── components/          # About, Contact, Information, Login, Logout, Menu, Register, Room
|
│── dashboard/           # Admin dashboard & Student dashboard
|
│── student_chatbot/     # Chatbot integration
|
│── templates/           # Carousel, Header, Footer
|
│── index.php 
|
│── functions.php 
|
│── search.php
|
│── README.md

---

🗄️ Database

Database Name: hostel
Tables:
  1) admin → `id, email, password, name`
  2) complaints → `id, name, email, room_no, category, description, status, created_at`
  3) contact_message → `id, name, email, subject, message, submitted_at`
  4) fees_lock → `id, is_locked`
  5) fees_payment → `id, name, email, room, amount, method, date, is_active, status`
  6) food_menu → `id, day_name, breakfast, lunch, snacks, dinner`
  7) rooms → `id, roomNumber, roomType, totalBeds, occupiedBeds, status`
  8) student → `id, firstname, lastname, email, password, phone, dob, roomType, roomOption, roomNumber, room_id, streetAddress, zipCode, city, state, university, course, userType,             agreedToTerms, status, created_at`
     
---

📦 Vendor Installation
Navigate to the components/Login/ folder in CMD and run: `composer install`

---

🔑 API Setup (Google Login)

  Go to Google Cloud Console → https://console.cloud.google.com/
  Create a project and enable OAuth 2.0 Client IDs.
  Generate Client ID and Client Secret.
  Replace inside your project code (example in login.php):

  Code : 
  $client->setClientId("YOUR_GOOGLE_CLIENT_ID");
  $client->setClientSecret("YOUR_GOOGLE_CLIENT_SECRET");
  $client->setRedirectUri("http://localhost/Hostel/components/Login/callback.php");

---

1) Install XAMPP
   Download and install from: https://www.apachefriends.org/download.html `(Recommended path: D:\Xampp)`

2) Start Apache and MySQL in XAMPP Control Panel.

3) Set up the project
   Place the project folder inside:
   D:\Xampp\htdocs\Hostel


4) Database Setup
   Open http://localhost/phpmyadmin
   Create a database named hostel
   Inside this database, create the tables listed in the Database section above.

5) Run the Project
   Open your browser and visit: 👉 http://localhost/Hostel


