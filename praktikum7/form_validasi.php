<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Validasi AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Form Validasi AJAX</h2>

    <form id="myForm" method="POST">
        Nama: <input type="text" id="nama" name="nama"><span id="nama-error" style="color:red"></span><br><br>
        Email: <input type="text" id="email" name="email"><span id="email-error" style="color:red"></span><br><br>
        Password: <input type="password" id="password" name="password"><span id="password-error" style="color:red"></span><br><br>
        <input type="submit" value="Kirim">
    </form>

    <div id="hasil" style="margin-top:20px; color:blue;"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah reload halaman

            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            // Validasi di sisi client (jQuery)
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }
            var password = $("#password").val();
            if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }


            if (valid) {
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: { nama: nama, email: email },
                    success: function(response) {
                        $("#hasil").html(response);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
