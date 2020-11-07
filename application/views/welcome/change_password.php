<section class="our-contact">
           <div class="container">
               <div class="dashboard">
                 <div class="row">
                   <div class="col-md-3 col-sm-3 col-xs-12">
                     <div class="head-dashboard">
                       <h4><a href="dashboard.html">Dashboard</a></h4>
                     </div>
                     <div class="list-part-dashboard box-shadow">
                       <ul>
                         <li><a href="<?= base_url();?>welcome/changePassword">Account Settings</a></li>
                         <li><a href="<?= base_url();?>welcome/clientProject">My Projects</a></li>
                         <li><a href="<?= base_url();?>welcome/logout">Sign out</a></li>
                       </ul>
                     </div>
                   </div>
                   <div class="col-md-9 col-sm-9 col-xs-12">
                     <div class="main-content-scad box-shadow">
                       <div class="head-dashboard-main">
                         <h4>Change Password</h4>
                       </div>
                       <div class="dashboard-porjects">
                         <div class="col-md-6 col-sm-6 col-xs-12 ">
                             <form>
                               <div class="form-group"> 
                                 <input type="password" placeholder="Old Password*" name="" class="form-control" />
                               </div>
                               <div class="form-group"> 
                                 <input type="password" placeholder="New Password*" name="" class="form-control" />
                               </div>
                               <div class="form-group"> 
                                 <input type="password" placeholder="Confirm Password*" name="" class="form-control" />
                               </div>
                               <div class="form-group"> 
                                 <input type="submit" name="" class="btn-scad" value="Submit"  />
                               </div>
                             </form>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
           </div>
       </section>