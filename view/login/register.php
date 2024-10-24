<?php

require_once("../view/login/layout/header.php");
if (isset($_SESSION['alert'])) {
    $alert = $_SESSION['alert'];
?>
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof swal !== 'undefined') {
                swal({
                    title: "<?php echo $alert['title']; ?>",
                    text: "<?php echo $alert['message']; ?>",
                    icon: "<?php echo $alert['icon']; ?>",
                    buttons: {
                        confirm: {
                            className: 'btn btn-<?php echo $alert['icon']; ?>'
                        }
                    }
                });
            }
        });
    </script>
<?php
    unset($_SESSION['alert']); // Hapus alert setelah ditampilkan
}
?>

<body style="background-image:url('https://i.pinimg.com/originals/a6/e2/3b/a6e23bc8c9c862538a7f31dc2f651d98.gif'); background-size: cover; background-repeat: no-repeat;background-position: center;">
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6">
                <div class="card" style="background-color: rgba(255, 255, 255, 0); border: none;">
                    <div class="card-body ">
                        <div class="text-center">
                            <img src="icon.svg" alt="Brand Logo" class="brand-logo mb-3" style="max-width: 100px; height: auto;">
                            <h1 class="text-light shadow-lg" style="font-family: 'Chakra Petch', sans-serif;">Join Komukasi Global</h1>
                        </div>
                        <form method="POST" action="/prosesRegister">
                            <div class="form-group">
                                <label for="username" class="fw-bold text-light">Username</label>
                                <input type="text" class="form-control" id="username" name="name" placeholder="Enter username" style="background-color: #f0f8ff;">
                            </div>
                            <div class="form-group">
                                <label for="password" class="fw-bold text-light">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" style="background-color: #f0f8ff;">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block w-100">Join</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once("../view/login/layout/header.php")
    ?>