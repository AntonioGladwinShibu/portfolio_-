<?php
$name = "Antonio Gladwin Shibu";
$role = "B.Tech Computer Science Student | Full Stack Developer";
$email = "antonioshibu29@gmail.com";
$phone = "+91-XXXXXXXXXX";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $name; ?> | Portfolio</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<canvas id="bg"></canvas>

<aside class="sidebar">
<h2>AKKU</h2>
<a onclick="go('home')">Home</a>
<a onclick="go('about')">About</a>
<a onclick="go('skills')">Skills</a>
<a onclick="go('education')">Education</a>
<a onclick="go('experience')">Experience</a>
<a onclick="go('projects')">Projects</a>
<a onclick="go('contact')">Contact</a>
</aside>

<main class="content">

<section id="home" class="hero">
<h1><?php echo $name; ?></h1>
<h3 id="typing"><?php echo $role; ?></h3>
<p>PHP • Java • MySQL • DBMS • Full Stack</p>
</section>

<section id="about">
<h2>About Me</h2>
<p>
I am a passionate Computer Science Engineering student who loves building real-world applications.
I specialize in PHP full-stack development, Java desktop systems, and database-driven platforms.
I focus on clean UI, scalable logic, and professional project delivery.  
I enjoy learning new technologies and transforming ideas into working software.
</p>
</section>

<section id="skills">
<h2>Technical Skills</h2>

<div class="skill"><span>HTML / CSS / JavaScript</span><div class="fill f90"></div></div>
<div class="skill"><span>PHP + MySQL</span><div class="fill f88"></div></div>
<div class="skill"><span>Java Swing + JDBC</span><div class="fill f85"></div></div>
<div class="skill"><span>DBMS & SQL</span><div class="fill f90"></div></div>
<div class="skill"><span>Bootstrap</span><div class="fill f80"></div></div>
<div class="skill"><span>Git & GitHub</span><div class="fill f82"></div></div>
<div class="skill"><span>Software Engineering</span><div class="fill f85"></div></div>

</section>

<section id="education">
<h2>Education</h2>

<div class="card">
<h3>B.Tech Computer Science Engineering</h3>
<p>2024 – Present</p>
<p>XYZ Institute of Technology</p>
</div>

<div class="card">
<h3>Higher Secondary Education</h3>
<p>ABC Higher Secondary School</p>
</div>

</section>

<section id="experience">
<h2>Experience</h2>

<div class="card">
<h3>PHP Full Stack Intern</h3>
<p>
Developed dynamic web applications using PHP, MySQL and Bootstrap.
Implemented authentication systems, dashboards, quizzes and API integration.
Worked on real project deployment and debugging.
</p>
</div>

<div class="card">
<h3>Independent Project Developer</h3>
<p>
Built AI-powered platforms, Java desktop applications, and advanced PHP games.
Handled complete lifecycle: design → development → testing.
</p>
</div>

</section>

<section id="projects">
<h2>Projects</h2>

<div class="grid">

<div class="card hover">
<h3><a target="_blank" href="https://github.com/AntonioGladwinShibu/AI-Powered-Career-Counselor-by-using-php">AI Career Counselor</a></h3>
<p>PHP + MySQL + OpenAI</p>
</div>

<div class="card hover">
<h3><a target="_blank" href="https://github.com/AntonioGladwinShibu/Java-PIMS-Swing-MySQL">Java PIMS</a></h3>
<p>Java Inventory System</p>
</div>

<div class="card hover">
<h3><a target="_blank" href="https://github.com/AntonioGladwinShibu/ultimate-tic-tac-toe-php">Ultimate Tic Tac Toe</a></h3>
<p>Advanced PHP Game</p>
</div>

<div class="card hover more">
<h3><a target="_blank" href="https://github.com/AntonioGladwinShibu?tab=repositories">More Projects</a></h3>
<p>View All on GitHub</p>
</div>

</div>
</section>

<section id="contact">
<h2>Contact Me</h2>

<form action="contact.php" method="post">
<input name="name" placeholder="Your Name" required>
<input name="email" placeholder="Your Email" required>
<textarea name="msg" placeholder="Message"></textarea>
<button>Send Message</button>
</form>

</section>

<footer>
<p><?php echo $email; ?></p>
<p><?php echo $phone; ?></p>
</footer>

</main>

<button id="topBtn" onclick="topFn()">↑</button>

<script src="script.js"></script>
</body>
</html>
