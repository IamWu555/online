<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js" integrity="sha384-L2pyEeut/H3mtgCBaUNw7KWzp5n9+4pDQiExs933/5QfaTh8YStYFFkOzSoXjlTb" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div><!-- end .container -->

<footer class="pt-4 my-md-5 pt-md-5 border-top">
  <div class="container">
    <div class="social-app">
      <span><img id="coolapk" class="btn" data-toggle="popover" data-placement="right" src="https://pic.downk.cc/item/5e1867d27f9a96fec15e18a8.png"></span>
      <span><a href="https://weibo.com/u/5580437264" target="_blank"><img class="btn" src="https://pic.downk.cc/item/5e186afa7f9a96fec15e8f66.png"></a></span>
      <span><a href="https://github.com/Wu1638001908" target="_blank"><img class="btn" src="https://pic.downk.cc/item/5e186bda7f9a96fec15eacd8.png"></a></span>
      <span><a href="https://twitter.com/iamwu555" target="_blank"><img class="btn" src="https://pic.downk.cc/item/5e186e167f9a96fec15efdc5.png"></a></span>
      <script type="text/javascript">
      $('#coolapk').popover({
       trigger : 'hover',//鼠标以上时触发弹出提示框
       html: true,//开启html 为true的话，data-content里就能放html代码了
       content:"<img src='https://pic.downk.cc/item/5e1875537f9a96fec1603a51.jpg'>"});
      </script>
    </div>
    <P>&copy;2018-<?php echo date('Y'); ?> <?php $this->options->title(); ?> | 皖ICP备19010460号-1</P>
    <p><?php _e('Powered by <a href="http://typecho.org">Typecho</a>,Theme is <a href="https://blog.wubuster.com/archives/online.html">Online</a>.'); ?></p>
    <p>
     <a href="javascript:window.scrollTo(0,0)">Back to top</a>
   </p>
  </div>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
