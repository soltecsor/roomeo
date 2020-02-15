@extends('welcome')

@section('content')
<?php include_once(app_path().'inc/header.php'); ?>

	<?php require_once(app_path().'view/banner.php'); ?>
	<?php require_once(app_path().'view/services.php'); ?>
	<?php require_once(app_path().'view/rooms.php'); ?>
	<?php require_once(app_path().'view/about.php'); ?>
	<?php require_once(app_path().'view/feedbacks.php'); ?>
	<?php require_once(app_path().'view/news.php'); ?>

<?php include_once(app_path().'inc/footer.php') ?>
@endsection