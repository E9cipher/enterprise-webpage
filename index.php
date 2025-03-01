<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Company - Homepage</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/822c48f9f0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif:regular" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Economica:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Economica:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#whyus">Why choose us?</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- BACK TO TOP BTN -->
        <button id="gotop"><i class="fa-solid fa-chevron-up"></i></button>
        <script>
                let backToTopBtn = document.getElementById("gotop");
            
                // Show/hide button when scrolling
                window.onscroll = function() {
                    if (document.documentElement.scrollTop > 100) {
                        backToTopBtn.classList.add("show");
                    } else {
                        backToTopBtn.classList.remove("show");
                    }
                };
            
                // Scroll to top when clicking the button
                backToTopBtn.addEventListener("click", function() {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                });
            </script>
        <section class="myname">
            <div class="text">
                <h1 class="title">Company Name</h1>
                <h2 class="subtitle">My Slogan</h2>
                <!-- <button class="godown">Click me!</button> -->
                <button class="godown btn"><a href="#products"><i class="fa-solid fa-chevron-down fa-beat-fade"></i></a></button>
            </div>
        </section>
        <!-- BEGIN SECTION 2 -->
        <section class="bodysection" id="products">
            <div class="pctitle">
                <h1 class="ptitle">Products</h1>
            </div>
            <div class="pctext">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eaque aut eveniet hic, cum quae, ducimus perferendis aliquid voluptate omnis nesciunt excepturi cupiditate ratione! Illum consectetur dicta quis non iusto.
                </p>
                <div class="grid">
                    <div class="card">
                        <h3>Product 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eaque aut eveniet hic, cum quae, ducimus perferendis aliquid voluptate omnis nesciunt excepturi cupiditate ratione! Illum consectetur dicta quis non iusto.</p>
                    </div>
                    <div class="card">
                        <h3>Product 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eaque aut eveniet hic, cum quae, ducimus perferendis aliquid voluptate omnis nesciunt excepturi cupiditate ratione! Illum consectetur dicta quis non iusto.</p>
                    </div>
                    <div class="card">
                        <h3>Product 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eaque aut eveniet hic, cum quae, ducimus perferendis aliquid voluptate omnis nesciunt excepturi cupiditate ratione! Illum consectetur dicta quis non iusto.</p>
                    </div>
                    <div class="card">
                        <h3>Product 4</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eaque aut eveniet hic, cum quae, ducimus perferendis aliquid voluptate omnis nesciunt excepturi cupiditate ratione! Illum consectetur dicta quis non iusto.</p>
                    </div>
            </div>
        </section>
        <section class="bodysection" id="whyus" style="background-color: #a491d3;">
            <div class="pctitle">
                <h1 class="ptitle">Why choose us?</h1>
            </div>
            <div class="pctext dflex">
                <div class="list">
                    <ul>
                        <li><strong>Quality products:</strong>Our products have a 1-year guarantee. If anything happens, we'll be happy to be in touch with you.</li>
                        <li><strong>Customer service:</strong>Our customer service is available 24/7. You can contact us by phone, email or chat.</li>
                        <li><strong>Experienced team:</strong>Our team consists of highly skilled professionals with years of experience in the industry.</li>
                        <li><strong>Customer satisfaction:</strong>We prioritize customer satisfaction and strive to exceed expectations in every interaction.</li>
                        <li><strong>Eco-friendly:</strong>We are committed to sustainability and use eco-friendly materials and processes.</li>
                        <li><strong>Low prices:</strong>We offer better value for money without compromising on quality.</li>
                    </ul>
                </div>
        </section>
        <!-- CONTACT SECTION -->
         <!-- Better do it on a footer, see version https://github.com/E9cipher/enterpise-webpage/commit/948f01ff5074ba1e69d991370a0178946d2cce63 -->
        <!-- <section class="bodysection" id="contact" style="background-color: #3939ec;">
            <div class="pctitle">
                <h1 class="ptitle">Contact</h1>
            </div>
            <div class="pctext">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eaque aut eveniet hic, cum quae, ducimus perferendis aliquid voluptate omnis nesciunt excepturi cupiditate ratione! Illum consectetur dicta quis non iusto.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, corporis blanditiis? Aliquid dolorum eum, sunt praesentium ut ipsam quis, corrupti, temporibus molestias velit odio perspiciatis quos deserunt dicta? Inventore, illum?
                Quas cum beatae possimus omnis recusandae nostrum accusantium. Expedita ut nostrum maxime blanditiis corporis voluptas, dolorem, asperiores vel sunt voluptatem molestias sequi harum, vitae iste ratione eos deleniti unde dolore?
                Sit tempore eaque voluptatum aspernatur, eum minus exercitationem nulla doloremque reprehenderit, repellat facilis assumenda atque consectetur labore laboriosam molestiae? Mollitia neque, in ab perspiciatis reiciendis ut explicabo provident dolor dolorem.
                Impedit voluptas fuga cum, corporis alias rem animi repudiandae qui molestias ipsum atque sunt est ut labore consequuntur deleniti, quas incidunt fugit nobis, nostrum soluta. Facilis voluptate ab quaerat laboriosam!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta repellat, tempora obcaecati quis delectus doloremque explicabo totam fuga repudiandae id ducimus itaque. Voluptate atque inventore unde distinctio, recusandae dolorem enim.
                Officia provident nisi laboriosam qui, numquam necessitatibus harum veritatis ad cum beatae ab tempora repudiandae, libero delectus cupiditate nam recusandae alias possimus animi officiis. Eaque consequatur unde omnis distinctio consequuntur.
                Accusamus, minima saepe obcaecati possimus ut, soluta vitae illo cum exercitationem repudiandae voluptas natus! Quas, in quos? Sequi ex, aliquid distinctio, hic minima voluptas harum enim fuga, dignissimos facere aperiam.
                Ipsum, quibusdam rerum molestias illo dolor eligendi error perferendis nisi hic quo cum nihil deleniti dolores quia commodi ullam a ipsa quam fuga laudantium iusto? Saepe ipsam voluptatum veniam non.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad dolor dignissimos, ex magnam rem alias dolorum quisquam cupiditate illo? Labore atque inventore deserunt vel nemo assumenda, corrupti iure aspernatur sit.
                Provident neque a tempore fugiat molestiae voluptate consectetur labore quae iusto facilis esse expedita quia atque sint quidem corporis doloribus totam porro ut, asperiores sed numquam quaerat. Eligendi, eaque autem.
                Impedit in perspiciatis laboriosam labore, reprehenderit aliquid mollitia fugiat, corporis quos illum pariatur ullam ducimus nobis deleniti distinctio iure, error porro? Enim eligendi ex, quod atque saepe tempora recusandae rem.
                Quisquam facere voluptate ducimus quam laudantium aperiam fuga impedit, blanditiis quae optio illum sit magni aspernatur quidem nemo distinctio commodi odio magnam sapiente excepturi tempora aliquam dolor autem inventore. Amet.
                </p>
            </div>
        </section> -->
        <footer class="contactus" id="contact">
            <div class="fgrid">
                <div class="fitem contact">
                    <h3>Contact</h3>
                    <p>Phone: +34 123 456 789</p>
                    <p>Email:johndoe@example.com </p>
                    <p>Address: 1234 Main St, Barcelona, Spain</p>
            </div>
            <div class="fitem follow">
                <h3>Follow us</h3>
                <p><a href="https://www.facebook.com/@johndoe" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a></p>
                <p><a href="https://www.twitter.com/@johndoe" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a></p>
                <p><a href="https://www.instagram.com/@johndoe" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a></p>
            </div>
            <div class="fitem subscribe">
                <?php 
                if (isset($_SESSION['result'])) {
                    echo "<p>{$_SESSION['result']}</p>";
                    unset($_SESSION['result']); // Clear session message
                }
                ?>
                <form action="php/confirm.php" method="post" id="form">
                    <h3>Subscribe</h3>
                    <p>Subscribe to our newsletter to receive the latest news and updates.</p>
                    <input type="email" name="email" id="input" placeholder="Enter your email" autocomplete="on" required>
                    <button type="submit" class="btn">Subscribe!</button>
                </form>
                
            </div>
        </footer>
    </main>
    <script>
        var form = document.getElementById("form");
        form.addEventListener("submit", function(e) {
            const email = document.getElementById("input").value;
            e.preventDefault();
            let formData = new FormData(this);
            reviseEmail(email);
            fetch("confirm.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json()) // Expect JSON response
            .then(data => {
                Swal.fire({
                    title: data.status === "success" ? "Success!" : "Oops...",
                    text: data.message,
                    icon: data.status
                });
            })
            .catch(error => {
                Swal.fire({
                    title: "Error",
                    text: "Something went wrong!",
                    icon: "error"
                });
                console.error("Error:", error);
            });
        });

        // Revise user has put a valid email:
        function reviseEmail (email) {
            if (email === "" || email === "example@example.com") {
            Swal.fire({
                title: 'Oops!',
                text: 'Please enter a valid email address.',
                icon: 'error',
                confirmButtonText: 'Close'
            });
            form.reset();
        } else {
            DisplayMsg(email);
        }
        }

        function DisplayMsg(email) {
            Swal.fire({
                title: 'That\'s it!',
                html: `<p>You have successfully subscribed to our newsletter with the email: <b>${email}</b></p>`,
                icon: 'success',
                confirmButtonText: 'Close'
            }).then(function() {
                form.submit();
                form.reset();
            });
        }
    </script>
</body>
</html>