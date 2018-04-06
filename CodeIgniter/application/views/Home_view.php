      <?php 
            if($status){
                echo '<div class="alert alert-'.$status['color'].'">'.$status['text'].'</div>';
            }
      ?>
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url('assets/img/prifile_Dev2.png');?>" alt="circle">
        <h1 class="text-uppercase mb-0"><?php echo $profile['Student_Name_Eng']." ".$profile['Student_Lname_Eng'];?></h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Web Developer - Web Design / UI / UX  - Programmer</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/cabin.png');?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/cake.png');?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/circus.png');?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/game.png');?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/safe.png');?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/submarine.png');?>" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">รักในการเขียนเว็ป สนใจงานเกี่ยวกับ Web Developer, Desing UX/UI, Programmer</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">ต้องการเก็บประสบการณ์เพื่อพัฒนาตนเอง สนใจการค้นหาสิ่งใหม่ๆ</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form action="<?php echo site_url('/Portfolio/notifi/');?>" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" name="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" name="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" name="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">ข้อมูลส่วนตัว</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="text-left">ชื่อ-นามสกุล(TH)</td>
                      <td class="text-left"><?php echo $profile['Student_Prefix']."".$profile['Student_Name_Th']." ".$profile['Student_Lname_Th']; ?></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">ชื่อ-นามสกุล(EN)</td>
                      <td class="text-left"><?php echo detect_prefix_en($profile['Student_Prefix'])."".$profile['Student_Name_Eng']." ".$profile['Student_Lname_Eng']; ?></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">วัน/เดือนปี/เกิด</td>
                      <td class="text-left"><?php echo thaiDate($profile['Birthday'],false,false); ?></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">เบอร์โทร</td>
                      <td class="text-left">092-738-1976</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">Email</td>
                      <td class="text-left">santikon12@gmail.com</td>
                    </tr>
                  </tbody>
                </table>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">ประวัติการศึกษา</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="" alt="">
              <table class="table">
                  <tbody>
                    <tr>
                      <td class="text-left">มหาวิทยาลัย(TH)</td>
                      <td class="text-left">มหาวิทยาลัยวิทยาบูรพา</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">มหาวิทยาลัย(EN)</td>
                      <td class="text-left">Burapha University</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">คณะ</td>
                      <td class="text-left">วิทยาการสารสนเทศ</td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">สาขา</td>
                      <td class="text-left"><?php echo $profile['Faculty_Name']; ?></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">GPAX</td>
                      <td class="text-left"><?php echo $profile['GPAX']; ?></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">ปริญาบัตร</td>
                      <td class="text-left"><?php echo $profile['Degree']; ?></td>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td class="text-left">สถานะ</td>
                      <td class="text-left"><font color=“#00CC00”><?php echo $profile['Status_Name']; ?></font></td>
                    </tr>
                  </tbody>
                </table>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">ทักษะคอมพิวเตอร์และอื่นๆ</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="" alt="">
              <ul class="nav nav-tabs" role="tablist">
               <?php foreach($data as $row) { ?>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#<?php echo $row['catarogy_skills']['Catarogy_skill_id'];?>" role="tab" aria-controls="home"><?php echo $row['catarogy_skills']['Catarogy_skill_name'];?></a>
                  </li>
               <?php } ?>
              </ul>
                <div class="tab-content">
                  <?php foreach($data as $row) { ?>                                    
                    <div class="tab-pane" id="<?php echo $row['catarogy_skills']['Catarogy_skill_id'];?>" role="tabpanel">
                                    
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td></td>
                            <td>ทักษะ</td>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach($row['computer_skill'] as $result) {?>
                            <tr>
                              <td class="text-center"><?php echo $i++; ?></td>
                              <td class="text-left"><?php echo $result['Computer_skill_name']; ?></td>   
                            </tr>
                          <?php } ?>  
                        </tbody>                       
                      </table>
                    </div>
                  <?php } ?>
                </div>      
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">เป้าหมายในการทำงาน</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="" alt="">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td></td>
                      <td>ข้อมูล</td>
                    </tr>     
                  </thead>
                  <tbody>
                   <?php $i=1; foreach($working_goal as $row) { ?>
                    <tr>
                      <td class="text-center"><?php echo $i++; ?></td>
                      <td class="text-left"><?php echo $row['Working_goal_name'];?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">งานที่ต้องการ</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="" alt="">
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td class="text-center">เงินเดือน</td>
                    </tr>     
                  </thead>
                  <tbody>
                   <?php $i=1; foreach($salary as $row) { ?>
                    <tr>
                      <td class="text-left"><?php echo $row['Salary_name'];?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <td class="text-center">สายงาน</td>
                    </tr>     
                  </thead>
                  <tbody>
                   <?php $i=1; foreach($work as $row) { ?>
                    <tr>
                      <td class="text-left"><?php echo $row['Work_name'];?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <td class="text-center">พื้นที่ทำงาน</td>
                    </tr>     
                  </thead>
                  <tbody>
                   <?php $i=1; foreach($working_area as $row) { ?>
                    <tr>
                      <td class="text-left"><?php echo $row['Working_area_name'];?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">The TOPGUN's Strengths©</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="" alt="">
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td></td>
                      <td>ข้อมูล</td>
                    </tr>     
                  </thead>
                  <tbody>
                   <?php $i=1; foreach($strengths as $row) { ?>
                    <tr>
                      <td class="text-center"><?php echo $i++; ?></td>
                      <td class="text-left"><?php echo $row['Strengths_name'];?></td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close</a>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
$(document).ready(function(){
    jQuery(".nav-link[href='#1']").click()
});
</script>


    