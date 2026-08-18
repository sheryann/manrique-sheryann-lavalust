<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Hub</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: #fcf0f4;
            color: #111;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: #111;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #ff4f87;
        }

        .logo {
            color: #ffffff;
            font-size: 22px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .logo span {
            color: #ff4f87;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 25px;
            font-size: 15px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ff4f87;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .welcome-card {
            background: #ffffff;
            width: 100%;
            max-width: 680px;
            padding: 55px 45px;
            text-align: center;
            border-radius: 24px;
            border: 1px solid #ffd6e3;
            box-shadow: 0 15px 35px rgba(255, 79, 135, 0.12);
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #111, #ff4f87);
        }

        .badge {
            display: inline-block;
            background: #ffeef4;
            color: #ff4f87;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 20px;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .welcome-card h1 {
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 15px;
            color: #111;
            line-height: 1.2;
        }

        .welcome-card h1 span {
            color: #ff4f87;
        }

        .line {
            width: 50px;
            height: 4px;
            background: #ff4f87;
            margin: 0 auto 25px auto;
            border-radius: 5px;
        }

        .welcome-card p {
            color: #555;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 35px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }

        .profile-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #111;
            color: #ffffff;
            padding: 14px 32px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(17, 17, 17, 0.2);
        }

        .profile-btn:hover {
            background: #ff4f87;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 79, 135, 0.35);
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">Student <span>Hub</span></div>
        <div>
            <a href="<?= site_url('homepage'); ?>">Home</a>
            <a href="<?= site_url('student_profile'); ?>">Student Profile</a>
        </div>
    </nav>

    <div class="container">
        <div class="welcome-card">
            
            <span class="badge">LavaLust Framework</span>

            <h1>Welcome to <span>Student Hub</span></h1>

            <div class="line"></div>

            <p>
                A simple student information portal built using 
                LavaLust Routing, Controllers, Views, and Middleware.
            </p>

            <a class="profile-btn" href="<?= site_url('student_profile'); ?>">
                View My Profile
            </a>

        </div>
    </div>

</body>
</html>