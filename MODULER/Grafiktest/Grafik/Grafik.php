	  <div class="tr1" id="maintr1">
    <div class="trtop">
	<div class="trtopdiv1"><p><?php print_r($trtop1 = "MENU"); ?></p></div>
	<div class="trtopdiv2"><p><a id="open-popup" href="#"  onclick="openNav()"><i class="fas fa-plus-circle"></i></a></p></div>
    </div>
    <div class="trdrop"><select class="trdrop"></select>
    </div>
    <div class="trinder1">
    <?php  
	$sql = "SELECT * FROM jobs";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {?><button onclick="listehent(this.value)" value="<?php echo $row["JobsID"]?>" id="forlist"><?php echo $row["JobsID"]?></button><br><?php }

    ?>
    </div>
  </div>
  <div class="mellemrum">
  </div>
  <div class="tr2" id="maintr2">
    <div class="trtop"><?php print_r($trtop2 = "MENU"); ?>
    </div>
    <div class="trdrop">
    </div>
    <div class="trinder1">
    </div>
  </div>
  <div class="mellemrum">.</div>
  <div class="tr3" id="maintr3">
    <div class="trtop"><?php print_r($trtop3 = "MENU"); ?>
    </div>
    <div class="trdrop">
    </div>
    <div class="trinder1">
    </div>
  </div>
  <div class="mellemrum">.</div>
  <div class="tr4" id="maintr4">
    <div class="trtop"><?php print_r($trtop4 = "MENU"); ?>
    </div>
    <div class="trdrop">
    </div>
    <div class="trinder1">
    </div>
  </div>
  <div class="mellemrum">.</div>
  <div class="tr5" id="maintr5">
    <div class="trtop"><?php print_r($trtop5 = "MENU"); ?>
    </div>
    <div class="trdrop">
    </div>
    <div class="trinder1">
    </div>
  </div>
</div>

<div id="myNav" class="overlay">

  <div class="oversidetop">
    <div class="overside1" id="rapportnr">0</div>
    <div class="overside2">REVK</div> 
    <div class="overside3"><input id="revknr"></div> 
    <div class="overside4">opgave ansvarlige</div> 
    <div class="overside5"><input id="opgaveans"></div>  
    <div class="overside6">Order værdig</div> 
    <div class="overside7" id="ordervalue">0 DKK</div>  
    <div class="overside8"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-times-circle"></i></a></div>  
  </div><br><br>
  <div class="oversidetop">
    <div class="overside9" id="kundenavn">TEST.KUNDE</div> 
    <div class="overside8"><a id="BottomOverMenu1" href="javascript:void(0)" class="closebtn" onclick="openovermenu1()"><id="BottomOverMenu1i" class="fas fa-arrow-circle-down"></i></a></div>  
  </div><br>
  <div style="border-style: solid; border-width: 0px; height: 0%;   overflow-x: hidden;" id="overmenu1" class="oversidetop">
    <div class="overside8" style="border-style: solid; border-width: 0px; height: 0px;">
      <div>Firmanavn:</div><div id="firmanavn">4</div><div></div><div></div><br>
    </div> 
  </div><br>
  <div class="oversidetop">
    <div class="overside9">1 VARE LINE(R)</div> 
    <div class="overside8"><a id="BottomOverMenu2" href="javascript:void(0)" class="closebtn" onclick="openovermenu2()"><i class="fas fa-arrow-circle-down"></i></a></div>  
  </div><br>
  <div style="border-style: solid; border-width: 0px; height: 0%;   overflow-x: hidden;" id="overmenu2" class="oversidetop">
    <div class="overside8" style="border-style: solid; border-width: 0px; height: 0%;">sdfg</div>  
  </div><br>
  <div class="oversidetop">
    <div class="overside9">0 BESTILINGS LINE(R)</div> 
    <div class="overside8"><a id="BottomOverMenu3" href="javascript:void(0)" class="closebtn" onclick="openovermenu3()"><i class="fas fa-arrow-circle-down"></i></a></div>  
  </div><br>
  <div style="border-style: solid; border-width: 0px; height: 0%;   overflow-x: hidden;" id="overmenu3" class="oversidetop">
    <div class="overside8" style="border-style: solid; border-width: 0px; height: 0%;">sdfg</div>  
  </div>





