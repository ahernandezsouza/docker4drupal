<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <div class="row">
    <?php endif; ?>
      <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-6">
        <?php print render($content['product:field_images']); ?>
      </div>
      <div class="product-info col-lg-6 col-md-7 col-sm-6">
        <div<?php print $content_attributes; ?>>
          <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
          ?>
            <h2><?php print render($content['title_field']); ?></h2>
            <hr>
            <div class="row">
              <div class="col-md-6"></div>          
              <div class="col-md-6">          
                <div class="lead"><?php print render($content['product:commerce_price']); ?></div>
              </div>
            </div>
            <hr>        
            <div class="row">
              <div class="col-md-6">          
                <?php
                hide($content['body']);
                print render($content);        
                ?>
              </div>
            </div>
        </div>
      </div>
  </div>
  <div class="row">
    <hr>
    <h2>Description</h2>
      <?php
        print render($content['body']);        
      ?>
  </div>
  
  <div class="container-24 grid-24 clearfix">
    <?php if (!empty($content['links'])): ?>
    <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>
    <?php
    print render($content['comments']);
    ?>
  </div>

</article>
