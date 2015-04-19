<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Cornelis "Neil" Fiedler">
  <meta name="keywords" content="MET CS601 'Boston University' 'Metropolitan College'"> 
  
  <title><?php echo $pageTitle; ?></title>
  
  <!-- You may or not not use jQuery; but, here just to show as example -->
  <script src="http://code.jquery.com/jquery-2.1.3.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script> 
  
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
  <style>
   
  </style>
 
 </head>
<body>
  <div class="main-wrapper">  
    <header class="main-header">
            <h1 class="main-logo"><a href="index.php">Popsyoga</a></h1>
            <ul class="main-nav">
              <li class="store <?php if ($section == "store") {echo "on";} ?>"><a href="store.php">Store</a></li>
              <li class="contact <?php if ($section =="contact") {echo "on"; } ?>"><a href="contact.php">Contact</a></li>
              <li class="about <?php if ($section =="about") {echo "on";} ?>"><a href="about.php">About Neil</a></li>
            </ul>
          </header>