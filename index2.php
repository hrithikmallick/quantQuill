<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content Writing for Students</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Writers Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#previous-work">Previous Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section with External Image -->
    <header class="bg-primary text-white text-center py-5" style="background-image: url('https://source.unsplash.com/1600x900/?education,writing'); background-size: cover;">
        <h1>Welcome to Student Writers Hub</h1>
        <p>Your go-to platform for professional content writing services</p>
    </header>

    <!-- Carousel Section -->
    <section id="carousel">
        <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/1600x900/?writing,workspace" class="d-block w-100" alt="Professional Writing Service">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Quality Writing</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1600x900/?time,deadline" class="d-block w-100" alt="Timely Delivery">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>On-Time Delivery</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1600x900/?people,work" class="d-block w-100" alt="Expert Writers">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Experienced Writers</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Feature Section -->
    <section id="features" class="container my-5">
        <h2 class="text-center">Why Choose Us?</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Expert Writers</h5>
                        <p class="card-text">Our team consists of highly qualified academic writers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Affordable Rates</h5>
                        <p class="card-text">We offer student-friendly prices for all writing services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Timely Delivery</h5>
                        <p class="card-text">Guaranteed on-time delivery, no matter the deadline.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Plagiarism-Free</h5>
                        <p class="card-text">We deliver 100% original content, every time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Previous Work Section -->
    <section id="previous-work" class="container my-5">
        <h2 class="text-center">Previous Work</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?book,study" class="card-img-top" alt="Sample Work 1">
                    <div class="card-body">
                        <h5 class="card-title">Academic Essay</h5>
                        <p class="card-text">A comprehensive analysis of 19th-century literature for a university-level course.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?paper,report" class="card-img-top" alt="Sample Work 2">
                    <div class="card-body">
                        <h5 class="card-title">Research Paper</h5>
                        <p class="card-text">A detailed research paper on the effects of climate change on global agriculture.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://source.unsplash.com/400x300/?project,writing" class="card-img-top" alt="Sample Work 3">
                    <div class="card-body">
                        <h5 class="card-title">Creative Writing</h5>
                        <p class="card-text">A creative writing project focusing on modern short stories for young adults.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="container my-5">
        <h2 class="text-center">Contact Us</h2>
        <form action="#" method="post" class="mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Student Writers Hub. All Rights Reserved.</p>
        <p>Follow us on:
            <a href="#" class="text-white">Facebook</a> |
            <a href="#" class="text-white">Twitter</a> |
            <a href="#" class="text-white">LinkedIn</a>
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>