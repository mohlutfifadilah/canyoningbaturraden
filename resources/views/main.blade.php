<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
        }

        .hero {
            background: url('https://via.placeholder.com/1920x600') no-repeat center center;
            background-size: cover;
            height: 600px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .feature-icon {
            width: 80px;
            height: 80px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo.png') }}" alt="" width="80" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Package</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="height: 100vh; background-image: url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80); background-size: cover; background-position: center;"
        class="position-relative w-100">
        <div class="position-absolute text-white d-flex flex-column align-items-center justify-content-center"
            style="top: 0; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.6);">
            <span>SubHeadline</span>
            <h1 class="mb-4 mt-2 font-weight-bold text-center">Enter Your Headline Here</h1>
            <div class="text-center">
                <!-- hover background-color: white; color: black; -->
                <a href="#" id="filled" class="btn px-5 py-3 text-white mt-3 mt-sm-0 mx-1"
                    style="border-radius: 30px; background-color: #9B5DE5;">Get Started</a>
                <!-- hover background-color: #9B5DE5; color: white; -->
                <a href="#" id="outlined" class="btn px-5 py-3 text-white mt-3 mt-sm-0 mx-1"
                    style="border-radius: 30px; border:1px solid #9B5DE5;">Showcases</a>
            </div>
        </div>
    </div>

    <!-- Credit: Componentity.com -->
    <a href="https://componentity.com" target="_blank" class="block">
        <img src="http://codenawis.com/componentity/wp-content/uploads/2020/08/logo-componentity-%E2%80%93-9.png"
            width="120px" class="d-block mx-auto my-5">
    </a>

    <div class="hero">
        <div class="container">
            <h1>The Next Generation Website Builder</h1>
            <p>Powerful and easy to use drag and drop website builder for blogs, presentations, or ecommerce stores.</p>
            <a href="#" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </div>

    <div class="container my-5">
        <h2>Features</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/80" class="feature-icon" alt="Feature 1">
                <h5>Better Security</h5>
                <p>Vvveb is 100% safe against SQL injections, a vulnerability that affects most CMS.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/80" class="feature-icon" alt="Feature 2">
                <h5>Advanced Ecommerce</h5>
                <p>Vvveb is a full-featured ecommerce platform with advanced functionality.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/80" class="feature-icon" alt="Feature 3">
                <h5>Full Localization</h5>
                <p>Publish content in multiple languages or sell in different currencies.</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2>Testimonials</h2>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/100" class="rounded-circle" alt="User  1">
                <h5>John Doe</h5>
                <p>Company Inc.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/100" class="rounded-circle" alt="User  2">
                <h5>Jane Doe</h5>
                <p>Company Inc.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col -md-3 text-center">
                <img src="https://via.placeholder.com/100" class="rounded-circle" alt="User   3">
                <h5>Mark Smith</h5>
                <p>Company Inc.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/100" class="rounded-circle" alt="User   4">
                <h5>Emily Johnson</h5>
                <p>Company Inc.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2>Pricing Plans</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h5>Basic Plan</h5>
                    </div>
                    <div class="card-body">
                        <h2>$19/month</h2>
                        <p>Basic features for small businesses.</p>
                        <a href="#" class="btn btn-primary">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h5>Pro Plan</h5>
                    </div>
                    <div class="card-body">
                        <h2>$39/month</h2>
                        <p>Advanced features for growing businesses.</p>
                        <a href="#" class="btn btn-primary">Choose Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header">
                        <h5>Enterprise Plan</h5>
                    </div>
                    <div class="card-body">
                        <h2>$99/month</h2>
                        <p>All features for large enterprises.</p>
                        <a href="#" class="btn btn-primary">Choose Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2>Contact Us</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2023 Vvveb. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>