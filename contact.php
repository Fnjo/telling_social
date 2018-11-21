<?php
$page = "contact";
include 'includes/header.php';
?>
    <div class="container contactPage rowmargins">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center text-md-left">Contact us</h2>
            </div>
            <div class="col-12 col-md-7">
                <h3 class="text-center text-md-left">How can we help you?</h3>
                <form method="POST" action="contactform.php">
                    <div class="form-group row">
                        <label for="contact-name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="naam" class="form-control" id="contact-name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact-email" class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="contact-email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact-number" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" id="contact-number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact-message" class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="message" id="contact-message" required></textarea>
                        </div>
                    </div>

                    <input type="submit" name="send" class="btn btn-primary contactbtn"/>

                </form>
            </div>
            <div class="col-12 offset-0 col-md-4 offset-md-1 otherContact">
                <h3 class="text-center text-md-left">You can also contact us through e-mail and phone</h3>
                <div class="row">
                    <div class="col-2 offset-2 col-sm-2 offset-sm-0">
                        <img class="mail_img" src="img/envelope.png" alt="e-mail"/>
                    </div>
                    <p class="col-6 col-sm-9"><a href="mailto:info@tellinginsights.com">info@tellinginsights.com</a></p>
                    <div class="col-2 offset-2 col-sm-2 offset-sm-0">
                        <img class="smartphone_img" src="img/smartphone.png" alt="phone"/>
                    </div>
                    <p class="col-6 col-sm-9">+31 6 42905511</p>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    <!-- Modal -->
    <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content contact-modal">
                <!--<div class="modal-header">-->
                <!--<h5 class="modal-title" id="exampleModalLongTitle">Request a demo</h5>-->
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--<span aria-hidden="true">&times;</span>-->
                <!--</button>-->
                <!--</div>-->
                <div class="modal-body contact-modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 text-center"><h2>Request a demo</h2></div>
                            <div class="col-lg-5 offset-lg-1 text-center">
                                <form method="POST" action="requestDemo.php">
                                    <div class="form-group">
                                        <input type="text" name="naam" class="form-control" id="contact-name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="contact-email" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="contact-number" placeholder="Phone number" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="company" class="form-control" id="company-company" placeholder="Company name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="page" class="form-control" id="company-page" placeholder="Facebook page name (optional)">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="contact-message" placeholder="Additional message"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="send" class="btn btn-primary contactbtn"/>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-5">
                                <p>Fill in your information and we will contact you as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END MODAL -->
</body>
</html>