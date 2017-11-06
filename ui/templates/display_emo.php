<?php
$emoset=''; $stiset='';

for($i=0;$i<count($emoticons);$i++){

$csm=explode(' ',$emoticons[$i]);
if($csm[2]==1){$emoset.='<span class="chat_list_emoticon '.$csm[1].'" onclick="ad_emo(\''.$csm[0].'\')"></span>'."\n";}}


$allstickers=array();
$handle=opendir('ui/stickers');

while($entry=readdir($handle)){
$txt='_'.$entry;
if(is_file('ui/stickers/'.$entry) && (stristr($txt,'svg')||stristr($txt,'png')||stristr($txt,'jpg')||stristr($txt,'jpeg')||stristr($txt,'gif'))){
$allstickers[]=$entry;}}
closedir($handle);

sort($allstickers);

for($i=0;$i<count($allstickers);$i++){
$stiset.='<img src="ui/stickers/'.$allstickers[$i].'" class="chat_list_sticker" alt="" onclick="ad_sti(\\\'ui/stickers/'.$allstickers[$i].'\\\')" />';
}

?>
<script type="text/javascript">
stiset='<?php print $stiset;?>';
</script>
<div id="emoset" style="max-height:240px;overflow:hidden" onmousedown="m2down(event)" onmousemove="m2move(this,event)" onwheel="w2move(this,event)"><?php print $emoset;?></div>
<div id="stiset" style="max-height:240px;overflow:hidden;display:none" onmousedown="m2down(event)" onmousemove="m2move(this,event)" onwheel="w2move(this,event)"></div>

<br style="clear:both" />

