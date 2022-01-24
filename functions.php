<?php
# Зварка 
function kachestvosignala($signal){	
$signala = str_replace('-', '',$signal);
$signala = (int)$signala;
	if($signala>=1 AND $signala<=12 ){		
		return '<span class="font4">'.$signal.' <i class="fas fa-exclamation-circle"></i>';	
	}elseif($signala>=13 AND $signala<=19 ){		
		return '<span class="font1">'.$signal.'</span>';	
	}elseif($signala>=20 AND $signala<=24 ){		
		return '<span class="font2">'.$signal.'</span>';	
	}elseif($signala>=25 AND $signala<=39 ){		
		return '<span class="font3">'.$signal.' <i class="fas fa-exclamation-triangle"></i></span>';	
	}else{		
		return '<span class="font0">'.$signal.'</span>';
	
	}
}

#function form($signal,$id,$type,$view_splicer,$view_zvarka){	
function form($signal,$id,$type){
$vid=0;
$view_splicer =1;
$view_zvarka=1;
$orignal = $signal;
if($type=='no'){
	$nextid = $id;
}else{
	$nextid = $id + 1;
}
if($type=='capler1'){
	$s = capler1($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler2'){
	$s = capler2($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler3'){
	$s = capler3($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler4'){
	$s = capler4($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler5'){
	$s = capler5($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler6'){
	$s = capler6($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler7'){
	$s = capler7($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler8'){
	$s = capler8($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler9'){
	$s = capler9($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
}elseif($type=='capler10'){
	$s = capler10($signal);	
	$signal = $s[1];	
	$signal2 = $s[0];	
# splicer1
}elseif($type=='splicer1'){
	$type_s = 'splicer';
	$s = splicer_1_2($signal);	
	$s[0] = $s['output'];	
	$signal = $s[0];
}elseif($type=='splicer2'){
	$type_s = 'splicer';
	$s = splicer_1_4($signal);	
	$s[0] = $s['output'];	
	$signal = $s[0];
}elseif($type=='splicer3'){
	$type_s = 'splicer';
	$s = splicer_1_6($signal);	
	$s[0] = $s['output'];	
	$signal = $s[0];
}elseif($type=='splicer4'){
	$type_s = 'splicer';
	$s = splicer_1_8($signal);	
	$s[0] = $s['output'];	
	$signal = $s[0];
}elseif($type=='splicer5'){
	$type_s = 'splicer';
	$s = splicer_1_16($signal);	
	$s[0] = $s['output'];	
	$signal = $s[0];
}elseif($type=='splicer6'){
	$type_s = 'splicer';
	$s = splicer_1_32($signal);	
	$s[0] = $s['output'];	
	$signal = $s[0];
}else{
	$signal = $signal;
	$vid=1;	
	$count = 1;
	$type_s= 'no';
}
############## VID
if(!$vid){
echo'<table align="left" border="0" cellpadding="5" cellspacing="1" class="tborder" width="100%"><tr><td colspan="2">';
$_2 = splicer_1_2($s[0]);
$_4 = splicer_1_4($s[0]);
$_6 = splicer_1_6($s[0]);
$_8 = splicer_1_8($s[0]);
$_16 = splicer_1_16($s[0]);
$_32 = splicer_1_32($s[0]);
$_64 = splicer_1_64($s[0]);
$_128 = splicer_1_128($s[0]);
if($view_splicer){
echo'<div class="box_3">0.02</div>';
}
if($type_s=='splicer'){
echo'<div class="box_1"><span class="css1_8">'.$s['info'].' </span>'.$s['output'].'</div>';
}else{
echo'<div class="box_2"><span class="css1_cap"> <span class="blu1">'.$s[2].'</span> <span class="red1">'.$s[3].'</span></span> <span class="blu2">'.$s[0].'</span> <span class="red2">'.$s[1].'</span></div>';
}
if($view_zvarka){
echo'<div class="box_3">0.02</div>';
}
if($view_splicer){
echo'
<div class="box_1"><span class="css1_8"> 1*2 </span>'.kachestvosignala($_2['output']).'</div>
<div class="box_1"><span class="css1_8"> 1*4 </span>'.kachestvosignala($_4['output']).'</div>
<div class="box_1"><span class="css1_8"> 1*6 </span>'.kachestvosignala($_6['output']).'</div>
<div class="box_1"><span class="css1_8"> 1*8 </span>'.kachestvosignala($_8['output']).'</div>
<div class="box_1"><span class="css1_8"> 1*16 </span>'.kachestvosignala($_16['output']).'</div>
<div class="box_1"><span class="css1_8"> 1*32</span>'.kachestvosignala($_32['output']).'</div>
<div class="box_1"><span class="css1_8"> 1*64</span>'.kachestvosignala($_64['output']).'</div>
<div class="box_1"><span class="css1_8"> 1*128</span>'.kachestvosignala($_128['output']).'</div>
';
}
echo'</td></tr></table>';
}
###### VID FORM
echo'<div id="style_'.$nextid.'" class="style1">';
?>
<script>
        $(function(){
            $("#calcurt<?=$nextid;?>").on('change', function(event) {
                $.ajax({
                    url: 'ajax.php',
                    type: 'POST',
					dataType: "html", // "json",
					data: {signal:$("#signal_<?=$nextid;?>").val(),types:$("#calcurt<?=$nextid;?>").val(),id:$("#id_<?=$nextid;?>").val()},
					success: function(html){ 
						$("#content<?=$nextid;?>").html(html);  
					}  					
                })
            });
        });
</script>
<form>
<input id="signal_<?=$nextid;?>" name="signal" type="text" value="<?=$signal;?>" class="form-control" maxlength="10">
<input id="id_<?=$nextid;?>" name="id" type="hidden" value="<?=$nextid;?>">
<select class="form-select" id="calcurt<?=$nextid;?>">
	<option value="">Вибрать</option>
	<option value="capler1">5*95</option>
	<option value="capler2">10*90</option>
	<option value="capler3">15*85</option>
	<option value="capler4">20*80</option>
	<option value="capler5">25*75</option>
	<option value="capler6">30*70</option>
	<option value="capler7">35*65</option>
	<option value="capler8">40*60</option>
	<option value="capler9">45*55</option>
	<option value="capler10">50*50</option>
	<option value="splicer1">1*2</option>
	<option value="splicer2">1*4</option>
	<option value="splicer3">1*6</option>
	<option value="splicer4">1*8</option>
	<option value="splicer5">1*16</option>
</select>
</form>
</div>
<?php
echo'<div id="content'.$nextid.'" class="style2"></div>';
}
function zvarka($signal){	
	return $signal;
}
# Оптический делитель 5*95
function capler1($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['5'] = 13.70;	
	$result['95'] = 0.32;
	$result['0'] = $result['signal'] - $result['5'];
	$result['1'] = $result['signal'] - $result['95'];	
	$result['2'] = '5';	
	$result['3'] = '95';	
	return $result;
}
# Оптический делитель 10*90
function capler2($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['10'] = 10.80;	
	$result['90'] = 0.49;
	$result['0'] = $result['signal'] - $result['10'];
	$result['1'] = $result['signal'] - $result['90'];	
	$result['2'] = '10';	
	$result['3'] = '90';	
	return $result;
}
# Оптический делитель 15*85
function capler3($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['15'] = 8.16;	
	$result['85'] = 0.76;
	$result['0'] = $result['signal'] - $result['15'];
	$result['1'] = $result['signal'] - $result['85'];	
	$result['2'] = '15';	
	$result['3'] = '85';	
	return $result;
}
# Оптический делитель 20*80
function capler4($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['20'] = 7.11;	
	$result['80'] = 1.6;
	$result['0'] = $result['signal'] - $result['20'];
	$result['1'] = $result['signal'] - $result['80'];	
	$result['2'] = '20';	
	$result['3'] = '80';	
	return $result;
}
# Оптический делитель 25*75
function capler5($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['25'] = 6.29;	
	$result['75'] = 1.42;
	$result['0'] = $result['signal'] - $result['25'];
	$result['1'] = $result['signal'] - $result['75'];	
	$result['2'] = '25';	
	$result['3'] = '75';	
	return $result;
}
# Оптический делитель 30*70
function capler6($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['30'] = 5.39;	
	$result['70'] = 1.56;
	$result['0'] = $result['signal'] - $result['30'];
	$result['1'] = $result['signal'] - $result['70'];	
	$result['2'] = '30';	
	$result['3'] = '70';	
	return $result;
}
# Оптический делитель 35*65
function capler7($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['35'] = 4.56;	
	$result['65'] = 1.93;
	$result['0'] = $result['signal'] - $result['35'];
	$result['1'] = $result['signal'] - $result['65'];	
	$result['2'] = '35';	
	$result['3'] = '65';	
	return $result;
}
# Оптический делитель 40*60
function capler8($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['40'] = 4.01;	
	$result['60'] = 2.34;
	$result['0'] = $result['signal'] - $result['40'];
	$result['1'] = $result['signal'] - $result['60'];	
	$result['2'] = '40';	
	$result['3'] = '60';	
	return $result;
}
# Оптический делитель 45*55
function capler9($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['45'] = 3.73;	
	$result['55'] = 2.71;
	$result['0'] = $result['signal'] - $result['45'];
	$result['1'] = $result['signal'] - $result['55'];	
	$result['2'] = '45';	
	$result['3'] = '55';	
	return $result;
}
# Оптический делитель 50*50
function capler10($signal){	
	$result['type'] = 'capler';	
	$result['signal'] = $signal;	
	$result['50'] = 3.17;	
	$result['50'] = 3.19;
	$result['0'] = $result['signal'] - $result['50'];
	$result['1'] = $result['signal'] - $result['50'];	
	$result['2'] = '50';	
	$result['3'] = '50';	
	return $result;
}
# Оптический делитель PLC 1×2
function splicer_1_2($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*2';	
	$result['output'] = $signal - 4.30;	
	return $result;
}
# Оптический делитель PLC 1×4
function splicer_1_4($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*4';	
	$result['output'] = $signal - 7.40;	
	return $result;
}
# Оптический делитель PLC 1×6
function splicer_1_6($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*6';	
	$result['output'] = $signal - 9.50;	
	return $result;
}
# Оптический делитель PLC 1×8
function splicer_1_8($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*8';	
	$result['output'] = $signal - 10.70;	
	return $result;
}	
# Оптический делитель PLC 1×16
function splicer_1_16($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*16';	
	$result['output'] = $signal - 13.90;	
	return $result;
}	
# Оптический делитель PLC 1×32
function splicer_1_32($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*32';	
	$result['output'] = $signal - 17.20;	
	return $result;
}	
# Оптический делитель PLC 1×64
function splicer_1_64($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*64';	
	$result['output'] = $signal - 21.5;	
	return $result;
}
# Оптический делитель PLC 1×128
function splicer_1_128($signal){
	$signal = $signal - 0.02;
	$result['type'] = 'splitter';
	$result['info'] = '1*128';	
	$result['output'] = $signal - 25.5;	
	return $result;
}	
?>