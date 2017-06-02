    <?php $this->load->view('partials/l_header')?>
        <DIV id="panels">
           <DIV id="sidenav">
                <div id="security" style="cursor:pointer; height:94px; width:251px;" onmouseover="ShowContent('securitypanel'); return true;" onmouseout="HideContent('securitypanel'); return true;" onclick="javascript:ReverseContent('securitypanel')">
                    <TABLE BORDER="0" WIDTH="251" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD WIDTH="20" rowspan=2></TD>
                            <TD ALIGN="left" VALIGN="top" colspan=2><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/sidenav/security2.png" ALT="Security Guard" WIDTH="204" HEIGHT="20" HSPACE="0" VSPACE="12" BORDER="0"></TD>
                        </TR>
                        <TR>
                            <TD WIDTH="10"></TD>
                            <TD ALIGN="left" VALIGN="top"><h1>One of the most respected security companies in NYC</h1></TD>
                        </TR>

                    </TABLE>	
                </div>

                <div id="investigations" style="cursor:pointer; height:94px; width:251px;" onmouseover="ShowContent('investigationspanel'); return true;" onmouseout="HideContent('investigationspanel'); return true;" onclick="javascript:ReverseContent('investigationspanel')">
                    <TABLE BORDER="0" WIDTH="251" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD WIDTH="20" rowspan=2></TD>
                            <TD ALIGN="left" VALIGN="top" colspan=2><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/sidenav/investigations.png" ALT="Private detective" WIDTH="118" HEIGHT="20" HSPACE="0" VSPACE="12" BORDER="0"></TD>
                        </TR>
                        <TR>
                            <TD WIDTH="10"></TD>
                            <TD ALIGN="left" VALIGN="top"><h2>One of the premier private detective agencies in NYC</h2></TD>
                        </TR>
                    </TABLE>
                </div>

                <div id="permits"  style="cursor:pointer; height:88px; width:251px;" onmouseover="ShowContent('permitspanel'); return true;" onmouseout="HideContent('permitspanel'); return true;" onclick="javascript:ReverseContent('permitspanel')">
                    <TABLE BORDER="0" WIDTH="251" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD WIDTH="20" rowspan=2></TD>
                            <TD ALIGN="left" VALIGN="top" colspan=2><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/sidenav/eventpermits.png" ALT="Event Security and Permits" WIDTH="112" HEIGHT="19" HSPACE="0" VSPACE="12" BORDER="0"></TD>
                        </TR>
                        <TR>
                            <TD WIDTH="10"></TD>
                            <TD ALIGN="left" VALIGN="top"><h2>Your source for NYC event permits anywhere in the city</h2></TD>
                        </TR>

                    </TABLE>
                </div>
            </div>
            <DIV id="securitypanelarrow" style="display:none;float:left;"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/arrow.gif" ALT="Security" WIDTH="7" HEIGHT="88" HSPACE="0" VSPACE="0" BORDER="0"></div>
            <DIV id="investigationspanelarrow" style="display:none;float:left;"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/investigations_arrow.gif" ALT="Investigations" WIDTH="7" HEIGHT="182" HSPACE="0" VSPACE="0" BORDER="0"></div>
            <DIV id="permitspanelarrow" style="display:none;float:left;"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/permits_arrow.gif" ALT="Event Permits" WIDTH="7" HEIGHT="276" HSPACE="0" VSPACE="0" BORDER="0"></div>

            <DIV id="photo" style="background:url('<?php echo base_url()?>media/landing-pages/security/images/homephoto.jpg');background-repeat:no-repeat;">


                <div id="securitypanel" style="z-index:1; display:none;position:relative;left:7px; top:6px; width:560px; height:262px;  border:1px solid white; background:url('<?php echo base_url()?>media/landing-pages/security/images/bg2.png');background-repeat:repeat-x;">
                    <TABLE BORDER="0" WIDTH="560" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD WIDTH="20" ALIGN="left" VALIGN="top" rowspan=5></TD>
                            <td width="520" align="left" valign="top" colspan=3><h6><BR>PHYSICAL SECURITY</H6></TD>
                            <TD WIDTH="20" ALIGN="left" VALIGN="top" rowspan=5></TD>

                        </tr>
                        <tr>
                            <td width="520" align="left" valign="top" height="1" colspan=3></TD>
                        </tr>
                        <tr>
                            <td width="520" align="left" valign="top" bgcolor="#000066" height="1" colspan=3></TD>
                        </tr>
                        <tr>
                            <td width="520" align="left" valign="top"  height="3" colspan=3></TD>
                        </tr>
                        <TR>
                            <td width="250" align="left" valign="top"><h6>
                                    - Armed and Unarmed Security<BR>
                                    - Uniformed Security<BR>
                                    - Concierge<BR>
                                    - FSD/EAPD<BR>
                                    - Fireguard<BR>
                                    - Plainclothes &amp; Undercover Bodyguards<BR>
                                    - Special Event Security<BR>
                                    - Sporting Event Security<BR>
                                </H6></TD>
                            <TD WIDTH="20" ALIGN="left" VALIGN="top"></TD>
                            <td width="250" align="left" valign="top"><h6>- Corporate Event Security<BR>
                                    - Executive Protection Services<BR>
                                    - Celebrity Protection Services<BR>
                                    - Disaster and Emergency Response<BR>
                                    - Trade Show and Convention Security<BR>
                                    - Crowd Control<BR>
                                    - Risk and Threat Assessment<BR>
                                    - Crisis Response Scenarios</H6></TD>

                        </tr>

                        <TR>
                            <TD WIDTH="20" ALIGN="left" VALIGN="top" rowspan=5></TD>
                            <td width="520" align="left" valign="top" colspan=3><h6><BR>CYBER SECURITY</H6></TD>
                            <TD WIDTH="20" ALIGN="left" VALIGN="top" rowspan=5></TD>

                        </tr>
                        <tr>
                            <td width="520" align="left" valign="top" height="1" colspan=3></TD>
                        </tr>
                        <tr>
                            <td width="520" align="left" valign="top" bgcolor="#000066" height="1" colspan=3></TD>
                        </tr>
                        <tr>
                            <td width="520" align="left" valign="top"  height="3" colspan=3></TD>
                        </tr>
                        <TR>
                            <td width="250" align="left" valign="top"><h6>
                                    - Critical Infrastructure<BR>
                                    - Network Vulnerability, Threat &amp; <BR>&nbsp;&nbsp;Risk Assessment (VRTA)

                                </H6></TD>
                            <TD WIDTH="20" ALIGN="left" VALIGN="top"></TD>
                            <td width="250" align="left" valign="top"><h6>- Penetration Testing <BR>
                                    - Compliance Consulting</H6></TD>

                        </tr>






                        </TR>
                    </TABLE>
                </div>
                <div id="investigationspanel" style="z-index:2; display:none;position:relative;left:7px; top:6px; width:264px; height:262px;  border:1px solid white; background:url('<?php echo base_url()?>media/landing-pages/security/images/bg.png');background-repeat:no-repeat;">
                    <TABLE BORDER="0" WIDTH="260" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD WIDTH="10" ALIGN="left" VALIGN="top"></TD>
                            <TD ALIGN="left" VALIGN="top" class="panelcopy" height="260"><BR>
                                <h3>- Fingerprinting services<BR>
                                    - Employment Background checks<BR>
                                    - Risk assessment<BR>
                                    - White Collar Crime audit<BR>
                                    - Computer fraud investigation<BR>
                                    - Corporate Compliance and Governance<BR>
                                    - Vendor Screening<BR>
                                    - Computer Forensics<BR>
                                    - Investigative Due Diligence<BR>
                                    - Fraud Prevention and Detection<BR>
                                    - Crisis Management<BR>
                                    - Litigation Support<BR></h3>

                            </TD>
                        </TR>
                    </TABLE>
                </div>
                <div id="permitspanel" style="z-index:3; display:none;position:relative;left:7px; top:6px; width:264px; height:262px;  border:1px solid white; background:url('<?php echo base_url()?>media/landing-pages/security/images/bg.png');background-repeat:no-repeat;">
                    <TABLE BORDER="0" WIDTH="260" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD WIDTH="10" ALIGN="left" VALIGN="top"></TD>
                            <TD ALIGN="left" VALIGN="top" class="panelcopy" height="260"><BR>
                                <h3>- All New York City locations<BR>
                                    - Mobil Marketing Vehicle permits<BR>
                                    - Red Carpet/Celebrity Appearance permits<BR>
                                    - Health or Food Sampling permits<BR>
                                    - Film or Scouting permits<BR>
                                    - Amplified Sound permits<BR>
                                    - Tent or Canopy permits<BR>
                                    - Marine or Barge permits<BR>
                                    - Fireworks or Pyrotechnics permits<BR>
                                    - Street Activity or Street Teams permits<BR>
                                    - Park Department permits<BR></h3>

                            </TD>
                        </TR>
                    </TABLE>
                </div>				
            </div>

        </div>
        <DIV id="bottompanels">

            <DIV style="height:295px; width:251px; background-color: #bd252c;background-repeat:no-repeat;float:left; ">
                <CENTER>
                    <TABLE BORDER="0" WIDTH="210" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD ALIGN="center" VALIGN="top" height="8"></TD>
                        </TR>
                        <TR>
                            <TD ALIGN="center" VALIGN="top"><h2 style="font-size:25px;line-height:25px;color:#fff">Contact us for a free quote <br>1-855 GO RZCLN (467-9256)</h2></TD>
                        </TR>
                        <TR>
                            <TD ALIGN="center" VALIGN="top" class="tahoma11">
                                
                                <form id="contactform1" method="post" action="">
                                    <TABLE BORDER="0" CELLSPACING="2" CELLPADDING="0">
                                        <TR>
                                            <TD colspan=2 ALIGN="left" VALIGN="middle" class="tahoma11">Fill in your name, phone and email and we will contact you to discuss your needs<BR><BR></TD>
                                        <div id="rspstatus2"></div>
                                        </TR>
                                        <TR>
                                            <TD ALIGN="left" VALIGN="middle">Name*:</TD>
                                            <TD ALIGN="left" VALIGN="middle">
                                                <input class="input" size="28" required type=text name="contact_name" style="width: 189px;">
                                                <input class="input" size="28" type="hidden" value="Security" name="service_category" style="width: 189px;">
                                                <input class="input" size="28" type="hidden" value="" name="contact_message" style="width: 189px;">
                                                <input class="input" size="28" type="hidden" value="Quote" name="InquiryType" style="width: 189px;">
                                            </TD>
                                        </TR>
                                        <TR>
                                            <TD ALIGN="left" VALIGN="middle">Phone*:</TD>
                                            <TD ALIGN="left" VALIGN="middle"><input class="input" required size="28" type=text name="contact_phone" style="width: 189px;"></TD>
                                        </TR>
                                        <TR>
                                            <TD ALIGN="left" VALIGN="middle">Email*:</TD>
                                            <TD ALIGN="left" VALIGN="middle"><input required class="input" size="28" type=text name="contact_email" style="width: 189px;"></TD>
                                        </TR>
                                        <TR>
                                            <TD colspan=2 align=center valign="top">
                                                <input type="image" src="<?php echo base_url()?>media/landing-pages/security/images/submit.png" name="submit" value="submit"></TD>
                                        </TR>
                                    </TABLE>
                                </FORM>
                            </TD>
                        </TR>
                    </TABLE>
                </CENTER>
            </div>

            <DIV style="float:right; height:295px; width:684px;background-color: #FFF;">

                <TABLE BORDER="0" WIDTH="684" CELLSPACING="0" CELLPADDING="0">
                    <TR>
                        <TD ALIGN="center" VALIGN="top" BGCOLOR="#D2D2D2" HEIGHT="295" WIDTH="337">

                            <TABLE BORDER="0" WIDTH="270" CELLSPACING="0" CELLPADDING="0">
                                <TR>
                                    <TD ALIGN="left" VALIGN="top"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/home/learnmore.gif" ALT="Learn more about MG Security Services" WIDTH="230" HEIGHT="35" HSPACE="0" VSPACE="10" BORDER="0"></TD>
                                </TR>
                                <TR>
                                    <TD ALIGN="left" VALIGN="top" BGCOLOR="#000000">
                                        <!--url's used in the movie-->
                                        <!--text used in the movie-->
                                        <!-- saved from url=(0013)about:internet -->
                                        <script language="JavaScript" type="text/javascript">
                                            AC_FL_RunContent(
                                                    'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0',
                                                    'width', '274',
                                                    'height', '224',
                                                    'src', 'mgs_video',
                                                    'quality', 'high',
                                                    'pluginspage', 'http://www.adobe.com/go/getflashplayer',
                                                    'align', 'middle',
                                                    'play', 'true',
                                                    'loop', 'true',
                                                    'scale', 'showall',
                                                    'wmode', 'window',
                                                    'devicefont', 'false',
                                                    'id', 'mgs_video',
                                                    'bgcolor', '#000000',
                                                    'name', 'mgs_video',
                                                    'menu', 'true',
                                                    'allowFullScreen', 'false',
                                                    'allowScriptAccess', 'sameDomain',
                                                    'movie', 'mgs_video',
                                                    'salign', ''
                                                    ); //end AC code
                                        </script>
                                        <noscript>
                                            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="274" height="224" id="mgs_video" align="middle">
                                                <param name="allowScriptAccess" value="sameDomain" />
                                                <param name="allowFullScreen" value="false" />
                                                <param name="movie" value="mgs_video.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" />	<embed src="mgs_video.swf" quality="high" bgcolor="#000000" width="274" height="224" name="mgs_video" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
                                            </object>
                                        </noscript>
                                    </TD>
                                </TR>
                            </TABLE>



                        </TD>
                        <TD ALIGN="center" VALIGN="top" WIDTH=7></TD>
                        <TD ALIGN="center" VALIGN="top" BGCOLOR="#d2d2d2">


                            <TABLE BORDER="0" WIDTH="280" CELLSPACING="0" CELLPADDING="0">
                                <TR>
                                    <TD ALIGN="left" VALIGN="top" style="line-height:14px;"><IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/home/inthenews.gif" ALT="MG Security Services In the News" WIDTH="230" HEIGHT="35" HSPACE="0" VSPACE="10" BORDER="0"><BR>
                                        <IMG SRC="<?php echo base_url()?>media/landing-pages/security/images/blank.gif" ALT="" WIDTH="1" HEIGHT="6" HSPACE="0" VSPACE="0" BORDER="0"><BR>





                                        <!-- INSERT NEWS ARTICLCES HERE -->	


                                        <a href="http://www.fox5ny.com/news/245523787-story/" target="_blank">Feds worried about laptop bombs on planes (03/2017)</A><BR><BR>
                                        <a href="http://newyork.cbslocal.com/2017/03/31/terrorist-laptop-bomb-threat/" target="_blank">Terrorist Groups Testing Laptop Bomb That Can Evade Airport Security, Officials Say (03/2017)</A><BR><BR>
                                        <a href="https://archive.org/details/KPIX_20170322_003000_CBS_Evening_News_With_Scott_Pelley/start/180/end/240" target="_blank">Banning Laptops (03/2017)</A><BR><BR>
                                        <a href="http://www.cbsnews.com/news/how-u-s-authorities-are-trying-to-keep-pedestrians-safe-from-vehicle-attacks/" target="_blank">How U.S. authorities are trying to keep pedestrians safe from vehicle attacks (03/2017)</A><BR><BR>




                                        <a href="http://newyork.cbslocal.com/2017/01/30/delta-flights-system-outage/" target="_blank">Delta Flights Returning To Normal After System Outage (02/2017)</A>





                                        <!-- INSERT NEWS ARTICLES HERE -->		






                                    </TD>
                                </TR>
                            </TABLE>




                        </TD>
                    </TR>
                </TABLE>

            </DIV>
           <?php $this->load->view('partials/l_footer')?>