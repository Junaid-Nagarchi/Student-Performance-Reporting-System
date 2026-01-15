# 🎓 Student Management System

A beginner-friendly **Student Management System** built using **PHP, MySQL, and Docker**.  
The application allows managing students, tracking subject-wise marks, and analyzing academic performance through a clean web interface.

---

## 🚀 Features

- 📋 Add and manage student records
- 📊 Add subject-wise marks using predefined subjects
- 👤 View individual student profiles
- 🧮 Automatic average calculation
- ✅ Pass / Fail status based on marks
- 🗑️ Delete student records safely
- 🐳 Fully containerized using Docker (no XAMPP required)

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Containerization:** Docker & Docker Compose

---

## 📁 Project Structure
student-management-system/
│
├── app/
│ ├── index.php
│ ├── view_students.php
│ ├── add_student.php
│ ├── add_marks.php
│ ├── student_profile.php
│ ├── db.php
│ └── style.css
│
├── database.sql
├── Dockerfile
├── docker-compose.yml
└── README.md


---

## ⚙️ How to Run the Project (Using Docker)

### 1️⃣ Prerequisites
- Install **Docker Desktop**
- Make sure Docker is running

---

### 2️⃣ Clone the Repository
```bash
git clone https://github.com/Junaid-Nagarchi/student-management-system.git
cd student-management-system


### 3️⃣ Start the Application
docker compose up --build

### 4️⃣ Open in Browser
http://localhost:8080

### 5️⃣ Stop the Application
docker compose down

📌 Predefined Subjects
English
Maths
Science
History
Geography
Hindi
Konkani

📈 Future Enhancements
Student ranking system
Edit marks functionality
Dashboard charts
Authentication (Admin login)

👨‍💻 Author
Junaid Nagarchi
Aspiring Software Developer


---

## 🔹 STEP 7: Add Files to Git

```bash
git add .
