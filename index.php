<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelipatan Lima</title>
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="card mx-auto bg-dark text-light" style="width: 20rem;">
  <div class="card-body">
    <h1 class="text-center mb-4 mx-auto">Kelipatan Lima</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="number">Masukkan angka:</label>
            <input type="number" class="form-control" id="angka" name="angka" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Proses</button>
    </form>

    <div class="card">
        <div class="card-body">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka = $_POST["angka"];
            $batas = 0;
            if($angka >= $batas){
                $batas = $angka;
                }
                
                for($i = 5; $i <= $batas; $i += 5){
                    echo "
                    <div class='row align-items-center'>
                        <div class='col-2 px-1'>
                            <div class='rounded-circle bg-warning p-2 text-center'>".($i / 5)."</div>
                        </div>
                        <div class='col-10 px-1'>
                            <div class='w-100 my-2 p-2 bg-secondary rounded'>
                                kelipatan ke-". ($i / 5).": ". $i."
                            </div>
                        </div>
                    </div>";
                }
            }
        ?>
            
        </div>
    </div>
    
        
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>
</html>