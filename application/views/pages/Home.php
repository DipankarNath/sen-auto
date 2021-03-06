<!--page title start-->
<section class="page-title  ptb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title text-uppercase">Search By Body Type</h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!-- grid gutter-less style start -->
<section class="padding-bottom-50">
    <div class="container">
        <div class="clients-grid no-gutter">
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="<?php base_url()?>View/category/1">
                        <img src="assets/img/truck/cargo.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->

            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="<?php base_url()?>View/category/2">
                        <img src="assets/img/truck/trucking-1.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-6.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-7.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-9.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-17.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->

            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-26.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->

            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-12.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-10.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-8.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-5.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->
            <div class="col-md-2 col-sm-6">
                <div class="border-box brand-hover">
                    <a href="#">
                        <img src="assets/img/truck/trucking-3.svg" alt="clients" style="width: 177px">
                    </a>
                </div><!-- /.border-box -->
            </div><!-- /.col-md-2 -->

        </div><!-- /.clients-grid -->

    </div><!-- /.container -->
</section>
<!-- grid gutter-less style end -->

<section class="">
    <div class="container">
        <div class="text-center mb-80">
            <h2 class="section-title text-uppercase">Recommended Vehicles</h2>
        </div>

        <div class="row">
            <?php foreach($recomSetOne as $RowOne) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <a href="#"><img src="<?php echo $RowOne->Path; ?>" class="img-responsive" alt="Image"></a>
                        </div><!-- /.team-img -->

                        <div class="team-title">
                            <h3><a href="#"><?php echo $RowOne->Pr_name; ?></a></h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Price</th>
                                            <td>ASK</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Other</th>
                                            <td><?php echo $RowOne->Description; ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.team-title -->

                        <ul class="team-social-links list-inline text-center">
                            <a class="waves-effect waves-light btn pink">
                                <i class="material-icons right">&#xE5C8;</i> Know More</a>
                        </ul>

                    </div><!-- /.team-wrapper -->
                </div><!-- /.col-md-4 -->
            <?php  } ?>
        </div>
        <div class="row">
            <?php foreach($recomSetTwo as $RowTwo) { ?>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <a href="#"><img src="<?php echo $RowTwo->Path; ?>" class="img-responsive" alt="Image"></a>
                        </div><!-- /.team-img -->

                        <div class="team-title">
                            <h3><a href="#"><?php echo $RowTwo->Pr_name; ?></a></h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Price</th>
                                            <td>ASK</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Other</th>
                                            <td><?php echo $RowTwo->Description; ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.team-title -->

                        <ul class="team-social-links list-inline text-center">
                            <a class="waves-effect waves-light btn pink">
                                <i class="material-icons right">&#xE5C8;</i> Know More</a>
                        </ul>

                    </div><!-- /.team-wrapper -->
                </div><!-- /.col-md-4 -->
            <?php  } ?>
        </div>
    </div>
</section>

<section class="banner-5 bg-fixed parallax-bg overlay dark-5 padding-top-50" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row mb-20">
            <col-md-6 class="col-md-offset-6 text-center">
                <h2 class="section-title text-uppercase white-text">What's New</h2>
            </col-md-6>
        </div>
        <div class="row equal-height-row mb-50">
            <div class="col-md-6">
                <div id="client-testimonial" class="carousel slide carousel-testimonial text-center gray-bg" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="avatar">
<!--                                <img src="assets/img/quote-dark.png" alt="Customer Thumb">-->
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Nissan Diesel / Dump / H17 year (vehicle inspection equipped.) </li>
                                    <li>Nissan Diesel (vehicle inspection equipped.) </li>
                                    <li>Nissan Diesel H17 year (vehicle inspection equipped.) </li>
                                </ul>
                                <div class="testimonial-meta brand-color">
                                    14-07-2017
                                    <span>New Vechicle Added</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="avatar">
<!--                                <img src="assets/img/quote-dark.png" alt="Customer Thumb">-->
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Nissan Diesel / Dump / H17 year (vehicle inspection equipped.) </li>
                                    <li>Nissan Diesel (vehicle inspection equipped.) </li>
                                    <li>Nissan Diesel H17 year (vehicle inspection equipped.) </li>
                                </ul>
                                <div class="testimonial-meta brand-color">
                                    14-07-2017
                                    <span>New Vechicle Added</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="avatar">
<!--                                <img src="assets/img/quote-dark.png" alt="Customer Thumb">-->
                            </div>
                            <div class="content">
                                <ul>
                                    <li>Nissan Diesel / Dump / H17 year (vehicle inspection equipped.) </li>
                                    <li>Nissan Diesel (vehicle inspection equipped.) </li>
                                    <li>Nissan Diesel H17 year (vehicle inspection equipped.) </li>
                                </ul>
                                <div class="testimonial-meta brand-color">
                                    14-07-2017
                                    <span>New Vechicle Added</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#client-testimonial" role="button" data-slide="prev">
                        <span class="material-icons" aria-hidden="true">&#xE5C4;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#client-testimonial" role="button" data-slide="next">
                        <span class="material-icons" aria-hidden="true">&#xE5C8;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-5 hero-thumb equal-height-column">
                <img src="assets/img/af.png" class="img-responsive " alt="Image">
            </div>
        </div>
    </div><!-- /.container -->
</section>