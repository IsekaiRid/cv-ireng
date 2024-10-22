<div style="text-align: center;">
    <img src="https://i.pinimg.com/originals/23/67/76/2367767820aa5b14f2ef90701f325ee8.gif" alt="Logo" style="border-radius: 100%; width: 250px; height: 250px;">
</div>

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
