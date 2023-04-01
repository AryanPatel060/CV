<?php echo view('partials/header');?>
<div class="container my-4">
    <h1 class="my-2 d-flex justify-content-evenly">Add your Achivment </h1>
    <form method="post" action="<?= base_url("addachivment");?>" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
  </div>
  <div class="mb-3">
  <label for="doc" class="form-label">Document</label>
  <input class="form-control" type="file" name="doc" id="doc">
</div> 
  <label for="catagory" class="form-label">Catagory</label>
  <div class="input-group mb-3">
  <select class="form-select " name="catagory" id="catagory">
    <option selected>Choose</option>
    <?php foreach($categorys as $category):?>
              <option value="<?=$category['category_id'];?>"><?=$category['category_name'];?></option>
              <?php endforeach;?>
  </select>


  <!-- <label class="input-group-text" for="inputGroupSelect02">Options</label> -->
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php echo view('partials/footer');?>
