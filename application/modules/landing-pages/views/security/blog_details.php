<?php $this->load->view('partials/l_header') ?>
<DIV id="panels">
    <DIV id="sidenav">
        <div id="security" style="height:94px;  width: 241px;
    margin-bottom: 5px;" >
            <TABLE BORDER="0" WIDTH="251" CELLSPACING="0" CELLPADDING="0">
                <TR>
                    <TD WIDTH="20" rowspan=2></TD>
                    <TD ALIGN="left" VALIGN="top" colspan=2><IMG SRC="<?php echo base_url() ?>media/landing-pages/security/images/sidenav/security2.png" ALT="Security" WIDTH="204" HEIGHT="20" HSPACE="0" VSPACE="12" BORDER="0"></TD>
                </TR>
                <TR>
                    <TD WIDTH="10"></TD>
                    <TD ALIGN="left" VALIGN="top"><h1>One of the most respected security companies</h1></TD>
                </TR>

            </TABLE>	
        </div>

        <div id="investigations" style="height:94px;  width: 241px;
    margin-bottom: 5px;" >
            <TABLE BORDER="0" WIDTH="251" CELLSPACING="0" CELLPADDING="0">
                <TR>
                    <TD WIDTH="20" rowspan=2></TD>
                    <TD ALIGN="left" VALIGN="top" colspan=2><IMG SRC="<?php echo base_url() ?>media/landing-pages/security/images/sidenav/investigations.png" ALT="Private detective" WIDTH="118" HEIGHT="20" HSPACE="0" VSPACE="12" BORDER="0"></TD>
                </TR>
                <TR>
                    <TD WIDTH="10"></TD>
                    <TD ALIGN="left" VALIGN="top"><h2>One of the premier private detective agencies</h2></TD>
                </TR>
            </TABLE>
        </div>

        <div id="permits"  style="height:94px;  width: 241px;
    margin-bottom: 5px;" >
            <TABLE BORDER="0" WIDTH="251" CELLSPACING="0" CELLPADDING="0">
                <TR>
                    <TD WIDTH="20" rowspan=2></TD>
                    <TD ALIGN="left" VALIGN="top" colspan=2><IMG SRC="<?php echo base_url() ?>media/landing-pages/security/images/sidenav/eventpermits.png" ALT="Event Security and Permits" WIDTH="112" HEIGHT="19" HSPACE="0" VSPACE="12" BORDER="0"></TD>
                </TR>
                <TR>
                    <TD WIDTH="10"></TD>
                    <TD ALIGN="left" VALIGN="top"><h2>Your source for event permits anywhere in the city</h2></TD>
                </TR>

            </TABLE>
        </div>






        <IMG SRC="<?php echo base_url() ?>media/landing-pages/security/images/blank.gif" ALT="" WIDTH="1" HEIGHT="7" HSPACE="0" VSPACE="0" BORDER="0">	

       <div style="height:295px; width:251px; background-color: #bd252c;background-repeat:no-repeat;float:left; ">
                <center>
                    <table border="0" width="210" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <td align="center" valign="top" height="8"></td>
                        </tr>
                        <tr>
                            <td align="center" valign="top"><h2 style="font-size:25px;line-height:25px;color:#fff">Contact us for a free quote <br>1-855 GO RZCLN (467-9256)</h2></td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" class="tahoma11">
                                
                                <form id="contactform1" method="post" action="">
                                    <div id="rspstatus2"></div><table border="0" cellspacing="2" cellpadding="0">
                                        <tbody><tr>
                                            <td colspan="2" align="left" valign="middle" class="tahoma11">Fill in your name, phone and email and we will contact you to discuss your needs<br><br></td>
                                        
                                        </tr>
                                        <tr>
                                            <td align="left" valign="middle">Name*:</td>
                                            <td align="left" valign="middle">
                                                <input class="input" size="28" required="" type="text" name="contact_name" style="width: 189px;">
                                                <input class="input" size="28" type="hidden" value="Security" name="service_category" style="width: 189px;">
                                                <input class="input" size="28" type="hidden" value="" name="contact_message" style="width: 189px;">
                                                <input class="input" size="28" type="hidden" value="Quote" name="InquiryType" style="width: 189px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="middle">Phone*:</td>
                                            <td align="left" valign="middle"><input class="input" required="" size="28" type="text" name="contact_phone" style="width: 189px;"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="middle">Email*:</td>
                                            <td align="left" valign="middle"><input required="" class="input" size="28" type="text" name="contact_email" style="width: 189px;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center" valign="top">
                                                <input type="image" src="http://54.209.190.106/Razorclean/media/landing-pages/security/images/submit.png" name="submit" value="submit"></td>
                                        </tr>
                                    </tbody></table>
                                </form>
                            </td>
                        </tr>
                    </tbody></table>
                </center>
            </div>





    </div>





    <DIV id="photo">


        <TABLE BORDER="0" WIDTH="650" CELLSPACING="0" CELLPADDING="0">
            <TR>
                <TD ALIGN="left" VALIGN="top" WIDTH="20"></TD>
                <TD ALIGN="left" VALIGN="top"><BR>
                    <span style="font-family: Arial, Helvetica, Sans-serif; font-size: 28px; line-height: 28px; font-style: bold; font-weight: bold;text-decoration: none;color:#000066"><?php echo $blog_details[0]['post_title'] ?></span>
                </TD>
            </TR>


            <TR>
                <TD ALIGN="left" VALIGN="top" WIDTH="20"></TD>
                <TD ALIGN="left" VALIGN="top">
                    <BR><IMG SRC="<?php echo base_url() ?>media/landing-pages/security/images/blackpixel.gif" ALT="" WIDTH="600" HEIGHT="1" HSPACE="0" VSPACE="10" BORDER="0"><BR><BR>
                </TD>
            </TR>
            <TR>
                <TD ALIGN="left" VALIGN="top" WIDTH="20"></TD>
                <TD ALIGN="left" VALIGN="top">
                    <TABLE BORDER="0" WIDTH="600" CELLSPACING="0" CELLPADDING="0">
                        <TR>
                            <TD ALIGN="center" VALIGN="top">
                                <img src="<?php echo base_url() . "uploads/blogs/540x360/" . $blog_details[0]['blog_image'] ?>"></td>

                        </TR>
                        <tr>
                            <TD ALIGN="center" style="text-align:justify" VALIGN="top"><p><?php echo $blog_details[0]['post_content'] ?></p></TD>
                        </tr>

                    </TABLE>




                    <BR><BR><BR><BR>

                </TD>
            </TR>					</TABLE>			




    </div>

</div><?php $this->load->view('partials/l_footer') ?>