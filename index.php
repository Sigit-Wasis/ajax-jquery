<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat ajax</title>
    <script src="jquery-3.3.1.min.js"></script>
    <script>
        // $(function() {
            // jalankan_ajax();
        // });
        function jalankan_ajax(){
            $.ajax({
                url: "proses.php",
                cache: false,
                method: "GET",
                data: $("form#contact").serialize(),
                success: function(html){
            $("#meong").html(html);
            } 
            });
            }
    </script>
</head>
<body>

<h3>SILAHKAN LOGIN</h3>
    <form id="contact" action="proses.php" method="GET">
        Username : <input type="text" name="username"><br>
        </br>
        Password : <input type="text" name="password"><br>
        </br>
    <button type="button" onclick="return jalankan_ajax()">MASUK</button>
    </form>
    </br>
    
    <div id="meong">
    </div>

</body>
</html>