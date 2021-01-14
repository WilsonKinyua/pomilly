<?php 

  include "includes/header.php";
  include "../config/database.php";

  $username_err = $phone_err = $email_err  =  $mobile_err = $cpass_err = $pass_err = '';
  $valid = true;

  if(isset($_POST['create_user'])) {

    $phone      = trim($_POST['phone']);
    $email      = trim($_POST['email']);
    $username   = trim($_POST['username']);
    $password   = trim($_POST['password']);
    $cpassword  = trim($_POST['c_password']);

    if(!is_numeric($phone)){
      $mobile_err = "Please valid mobile number.";
      $valid = false;
    }

    if(strlen($phone) < 10){
      $mobile_err = "Phone number must have atleast 10 characters.";
      $valid = false;
    }

    if(empty($username)) {

      $username_err = "Please enter a unique username.";
      $valid = false;
      
    }
  
    if(empty($email)) {

      $email_err = "Please enter a valid email.";
      $valid = false;
      
    }

    $res = $conn->query("SELECT id FROM users WHERE username='$username' ") or die($conn->error);
    if(mysqli_num_rows($res) >= 1){
      $username_err = "Username is already taken.";
      $valid = false;
    }
  
    if(empty($password)){
      $pass_err = "Please enter a strong password.";
      $valid = false;
    }

    if(strlen($password) < 6){
      $pass_err = "Password must have atleast 6 characters.";
      $valid = false;
    }

    if(empty($cpassword)){
      $cpass_err = "Please confirm your password.";
      $valid = false;
    }else{
      if($password != $cpassword){
        $cpass_err = 'Password did not match.';
        $valid = false;
      }
    }

    if ($valid) {
      $password = md5($password);
      $conn->query("INSERT INTO `users`(`username`, `phone`, `password`, `email`) VALUES ('$username','$phone','$password','$email') ") or die($conn->error);
      setcookie("success_user", true, time()+3);
      header('location: users_list');
    }

  }

  if (isset($_GET['user_delete'])) {
    $id = $_GET['user_delete'];
    $conn->query("DELETE FROM users WHERE id='$id' ") or die($conn->error);
    header('location: users_list');
  }


?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="users_list">
                  <i class=" mdi mdi-account menu-icon"></i>
                  <span class="menu-title">Users</span>
              </a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="contact">
                  <i class=" mdi mdi-home menu-icon"></i>
                  <span class="menu-title">Contact Page</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Contact Messages</h4>
                  <p class="card-description">
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $results = $conn->query("SELECT * FROM users") or die($conn->error);

                        while($row = $results->fetch_assoc()) :

                          ?>
                          <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                           <td>
                             <a href="users_list.php?user_delete=<?php echo $row['id']; ?>" class="btn m-2 btn-xs btn-danger delete_user_button"><i class="fas fa-trash-alt"></i> Delete</button>
                             <a style="color: white;" class="btn m-2 btn-xs btn-secondary"><i class="fas fa-pen-alt"></i>Update</button>
                             <!-- user_update.php?user=<?php //echo $row['id']; ?> -->
                           </td>
                         </tr>

                       <?php endwhile; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
        </div>
        <!-- content-wrapper ends -->
        <?php include "includes/footer.php"; ?>