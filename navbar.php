
<head>
    <link rel="stylesheet" href="navbar.css">
</head>
    
<!-- Navbar -->
    <header>
      <a href="index.php" class="logo">Home</a>
      <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="project.php">Project</a></li>
        <li><a href="team.php">Team</a></li>
        <li><a href="contac.php">Contact</a></li>
      </ul>
    </header>


    <div class="space"></div>
    <!-- Section -->
    <section class="banner"></section>
    
    <!-- Javascipt -->
    <script type="text/javascript">
      window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
    </script>