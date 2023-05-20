<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=link_tag('public/styles/bootstrap.min.css')?>
    <?=link_tag('public/styles/style.css')?>
    <?=script_tag('public/scripts/bootstrap.bundle.min.js')?>
    <title>BIGBANG</title>

    <section class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-white text-center my-5">BIGBANG MEMBERS</h2>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="shadow
        d-flex
        justify-content-center
        align-items-center p-3 bg-dark rounded-lg
        flex-column">
        </div>
        </div>
        </div>
    </section>  
    <?= $this->renderSection("content") ?>
</head>
<body>