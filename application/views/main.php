<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Gallery - ZET task </title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("/assets/vendors/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('/assets/vendors/thumbnail-gallery.css') ?>" rel="stylesheet">
    
    <!-- Tagify CSS -->
    <link href="<?= base_url('/assets/vendors/tagify/tagify.css') ?>" rel="stylesheet">
	
  	<!-- Dropzone CSS -->
  	<link href="<?= base_url('/assets/vendors/dropzone/dropzone.min.css') ?>" rel="stylesheet">
	
  	<link rel="stylesheet" href="<?= base_url('/assets/vendors/blueimp-gallery/blueimp-gallery.min.css') ?>">
  </head>

  <body>
    <!-- blueimp-gallery controllers (become visible only on gallery call) -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>

    <!-- Page Content -->
    <div class="container">
      
		<div class="row">
        <div class="col-md-6 col-md-offset-3">
		        <h1 class="display-4">Gallery - ZET task</h1>
		    </div>
    
        <div class="col-md-4 col-md-offset-3">
            <form action="<?= base_url('search') ?>" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
    </div>

		
        <div class="row" style="margin-bottom: 1.25rem;">
                    <div class="col-sm-12">
            <div class="card">
                <div class="dropzone card-body" style="padding-bottom: 0;">
                <div class="border-class" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" name="title" class="form-control" id="inputEmail" placeholder="Image title">
                        </div>
                      
                        <div class="form-group col-md-2">
                            <button id="imgsubbutt" class="btn btn-primary btn-block" >Upload image</button>
                        </div>
                    </div>
      					<div class="form-row">
      						<div class="col-md-12 mb-12">
      							<input type="textarea" placeholder="Tags" name="tags"/>
      						</div>
                </div>
                </div>
                </div>
            </div>
        </div>

		
      <h1 class="my-4 text-center text-lg-left">Thumbnail Gallery</h1>
      
      <div class="row text-center text-lg-left">
      <?php  if(!empty($data)): ?>
      <?php foreach ($data as $item): ?>
        <div class="card col-lg-3 col-md-4 col-xs-6">
          <a href="<?= base_url("imgs/". $item['name']) ?>" title=" <?= $item['title'] ?> "data-gallery class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?= base_url("imgs/thumbnails/". $item['name']) ?>" alt="">
          </a>
            <div class="card-body"> 
              <h4><?= $item['title'] ?></h4> 
              <p> <?= $item['tags'] ?> </p>  
            </div>
          
        </div>
      <?php endforeach ?>
      <?php endif ?>  
      </div>
      
      <nav aria-label="Page navigation">
        <ul class="pagination">
          <?= $all_pages ?>
        </ul>
      </nav>
    </div>
    <!-- /.container -->
    
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <script>
	      var base_url = "<?= base_url() ?>";
	  </script>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('/assets/vendors/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Tagify JavaScript for tags -->
  	<script src="<?= base_url('/assets/vendors/tagify/jQuery.tagify.min.js') ?>"></script>
  	<!-- Dropzone JavaScript for uploads -->
  	<script src="<?= base_url('/assets/vendors/dropzone/dropzone.min.js') ?>"></script>
  	<!-- BlueImp Gallery JavaScript for gallery -->
	  <script src="<?= base_url('/assets/vendors/blueimp-gallery/jquery.blueimp-gallery.min.js') ?>"></script>
    <!-- main custom js -->
	  <script src="<?= base_url('/assets/resources/Main.js') ?>"></script>
	  
	  
  </body>

</html>
