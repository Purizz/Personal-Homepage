<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

        * {
  box-sizing: border-box;
}
      </style>
      </head>
      
    <title>Website Saya</title>
</head>
<body>
    <header>
        <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="icon">
            
    </div>
    <div class="navbar">
        <a href="blog.html"><i class="fa fa-fw fa-globe"></i> Blog</a>
        <a href="index.html#gallery"><i class="fa fa-fw fa-camera"></i> Gallery</a>
        <a href="index.html" class="split">Pg</a>
    </div>
    </header>

    <main>
        <section id="blog">
            <h2>Berita Ter Tidak Kini</h2>
            <div class="row">
                <div class="column" style="background-color:#FBA834;">
                    <a href="<?php echo $url1 ?>" class="sub" style=" color:antiquewhite;"><h3><?php echo $title1 ?></h3></a>
                    <a><?php echo $desc1 ?></a>
                </div>
                <div class="column" style="background-color:#333A73;">
                    <a href="<?php echo $url2 ?>" class="sub" style=" color: antiquewhite;"><h3><?php echo $title2 ?></h3></a>
                    <a><?php echo $desc2 ?></a>
                </div>
                <div class="column" style="background-color:#387ADF;">
                    <a href="<?php echo $url3 ?>" class="sub" style=" color: antiquewhite;"><h3><?php echo $title3 ?></h3></a>
                    <a><?php echo $desc3 ?></a>
                </div>
            </div>
          
</body>
</html>