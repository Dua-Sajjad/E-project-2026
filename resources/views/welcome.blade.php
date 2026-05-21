<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Salon - Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Yahan hum apni website ka design/styling likhenge */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fcf8f5; /* Light soft color salon ke liye */
            color: #333;
        }
        .navbar {
            background-color: #fff;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .logo {
            font-size: 24px;
            font-weight: 600;
            color: #d4af37; /* Gold color Elegance ke liye */
        }
        .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #555;
            font-weight: 400;
        }
        .hero-section {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=1000') no-repeat center center/cover;
            color: white;
        }
        .hero-section h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .btn-book {
            background-color: #d4af37;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">Elegance Salon</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>

    <div class="hero-section">
        <h1>Welcome to Elegance Salon</h1>
        <p>Your Beauty, Our Passion. Experience professional hair, skin, and bridal care.</p>
        <a href="#" class="btn-book">Book An Appointment</a>
    </div>

</body>
</html>