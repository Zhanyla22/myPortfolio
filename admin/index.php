<?php
require('../include/db.php');
if(!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href = 'login.php'</script>";
}
$query = "SELECT * FROM home,section_control,social_media,about";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Админ панель</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>




    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link"  href="../include/logout.php">
          Выйти
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Админ панель</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Жанылай Мамытова</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php?homesetting=true" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Главная
              </p>
            </a>

          </li>
           <li class="nav-item menu-open">
            <a href="index.php?aboutsetting=true" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Обо мне
              </p>
            </a>

          </li>







        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Меню</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
<?php
 if(isset($_GET['homesetting'])){ ?>
 <div class="card card-primary col-lg-12">
               <div class="card-header">
                 <h3 class="card-title">Обновить данные "Главная"</h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <form role = "form" action = "../include/admin.php" method = "post">
                 <div class="card-body">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Имя</label>
                     <input type="text" name ="title" class="form-control" value = "<?=$user_data['title']?>"  id="exampleInputEmail1" placeholder="Введите имя">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputPassword1">Описание</label>
                     <input type="text" name ="subtitle" class="form-control" value = "<?=$user_data['subtitle']?>" id="exampleInputPassword1" placeholder="Напишите описание">
                   </div>


                 </div>
                 <!-- /.card-body -->

                 <div class="card-footer">
                   <button type="submit" name="update-home" class="btn btn-primary">Сохранить изменения</button>
                 </div>
               </form>
             </div>
 <?php

}else if(isset($_GET['aboutsetting'])){
?>
 <div class="card card-primary col-lg-12">
               <div class="card-header">
                 <h3 class="card-title">Обновить данные "обо мне"</h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->
               <form role = "form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                 <div class="card-body">
                 <img src="../assets/img/<?=$user_data['profile_pic']?>" class="col-2">
                     <div class="form-group">
                     <label for="exampleInputEmail1">Фото профиля</label>
                     <input type="file" name ="profile" class="form-control">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">Главное описание</label>
                     <input type="text" name ="abouttitle" class="form-control" value = "<?=$user_data['about_title']?>"  id="exampleInputEmail1" placeholder="Введите имя">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputPassword1">суб-Описание</label>
                     <input type="text" name ="aboutsubtitle" class="form-control" value = "<?=$user_data['about_subtitle']?>" id="exampleInputPassword1" placeholder="Напишите описание">
                   </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Последнее описание</label><br>
                      <textarea cols="50" name = "aboutdesc"><?=$user_data['about_desc']?></textarea>
                   </div>


                 </div>
                 <!-- /.card-body -->

                 <div class="card-footer">
                   <button type="submit" name="update-about" class="btn btn-primary">Сохранить изменения</button>
                 </div>
               </form>
             </div>

 <div class="card card-primary col-lg-12">
               <div class="card-header">
                 <h3 class="card-title"> Личная Информация</h3>
               </div>
               <!-- /.card-header -->
               <!-- form start -->

               <div class="card">
                <div class="card-header">
                               <h3 class="card-title">Личная Информация</h3>
                </div>
                             <!-- /.card-header -->
                <div class="card-body p-0">
                               <table class="table">
                                 <thead>
                                   <tr>
                                     <th style="width: 10px">#</th>
                                     <th>Поле</th>
                                     <th>Значение</th>

                                     <th style="width: 40px">Действия</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                 <?php
$q= "SELECT * FROM personal_info";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
?>
     <tr>
                                     <td><?=$c?></td>
                                     <td><?=$pi['label']?></td>
                                     <td><?=$pi['value']?></td>

                                     <td>
                                    <a href="../include/deletepi.php?id=<?=$pi['id']?>">Delete</a>
                                     </td>
                                   </tr>
<?php
$c++;

}

                                 ?>


                                 </tbody>
                               </table>
                             </div>
                             <!-- /.card-body -->
                           </div>



               <form role = "form" action="../include/admin.php" method="post" >
                 <div class="card-body">

                     <div class="form-group col-6">
                     <label for="exampleInputEmail1">Название полей</label>
                     <input type="text" name ="label" class="form-control">
                   </div>
                   <div class="form-group col-6">
                     <label for="exampleInputEmail1">Значение полей</label>
                     <input type="text" name ="value"  class="form-control"  id="exampleInputEmail1">
                   </div>



                 </div>
                 <!-- /.card-body -->

                 <div class="card-footer">
                   <button type="submit" name="add-skill" class="btn btn-primary">Добавить  личную инфо</button>
                 </div>
               </form>
             </div>


              <div class="card card-primary col-lg-12">
                            <div class="card-header">
                              <h3 class="card-title">Навыки</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card">
                             <div class="card-header">
                                            <h3 class="card-title">Навыки</h3>
                             </div>
                                          <!-- /.card-header -->
                             <div class="card-body p-0">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th style="width: 10px">#</th>
                                                  <th>Название навыка</th>
                                                  <th>Уровень навыка</th>
                                                  <th style="width: 40px">Действия</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                              <?php
             $q= "SELECT * FROM skills";
             $r=mysqli_query($db,$q);
             $c =1;
             while($skill=mysqli_fetch_array($r)){
             ?>
                  <tr>
                                                  <td><?=$c?></td>
                                                  <td><?=$skill['skill_name']?></td>
                                                  <td>
                                                    <div class="progress progress-xs">
                                                      <div class="progress-bar progress-bar-danger" style="width: <?=$skill['skill_level']?>%"></div>
                                                    </div>
                                                    <span class="badge bg-danger"><?=$skill['skill_level']?>%</span>
                                                  </td>
                                                  <td>
                                                 <a href="../include/deleteskill.php?id=<?=$skill['id']?>">Delete</a>
                                                  </td>
                                                </tr>
             <?php
             $c++;

             }

                                              ?>


                                              </tbody>
                                            </table>
                                          </div>
                                          <!-- /.card-body -->
                                        </div>



                            <form role = "form" action="../include/admin.php" method="post" >
                              <div class="card-body">

                                  <div class="form-group col-6">
                                  <label for="exampleInputEmail1">Название навыка</label>
                                  <input type="text" name ="skillname" class="form-control">
                                </div>
                                <div class="form-group col-6">
                                  <label for="exampleInputEmail1">Уровень</label>
                                  <input type="range" name ="skilllevel" min="1" max="100" class="form-control"  id="exampleInputEmail1">
                                </div>



                              </div>
                              <!-- /.card-body -->

                              <div class="card-footer">
                                <button type="submit" name="add-skill" class="btn btn-primary">Добавить новые навыки</button>
                              </div>
                            </form>
                          </div>

<?php
}else{
?>

<?php
}
?>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Мамытова Жанылай</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
