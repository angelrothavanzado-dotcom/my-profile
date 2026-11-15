<?php
// ---------------------------------------------------------
// ANGEL ROTH AVANZADO - PERSONAL PROFILE WEBSITE
// ---------------------------------------------------------

$fullName = "Angel Roth Avanzado";
$profilePhoto = "profile.jpg";
$yearLevel = "Second Year";
$course = "Bachelor of Science in Information Technology";

$email = "angelrothavanzado@gmail.com";
$phone = "09928633751";
$location = "Philippines";
$school = "Mater Dei College";

$aboutMe = "Hi! I'm Angel Roth Avanzado, a second-year Information Technology student
 who is interested in learning more about technology and how it can be used to create
  useful things. I enjoy exploring new ideas, improving my abilities, and learning through
   experience. I consider myself a work in progress, and I'm always willing to learn, take
    on challenges, and develop both my personal and technical skills.";

$education = [
    [
        "school" => "Mater Dei College",
        "program" => "College (Bachelor of Science in Information Technology)",
        "period" => "2025-Present"
    ],
    [
        "school" => "Bohol Island State University - Main Campus",
        "program" => "College (Bachelor of Science in Tourism Management)",
        "period" => "2024-2025"
    ],
    [
        "school" => "Hinlayagan National High School",
        "program" => "Senior High School (Science, Technology, Engineering, and Mathematics)",
        "period" => "2022-2024"
    ],
    [
        "school" => "Hinlayagan National High School",
        "program" => "Junior High School",
        "period" => "2019-2022"
    ],
    [
        "school" => "Hinlayagan Ilaya Elementary School",
        "program" => "Primary Education",
        "period" => "2012-2018"
    ]
];

$skills = [
    "Problem Solving",
    "Critical Thinking",
    "Communication",
    "Time Management",
    "Teamwork",
    "Adaptability",
    "Creativity",
    "Willingness to Learn"
];

$hobbies = [
    ["icon" => "🏸", "name" => "Playing Badminton", "description" => "Staying active and enjoying a friendly game."],
    ["icon" => "🍿", "name" => "Watching Anime", "description" => "Enjoying different stories, characters, and genres."],
    ["icon" => "🎧", "name" => "Listening to Music", "description" => "Listening to music whenever I want to relax."],
    ["icon" => "🌅", "name" => "Watching Sunsets", "description" => "Appreciating peaceful moments and beautiful views."]
];

$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Angel Roth Avanzado's personal student profile.">
    <title><?php echo htmlspecialchars($fullName); ?> | Personal Profile</title>

    <style>
        /* ---------- Color palette and general styles ---------- */
        :root {
            --cream: #f5f0e8;
            --beige: #e8ddce;
            --sand: #d6c3ad;
            --brown: #604735;
            --dark-brown: #3f3027;
            --muted: #817366;
            --white: #fffdf9;
            --line: #e7ded3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Georgia, "Times New Roman", serif;
            line-height: 1.7;
            color: var(--dark-brown);
            background: var(--cream);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1050px, 90%);
            margin: 0 auto;
        }

        /* ---------- Header and navigation ---------- */
        header {
            background: var(--cream);
            border-bottom: 1px solid var(--line);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav-container {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo {
            color: var(--brown);
            font-size: 1.05rem;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
        }

        nav a {
            color: var(--muted);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.82rem;
            transition: color 0.25s ease;
        }

        nav a:hover {
            color: var(--brown);
        }

        /* ---------- Hero / profile introduction ---------- */
        .hero {
            padding: 85px 0 78px;
            background: var(--beige);
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 48px;
        }

        .profile-photo {
            width: 185px;
            height: 185px;
            flex-shrink: 0;
            border-radius: 50%;
            border: 5px solid var(--white);
            background: var(--sand);
            color: var(--brown);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            box-shadow: 0 8px 22px rgba(63, 48, 39, 0.10);
            overflow: hidden;
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .eyebrow {
            color: var(--brown);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.72rem;
            font-weight: bold;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero-text h1 {
            color: var(--dark-brown);
            font-size: clamp(2.2rem, 5vw, 3.6rem);
            font-weight: normal;
            line-height: 1.2;
            margin: 10px 0;
        }

        .hero-text p {
            color: var(--muted);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.92rem;
        }

        .hero-button {
            display: inline-block;
            margin-top: 22px;
            padding: 10px 21px;
            border: 1px solid var(--brown);
            border-radius: 3px;
            color: var(--brown);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.82rem;
            transition: background 0.3s ease, color 0.3s ease, transform 0.3s ease;
        }

        .hero-button:hover {
            background: var(--brown);
            color: var(--white);
            transform: translateY(-3px);
        }

        /* ---------- Main sections ---------- */
        main {
            padding: 65px 0 45px;
        }

        .section {
            margin-bottom: 32px;
            scroll-margin-top: 95px;
        }

        .section-title {
            color: var(--brown);
            font-size: 1.55rem;
            font-weight: normal;
            margin-bottom: 16px;
        }

        .card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 5px;
            padding: 27px;
            box-shadow: 0 4px 15px rgba(63, 48, 39, 0.035);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(63, 48, 39, 0.09);
        }

        .about-text {
            color: #716357;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.93rem;
        }

        /* ---------- Education ---------- */
        .education-item {
            padding: 0 0 21px 19px;
            margin-left: 5px;
            border-left: 2px solid var(--sand);
            position: relative;
        }

        .education-item:last-child {
            padding-bottom: 0;
        }

        .education-item::before {
            content: "";
            position: absolute;
            top: 7px;
            left: -6px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--brown);
        }

        .education-item h3 {
            color: var(--dark-brown);
            font-size: 1.05rem;
            font-weight: normal;
        }

        .education-item p,
        .period {
            color: var(--muted);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.86rem;
        }

        .period {
            display: inline-block;
            margin-top: 4px;
            color: var(--brown);
        }

        /* ---------- Skills ---------- */
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 11px;
            list-style: none;
        }

        .skills-list li {
            padding: 8px 15px;
            border: 1px solid var(--sand);
            border-radius: 3px;
            background: var(--cream);
            color: var(--brown);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.84rem;
            transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
        }

        .skills-list li:hover {
            background: var(--brown);
            color: var(--white);
            transform: translateY(-3px);
        }

        /* ---------- Hobbies and interests ---------- */
        .hobby-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .hobby-card {
            padding: 23px 16px;
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 5px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        }

        .hobby-card:hover {
            transform: translateY(-5px);
            background: #fdf9f3;
            box-shadow: 0 9px 22px rgba(63, 48, 39, 0.09);
        }

        .hobby-icon {
            display: block;
            font-size: 1.8rem;
            margin-bottom: 9px;
        }

        .hobby-card h3 {
            color: var(--brown);
            font-size: 0.98rem;
            font-weight: normal;
            margin-bottom: 5px;
        }

        .hobby-card p {
            color: var(--muted);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.79rem;
            line-height: 1.5;
        }

        /* ---------- Contact information ---------- */
        .contact-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .contact-item {
            color: var(--muted);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.88rem;
            overflow-wrap: anywhere;
        }

        .contact-item strong {
            display: block;
            margin-bottom: 4px;
            color: var(--brown);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 0.98rem;
            font-weight: normal;
        }

        .contact-item a:hover {
            color: var(--dark-brown);
            text-decoration: underline;
        }

        /* ---------- Footer ---------- */
        footer {
            padding: 25px 15px;
            background: var(--dark-brown);
            color: #e9ded1;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.8rem;
        }

        footer p + p {
            margin-top: 4px;
            color: #c8b8a7;
        }

        /* ---------- Tablet and mobile layout ---------- */
        @media (max-width: 760px) {
            .nav-container {
                padding: 15px 0;
                flex-direction: column;
            }

            nav {
                justify-content: center;
                gap: 10px 17px;
            }

            .hero {
                padding: 60px 0;
            }

            .hero-content {
                flex-direction: column;
                gap: 25px;
                text-align: center;
            }

            .hobby-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .container {
                width: 92%;
            }

            .profile-photo {
                width: 150px;
                height: 150px;
                font-size: 2.8rem;
            }

            .hero-text h1 {
                font-size: 2.15rem;
            }

            main {
                padding-top: 45px;
            }

            .card {
                padding: 21px;
            }

            .hobby-grid,
            .contact-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Header with links to each section -->
    <header>
        <div class="container nav-container">
            <div class="logo">ANGEL ROTH AVANZADO</div>
            <nav aria-label="Main navigation">
                <a href="#about">About</a>
                <a href="#education">Education</a>
                <a href="#skills">Skills</a>
                <a href="#hobbies">Interests</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Profile introduction -->
    <section class="hero">
        <div class="container hero-content">
            <div class="profile-photo">
                <img src="<?php echo htmlspecialchars($profilePhoto); ?>"
                alt="<?php echo htmlspecialchars($fullName); ?>">
            </div>
            <div class="hero-text">
                <span class="eyebrow">Student Portfolio</span>
                <h1><?php echo htmlspecialchars($fullName); ?></h1>
                <p><?php echo htmlspecialchars($yearLevel); ?> · <?php echo htmlspecialchars($course); ?></p>
                <a class="hero-button" href="#contact">Get in Touch</a>
            </div>
        </div>
    </section>

    <main class="container">
        <!-- About me -->
        <section class="section" id="about">
            <h2 class="section-title">About Me</h2>
            <div class="card">
                <p class="about-text"><?php echo htmlspecialchars($aboutMe); ?></p>
            </div>
        </section>

        <!-- Educational background -->
        <section class="section" id="education">
            <h2 class="section-title">Educational Background</h2>
            <div class="card">
                <?php foreach ($education as $item): ?>
                    <div class="education-item">
                        <h3><?php echo htmlspecialchars($item["school"]); ?></h3>
                        <p><?php echo htmlspecialchars($item["program"]); ?></p>
                        <span class="period"><?php echo htmlspecialchars($item["period"]); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Skills -->
        <section class="section" id="skills">
            <h2 class="section-title">Skills</h2>
            <div class="card">
                <ul class="skills-list">
                    <?php foreach ($skills as $skill): ?>
                        <li><?php echo htmlspecialchars($skill); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <!-- Hobbies and interests -->
        <section class="section" id="hobbies">
            <h2 class="section-title">Hobbies &amp; Interests</h2>
            <div class="hobby-grid">
                <?php foreach ($hobbies as $hobby): ?>
                    <article class="hobby-card">
                        <span class="hobby-icon" aria-hidden="true"><?php echo $hobby["icon"]; ?></span>
                        <h3><?php echo htmlspecialchars($hobby["name"]); ?></h3>
                        <p><?php echo htmlspecialchars($hobby["description"]); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Contact information -->
        <section class="section" id="contact">
            <h2 class="section-title">Contact Information</h2>
            <div class="card contact-details">
                <div class="contact-item">
                    <strong>Email</strong>
                    <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
                </div>
                <div class="contact-item">
                    <strong>Phone</strong>
                    <?php echo htmlspecialchars($phone); ?>
                </div>
                <div class="contact-item">
                    <strong>Location</strong>
                    <?php echo htmlspecialchars($location); ?>
                </div>
                <div class="contact-item">
                    <strong>School</strong>
                    <?php echo htmlspecialchars($school); ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo $currentYear; ?> <?php echo htmlspecialchars($fullName); ?>. All rights reserved.</p>
        <p>Personal Student Portfolio · Made with PHP, HTML5 &amp; CSS3</p>
    </footer>
</body>
</html>
