<div 
   id="aniframeupstart" 
   align="center" 
   style="display: none;">
<iframe 
   src="test.php" 
   margin="10" 
   border="1" 
   scrollbars="auto" 
   width="450" 
   height="300">
</iframe>
</div>

<span 
   id="viewiframe" 
   onclick="DoViewIFRAME('viewiframe','hideiframe','aniframeupstart');" 
   style="line-height: 16px; 
      font-size: 14px; 
      font-weight: bold; 
      font-family: sans-serif; 
      color: brown; 
      background-color: gold;">
<nobr>[View IFRAME]</nobr>
</span>
<span 
   id="hideiframe" 
   onclick="DoHideIFRAME('hideiframe','aniframeupstart','viewiframe');" 
   style="display: none; 
      line-height: 16px; 
      font-size: 14px; 
      font-weight: bold; 
      font-family: sans-serif; 
      background-color: brown; 
      color: gold;">
<nobr>[Hide IFRAME]</nobr>
</span>

<script type="text/javascript" language="JavaScript"><!--
function DoViewIFRAME(tid1,tid2,tid3) {
document.getElementById(tid1).style.display = "none";
document.getElementById(tid2).style.display = "";
document.getElementById(tid3).style.display = "";
}
function DoHideIFRAME(tid1,tid2,tid3) {
document.getElementById(tid1).style.display = "none";
document.getElementById(tid2).style.display = "none";
document.getElementById(tid3).style.display = "";
}
//--></script>

