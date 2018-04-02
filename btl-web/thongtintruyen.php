<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>beetruyen</title>
</head>
<body>
	 <?php 
	 	include 'header.php';
	  ?>
	 <style>
	 	h2{
	 		text-align: center;
	 	}
	 	ul li p{
	 		text-align: left;
	 		font-size: 23px;
	 		line-height: 3;
	 	}
		button ul {
			padding: 10px 50px;
			font-size: 50px;
		}
		ol{
			font-size: 20px;
		}
		ol li a{
			font-size: 20px;
        }

	 </style>
	<div class="container">
	<div class="row">
      <div class="col-sm-3" style="background-color:lavender;">
        <h3 class="title-detail">Đấu phá khương trung</h3>
         <img class="img" src="img/dau-pha-thuong-khung.jpg" alt="ảnh" width="278" height="345"> 
      </div>
      <div class="col-sm-9" style="background-color: white">
        <h2 class="title-detail">Đấu phá khương trung</h2>
       	<ul>
			<li>
				<p>Tác giả		:      Đang cập nhập</p>
			</li>
			<li>
				<p>Tình trạng	:  Đang tiến hành</p>
			</li>
        	<li>
        		<p>Thể loại   :  </i><a href='action'> Action</a> - <a href='fantasy'>Fantasy</a> - <a href='webtoon'>Webtoon</a>
        		</p>
        	</li>
		</ul>
		<div class="button">
			<ul>
			<button type="button" class="btn btn-primary btn-md">Đọc từ đầu </button> 
			<button type="button" class="btn btn-primary btn-md">Đọc mới nhất</button> 
			</ul>
        </div>
    </div>
	</div>
	<div class="container"><!--Danh sách chương-->
		<div class="danh-sach-chuong">
		<h2>Danh sách chương</h2>
			<ol type="1">
				<li><a href="trangtruyen.php">Chapter 1</a></li>
				<li><a href="trangtruyen.php">Chapter 2</a></li>
				<li><a href="trangtruyen.php">Chapter 3</a></li>
				<li><a href="trangtruyen.php">Chapter 4</a></li>
				<li><a href="trangtruyen.php">Chapter 5</a></li>
				<li><a href="trangtruyen.php">Chapter 6</a></li>
				<li><a href="trangtruyen.php">Chapter 7</a></li>
				<li><a href="trangtruyen.php">Chapter 8</a></li>
				<li><a href="trangtruyen.php">Chapter 9</a></li>
				<li><a href="trangtruyen.php">Chapter 10</a></li>
				<li><a href="trangtruyen.php">Chapter 11</a></li>
				<li><a href="trangtruyen.php">Chapter 12</a></li>
				<li><a href="trangtruyen.php">Chapter 13</a></li>
				<li><a href="trangtruyen.php">Chapter 14</a></li>
				<li><a href="trangtruyen.php">Chapter 15</a></li>
				<li><a href="trangtruyen.php">Chapter 16</a></li>
				<li><a href="trangtruyen.php">Chapter 17</a></li>
				<li><a href="trangtruyen.php">Chapter 18</a></li>
				<li><a href="trangtruyen.php">Chapter 19</a></li>
				<li><a href="trangtruyen.php">Chapter 20</a></li>
				<li><a href="trangtruyen.php">Chapter 21</a></li>
				<li><a href="trangtruyen.php">Chapter 22</a></li>
				<li><a href="trangtruyen.php">Chapter 23</a></li>
				<li><a href="trangtruyen.php">Chapter 24</a></li>
				<li><a href="trangtruyen.php">Chapter 25</a></li>
				<li><a href="trangtruyen.php">Chapter 26</a></li>
				<li><a href="trangtruyen.php">Chapter 27</a></li>
				<li><a href="trangtruyen.php">Chapter 28</a></li>
				<li><a href="trangtruyen.php">Chapter 29</a></li>
				<li><a href="trangtruyen.php">Chapter 30</a></li>
				<li><a href="trangtruyen.php">Chapter 31</a></li>
				<li><a href="trangtruyen.php">Chapter 32</a></li>
				<li><a href="trangtruyen.php">Chapter 33</a></li>
				<li><a href="trangtruyen.php">Chapter 34</a></li>
				<li><a href="trangtruyen.php">Chapter 35</a></li>
				<li><a href="trangtruyen.php">Chapter 36</a></li>
				</ol>
			</ol>
		<ul class="pagination">
		  <li class="active"><a href="trangtruyen.php">1</a></li>
		  <li><a href="trangtruyen.php">2</a></li>
		  <li><a href="trangtruyen.php">3</a></li>
		  <li><a href="trangtruyen.php">4</a></li>
		  <li><a href="trangtruyen.php">5</a></li>
		  <li><a href="trangtruyen.php">></a></li>
		</ul>
		</div>
	</div>
	</div>
	<?php 
  	include 'bot.php' 
  	?>
</body>
</html>