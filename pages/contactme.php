<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h1 class="modal-title" id="myModalLabel">CONTACT ME</h1>
</div>
<div id="contactform" class="modal-body">
    <form action="pages/mail.php" method="get">
        
        <label class="col-lg-3" for="firstname"><h4>First Name:</h4></label>
        <input class="col-lg-9" type="text" name="firstname" placeholder="First Name Here" autofocus required>
        <div style="clear:both"></div>
        
        <label class="col-lg-3" for="lastname" ><h4>Last Name:</h4></label>
        <input class="col-lg-9" type="text" name="lastname" placeholder="Last Name Here" required>
        <div style="clear:both"></div>
        
        <label class="col-lg-3" for="company" ><h4>Company:</h4></label>
        <input class="col-lg-9" type="text" name="company" placeholder="Company Name">
        <div style="clear:both"></div>
        
        <label class="col-lg-3" for="phonenumber" ><h4>Phone Number:</h4></label>
        <input class="col-lg-9" type="tel" name="phonenumber" placeholder="Optional">
        <div style="clear:both"></div>
        
        <label class="col-lg-3" for="email" ><h4>Email Address:</h4></label>
        <input class="col-lg-9" type="email" name="email" placeholder="Your Email Address" required>
        <div style="clear:both"></div>
        
        <label class="col-lg-3" for="subject" ><h4>Subject:</h4></label>
        <input class="col-lg-9" type="text" name="subject" placeholder="Your Reason For Contacting Me" required>
        <div style="clear:both"></div>
        
        <label class="col-lg-3" for="message" ><h4>Message:</h4></label>
        <textarea class="col-lg-9" name="message" rows="15" cols="40"></textarea>
        <div style="clear:both"></div>
        
        <div class="modal-footer">
            <input class="col-lg-4 btn-default" type="button" data-dismiss="modal" value="Close" />
            <input class="col-lg-4 col-lg-offset-4 btn-primary" type="submit" value="Submit"/>
        </div>
    </form>
</div>


</div> <!-- End Modal Content -->
</div> <!-- End Modal Dialog --> 