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
                         <h4>My Projects</h4>
                       </div>
                       <div class="dashboard-porjects">
                         <table class="table table-borded table-stripted">
                           <tr>
                              <th>Sno</th>
                             <th>Date</th>
                             <th>Project Name</th>
                             <th>Progress</th>
                             <th>Action</th>
                           </tr>
                           <tr>
                              <td>1.</td>
                             <td>
                               19-11-2016
                             </td>
                             <td>
                               SCAD
                             </td>
                             <td>
                               <div class="progrss-stat">
                                <ul> <li><span class="active" data-toggle="tooltip" title="Wireframes">1</span></li> <li><span class="active" data-toggle="tooltip" title="Design">2</span></li> <li><span class="active" data-toggle="tooltip" title="Development">3</span></li>  <li><span data-toggle="tooltip" class="active" title="Finalizing Project">4</span></li></ul> 
                                 <p> <b>Completed</b> </p>
                               </div>
                             </td>
                             <td>
                               <a href="<?= base_url();?>welcome/clientProjectDetails" class="btn-scad">View</a>
                             </td>
                           </tr>
                           <tr>
                              <td>2.</td>
                             <td>
                               19-11-2016
                             </td>
                             <td>
                               SCAD
                             </td>
                             <td>
                               <div class="progrss-stat">
                                <ul> <li><span class="active" data-toggle="tooltip" title="Wireframes">1</span></li> <li><span class="active" data-toggle="tooltip" title="Design">2</span></li> <li><span data-toggle="tooltip" title="Development">3</span></li>  <li><span data-toggle="tooltip" title="Finalizing Project">4</span></li></ul> 
                                 <p>2. Design</p>
                                 <div class="bar-progress">
                                   <div class="progress skill-bar">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            <span class="skill"><i class="val">80%</i></span>
                                        </div>
                                    </div>
                                 </div>
                               </div>
                             </td>
                             <td>
                               <a href="<?= base_url();?>welcome/clientProjectDetails" class="btn-scad">View</a>
                             </td>
                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
           </div>
       </section>
        
        <script>
            $(document).ready(function() {
               $('[data-toggle="tooltip"]').tooltip(); 
              $('.progress .progress-bar').css("width",
                        function() {
                            return $(this).attr("aria-valuenow") + "%";
                        }
                )
            });
        </script>