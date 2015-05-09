<!DOCTYPE html>
<html>
<head>
<?php

$doc = JFactory::getDocument();

$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');

?>
</head>
<body>
<!-- main container -->
<div class='main_container'> 
  <!-- header -->
  <div class='header'>Header</div>
  
  <!-- mid container - includes main content area and right sidebar -->
  <div class='mid_container'> 
    
    <!-- main content area -->
    <div class='main_content_area'>
      <jdoc:include type="modules" name="position-3" style="xhtml" />
      <jdoc:include type="message" />
      <jdoc:include type="component" />
      <jdoc:include type="modules" name="position-2" style="none" />
    </div>
    
    <!-- right sidebar -->
    <div class='right_sidebar'>
      <jdoc:include type="modules" name="position-7" style="well" />
    </div>
    <div style='clear:both;'></div>
  </div>
  
  <!-- footer -->
  <div class='footer'> Footer </div>
</div>
</body>
</html>