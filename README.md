# 🌐 ISS-Track & API Tester

Welcome to **ISS-Track**, an interactive API testing and learning platform built for curious developers and real-time data enthusiasts.

## 🚀 Project Goal

This project provides a user-friendly interface to:

- Interact with public APIs like [OpenNotify](http://open-notify.org/) to track the International Space Station (ISS)
- Explore how HTTP requests work and understand JSON responses
- Offer code samples, dynamic tools, and real-world usage cases for developers

## 🧰 Technologies Used

| Frontend | Backend     | Database |
|----------|-------------|----------|
| HTML     | PHP         | MySQL    |
| CSS      | cURL & JSON |          |

## ✨ Key Features

- Display ISS pass times over any location
- Clean web interface for sending API requests and viewing results
- Integrated PHP code examples with educational explanations
- Planned integration of other APIs (weather, geolocation, etc.)
- Interactive testing zone to experiment with your own API calls

## 📦 Project Structure

/iss-track/ 
├── index.html 
├── style.css  
├── api-test.php 
├── db/ 
   │ └── connexion.php 
├── includes/ 
     │ └── api_helpers.php 
               └── README.md


## 🌍 Example API Request: OpenNotify

```php
<?php
$url = "http://api.open-notify.org/iss-pass.json?lat=48.8566&lon=2.3522";
$response = file_get_contents($url);
$data = json_decode($response, true);
print_r($data);
?>

🔧 Work in Progress
Custom dashboard to follow multiple APIs

Database connection to save frequent queries

Multilingual translation options

“Sandbox” mode to simulate dummy API calls

📢 Stay Tuned
New updates and integrations are coming soon. Follow the project to stay in the loop!


---

Let me know if you'd like to add contributor credits, license info, or installation steps. I can also help set up badges for GitHub (like version, build status, etc.) if you're going public 🌟
