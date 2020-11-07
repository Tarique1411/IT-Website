<section class="count-div">
            <div class="container">
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                    <div class="big-count">
                        <span class="counter">30</span>
                        <p>Number of app developed</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                    <div class="big-count">
                        <span class="counter">50</span>
                        <p>Number of client</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                    <div class="big-count">
                        <span class="counter">1</span>
                        <p>Years in business</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                    <div class="big-count">
                        <span><span class="counter">30</span>+</span>
                        <p>Team members</p>
                    </div>
                </div>
            </div>
        </section>
 <footer>
         <div class="links-url">
            <div class="container">
               <ul>
                  <li>
                     <a href="<?= base_url();?>welcome/terms">Terms and Conditions</a>
                  <li>
                     <a href="<?= base_url();?>welcome/careers">Careers</a>
                  </li>
                  <li>
                     <a href="<?= base_url();?>welcome/services">Services</a>
                  </li>
                  <li>
                     <a href="<?= base_url();?>welcome/blog">Blog</a>
                  </li>
                  <li>
                     <a href="<?= base_url();?>welcome/contact">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="copy-right-socail">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <img src="<?= asset_url(); ?>img/tlogo.png" class="fotter-logo" />
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <ul class="social">
                        <li>
                           <h4>Follow us on</h4>
                        </li>
                        <li>
                           <a class="fa fa-facebook facebook " href="https://www.facebook.com/mysoftworld/?modal=admin_todo_tour"></a>
                        </li>
                        <li>
                           <a class="fa fa-linkedin linkedin " href="#"></a>
                        </li>
                        <li>
                           <a class="fa fa-twitter twitter " href="#"></a>
                        </li>
                        <li>
                           <a class="fa fa-instagram instagram " href="#"></a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                     <p class="copt-rigth">  &copy;2020 <span class="color-red">MSW</span>. All Rights Reserved. </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
        <div id="loader">
            <img src="<?= asset_url(); ?>img/tlogo.png" alt="SCAD" />
        </div>
	    
        <script>
            $(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
	    <script type="text/javascript">	  
            $(document).ready(function() {
                $('#loader').fadeOut(1000);
                $(function() {
                  $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                      var target = $(this.hash);
                      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                      if (target.length) {
                        $('html, body').animate({
                          scrollTop: target.offset().top
                        }, 1000);
                        return false;
                      }
                    }
                  });
                });
            });
		    $(document).ready(function() {
		      $(".owl-custom").owlCarousel({
		     
		          navigation : false,
                  pagination:true,
		          slideSpeed : 300,
		          navigationText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
		          paginationSpeed : 400,
		          singleItem:true,
		          autoPlay:true,
		     
		      	});
		    });
	    </script>
	</body>
</html>
