<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?>Artist<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card" style="width: 18rem;">
   <div class="card-body">
      <?= form_open('update') ?>
      <input type="number" class="form-control" id="id" name="id" value="<?= $id ?>">
      <div class=" mb-3">
         <label for="name" class="form-label">Name</label>
         <input type="text" class="form-control" id="name" name="name" placeholder="" value=<?= $name ?>>
      </div>
      <div class="mb-3">
         <label for="description" class="form-label">Description</label>
         <textarea class="form-control" id="description" name="description" rows="3"><?= $description ?></textarea>
      </div>
      <div class="mb-3">
         <label for="img_url" class="form-label">Image URL</label>
         <input type="text" class="form-control" id="img_url" name="img_url" value="<?= $img_url ?>">
      </div>
      <button class=" btn btn-info">Submit</button>
      <?= form_close() ?>
   </div>
</div>
<?= $this->endSection() ?>
