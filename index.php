
<!DOCTYPE html>
<html>
<head>
	<title>Medical</title>
	<link rel="stylesheet" href="assets/figma_ui/css/globals.css" />
    <link rel="stylesheet" href="assets/figma_ui/css/style.css" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-r4Hr8oV0Rtq57Vj8Jb5s8+jyXsboYuFU6b5UqkKK4IZ6ZiPPgKdbmi53POlMBME" crossorigin="anonymous">

             <!-- <link href="assets/css/font-awesome.css" rel="stylesheet" /> -->
   
             <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
       
             <link href="assets/css/custom.css" rel="stylesheet" />
     
             <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'koneksi.php'; ?>
<?php
 $kategori=$koneksi->query("SELECT * FROM category");
//  var_dump($kategori);die;

?>
<div class="home">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
		<?php include 'header.php'; ?>
    <div class="row bg-light p-4"> <!-- Add Bootstrap classes for background and padding -->
    <?php
    while ($row = $kategori->fetch_assoc()) {
        echo '<div class="col-md-4 text-center mb-4">'; // Add column classes for responsiveness
        echo '<div class="card">';
        echo '<img src="../assets/gambar_category/' . $row['gambar'] . '" alt="' . $row['name'] . '" class="card-img-top rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">';
        echo '<div class="card-body">';
        echo '<p class="card-text mt-2">' . $row['name'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

 
          <div class="overlap-2">
            <img class="rectangle" src="assets/figma_ui/images/rectangle-3.png" />
            <div class="text-wrapper-5">Diagnostic In Vitro</div>
            <img class="img" src="assets/figma_ui/images/rectangle-8.png" />
            <img class="image" src="assets/figma_ui/images/image-1.png" />
          </div>
          <div class="div-wrapper"><div class="text-wrapper-6">Elektromedik Radiasi</div></div>
          <div class="overlap-3">
            <img class="rectangle" src="assets/figma_ui/images/rectangle-7.png" />
            <div class="text-wrapper-7">Elektromedik Non Radiasi</div>
          </div>

          <?php include 'menu_atas.php'; ?>


          <div class="overlap-5">
            <img class="rectangle-2" src="assets/figma_ui/images/rectangle-2.png" />
            <img class="img-2" src="assets/figma_ui/images/321112cee476fb5745f1f02d59b8d9c9-removebg-preview-1.png" />
            <img class="img-3" src="assets/figma_ui/images/321112cee476fb5745f1f02d59b8d9c9-removebg-preview-2.png" />
          </div>
          <img class="image-2" src="assets/figma_ui/images/image-4.png" />
          <img class="image-3" src="assets/figma_ui/images/image-5.png" />
          <img class="image-4" src="assets/figma_ui/images/image-7.png" />
          <img class="image-5" src="assets/figma_ui/images/image-8.png" />
        </div>
      </div>
</div>
</body>
</html>