<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form method="POST" action="">
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>

            <br>

            <label>Pilih warna favorit</label><br>
            <input type="checkbox" name="warna[]" value="merah">Merah<br>
            <input type="checkbox" name="warna[]" value="biru">Biru<br>
            <input type="checkbox" name="warna[]" value="hijau">Hijau<br>

            <br>

            <label>Pilih Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

            <br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">
            <!-- Hasil akan ditampilkan di sini -->
        </div>

        <script>
            $(document).ready(function(){
                $("myForm").submit(function (e){
                    e.preventDefault();

                    var formData = $("#myForm").serialize();

                    $.ajax({
                        url: "proses_lanjut.php",
                        type: "POST",
                        data: formDAta,
                        succes: function (response) {
                            $("#hasil").html(response);
                        }
                    });
                });
            });
            </script>
    </body>
</html>
