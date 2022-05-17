<?php
require('../include/db.php');
if(isset($_POST['update-home'])){
$title =  mysqli_real_escape_string($db,$_POST['title']);
$subtitle = mysqli_real_escape_string($db,$_POST['subtitle']);

$query = "UPDATE home SET ";
$query.="title='$title',";
$query.="subtitle='$subtitle' WHERE id = 1";

$run = mysqli_query($db,$query);
if($run){
echo "<script>window.location.href='../admin/index.php?homesetting=true';</script>";
}

};

if(isset($_POST['update-about'])){


$title =  mysqli_real_escape_string($db,$_POST['abouttitle']);
$subtitle = mysqli_real_escape_string($db,$_POST['aboutsubtitle']);
$desc = mysqli_real_escape_string($db,$_POST['aboutdesc']);
$imagename = time().$_FILES['profile']['name'];
$imgtemp = $_FILES['profile']['tmp_name'];

if($imgtemp==''){
$q = "SELECT * FROM about WHERE 1";
$r = mysqli_query($db,$q);
$d = mysqli_fetch_array($r);
$imagename = $d['profile_pic'];

}
if(move_uploaded_file($imgtemp,"../assets/img/$imagename")){

$query = "UPDATE about SET ";
$query.="about_title='$title',";
$query.="about_subtitle='$subtitle',";
$query.="profile_pic='$imagename', ";

$query.="about_desc='$desc' WHERE id = 1";

$run = mysqli_query($db,$query);
if($run){
echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";
}
}
}

if(isset($_POST['add-skill'])){


$skillname = $_POST['skillname'];
$skilllevel = $_POST['skilllevel'];

$query = "INSERT INTO skills (skill_name, skill_level) VALUES('$skillname','$skilllevel') ";


$run = mysqli_query($db,$query);
if($run){
echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";
}

};

if(isset($_POST['add-pi'])){
$label = $_POST['label'];
$value= $_POST['value'];

$query = "INSERT INTO personal_info (label, value) VALUES('$label','$value') ";


$run = mysqli_query($db,$query);
if($run){
echo "<script>window.location.href='../admin/index.php?aboutsetting=true';</script>";
}

};


?>