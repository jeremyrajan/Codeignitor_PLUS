<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/site.css" />
    <script src="<?php echo base_url(); ?>js/modernizr.js"></script>
    
   </head>
 
   <body> 
      <div id="container">
          <div class="row">
              <div class="large-centered columns">  
                  <h1>{<?php echo $title; ?>}</h1>
                  <?php echo Modules::run('menu'); ?> <!--menu module add -->
                  <hr/>
                  <?php echo $body; ?>
              </div>
          </div>
          <div id="footer">
              &copy 2013 Company Name
          </div>
      </div>
      <script src="<?php echo base_url(); ?>js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>js/foundation.min.js"></script>
      <script>
       $(document).foundation();
      </script>
   </body>
    
</html>