
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
            background: #f5f5f5;
            min-height: 100vh;
            color: #222;
        }

        /* NAVIGATION */
        nav {
            height: 70px;
            background: #ffffff;
            border-bottom: 1px solid #e5e5e5;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 8%;
        }

        nav a {
            text-decoration: none;
            color: #444;
            font-size: 14px;
            font-weight: 600;
            margin-left: 25px;
            transition: 0.2s;
        }

        nav a:hover {
            color: #c65a7c;
        }

        /* MAIN */
        .page {
            min-height: calc(100vh - 70px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .profile-container {
            width: 100%;
            max-width: 850px;
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.07);
            display: grid;
            grid-template-columns: 280px 1fr;
        }

        /* LEFT PROFILE */
        .profile-side {
            background: #222;
            color: #ffffff;
            padding: 40px 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .avatar {
            width: 105px;
            height: 105px;
            border-radius: 50%;
            background: #ffffff;
            color: #c65a7c;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            font-weight: 700;
            border: 4px solid #d9a6b6;
            margin-bottom: 20px;
        }

        .profile-side h1 {
            font-size: 21px;
            margin-bottom: 8px;
        }

        .profile-side .course {
            color: #dddddd;
            font-size: 13px;
            line-height: 1.5;
        }

        .student-number {
            margin-top: 25px;
            padding: 9px 18px;
            border: 1px solid #666;
            border-radius: 20px;
            color: #eeeeee;
            font-size: 12px;
            font-weight: 600;
        }

        /* RIGHT CONTENT */
        .profile-content {
            padding: 40px;
        }

        .profile-content h2 {
            font-size: 22px;
            margin-bottom: 6px;
            color: #222;
        }

        .subtitle {
            color: #888;
            font-size: 13px;
            margin-bottom: 25px;
        }

        /* INFORMATION */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .info-card {
            background: #fafafa;
            border: 1px solid #e8e8e8;
            border-radius: 10px;
            padding: 16px;
            transition: 0.2s;
        }

        .info-card:hover {
            border-color: #d9a6b6;
        }

        .info-card.full {
            grid-column: span 2;
        }

        .label {
            display: block;
            color: #999;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .value {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            line-height: 1.5;
        }

        .highlight {
            color: #c65a7c;
        }

        /* BUTTONS */
        .actions {
            display: flex;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: 0.2s;
        }

        .btn-home {
            background: #222;
            color: #ffffff;
        }

        .btn-home:hover {
            background: #444;
        }

        .btn-refresh {
            background: #c65a7c;
            color: #ffffff;
        }

        .btn-refresh:hover {
            background: #aa4967;
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {

            .profile-container {
                grid-template-columns: 1fr;
            }

            .profile-side {
                padding: 35px 20px;
            }

            .profile-content {
                padding: 30px 20px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-card.full {
                grid-column: span 1;
            }

            .actions {
                flex-direction: column;
            }

            nav {
                justify-content: center;
            }

            nav a {
                margin: 0 10px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <nav>
        <a href="<?= site_url('student'); ?>">Home</a>
        <a href="<?= site_url('student/student_profile'); ?>">Student Profile</a>
    </nav>

    <!-- PROFILE -->
    <div class="page">

        <div class="profile-container">

            <!-- LEFT SIDE -->
            <div class="profile-side">

                <div class="avatar">
                    <?= strtoupper(substr($name, 0, 1)); ?>
                </div>

                <h1><?= $name; ?></h1>

                <p class="course">
                    <?= $course; ?>
                </p>

                <div class="student-number">
                    <?= $student_id; ?>
                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="profile-content">

                <h2>Personal Information</h2>

                <p class="subtitle">
                    Student profile details
                </p>

                <div class="info-grid">

                    <div class="info-card">
                        <span class="label">Year Level</span>
                        <span class="value">
                            <?= $year; ?>
                        </span>
                    </div>

                    <div class="info-card">
                        <span class="label">Section</span>
                        <span class="value">
                            <?= $section; ?>
                        </span>
                    </div>

                    <div class="info-card full">
                        <span class="label">Email Address</span>
                        <span class="value highlight">
                            <?= $email; ?>
                        </span>
                    </div>

                    <div class="info-card full">
                        <span class="label">Address</span>
                        <span class="value">
                            <?= $address; ?>
                        </span>
                    </div>

                    <div class="info-card">
                        <span class="label">Contact Number</span>
                        <span class="value">
                            <?= $contact; ?>
                        </span>
                    </div>

                    <div class="info-card">
                        <span class="label">Hobbies</span>
                        <span class="value">
                            <?= $hobbies; ?>
                        </span>
                    </div>

                </div>

                <!-- ACTION BUTTONS -->
                <div class="actions">

                    <a class="btn btn-home"
                       href="<?= site_url('student'); ?>">
                        Back to Home
                    </a>

                    <a class="btn btn-refresh"
                       href="<?= site_url('student/student_profile'); ?>">
                        Refresh Profile
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>
</html>

