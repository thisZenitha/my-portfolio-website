<?php
$myName = "Zenitha";
$myRole = "Coding Teacher & Developer";
$projects = [
    ["title" => "Python CRUD", "desc" => "Flask, SQLAlchemy, PostgreSQL web app.", "img" => "python.png", "link" => "https://github.com/thisZenitha/CRUD-python-SQLAlchemy-postgreSQL"],
    ["title" => "YouApp QA", "desc" => "Functional test cases & UAT docs.", "img" => "qa.jpeg", "link" => "https://github.com/thisZenitha"],
    ["title" => "Scratch Lessons", "desc" => "Visual block coding for young learners.", "img" => "scratch.png", "link" => "https://github.com/thisZenitha"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - <?php echo $myName; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .me { background: linear-gradient(135deg, #FF5F1F); color: white; border-radius: 0 0 30px 30px; }
        .card:hover { transform: translateY(-5px); transition: 0.3s;  } 
        /* Style untuk foto kecil di card */
        .project-thumb {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-light bg-white shadow-sm sticky-top">
        <div class="container"><a class="navbar-brand fw-bold text-primary" href="#">Zed Portfolio</a></div>
    </nav>

    <header class="me text-center py-5 mb-5">
        <div class="container">
            <img src="myphoto.jpeg" alt="Profile" width="140" class="rounded-circle border border-3 border-white shadow mb-3">
            <h1 class="fw-bold">Hi, I'm <?php echo $myName; ?>!</h1>
            <p class="lead"><?php echo $myRole; ?></p>
        </div>
    </header>

<section class="container mb-5">
        <h2 class="text-center fw-bold mb-4">See My Previous Projects</h2>
        <div class="row g-4">
            <?php foreach ($projects as $p): ?>
                <div class="col-md-4">
                    <div class="card h-100 p-4 shadow-sm border-0 rounded-4 text-center d-flex flex-column">
                        <!-- Foto Kecil di Atas Judul Proyek -->
                        <div class="mb-3">
                            <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['title']; ?>" class="project-thumb shadow-sm border">
                        </div>
                        
                        <h4 class="fw-bold"><?php echo $p['title']; ?></h4>
                        <p class="text-muted flex-grow-1"><?php echo $p['desc']; ?></p>
                        <a href="<?php echo $p['link']; ?>" target="_blank" class="btn btn-outline-dark rounded-pill mt-3">See this project here!</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="text-center text-muted py-3">
        <small>&copy; <?php echo date("Y"); ?> <?php echo $myName; ?>. Built with PHP & Bootstrap</small>
    </footer>

</body>
</html>
