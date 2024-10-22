# Ireng CV

Ini adalah proyek **Ireng CV** yang menggunakan pendekatan OOP (Object-Oriented Programming) tanpa mengimplementasikan pola desain MVC (Model-View-Controller). Dalam sistem ini, hanya ada dua komponen utama:

- **Controller**
- **View**

## Deskripsi

Proyek ini dirancang dengan tujuan mempermudah pengguna dalam mengelola dan menampilkan informasi dalam format CV (Controller, View). Dengan pendekatan OOP, kami berusaha untuk memberikan struktur yang lebih sederhana dan mudah dipahami, tanpa adanya lapisan model yang bisa mempersulit pengalaman pengguna.

## Fitur Utama

- Pengelolaan data CV yang mudah
- open community

## Controller Costume
```code
$routeCore = new RouteCore();
$routeCore->route("/", "ControllerAuth::login_view", ['GET']);
$routeCore->handleRequest();
```

## Instalasi

1. **Clone repositori ini:**
   ```bash
   git clone https://github.com/username/ireng-cv.git
