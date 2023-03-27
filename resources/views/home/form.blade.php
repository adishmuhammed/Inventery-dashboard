<section class="contact-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.41430872910155!2d75.90371673051716!3d11.434455530034194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba668a13c4fccc5%3A0x7a200f521054aba0!2sSAHAYI%20DIALYSIS%20CENTRE!5e0!3m2!1sen!2sin!4v1679893501517!5m2!1sen!2sin"
                    width="100%" height="600pd" style="border:0;" allowfullscreen="true" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col col-md-6">
                <div class="section-title-s4">
                    <h2>Become a volunteer</h2>
                    <p>If you are interested in volunteering at Sahayi Dialysis Center, please fill out the online
                        application form</p>
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
                            <label for="business">Become a volunteer in</label>
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
