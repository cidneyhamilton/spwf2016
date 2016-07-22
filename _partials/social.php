<?php
  $facebook = 'https://www.facebook.com/SteampunkWorldsFair';
  $twitter = 'steamworldsfair';
  $tumblr = 'steampunkworldsfair';
?>

<ul class="social">
<?php if ( $facebook != '') : ?>
  <li><a href="<?php echo $facebook; ?>" class="fb" rel="me" target="_blank">Facebook</a></li>
<?php endif; ?>
<?php if ( $twitter != '') : ?>
  <li><a href="http://twitter.com/<?php echo $twitter; ?>" class="tw" rel="me" target="_blank">Twitter</a></li>
<?php endif; ?>
<?php if ( $tumblr != '') : ?>
  <li><a href="http://<?php echo $tumblr; ?>.tumblr.com/" class="tumblr" rel="me" target="_blank">Tumblr</a></li>
<?php endif; ?>
</ul>

this is overriding the base theme _partials/social.php which means that the peformer and vendor provided website 
and social media links are not displaying. Should this be renamed to website-social.php as on the WF child theme? 
