
<!--page title end-->

<!-- contact-form-section -->
<section class="section-padding">

    <div class="container">

        <div class="text mb-80">
            <h2 class="text-uppercase"><i class="fa fa-check-square-o"></i> Inquiry Contents</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url()?>Email/inquery" method="POST">

                    <div class="row">
                        <div class="col-md-offset-4 col-md-4">
<!--                            --><?php //if ($this->session->flashdata('emailFaild')) {?>
<!--                            <p class="text-danger"></p>-->
<!--                            --><?php //} ?>
<!--                            --><?php //if ($this->session->flashdata('emailSucc')) {?>
<!--                                <p class="text-success"></p>-->
<!--                            --><?php //} ?>
                        </div>
                        <div class="col-md-12">
                            <div class="input-field">
                                    <input type="text" name="cname" class="validate" id="name">
                                <label for="carname">Car Name <span class="text-danger"> (required)</span></label>
                            </div>

                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->

                    <div class="input-field">
                        <textarea name="message" id="inquiry" class="materialize-textarea" ></textarea>
                        <label for="inquiry">Inquiry  <a href="#" rel="tooltip" title="- I want to listen to the vehicle condition in detail &#013;- I want a quote &#013;- How much is the car inspection cost?&#013;- How many days can you deliver?&#013;- Others (Please Specify)"><i class="fa fa-info-circle"></i></a><span class="text-danger"> (required) </span>
                        </label>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="name" type="text" name="name" class="validate" required>
                                <label for="name">Name <span class="text-danger"> (required) </span></label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="Phonetic" type="text" name="phonetic" class="validate" required>
                                <label for="Phonetic">Phonetic <span class="text-danger"> (required) </span></label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="phone" type="text" name="phone" class="validate" required>
                                <label for="phone">Phone Number <span class="text-danger"> (required) </span></label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="email" type="email" name="email" class="validate" >
                                <label for="email">Email address</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-2">
                            <div class="input-field">
                                <label for="">Trade-in car :</label>
                            </div>
                        </div><!-- /.col-md-2 -->

                        <div class="col-md-2">
                            <div class="input-field">
                                <input id="there" type="radio" name="optradio" value="present">
                                <label for="there">Is There</label>
                            </div>
                        </div><!-- /.col-md-2 -->

                        <div class="col-md-2">
                            <div class="input-field">
                                <input id="abs" type="radio" name="optradio" value="absent">
                                <label for="abs">Absent</label>
                            </div>
                        </div><!-- /.col-md-2 -->
                    </div><!-- /.row -->
                    <div class="text mtb-50">
                        <h5 ><i class="fa fa-circle-o"></i> The contents you entered will be used for the exchange of the information on used cars.</h5>
                        <h5 ><i class="fa fa-circle-o"></i> This page protects your personal information by SSL encrypted communication.</h5>
                    </div>



                    <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30 mb-sm-30">Send</button>
                </form>
            </div><!-- /.col-md-12 -->

        </div><!-- /.row -->
    </div>
</section>
<!-- contact-form-section End -->