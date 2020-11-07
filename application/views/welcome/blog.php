<?php //echo '<pre>'; print_r($data);die; ?>

<section class="blog-posts">
        <div class="container-fluid">
          <div class="head-section text-center">
               <h2>Blog</h2>
            </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="blog-recent">
                <h3>Recent Posts</h3>
                <ul>
                  <li>
                    <h4>Lucient</h4>
                    <span class="date-custom">Jan 29, 2020</span>
                  </li>
                </ul>
            </div>
         <!--    <div class="tags-recent">
                <h3>Tags</h3>
                <ul >
                  <li>
                    <a href="#">Lorem</a>
                  </li>
                  <li>
                    <a href="#">Lorem</a>
                  </li>
                  <li>
                    <a href="#">Lorem</a>
                  </li>
                  <li>
                    <a href="#">Lorem</a>
                  </li>
                </ul>
            </div> -->
            <div class="categories-recent">
              <h3>Categories</h3>
              <ul>
                <li>
                  <a href="<?php base_url(); ?>services">ERP</a>
                </li>
                <li>
                  <a href="<?php base_url(); ?>services">CRM</a>
                </li>
                <li>
                  <a href="<?php base_url(); ?>services">Hybrid</a>
                </li>
                <li>
                  <a href="<?php base_url(); ?>services">Website</a>
                </li>
                <li>
                  <a href="<?php base_url(); ?>services">CMS</a>
                </li>
                <li>
                  <a href="<?php base_url(); ?>services">Clouds</a>
                </li>
                <li>
                  <a href="<?php base_url(); ?>services">Android</a>
                </li>
                 <li>
                  <a href="<?php base_url(); ?>services">E-commerce</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-xs-12">
            <div class="list-blogs">
              <div class="image-blog">
                <img src="<?= asset_url(); ?>img/b1.jpg" alt="Blog Image" class="img-responsive" />
                <div class="tags-react">
                 <!--  <ul>
                    <li><a href="#">Lipsum</a></li>
                    <li><a href="#">Lipsum</a></li>
                  </ul> -->
                </div>
              </div>
              <div class="image-blog-text blog-detail">
                <div class="date-comments">
                  <span class="author">By Lucient</span>
                  <span class="date-author">Jan 29, 2020</span>
                  <span class="comment-revew"><i class="fa fa-comment-o"></i> 2</span>
                </div>
                <div class="readnore-social">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="row">
                      <ul class="social">
                        <li>
                           <a class="fa fa-facebook facebook " href="#"></a>
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
                  </div>
                </div>
                <h3>Lucient</h3>
                <p>This is a really cool software company. A few years ago I changed my diet to the paleo way and things have been great. And I’ve always tried to live actively to keep in shape. MINDBODY provides business management software for gyms, spas and similar businesses.

With their blog, they provide great information about how their specific clients can take advantage of the latest trends. They feature the work their clients are doing and they share insight from within the company. It’s regularly updated and it seems like a must-read for those in this industry.</p>
                <div class="image-blog">
                  <img src="<?= asset_url(); ?>img/bg-4.jpg" alt="Blog Image" class="img-responsive" />
                </div>
                <p>MSW provides software that helps businesses grow. There isn’t much to say beyond that. If you help your clients live a great life or in the case of enterprise – grow – then you’re going to find demand.

Spigit posts about 1-2 posts per month. They share company news and also share some insight into recent industry trends. They’ll share their tips and experience that can help their clients.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-comment">
                  <h3>Leave Your Comment</h3>
                  <form method="post" action="">
                    <div class="form-group">
                      <input type="text" placeholder="Name" name="name" class="form-control" required="true" />
                    </div>
                    <div class="form-group">
                      <input type="text" placeholder="Subject" name="subject" class="form-control" required="true" />
                    </div>
                    <div class="form-group">
                      <input type="text" placeholder="Email" name="email" class="form-control" required="true" />
                    </div>
                    <div class="form-group">
                      <textarea type="text" placeholder="Message" name="message" class="form-control" required="true" /></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn-scad" value="Submit" name="submit" />
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="comment-s">
                  <h3>Reply</h3>
                  <ul>
                    <li>
                      <?php foreach ($data as $key => $reply) { ?>
                      <div class="comment-head">
                        <h4><?php echo $reply->name; ?></h4>
                        <h5><?php echo $reply->subject; ?></h5>
                        <p><?php echo $reply->created; ?></p>
                      </div>
                      <div class="comment-section">
                        <p><?php echo $reply->text; ?></p>
                      </div>
                    <?php } ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      