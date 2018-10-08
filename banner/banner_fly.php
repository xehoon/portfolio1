<!--
ver1.0 150421 @_untitle_d
http://untitled.untitle311apyxry1w48.com/5yj67ft
-->

<?php

$tmpWidth = '120';
$tmpMarginBottom = '5';
$tmpBorder = '0';
// $arrL = array(
// 	array('http://untitled.untitle311apyxry1w48.com/', 'http://i.imgur.com/SF2cU4h.png', 'untitled' ,'_blank'),
// 	array('http://untitled.untitle311apyxry1w48.com/', 'http://i.imgur.com/q92hy6n.png', 'untitled', '_blank'),
// 	array('http://untitled.untitle311apyxry1w48.com/', 'http://i.imgur.com/sFIVznp.png', 'untitled', '_blank'),
// 	array('http://untitled.untitle311apyxry1w48.com/', 'http://i.imgur.com/jDmQZaW.png', 'untitled', '_blank')
// );
$arrR = array(
	array('http://untitled.untitle311apyxry1w48.com/', './images/main/repre_12.png', 'untitled', '_blank'),
	// array('http://untitled.untitle311apyxry1w48.com/', 'http://i.imgur.com/SF2cU4h.png', 'untitled' ,'_blank'),
	// array('http://untitled.untitle311apyxry1w48.com/', 'http://i.imgur.com/q92hy6n.png', 'untitled', '_blank'),
	// array('http://untitled.untitle311apyxry1w48.com/', 'http://i.imgur.com/sFIVznp.png', 'untitled', '_blank')
);
?>

<script type="text/javascript" src="<?php echo G5_JS_URL ?>/follower.js"></script>
<script type="text/javascript"> 
//<![CDATA[ 
$(document).ready(function() {
  $('#floatR').scrollFollower({
    pageAlign:'center',
    pageWidth:980, //컨텐츠 블럭의 폭(필수값)
    type:'right',
    topMargin:125, //페이지 최상단과의 거리
    minTop:80,
    margin:5,
    speed:500,
    easing:'swing',
    zindex:10
  });
  $('#floatL').scrollFollower({
    pageAlign:'center',
    pageWidth:980,
    type:'left',
    topMargin:125,
    minTop:80,
    margin:5,
    speed:500,
    easing:'linear',
    zindex:10
  });
});
//]]> 
</script>

<div id="floatL">
<?php foreach($arrL as $v){ ?>
	<div style="margin-bottom:<?=$tmpMarginBottom?>px">
		<a href="<?=$v[0]?>" target="<?=$v[3]?>"><img src="<?=$v[1]?>" width="<?=$tmpWidth?>" border="<?=$tmpBorder?>" alt="<?=$v[2]?>"></a>
	</div>
<? } ?>
</div>


<div id="floatR">
<?php foreach($arrR as $v){ ?>
	<div style="margin-bottom:<?=$tmpMarginBottom?>px">
		<a href="<?=$v[0]?>" target="<?=$v[3]?>"><img src="<?=$v[1]?>" width="<?=$tmpWidth?>" border="<?=$tmpBorder?>" alt="<?=$v[2]?>"></a>
	</div>
<? } ?>
</div>