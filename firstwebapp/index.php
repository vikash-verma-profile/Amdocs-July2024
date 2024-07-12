<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
.extra-padding{
    padding: 0 0 17px 0;
}
</style>
    </head>

<body>
    
<?php 
include_once('Header.php');
?>
    <div class="container" style="margin-top: 10px;">
    <div class="card">
        <div class="card-body">
            <form action="sum.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Please give value of 2 Numbers for addition</h1>
            
                <div class="form-floating extra-padding">
                  <input type="text" class="form-control" id="txtNumber1" name="txtNumber1" placeholder="name@example.com">
                  <label for="floatingInput">Number 1</label>
                </div>
                <div class="form-floating extra-padding">
                  <input type="text" class="form-control" id="txtNumber2" name="txtNumber2" placeholder="Password">
                  <label for="floatingPassword">Number 2</label>
                </div>
            
                <button class="btn btn-primary w-100 py-2" type="submit">Result</button>
                <p class="mt-5 mb-3 text-body-secondary">0</p>
              </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>