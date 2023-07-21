<?php
include 'partials/header.php';
include 'partials/navbar.php';
?>
<!-- Home -->
<section id="hero" class="px-5">
    <div class="container min-vh-100 py-5">
        <div class="row">
            <div class="navigasi mb-3">
                <i class="bi bi-house-door-fill text-primary"></i> <a href="index.php">Beranda</a> > <a href="#">Galeri</a>
            </div>
            <div class="col-12 bg-white p-5 rounded shadow-sm">
                <h2 class="fw-semibold fs-3 text-center">Galeri</h2>
                <div class="row">
                    <div class="col-md-4">
                        <!-- Button trigger modal -->
                        <img src="test.jpg" width="100%" height="400px" data-bs-toggle="modal" data-bs-target="#exampleModal" style="object-fit: cover;">

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <img src="test.jpg" width="100%">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Home -->

<?php
include 'partials/footer.php'
?>