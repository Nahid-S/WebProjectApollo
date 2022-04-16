<section class="dashboard">
  <div class="welcome_admin" style="  display: flex;
  align-items: center;
  justify-content: space-between;
  background: black;">
    <h1 style="padding:1% 4%;font-size: 34px;color:#fff;width:20%;">Dashboard</h1>
    <div class="welcome_admin_message" style="width: 80%;
  border-radius:30px;
  display:flex;
  align-items:center;
  background-color: white;
  color: #000;
  padding: 20px;
  margin:15px 0px;
  ">
  <h1 style="margin:0px 15px">
  <?php
 $time = date("H");
 /* Set the $timezone variable to become the current timezone */
//  $timezone = date_default_timezone_get();
 /* If the time is less than 1200 hours, show good morning */
 if ($time < "12") {
     echo "Good morning";
 } else
 /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
 if ($time >= "12" && $time < "17") {
     echo "Good afternoon";
 } else
 /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
 if ($time >= "17" && $time < "19") {
     echo "Good evening";
 } else
 /* Finally, show good night if the time is greater than or equal to 1900 hours */
 if ($time >= "19") {
     echo "Good night";
 }
  ?>
  </h1>
    <h1 style="color:black;font-size:35px"><?php echo $_SESSION['username']; ?></h1>
    <h1 style="font-size:35px;margin-left:200px"><?php echo date('M d, Y'); ?></h1>
    </div>
  </div>
      <div class="cover-img">
        <img src="images/promneo.png" alt="school img" />
        <span class="text">
          <!-- <h1>Apollo</h1>
          <p>
            Where information is Free
          </p> -->
        </span>
      </div>
    </section>
    <section class="all-info">
      <div class="row">
        <!-- teacher section start ========== -->
        <div class="col">
          <div id="teacher" class="card">
            <div class="teacher-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="teacherCount"></h1>
                  <p>Teachers</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="far fa-chart-bar"></i>
              </div>
            </div>
            <div class="teacher-footer">
              <a href="assets/teacher.php"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="attendance" class="card">
            <div class="attendance-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="examCount"></h1>
                  <p>Exam</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-user-plus"></i>
              </div>
            </div>
            <div class="attendance-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- teacher section end ========== -->

        <!-- students section start ================== -->
        <div class="col">
          <div id="students" class="card">
            <div class="students-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="student_count"></h1>
                  <p>Students</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-chart-pie"></i>
              </div>
            </div>
            <div class="students-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="accountants" class="card">
            <div class="accountants-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="hostelCount"></h1>
                  <p>Hostel</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="far fa-chart-bar"></i>
              </div>
            </div>
            <div class="accountants-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- students section end ============= -->

        <!-- parents section start =================== -->
        <div class="col">
          <div id="parents" class="card">
            <div class="parents-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="parentCount"></h1>
                  <p>Parents</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-shopping-bag"></i>
              </div>
            </div>
            <div class="parents-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="stuff" class="card">
            <div class="stuff-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="transportCount"></h1>
                  <p>Transport</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-chart-pie"></i>
              </div>
            </div>
            <div class="stuff-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- parents section end =================== -->
        <!-- librarian section start =================== -->
        <div class="col">
          <div id="librarian" class="card">
            <div class="librarian-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="libraryCount"></h1>
                  <p>Library</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-chart-pie"></i>
              </div>
            </div>
            <div class="librarian-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
          </div>
          <div id="notice" class="card">
            <div class="notice-inner">
              <div class="column column-left">
                <div class="column-left-inner">
                  <h1 id="ShowNoticesCount"></h1>
                  <p>Notice</p>
                </div>
              </div>
              <div class="column column-right">
                <i class="fas fa-shopping-bag"></i>
              </div>
            </div>
            <div class="parents-footer">
              <a href="#"
                >More info <i class="fas fa-angle-double-right"></i
              ></a>
            </div>
            <!-- librarian section end =================== -->
          </div>
        </div>
      </div>
    </section>
    