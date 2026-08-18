
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: #f5f5f5;
            color: #222;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* NAVIGATION */
        nav {
            background: #222;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #c65a7c;
        }

        .logo {
            color: #ffffff;
            font-size: 20px;
            font-weight: 700;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 25px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
        }

        nav a:hover {
            color: #d9a6b6;
        }

        /* MAIN */
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
            border-radius: 18px;
            border: 1px solid #e5e5e5;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.07);
        }

        .badge {
            display: inline-block;
            background: #f1f1f1;
            color: #777;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            padding: 7px 15px;
            border-radius: 20px;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .welcome-card h1 {
            font-size: 38px;
            font-weight: 800;
            margin-bottom: 15px;
            color: #222;
            line-height: 1.2;
        }

        .welcome-card h1 span {
            color: #c65a7c;
        }

        .line {
            width: 45px;
            height: 3px;
            background: #c65a7c;
            margin: 0 auto 25px auto;
            border-radius: 5px;
        }

        .welcome-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 35px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }

        /* BUTTON */
        .profile-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #222;
            color: #ffffff;
            padding: 14px 32px;
            border-radius: 9px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: 0.2s;
        }

        .profile-btn:hover {
            background: #c65a7c;
            transform: translateY(-2px);
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {

            nav {
                flex-direction: column;
                gap: 12px;
            }

            nav a {
                margin: 0 8px;
            }

            .welcome-card {
                padding: 40px 25px;
            }

            .welcome-card h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <nav>

        <div class="logo">
            Student Portal
        </div>

        <div>
            <a href="<?= site_url('student'); ?>">
                Home
            </a>

            <a href="<?= site_url('student/student_profile'); ?>">
                Student Profile
            </a>
        </div>

    </nav>

    <div class="container">

        <div class="welcome-card">

            <span class="badge">
                LavaLust Framework
            </span>

            <h1>
                Welcome, <span>Student</span>
            </h1>

            <div class="line"></div>

            <p>
                Welcome to the student portal. 
                View your personal information and student profile 
                through this simple web application.
            </p>

            <a class="profile-btn"
               href="<?= site_url('student/student_profile'); ?>">
                View My Profile
            </a>

        </div>

    </div>

</body>
</html>

