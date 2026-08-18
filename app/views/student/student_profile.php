<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

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
        }

        nav {
            background: #111;
            padding: 16px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #ff4f87;
        }

        .logo {
            color: #fff;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: 0.5px;
        }

        .logo span {
            color: #ff4f87;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
        }

        nav a:hover {
            color: #ff4f87;
        }

        .container {
            min-height: calc(100vh - 70px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .id-card {
            background: #fff;
            width: 100%;
            max-width: 500px;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(255, 79, 135, 0.12);
            border: 1px solid #ffd6e3;
            overflow: hidden;
        }

        .id-header {
            background: #111;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .avatar-circle {
            width: 70px;
            height: 70px;
            background: #ff4f87;
            color: #fff;
            font-size: 26px;
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px auto;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .id-header h1 {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
        }

        .id-header p {
            color: #ff4f87;
            font-size: 13px;
            letter-spacing: 1px;
            margin-top: 4px;
            font-weight: 600;
        }

        .id-body {
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .info-box {
            background: #fffbfd;
            border: 1px solid #ffe3ec;
            padding: 12px 16px;
            border-radius: 12px;
        }

        .info-box.full-width {
            grid-column: span 2;
        }

        .info-box .label {
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
            color: #888;
            letter-spacing: 0.5px;
            display: block;
            margin-bottom: 4px;
        }

        .info-box .value {
            font-size: 14px;
            font-weight: 700;
            color: #111;
        }

        .info-box .value.highlight {
            color: #ff4f87;
        }

        .id-footer {
            padding: 0 30px 30px 30px;
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            text-align: center;
            padding: 12px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.2s;
        }

        .btn-primary {
            background: #ff4f87;
            color: #fff;
        }

        .btn-primary:hover {
            background: #e03e72;
        }

        .btn-dark {
            background: #111;
            color: #fff;
        }

        .btn-dark:hover {
            background: #333;
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
        <div class="id-card">
            
            <div class="id-header">
                <div class="avatar-circle">
                    <?= strtoupper(substr($name, 0, 1)); ?>
                </div>
                <h1><?= $name; ?></h1>
                <p>STUDENT PROFILE</p>
            </div>

            <div class="id-body">
                <div class="info-box full-width">
                    <span class="label">Student ID</span>
                    <span class="value highlight"><?= $student_id; ?></span>
                </div>

                <div class="info-box full-width">
                    <span class="label">Course</span>
                    <span class="value"><?= $course; ?></span>
                </div>

                <div class="info-box">
                    <span class="label">Year Level</span>
                    <span class="value"><?= $year; ?></span>
                </div>

                <div class="info-box">
                    <span class="label">Section</span>
                    <span class="value"><?= $section; ?></span>
                </div>

                <div class="info-box full-width">
                    <span class="label">Email Address</span>
                    <span class="value"><?= $email; ?></span>
                </div>
            </div>

            <div class="id-footer">
                <a class="btn btn-dark" href="<?= site_url('homepage'); ?>">Home</a>
                <a class="btn btn-primary" href="<?= site_url('student_profile'); ?>">Refresh</a>
            </div>

        </div>
    </div>

</body>
</html>