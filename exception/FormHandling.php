<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" name="formHandling" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Your Username"/></td>
            </tr>
            <tr>
                <td colspan="2" style="width: 100%;">
                    <input type="submit" value="Submit Nama" onclick="return validasi()"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
       //$nama = $_POST['nama'];

       if($_POST['nama'] != ""){
           function validateName(){
               if(filter_var($_POST['nama'],FILTER_VALIDATE_INT) || $_POST['nama'] == "0"){
                   throw new Exception("This is not valid name");
               }
           }

           try{
               validateName();
               echo "Welcome , " . $_POST['nama'];
           }catch (Exception $e){
               echo "Error Message : " .$e->getMessage();
           }
       }

    ?>

</body>
    <script>
        function validasi(){
            var nama = document.formHandling.nama.value;
            if(nama === '' || nama === undefined){
                alert('Field Nama masih kosong');
                return false;
            }
        }
    </script>
</html>