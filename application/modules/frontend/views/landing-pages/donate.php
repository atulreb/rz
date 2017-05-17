                <!-- Place somewhere in the <body> of your page -->
                
               
        <div id="pop2" class="simplePopup">
            <h3>Donate and start helping today!</h3>
            <form action="<?php echo base_url()?>frontend/donate/donate" method="POST">
                <br/>
                <b>$</b><input type="hidden" name="id" id='charity_id' value=''>
                <input type="number" value="" name="amount" required="required" step=".1">
                <input type="submit" value="Donate Now" name="submit">
            </form>
        </div>
        