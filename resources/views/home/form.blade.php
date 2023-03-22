<section class="contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="contact-location-map" id="map"></div>
            </div>
            <div class="col col-md-6">
                <div class="section-title-s4">
                    <h2>Request a call back</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi
                        dunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="contact-form">
                    <form method="post" id="contact-form" class="form row contact-validation-active">
                        <div class="col col-sm-6">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="col col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col col-sm-6">
                            <label for="phone">Phone No</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col col-sm-6">
                            <label for="business">Business Type</label>
                            <select name="business" id="business" class="form-control">
                                <option selected disabled>Select one</option>
                                <option>Select number 1</option>
                                <option>Select number 2</option>
                                <option>Select number 3</option>
                            </select>
                        </div>
                        <div class="col col-xs-12 submit-btn">
                            <button type="submit">Submit</button>
                            <div id="loader">
                                <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                            </div>
                        </div>
                        <div class="error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later.
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
