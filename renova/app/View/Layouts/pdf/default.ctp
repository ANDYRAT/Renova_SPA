<!DOCTYPE html>
<html>
  <head>
    <?php echo $this->Html->charset(); ?>
    <title>
      <?php echo $this->fetch('title'); ?>
    </title>
    <?php echo $this->Html->css('style.css'); ?>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <?php echo $this->fetch('content'); ?>
      </div>
    </div>
  </body>
</html>
