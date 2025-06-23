<?php
/**
* @file
* stargrace's theme implementation to display a single Drupal page.
*/
?>

<header>
    <section class="container">
          <div class="col-md-6 col-lg-6 left">
                <div class="logo center wow fadeIn" data-wow-duration="1000ms" >
                    <?php if ($logo) : ?>
                        <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home">
                            <img src="<?php print $logo;?>" id="logo" alt="<?php print t('Home');?>" />
                        </a>        
                    <?php endif;?>
                </div>
           </div>
    

    <div class="col-md-1 col-lg-1">
    </div>


    <div class="col-md-5 col-lg-5 bigtoppadding">
        <section id="navbar">
                <!-- button -->
                <div class="fm-button">
                    <span class="fm-bar"></span>
                    <span class="fm-bar"></span>
                    <span class="fm-bar"></span>
                </div>
                <!-- end button -->
                <div class="navigation">
                    <?php if (isset ($page['menu'])) {print render($page['menu']);}?>
                </div>
        </section>
    </div>

    </section>
</header>

<section class="before_content_no_wrapper">
 <div class="row">
      <div class="col-md-7 col-lg-7 nopadding">
                <?php if (isset ($page['before_content_no_wrapper'])) : ?>
                      <!-- BEFORE CONTENT BLOCK REGION -->
                      <?php print render($page['before_content_no_wrapper']);?>
                      <!-- END BEFORE CONTENT BLOCK REGION -->              
                <?php endif;?>
        </div>

        <div class="col-md-5 col-lg-5 nopadding">
            <div class="bannertop">
                <?php if (isset ($page['banner_top'])) : ?>
                      <!-- BEFORE CONTENT BLOCK REGION -->
                      <?php print render($page['banner_top']);?>
                      <!-- END BEFORE CONTENT BLOCK REGION -->              
                <?php endif;?>
            </div>
            <!-- End Banner Top -->


            <div class="bannerbottom">
                <?php if (isset ($page['banner_bottom'])) : ?>
                      <!-- BEFORE CONTENT BLOCK REGION -->
                      <?php print render($page['banner_bottom']);?>
                      <!-- END BEFORE CONTENT BLOCK REGION -->              
                <?php endif;?>
            </div>
            <!-- End Banner Bottom -->
        </div>
  </div>
</section>


<section class="wow fadeIn front-content" data-wow-duration="4s" data-stellar-background-ratio="0.1">
        <div class="row">
            <?php if (($page['sidebar_left'])) : ?>
                <div class="<?php if ($page['sidebar_right']) {echo "col-md-3 col-lg-3";}else {echo "col-md-3 col-lg-3";}?>">
                    <?php print render($page['sidebar_left']);?>
                </div>
            <?php endif;?>

            <div class="<?php if (($page['sidebar_right']) AND ($page['sidebar_left'])) {echo "col-md-9 col-lg-9";}elseif (($page['sidebar_right']) OR ($page['sidebar_left'])) {echo "col-md-9 col-lg-9";}else {echo "col-md-12 col-lg-12";}?>">       
                    <?php print $messages;?>

                    <?php if ($tabs = render($tabs)) : ?>
                        <div id="drupal_tabs" class="tabs ">
                            <?php print render($tabs);?>
                        </div>
                    <?php endif;?>
                    
                    <?php print render($page['help']);?>
                    
                    <?php if ($action_links) : ?>
                        <ul class="action-links">
                            <?php print render($action_links);?>
                        </ul>
                    <?php endif;?>
                
                    <?php if (isset ($page['content'])) {print render($page['content']);}?>

            </div>

            <?php if (($page['sidebar_right'])) : ?>
                <div class="<?php if ($page['sidebar_left']) {echo "col-md-3 col-lg-3";}else {echo "col-md-3 col-lg-3";}?>">
                    <?php print render($page['sidebar_right']);?>
                </div>
            <?php endif;?>
        </div>
</section>
    


<footer>
    <div class="footer-bottom">
        <div class="midpadding">
                <div class="col-sm-12 col-md-9 col-lg-9 footer-bottom-left">
                  <?php if (isset ($page['footer_bottom_left'])) : ?>
                        <?php print render($page['footer_bottom_left']);?>
                      <?php endif;?>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3">
                  <?php if (isset ($page['footer_bottom_right'])) : ?>
                        <?php print render($page['footer_bottom_right']);?>
                      <?php endif;?>
                </div>
        </div>
    </div>
</footer>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeIn';
      this.parentNode.insertBefore(section, this);
    };
  </script>