
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src='js/jquery-1.10.1.js'></script>
	<script src='js/bootstrap-sortable.js'></script>
	<link href="js/bootstrap-sortable.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Taviraj|Mitr|Pridi|Prompt|Kanit|Trirong|Maitree|Athiti" rel="stylesheet" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การรับนักเรียน/บุคคล เข้าศึกษาต่อระดับปริญญาตรี ประจำปีการศึกษา 2568</title>
<style type="text/css">
	.mover:hover{
		background-color: #f8edfc;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(".panel-heading").parent('.panel').hover(
			function() {
				$(this).children('.collapse').collapse('show');
			}, function() {
				$(this).children('.collapse').collapse('hide');
			}
			);

		
		$('#m33').click(function() {
			$('#kumnodkan').hide();
			$('#introfac').hide();
		//$('#subject').hide();
		//$('#contact').hide();
			$('#download').show();
		});


		$('#m3').click(function() {
			$('#kumnodkan').show();
			$('#introfac').hide();
		//$('#subject').hide();
		//$('#contact').hide();
			$('#download').hide();
		});

		$('#m5').click(function() {
		//$('#subject').show();
			$('#kumnodkan').hide();
		//$('#contact').hide();
			$('#introfac').hide();
			$('#download').hide();
		});


		$('#mcontact').click(function() {
			$('#kumnodkan').hide();
		//$('#subject').hide();
		//$('#contact').show();
			$('#introfac').hide();
			$('#download').hide();
		});
	});
</script>
</head>

<body>
	<style>
  @media screen and (min-width: 601px) {
    .title-header {
      /*font-size: 18px;*/
    }
    .img-res{
      width: 200px;
    }
    .img-contact{
      width: 50px;
    }
  }
  @media screen and (max-width: 1000px) {
    .title-header {
      font-size: 14px;
    }
    .ht{
      text-align: center;
      margin-top:15px;
    }
    .img-res{
      width: 130px;
    }
    .img-contact{
      width: 30px;
    }
  }
  .hvr-grow {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: transform;
    transition-property: transform;
  }
  .hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
    -webkit-transform: scale(1.10);
    transform: scale(1.10);
  }

  body a{
    text-decoration: none;
  }
  body { font-family: Kanit;  }
  body h2 { font-family:Kanit; font-weight:bold; }
  body h3, h4 { font-family:Kanit;  }
</style>

<div class="container-fluid p-4 shadow mb-4" style="background-color:#3B3561;">
 <div class="container" style="background-color:#3B3561;">
   <div class="row">
     <div class="col-md-2 text-center">
       <a href="https://admission.reg.cmu.ac.th/index.php"><img src = "https://admission.reg.cmu.ac.th/tcas/images/LOGO-02.png" class="img-res" /></a>
     </div>
     <div class="col ht">
      <h2 style="color:#FFFFFF;">มหาวิทยาลัยเชียงใหม่</h2>
      <h4 style="color:#FFFF00;" class="title-header">การรับสมัครคัดเลือกบุคคล เข้าศึกษาต่อระดับปริญญาตรี ปีการศึกษา 2568<br />Undergraduate Admission for the Academic Year 2025</h4>
    </div>
  </div>
</div>
</div>



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F22LSY6CYE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-F22LSY6CYE');
</script>	<!--body -->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group" style="font-size:20px; font-weight:bold;">
					<a href="#" class="list-group-item fs-3" style="background-color: #9067C6; color:#FFFFFF">
						เมนูรับสมัคร
					</a>
					<a href="apply.php" class="list-group-item mover" style="color:#060;"><span class="fa fa-user-plus"></span> คลิกที่นี่...<br />&nbsp;&nbsp;&nbsp;&nbsp;เพื่อสมัคร TCAS</a>
					<a href="findfaculty.php" class="list-group-item mover" style="color:#060; background-color:#F0FEC0;"><span class="fa fa-podcast"></span> ค้นหาคณะสาขาวิชา<br />&nbsp;&nbsp;&nbsp;ที่เปิดรับสมัคร</a>
					<a href="../ipas/" class="list-group-item mover" style="color:#060;" target="_blank"><span class="fa fa-language"></span> Application for<br />&nbsp;&nbsp;&nbsp;Admission CMU-IPAS</a>
				</div>

				<div class="panel-group mt-2" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingOne" style="background-color: #9067C6; color:#FFFFFF">
							<h4 class="panel-title fs-5 p-2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
								ข้อมูลสำหรับผู้สมัคร/ผู้สนใจ
							</a>
						</h4>
					</div>
					<div>

						<div class="panel-body">
							<a href="Tcas-คืออะไร.png" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> TCAS คืออะไร</a>
							<!--<a href="?page=introfac" class="list-group-item" id="m6"><span class="fa fa-arrow-circle-o-down"></span> ข้อมูลแนะนำคณะ/วิทยาลัย/สาขาวิชา</a>-->
							<a href="app.php?page=subject" class="list-group-item" id="m5"><span class="fa fa-arrow-circle-o-down"></span> วิชาที่ใช้คัดเลือก</a>
							<a href="files_download/fee_67_09102566.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> ค่าธรรมเนียมการศึกษา สำหรับนักศึกษาระดับปริญญาตรี มหาวิทยาลัยเชียงใหม่</a><!--<br /><span class='text-danger'>อยู่ระหว่างการปรับปรุงค่าธรรมเนียมฯ</span>files_download/fee_2566_09Jan2022.pdf-->
							<a href="app.php?page=faculty" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> แนะนำคณะต่าง ๆ<br>โดยสำนักพัฒนาคุณภาพการศึกษา มหาวิทยาลัยเชียงใหม่</a>
							<a href="app.php?page=contact" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> ติดต่อสอบถามคณะต่าง ๆ</a>
                  <!--
                   <a href="school/" class="list-group-item" style="color:#060;"><span class="glyphicon glyphicon-flag"></span> คลิกที่นี่...<span style="color:#FF0000;">สำหรับครูโรงเรียน</span>จัดการข้อมูลการสมัคร TCAS รอบที่ 2 </a>
                  <a href="apply.php?page=login" class="list-group-item" style="color:#060;"><span class="glyphicon glyphicon-bullhorn"></span> ล็อกอินเข้าสู่ระบบรับสมัคร</a>
              -->
          </div>
      </div>
  </div>

  <div class="panel border border-warning">
  	<div class="panel-heading" role="tab" id="headingTwo" style="background-color: #9067C6; color:#FFFFFF">
  		<h4 class="panel-title collapsed fs-5 p-2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseTwo">คะแนนสูง-ต่ำ ของการสอบในระบบ TCAS รอบที่ 2 (โควตาภาคเหนือ)	</h4>
  	</div>

  	<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
  		<div class="panel-body">
  			<!-- <a href="files_download/Top_Low_Quota61.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2561</a>
  			<a href="files_download/Top_Low_Quota62.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2562</a>
  			<a href="files_download/Top_Low_Quota63_new.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2563</a>
  		-->
  		<a href="files_download/Top_Low_Quota64.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2564</a>
  		<a href="files_download/Top_Low_Quota65.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2565</a>
  		<a href="files_download/Top_Low_Quota66.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2566</a>
  		<a href="files_download/Top_Low_Quota67.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2567</a>

  	</div>
  </div>
</div>

<div class="panel border border-warning">
	<div class="panel-heading" role="tab" id="headingTwo" style="background-color: #9067C6; color:#FFFFFF">
		<h4 class="panel-title collapsed fs-5 p-2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseTwo" style="font-size:20px;">คะแนนสูง-ต่ำ ของการสอบในระบบ TCAS รอบที่ 3	</h4>
	</div>

	<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		<a href="max-min-score/16151504384864_TCAS64-R3-maxmin-v04-2Jun21.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2564</a>
		<a href="max-min-score/16151503334767_TCAS65-R3-maxmin-23may65.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2565</a>
		<a href="max-min-score/16151503334767_TCAS66-R3-maxmin-03oct66.pdf" target="_blank" class="list-group-item"><span class="fa fa-arrow-circle-o-down"></span> คะแนนสูง-ต่ำปี 2566</a>

	</div>
</div>

  <!-- <div class="panel border border-warning">
  	<div class="panel-heading" role="tab" id="headingThree" style="background-color: #9067C6;">
  		<h4 class="panel-title collapsed fs-5 p-2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseThree">
  			คะแนนสูง-ต่ำ ของการสอบในระบบโควตาภาคเหนือ ก่อนระบบ TCAS
  		</h4>
  	</div>
  	<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
  		<a href="score_history.php?yy=60" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> คะแนนสูง-ต่ำปี 2560</a>
  		<a href="score_history.php?yy=59" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> คะแนนสูง-ต่ำปี 2559</a>
  		<a href="score_history.php?yy=58" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> คะแนนสูง-ต่ำปี 2558</a>
  		<a href="score_history.php?yy=57" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> คะแนนสูง-ต่ำปี 2557</a>
  		<a href="score_history.php?yy=56" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> คะแนนสูง-ต่ำปี 2556</a>
  	</div>
  </div>
-->
<div class="panel border border-warning">
	<div class="panel-heading" role="tab" id="headingFour" style="background-color: #9067C6; color:#FFFFFF">
		<h4 class="panel-title collapsed fs-5 p-2" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFour">ลิงก์หน่วยงานที่เกี่ยวข้อง</h4>
	</div>
	<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
		<a href="https://www.cmu.ac.th/th/faculty/aboutus" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> คณะ/วิทยาลัย ในมหาวิทยาลัยเชียงใหม่</a>
		<a href="https://itsc.cmu.ac.th/" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> สำนักบริการเทคโนโลยีสารสนเทศ (ITSC)</a>
		<a href="http://sdd.oop.cmu.ac.th/" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> กองทุนกู้ยืมเพื่อการศึกษา (กยศ.) มหาวิทยาลัยเชียงใหม่</a>
		<a href="http://sdd.oop.cmu.ac.th/" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> งานทุนการศึกษาและบริการ มหาวิทยาลัยเชียงใหม่</a>
		<a href="https://udo.oop.cmu.ac.th/" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> สำนักงานหอพักนักศึกษา มหาวิทยาลัยเชียงใหม่</a>
		<a href="http://www.cupt.net/" target="_blank" class="list-group-item"><i class="fa fa-arrow-circle-o-down"></i> ที่ประชุมอธิการบดีแห่งประเทศไทย (ทปอ.)</a>
	</div>
</div>

<div class="panel">
	<div class="panel-heading" role="tab" id="headingFive" style="background-color: #9067C6; color:#FFFFFF">
		<h4 class="panel-title collapsed p-3 fs-5" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseFive">
			เมนูสำหรับเจ้าหน้าที่
		</h4>
	</div>
	<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
		<a href="faculty/" target="_blank" class="list-group-item"><span class="fa fa-user-circle"></span> &nbsp;สำหรับเจ้าหน้าที่คณะ</a>
				<!-- <a href="faculty_info/" target="_blank" class="list-group-item" style="font-family:Mitr;"><span class="fa fa-user-circle"></span> &nbsp;สำหรับแนะนำคณะ</a> -->
		<a href="school/" class="list-group-item" style="color:#060;"><span class="fa fa-flag"></span> คลิกที่นี่...<span style="color:#FF0000;">สำหรับครูโรงเรียน</span></a>
	</div>
</div>

</div><!-- close div collapse ทั้งหมด-->

</div>

<div class="col-md-9">
	<!-- <h4 class='text-center shadow p-2 mb-4 rounded bg-warning'>
		ประกาศผลการคัดเลือก TCAS รอบที่ 2 โควตา Quota ระดับปริญญาตรี ปีการศึกษา 2567<br />เริ่มตั้งแต่วันที่ 30 เมษายน 2567 เวลา 09:00 น. เป็นต้นไป<br />
		<a href='https://quota.reg.cmu.ac.th/' target='_blank' class="text-white">https://quota.reg.cmu.ac.th/</a>
		<br />
		<a href="https://quota2.reg.cmu.ac.th/" target="_blank" class="text-white">https://quota2.reg.cmu.ac.th/</a>
		<br />
		<a href="https://admission.reg.cmu.ac.th/apply.php?page=login" target="_blank" class="text-white">https://admission.reg.cmu.ac.th/apply.php?page=login</a>
	</h4>  -->
	

		




	<div id="download">
				<a href="https://www1.reg.cmu.ac.th/pr-admission/" target="_blank"><img src="images/news_banner_faculty_recive.png" style="width:100%;" /></a>
		<div class="fs-4 shadow p-2 mb-4 rounded" style="background-color:#fbab1e; color:#000000;"><i class="fa fa-address-card-o"></i> การรับสมัครคัดเลือกบุคคลเข้าศึกษา</div>
		<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Taviraj|Mitr|Pridi|Prompt|Kanit|Trirong|Maitree|Athiti" rel="stylesheet" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 -->
<style type="text/css">
	body {
		font-family: Kanit;
	}
	*{
		margin: 0;
		padding: 0;
		list-style: none;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.wrapper{
		height: 100%;
		background: #fff;
		margin: 15px auto 0;
	}

	.wrapper .tabs_wrap{
		padding: 10px;
		border-bottom: 1px solid #ebedec;
	}

	.wrapper .tabs_wrap ul{
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
	}

	.wrapper .tabs_wrap ul li{
		width: 210px;
		text-align: center;
		background: #F8F7FA;
		border-right: 1px solid #c1c4c9;
		padding: 13px;
		cursor: pointer;
		-webkit-transition: all 0.2s ease;
		-o-transition: all 0.2s ease;
		transition: all 0.2s ease;
	}

	.wrapper .tabs_wrap ul li:first-child{
		border-top-left-radius: 25px;
		border-bottom-left-radius: 25px;
	}

	.wrapper .tabs_wrap ul li:last-child{
		border-right: 0px;
		border-top-right-radius: 25px;
		border-bottom-right-radius: 25px;
	}

	.wrapper .tabs_wrap ul li:hover,
	.wrapper .tabs_wrap ul li.active{
		background: #BDA7DB;
		color: #fff;
	}

	.wrapper .container .item_wrap{
		padding: 10px 20px;
		border-bottom: 1px solid #ebedec;
		cursor: pointer;
	}

	.wrapper .container .item_wrap:hover{
		background: #e9ecf1;
	}

	.wrapper .container .item{
		position: relative;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: justify;
		-ms-flex-pack: justify;
		justify-content: space-between;
	}

	.item_wrap .item .item_left{
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
	}

	.item_wrap .item_left img{
		width: 70px;
		height: 70px;
		display: block;
	}

	.item_wrap .item_left .data{
		margin-left: 20px;
	}

	.item_wrap .item_left .data .name{
		font-weight: 600;
	}

	.item_wrap .item_left .data .distance{
		color: #7f8b9b;
		font-size: 14px;
		margin-top: 3px;
	}

	.item_wrap .item_right .status{
		position: relative;
		color: #77818d;
	}
	.item_wrap .item_right .status:before{
		content: "";
		position: absolute;
		top: 5px;
		left: -12px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: #b3bbc8;
	}
	.item_wrap.offline .item_right .status{
		color: #b3bbc8;	
	}
	.item_wrap.online .item_right .status:before{
		background: #7fc469;
	}
	ol,ul { padding-left: 0rem;}
</style>

<div class="wrapper">
	<div class="tabs_wrap">
		<ul>
								<li data-tabs="round1" class="active fs-5"><i class='fa fa-child fa-lg'></i> TCAS รอบที่ 1<p style="color: #F00;" class="fs-6">สมัคร 5-14 พ.ย. 67</p></li>
									<li data-tabs="round2" class=" fs-5"><i class='fa fa-child fa-lg'></i> TCAS รอบที่ 2<p style="color: #F00;" class="fs-6">สมัคร 18-27 ก.พ. 68</p></li>
									<li data-tabs="round3" class=" fs-5"><i class='fa fa-child fa-lg'></i> TCAS รอบที่ 3<p style="color: #F00;" class="fs-6">สมัคร 6-12 พ.ค. 68</p></li>
									<li data-tabs="round4" class=" fs-5"><i class='fa fa-child fa-lg'></i> TCAS รอบที่ 4<p style="color: #F00;" class="fs-6">โปรดติดตามอีกครั้ง</p></li>
									<li data-tabs="round7" class=" fs-5"><i class='fa fa-child fa-lg'></i> อื่น ๆ<p style="color: #F00;" class="fs-6"> - </p></li>
							</ul>
		</div>

		<ul>
						<li class="item_wrap round1 online" style="display: ;">
									<h4 class="fs-3 text-success mt-3 mb-2">TCAS รอบที่ 1</h4>
				
								<div class="row">
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศ/ข่าวประชาสัมพันธ์</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/6d7114097de90b2d78bd87fefff22105.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การเลื่อนกำหนดวันสอบสัมภาษณ์เฉพาะผู้ที่ได้รับผลกระทบ จากการประกาศเลื่อนสอบ TGAT/TPAT 2-5 ในจังหวัดภาคใต้ตอนล่าง   TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio  ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="https://admission.reg.cmu.ac.th/tcas/apply.php?page=login" target="_blank" style="color:#0000FF;"> ประกาศรายชื่อผู้มีสิทธิ์เข้าสอบสัมภาษณ์ TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio ระดับปริญญาตรี ปีการศึกษา 2568 (เข้าดูผลโดยการล็อกอินเข้าสู่ระบบรับสมัคร) </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="https://cmu.to/ManualTCAS168" target="_blank" style="color:#0000FF;"> คู่มือการรับสมัคร TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio ระดับปริญญาตรี ปีการศึกษา 2568 </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/9d2494b6390050424b14ded2324020ca.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่องการรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio ระดับปริญญาตรี ปีการศึกษา 2568  คณะเทคนิคการแพทย์ มหาวิทยาลัยเชียงใหม่ (การรับนักเรียนที่ดำเนินการโดยคณะ) โครงการรับนักศึกษาสาขากิจกรรมบำบัดและรังสีเทคนิคเป็นกรณีพิเศษ เพื่อแก้ไขปัญหาความขาดแคลนบุคลากรในพื้นที่จังหวัดชายแดนภาคใต้ คณะเทคนิคการแพทย์ มหาวิทยาลัยเชียงใหม่ และศูนย์อำนวยการบริหารจังหวัดชายแดนภาคใต้  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/1b051d289b61d0fc9c02d680ecafafb8.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครสอบคัดเลือกเพื่อเข้าศึกษาระดับปริญญาตรี โครงการรับนักเรียนด้วยแฟ้มสะสมผลงาน หลักสูตรบัญชีบัณฑิต (หลักสูตรนานาชาติ) ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/848c8b10a1087a855c8a33a9bed63875.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครสอบคัดเลือกเพื่อเข้าศึกษาระดับปริญญาตรี โครงการผู้มีศักยภาพสู่การเป็นผู้ประกอบการธุรกิจบริการ ปีการศึกษา 2568    </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/2281adde4a6dde955d26986fb1f8fab7.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครสอบคัดเลือกเพื่อเข้าศึกษาระดับปริญญาตรี โครงการทายาทผู้ประกอบการธุรกิจบริการ ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/bbbda3ebaaf669a785ae3a4154d0055c.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครสอบคัดเลือกเพื่อเข้าศึกษาระดับปริญญาตรี โครงการรับนักเรียนผู้มีผลการเรียนดีและมีศักยภาพสูงด้านการเป็นผู้ประกอบการ ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/5f75a79bcfd4e86c29078b92bc75e5a1.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครสอบคัดเลือกเพื่อเข้าศึกษาระดับปริญญาตรี โครงการรับนักเรียนที่มีผลการเรียนดี ไร้รัฐ ไร้สัญชาติได้ขึ้นทะเบียนจากกรมการปกครอง กระทรวงมหาดไทย เพื่อเข้าศึกษาต่อระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/16d304b182446544b4c8953b9ca0abfa.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาระดับปริญญาตรี โครงการรับนักเรียนที่มีผลการเรียนดีและเป็นบุคคลแรกของครอบครัวที่สมัครเข้าศึกษาต่อระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/1baa559d97171add97e95fba32961a2b.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาระดับปริญญาตรี โครงการรับนักเรียนที่มีผลการเรียนดีและมีศักยภาพพิเศษในการเป็นผู้นำและในทางธุรกิจและสังคม ปีการศึกษา 2568   </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/a162cb2158c4b3f5e962379c32ec759a.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาระดับปริญญาตรี  โครงการรับนักเรียนที่มีผลการเรียนดีและเป็นทายาทผู้ประกอบการธุรกิจ ปีการศึกษา 2568   </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/1dfe2732b0a2e693859a33e9f4c2b3f9.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาระดับปริญญาตรี  โครงการรับนักเรียนที่มีผลการเรียนดีและเป็นทายาทศิษย์เก่า บัญชี-บริหารธุรกิจ ปีการศึกษา 2568   </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/155f57eabe95bf5da69c624e1e4c1d32.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio ระดับปริญญาตรี ปีการศึกษา 2568 คณะวิทยาศาสตร์ มหาวิทยาลัยเชียงใหม่ (การรับนักเรียนที่ดำเนินการโดยคณะ)   </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/f7ab854460a4c3b27f2aebf699122b20.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาต่อในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio ระดับปริญญาตรี ปีการศึกษา 2568  วิทยาลัยศิลปะ สื่อ และเทคโนโลยี สาขาวิชาบูรณาการอุตสาหกรรมดิจิทัล (การรับนักเรียนที่ดำเนินการโดยคณะ) โครงการความร่วมมือกับอุตสาหกรรมดิจิทัล   </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/48223bbdc88b05ecebe6bfd23f237f6c.pdf" target="_blank" style="color:#0000FF;">กำหนดการคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 1 Portfolio ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศระเบียบการรับสมัคร</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/f5ecece689e4f4c95dd6b4363fc62b5c.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/74cc9df834efa44986bd6bb257023bec.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศ   การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 3  เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ระดับปริญญาตรี ปีการศึกษา 2568  (TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio และ TCAS รอบที่ 2 โควตา Quota) การรับนักเรียนจากโครงการเด็กดีมีที่เรียน  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/d9ba73273ebe6442969ecf2a909030f0.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศการรับสมัครนักเรียนเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 2  เรื่อง การรับนักกีฬาที่มีความสามารถดีเด่นระดับนานาชาติ/ระดับชาติ  และนักกีฬาตามยุทธศาสตร์ ปีการศึกษา 2568 (TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio)  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/af59bdad7a5701a4a635beadc0097e95.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศการรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 1 เรื่อง รหัสโครงการ-คณะ-สาขาวิชาที่รับสมัครและคัดเลือกบุคคลเข้าศึกษา TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
									</div>
				<div class="fs-4 shadow p-2 mb-3 mt-3 rounded" style="background-color:#fbab1e; color:#000000;"><i class="fa fa-get-pocket"></i> ดาวน์โหลดเอกสารประกอบการสมัคร/เอกสารอื่น ๆ</div>				<div class="row">
											<div class="col-md-12">							<h4 class="fs-5 fw-bold p-2">ข่าวประชาสัมพันธ์/ประกาศระเบียบ/ดาวน์โหลดเอกสาร อื่น ๆ</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/e290c5407efad16c201000a87f3ef72f.pdf" target="_blank" style="color:#0000FF;">หนังสือรับรองรายได้ของครอบครัว (สำหรับผู้ที่ประสงค์ขอยกเว้นค่าสมัครเข้าศึกษา มหาวิทยาลัยเชียงใหม่ ใน TCAS รอบที่ 1 แฟ้มสะสมผลงาน ปีการศึกษา 2568)  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/2b284bdbcc0ac29dd938b9035e141279.pdf" target="_blank" style="color:#0000FF;">แบบฟอร์มหนังสือรับรอง การรับนักเรียนจากโครงการเด็กดีมีที่เรียน  (TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio และ TCAS รอบที่ 2 โควตา Quota) ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
									</div>
							</li>
						<li class="item_wrap round2 online" style="display: none;">
									<h4 class="fs-3 text-success mt-3 mb-2">TCAS รอบที่ 2</h4>
				
								<div class="row">
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศ/ข่าวประชาสัมพันธ์</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/de0f6a745fb1c075b72859bc07f341b9.pdf" target="_blank" style="color:#0000FF;">กำหนดการคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 2 โควตา Quota ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศระเบียบการรับสมัคร</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/f8f24ca3ef7a784a6117506d5b21bfb9.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่  TCAS รอบที่ 2 โควตา Quota ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/d8c0826fc492d60d2db16dae49693b3b.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 2 โควตา Quota และ TCAS รอบที่ 3 รับตรงร่วมกัน Admission  ระดับปริญญาตรี ปีการศึกษา 2568 (เพิ่มเติม)  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/4b9381eaad59be891cf9c3f57e8ecdd3.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศ   การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 3  เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ระดับปริญญาตรี ปีการศึกษา 2568  (TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio และ TCAS รอบที่ 2 โควตา Quota) การรับนักเรียนจากโครงการเด็กดีมีที่เรียน  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/da55c4952abdea8daa64cc74f9aa1a60.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศการรับสมัครบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 7 เรื่อง การรับนักเรียนจากโครงการเปิดโอกาสให้กับนักเรียนผู้มีความสามารถด้านกีฬา ปีการศึกษา 2568 (TCAS รอบที่ 2 โควตา Quota)  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/ae841cad2cc18cbc57d75e36d779abd5.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศการรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 6 เรื่อง การรับนักเรียนชาวไทยภูเขาตามโครงการจัดส่งนักศึกษาชาวไทยภูเขาเข้าศึกษาต่อ มหาวิทยาลัยเชียงใหม่ ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/9d6c734b8a41730750143d3429251939.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศ  การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 5 เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ระดับปริญญาตรี ปีการศึกษา 2568  TCAS รอบที่ 2 โควตา Quota  การรับนักเรียนโควตาภาคเหนือจากโรงเรียนมัธยมในเขตพัฒนาภาคเหนือ   </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/55165ef58283001c5fc9ab24a823c571.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศการรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 4 เรื่อง รหัสโครงการ-คณะ-สาขาวิชาที่รับสมัครและคัดเลือกบุคคลเข้าศึกษา TCAS รอบที่ 2 โควตา Quota ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
									</div>
				<div class="fs-4 shadow p-2 mb-3 mt-3 rounded" style="background-color:#fbab1e; color:#000000;"><i class="fa fa-get-pocket"></i> ดาวน์โหลดเอกสารประกอบการสมัคร/เอกสารอื่น ๆ</div>				<div class="row">
											<div class="col-md-12">							<h4 class="fs-5 fw-bold p-2">ข่าวประชาสัมพันธ์/ประกาศระเบียบ/ดาวน์โหลดเอกสาร อื่น ๆ</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/37b83b19e7fa628590348c64eede9adc.pdf" target="_blank" style="color:#0000FF;">แบบฟอร์มหนังสือรับรอง การรับนักเรียนจากโครงการเด็กดีมีที่เรียน (TCAS รอบที่ 1 แฟ้มสะสมผลงาน Portfolio และ TCAS รอบที่ 2 โควตา Quota) ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
									</div>
							</li>
						<li class="item_wrap round3 online" style="display: none;">
									<h4 class="fs-3 text-success mt-3 mb-2">TCAS รอบที่ 3</h4>
				
								<div class="row">
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศ/ข่าวประชาสัมพันธ์</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/a8814c0600b7b2d721c41eb00c2747aa.pdf" target="_blank" style="color:#0000FF;">กำหนดการคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 3 รับตรงร่วมกัน Admission ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศระเบียบการรับสมัคร</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/048df69d408554e9aec8742dcd5bfb3c.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่   TCAS รอบที่ 3 รับตรงร่วมกัน Admission ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/d9b76174f1381cb87e75a16164fffa73.pdf" target="_blank" style="color:#0000FF;">ประกาศมหาวิทยาลัยเชียงใหม่ เรื่อง การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ TCAS รอบที่ 2 โควตา Quota และ TCAS รอบที่ 3 รับตรงร่วมกัน Admission  ระดับปริญญาตรี ปีการศึกษา 2568 (เพิ่มเติม)  </a>										</td>
									</tr>
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											<a href="files_download/889f7a12db185ee6edab6b3e854e0006.pdf" target="_blank" style="color:#0000FF;">เอกสารแนบท้ายประกาศ การรับสมัครคัดเลือกบุคคลเข้าศึกษาในมหาวิทยาลัยเชียงใหม่ ฉบับที่ 8  เรื่อง รหัสโครงการ-คณะ-สาขาวิชาที่รับสมัครและคัดเลือกบุคคลเข้าศึกษา TCAS รอบที่ 3 รับตรงร่วมกัน Admission ระดับปริญญาตรี ปีการศึกษา 2568  </a>										</td>
									</tr>
															</table>
						</div>
									</div>
				<div class="fs-4 shadow p-2 mb-3 mt-3 rounded" style="background-color:#fbab1e; color:#000000;"><i class="fa fa-get-pocket"></i> ดาวน์โหลดเอกสารประกอบการสมัคร/เอกสารอื่น ๆ</div>				<div class="row">
											<div class="col-md-12">							<h4 class="fs-5 fw-bold p-2">ข่าวประชาสัมพันธ์/ประกาศระเบียบ/ดาวน์โหลดเอกสาร อื่น ๆ</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											ไม่มีเอกสารประกอบการสมัคร/เอกสารอื่น 										</td>
									</tr>
															</table>
						</div>
									</div>
							</li>
						<li class="item_wrap round4 online" style="display: none;">
									<h4 class="fs-3 text-success mt-3 mb-2">TCAS รอบที่ 4</h4>
				
								<div class="row">
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศ/ข่าวประชาสัมพันธ์</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											โปรดติดตามประกาศ/ข่าวประชาสัมพันธ์ ปีการศึกษา 2568 อีกครั้งในภายหลัง 										</td>
									</tr>
															</table>
						</div>
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศระเบียบการรับสมัคร</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											โปรดติดตามประกาศระเบียบการรับสมัคร ปีการศึกษา 2568 อีกครั้งในภายหลัง 										</td>
									</tr>
															</table>
						</div>
									</div>
				<div class="fs-4 shadow p-2 mb-3 mt-3 rounded" style="background-color:#fbab1e; color:#000000;"><i class="fa fa-get-pocket"></i> ดาวน์โหลดเอกสารประกอบการสมัคร/เอกสารอื่น ๆ</div>				<div class="row">
											<div class="col-md-12">							<h4 class="fs-5 fw-bold p-2">ข่าวประชาสัมพันธ์/ประกาศระเบียบ/ดาวน์โหลดเอกสาร อื่น ๆ</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											ไม่มีเอกสารประกอบการสมัคร/เอกสารอื่น 										</td>
									</tr>
															</table>
						</div>
									</div>
							</li>
						<li class="item_wrap round7 online" style="display: none;">
									<h4 class="fs-3 text-success mt-3 mb-2">ข่าวประชาสัมพันธ์/ประกาศระเบียบ/ดาวน์โหลดเอกสาร อื่น ๆ</h4>
				
								<div class="row">
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศ/ข่าวประชาสัมพันธ์</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											ไม่มีประกาศ 										</td>
									</tr>
															</table>
						</div>
											<div class="col-md-6">							<h4 class="fs-5 fw-bold p-2">ประกาศระเบียบการรับสมัคร</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											ไม่มีประกาศ 										</td>
									</tr>
															</table>
						</div>
									</div>
				<div class="fs-4 shadow p-2 mb-3 mt-3 rounded" style="background-color:#fbab1e; color:#000000;"><i class="fa fa-get-pocket"></i> ดาวน์โหลดเอกสารประกอบการสมัคร/เอกสารอื่น ๆ</div>				<div class="row">
											<div class="col-md-12">							<h4 class="fs-5 fw-bold p-2">ข่าวประชาสัมพันธ์/ประกาศระเบียบ/ดาวน์โหลดเอกสาร อื่น ๆ</h4>
							<table class="table table-striped">
																	<tr>
										<td width="5%"><i class="fa fa-caret-right fa-lg"></i></td>
										<td>
											ไม่มีเอกสารประกอบการสมัคร/เอกสารอื่น 										</td>
									</tr>
															</table>
						</div>
									</div>
							</li>
					</ul>
	</div>

	<script type="text/javascript">
		var tabs = document.querySelectorAll(".tabs_wrap ul li");
		var round1s = document.querySelectorAll(".round1");
		var round2s = document.querySelectorAll(".round2");
		var round3s = document.querySelectorAll(".round3");
		var round4s = document.querySelectorAll(".round4");
		var round7s = document.querySelectorAll(".round7");
		var all = document.querySelectorAll(".item_wrap");

		tabs.forEach((tab)=>{
			tab.addEventListener("click", ()=>{
				tabs.forEach((tab)=>{
					tab.classList.remove("active");
				})
				tab.classList.add("active");
				var tabval = tab.getAttribute("data-tabs");

				all.forEach((item)=>{
					item.style.display = "none";
				})

				if(tabval == "round1"){
					round1s.forEach((round1)=>{
						round1.style.display = "block";
					})
				}
				else if(tabval == "round2"){
					round2s.forEach((round2)=>{
						round2.style.display = "block";
					})
				}
				else if(tabval == "round3"){
					round3s.forEach((round3)=>{
						round3.style.display = "block";
					})
				}
				else if(tabval == "round3"){
					round3s.forEach((round3)=>{
						round3.style.display = "block";
					})
				}
				else if(tabval == "round4"){
					round4s.forEach((round4)=>{
						round4.style.display = "block";
					})
				}
				else if(tabval == "round7"){
					round7s.forEach((round7)=>{
						round7.style.display = "block";
					})
				}
				else{
					all.forEach((item)=>{
						item.style.display = "block";
					})
				}
			})
		})
	</script>		<!-- <img src="images/news_banner_faculty.png" style="width:100%;" /> -->
	

	<br /><br />	
</div>


<div id="kumnodkan" style="display:none;">

	<h3>กำหนดการรับนักศึกษาระดับปริญญาตรี ของคณะและสาขาวิชาต่าง ๆ</h3>
	<div class="table-responsive">
		<table class="table table-bordered table-striped" style="background-color:#EEE;">
			<thead>
				<tr>
					<th>รอบที่</th>
					<th>รายการ</th>
					<th>จำนวนรับ</th>
					<th>จำนวนคณะ/สาขา ที่เปิดรับ</th>
					<th>รับสมัคร</th>
					<th>ประกาศรายชื่อ<br />ผู้มีสิทธิ์สัมภาษณ์</th>
					<th>สัมภาษณ์</th>
					<th>Clearing house</th>
					<th>ประกาศรายชื่อ<br />ผู้มีสิทธิ์เข้าศึกษา</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>1</td>
					<td>ครั้งที่ 1/1</td>
					<td align="center">814</td>
					<td align="center">0</td>
					<td align="center">2-12 ต.ค. 60</td>
					<td align="center">22 พ.ย. 60</td>
					<td align="center">2-3 ธ.ค. 60</td>
					<td align="center">15-19 ธ.ค. 60</td>
					<td align="center">25 ธ.ค. 60</td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td>ครั้งที่ 1/2</td>
					<td align="center">0</td>
					<td align="center"></td>
					<td align="center">22 ธ.ค. 60 - 15 ม.ค. 61</td>
					<td align="center">1 ก.พ. 61</td>
					<td align="center">9 ก.พ. 61</td>
					<td align="center">19-22 มี.ค. 61</td>
					<td align="center">28 มี.ค. 61</td>
				</tr>

				<tr>
					<td rowspan="8">2</td>
					<td>โควตาภาคเหนือ <!--(วิทย์ = 0 รับ  คน, ศิลป์ =  รับ  คน)--></td>
					<td align="center">4,472<br /></td>
					<td align="center">115</td>
					<td rowspan="8" align="center" valign="middle">23-30 พ.ย. 60</td>
					<td rowspan="8" align="center" valign="middle">23 เม.ย.61</td>
					<td rowspan="8" align="center" valign="middle">25-26 เม.ย. 61</td>
					<td rowspan="8" align="center" valign="middle">3-6 พ.ค. 61</td>
					<td rowspan="8" align="center" valign="middle">10 พ.ค. 61</td>
				</tr>
				<tr>
					<td colspan="3" bgcolor="#FFCCCC">ไม่ใช่โควตาภาคเหนือ</td>
				</tr>
				<tr>
					<td bgcolor="#FFEAEA" style="text-indent:20px;">ชาวไทยภูเขา</td>
					<td align="center" bgcolor="#FFEAEA">0</td>
					<td align="center" bgcolor="#FFEAEA">18</td>
				</tr>
				<tr style="background-color:#EEE;">
					<td bgcolor="#FFEAEA" style="text-indent:20px;">คณะแพทยศาสตร์/ผลิตแพทย์เพิ่มเพื่อชาวชนบท/INCLUSIVE TRACK</td>
					<td align="center" bgcolor="#FFEAEA">96</td>
					<td align="center" bgcolor="#FFEAEA">2</td>
				</tr>
				<tr>
					<td bgcolor="#FFEAEA" style="text-indent:20px;">คณะเทคนิคการแพทย์/รับนักศึกษาฯ เพื่อพัฒนาอมก๋อย, เพื่อพัฒนาแม่แจ่ม, สำหรับนักเรียนพิการ</td>
					<td align="center" bgcolor="#FFEAEA">9</td>
					<td align="center" bgcolor="#FFEAEA">9</td>
				</tr>
				<tr>
					<td bgcolor="#FFEAEA" style="text-indent:20px;">คณะสถาปัตยกรรมศาสตร์/สำหรับนักเรียนพิการ</td>
					<td align="center" bgcolor="#FFEAEA">1</td>
					<td align="center" bgcolor="#FFEAEA">1</td>
				</tr>
				<tr>
					<td bgcolor="#FFEAEA" style="text-indent:20px;">โครงการพัฒนาและส่งเสริมเยาวชนดีเด่นทางการกีฬา</td>
					<td align="center" bgcolor="#FFEAEA">63<br />
						</td>
						<td align="center" bgcolor="#FFEAEA">0</td>
					</tr>
					<tr>
						<td bgcolor="#FFEAEA" style="text-indent:20px;">คณะดำเนินการรับสมัครเอง</td>
						<td align="center" bgcolor="#FFEAEA">16</td>
						<td align="center" bgcolor="#FFEAEA">6</td>
					</tr>
					<tr>
						<td>3</td>
						<td>รับตรงทั่วประเทศ</td>
						<td align="center">2,253</td>
						<td align="center">136</td>
						<td align="center">9-19 พ.ค. 61<br /><span style="color:#FF0000;">**</span></td>
						<td align="center"style="color:#F00; font-weight:bold;">***</td>
						<td align="center">10-11 มิ.ย. 61</td>
						<td align="center" style="color:#F00; font-weight:bold;">***</td>
						<td align="center">14 มิ.ย. 61</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Admission</td>
						<td align="center">747</td>
						<td align="center">0</td>
						<td align="center">12-16 มิ.ย. 61</td>
						<td align="center">4 ก.ค. 61</td>
						<td align="center">10 ก.ค. 61</td>
						<td align="center"></td>
						<td align="center">19 ก.ค. 61</td>
					</tr>
					<tr>
						<td>5</td>
						<td>รับตรงอิสระ</td>
						<td align="center">497</td>
						<td align="center">0</td>
						<td align="center">5-9 ก.ค. 61</td>
						<td align="center">16 ก.ค. 61</td>
						<td align="center">18 ก.ค. 61</td>
						<td align="center"></td>
						<td align="center">20 ก.ค. 61</td>
					</tr>
					<tr style="font-weight:bold;">
						<td colspan="2" align="right">รวมประกาศรับ</td>
						<td align="center">8,992</td>
						<td align="center">0</td>
						<td align="center">&nbsp;</td>
						<td align="center">&nbsp;</td>
						<td align="center">&nbsp;</td>
						<td align="center"></td>
						<td align="center">&nbsp;</td>
					</tr>
				</tbody>
			</table>

<!--
<strong style="text-decoration:underline;">หมายเหตุ</strong>
<br /><br />


<ul style="list-style:none;">
	<li><span style="color:#FF0000;">** ผู้ที่ประสงค์จะสมัครคณะวิจิตรศิลป์ในรอบที่ 3 หากสาขาวิชาที่จะสมัครระบุให้มีการสอบวิชาเฉพาะ ผู้สมัครจะต้องสมัครสอบวิชาเฉพาะ ระหว่างวันที่ 23-30 พ.ย. 60 ที่เว็บไซต์นี้ด้วย โดยวิชาเฉพาะจะจัดสอบที่มหาวิทยาลัยเชียงใหม่ระหว่างวันที่ 10-11 มีนาคม 2561</span><br />
	  <br />
	</li>
	<li><span style="color:#FF0000;">*** วันที่ 26 - 28 พฤษภาคม 2561 ผู้มีรายชื่อเป็นผู้มีสิทธิสัมภาษณ์ Log in เข้าระบบเพื่อเลือกสถาบันที่ประสงค์จะไปสัมภาษณ์ โดยถือเป็นการยืนยันสถาบันในขั้นตอนเดียวกัน</span></li>
</ul>
-->
</div> <!-- end table responsive -->
</div> <!-- end kumnodkan -->




</div>

</div>
</div>



<div class="container-fluid p-3" style="background-color:#eee;">
    <h4 class="text-center">ติดต่อสำนักทะเบียนและประมวลผล มหาวิทยาลัยเชียงใหม่</h4>
    <div class="row">        
        <div class="col-md-6">
            <p style="text-align: right;">ฝ่ายรับเข้าศึกษาและบริหารหลักสูตรปริญญาตรี<br />สำนักทะเบียนและประมวลผล มหาวิทยาลัยเชียงใหม่<br />239 ถ.ห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200</p>
        </div>
        <div class="col-md-6">
            <p>© Copyright Registration Office<br />Chiang Mai University. All Rights Reserved<br />Facebook:  <a href="https://www.facebook.com/ugradadmissions.cmu" target="_blank">รับเข้าศึกษาปริญญาตรี มช.</a>
            </p>
        </div>        
    </div>
    <p class="text-center">
        <a href="https://www.facebook.com/ugradadmissions.cmu" target="_blank"><img src="https://admission.reg.cmu.ac.th/tcas/images/facebook-logo.png" width="40" /></a>
        <a href="https://www.youtube.com/user/RegCMU" target="_blank"><img src="https://admission.reg.cmu.ac.th/tcas/images/youtube-logo.png" width="40" /></a>
    </p>
</div>


</body>
</html>