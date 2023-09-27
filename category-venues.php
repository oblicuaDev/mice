<?php include "includes/head.php"; ?>

<div id="mobile"></div>
<div id="disabler"></div>
<div class="card-list venues graybg font1" data-type="venues">
    <h1 class="fw900 uppercase center title"><?=$mice->miceinfo->field_mice_ui_17?></h1>
    <div class="column flex w_100">
        <aside class="column w_25 filters graybg m_outter">
                <button class="fw500" id="resetfilters"><?=$mice->miceinfo->field_mice_ui_34?></button>
                <h2 class="fw700"><?=$mice->miceinfo->field_mice_ui_35?></h2>
                

                <div class="filtergroup checkboxes open" data-filterid="criterios_venues">
                    
                    <h3 class="fw700"><span class="arrow"></span><?=$mice->miceinfo->field_mice_ui_36?></h3>
                    <div class="loader"></div>
                    <div class="content">
                    </div>
                </div>
                <div class="filtergroup checkboxes color open" data-filterid="test_zona">
                    
                    <h4 class="fw700"><span class="arrow"></span><?=$mice->miceinfo->field_mice_ui_38?> </h4>
                    <div class="loader"></div>
                    <div class="content">
                    </div>
                </div>
                <div class="filtergroup checkboxes color open" data-filterid="certificaciones_de_venues">
                    
                    <h5 class="fw700"><span class="arrow"></span><?=$mice->miceinfo->field_mice_ui_22?></h5>
                    <div class="loader"></div>
                    <div class="content">
                    </div>
                </div>
                <div class="filtergroup open">
                    <h6 class="fw700"><span class="arrow"></span><?=$mice->miceinfo->field_mice_ui_5?></h6>
                    <div class="loader"></div>
                    <div class="content">
                        <?php 
                        $aforo = explode(',', $mice->miceinfo->field_mice_ui_5);
                        ?>
                        <div class="capacitycontainer">
                            <span class="label fw500"><?=$aforo[0]?></span>
                            <div class="capacityfilter"><b class="custom-handle ui-slider-handle"><i></i></b><input class="currentvalue" type="hidden" name="maxaudit" id="maxaudit" /><input type="hidden" class="previousval" /></div>
                            <span class="box"><input type="tel" name="#" class="writtenval"/></span>
                        </div>
                        <div class="capacitycontainer">
                            <span class="label fw500"><?=$aforo[1]?></span>
                            <div class="capacityfilter"><b class="custom-handle ui-slider-handle"><i></i></b><input class="currentvalue" type="hidden" name="maxaul" id="maxaul" /><input type="hidden" class="previousval" /></div>
                            <span class="box"><input type="tel" name="#" class="writtenval"/></span>
                        </div>
                        <div class="capacitycontainer">
                            <span class="label fw500"><?=$aforo[2]?></span>
                            <div class="capacityfilter"><b class="custom-handle ui-slider-handle"><i></i></b><input class="currentvalue" type="hidden" name="maxbanq" id="maxbanq" /><input type="hidden" class="previousval" /></div>
                            <span class="box"><input type="tel" name="#" class="writtenval"/></span>
                        </div>
                        <div class="capacitycontainer">
                            <span class="label fw500"><?=$aforo[3]?></span>
                            <div class="capacityfilter"><b class="custom-handle ui-slider-handle"><i></i></b><input class="currentvalue" type="hidden" name="maxcoc" id="maxcoc" /><input type="hidden" class="previousval" /></div>
                            <span class="box"><input type="tel" name="#" class="writtenval"/></span>
                        </div>
                        <div class="capacitycontainer">
                            <span class="label fw500"><?=$aforo[4]?></span>
                            <div class="capacityfilter"><b class="custom-handle ui-slider-handle"><i></i></b><input class="currentvalue" type="hidden" name="maxu" id="maxu" /><input type="hidden" class="previousval" /></div>
                            <span class="box"><input type="tel" name="#" class="writtenval"/></span>
                        </div>
                    </div>
                </div>

        </aside>
        <section class="w_75 cards flex loading m_outter">
            <div class="loader big"></div>
            <div class="content flex"></div>

        </section>
    </div>
    <?php if($isMobile){ ?>
        <button class="mobilefilterbutton uppercase fw700">FILTRAR RESULTADOS</button>
<?php } ?>
            </div>

<? include 'includes/imports.php'?>
