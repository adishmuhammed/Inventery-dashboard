<div class="donation-part bg-img">
    <div class="container">
        <div class="row">
            <div class="payment-part">
                <h3 class="heading-three">MAKE A DONATION</h3>
                <div class="img-box pay-option">
                    <img src="{{ asset("/image/payment1.png") }}" alt="online-pay">
                    <img src="{{ asset("/image/payment2.png") }}" alt="online-pay">
                    <img src="{{ asset("/image/payment3.png") }}" alt="online-pay">
                    <img src="{{ asset("/image/payment4.png") }}" alt="online-pay">
                    <img src="{{ asset("/image/payment5.png") }}" alt="online-pay" class="d-none">
                </div>
                <div class="payment-type">
                    <div class="form-check float-left">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="radio1" value="option1" checked>
                          <label class="form-check-label" for="radio1">Payment Type</label>
                    </div>
                    <div class="form-check float-left">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="radio2" value="option2">
                          <label class="form-check-label" for="radio2">Recurring</label>
                    </div>
                    <div class="donation-detail inline">
                        <form>
                              <div class="form-group float-left">
                                <label for="Select1">I Want to Donate for</label>
                                <select class="form-control" id="Select1">
                                      <option>Educate Children</option>
                                      <option>Healthy Food</option>
                                      <option>Water</option>
                                      <option>Home</option>
                                      <option>Other</option>
                                </select>
                              </div>
                              <div class="form-group float-left">
                                <label for="Select2">Currency</label>
                                <select class="form-control" id="Select2">
                                      <option>USD - U.S. Dollars</option>
                                      <option>INR - Indian Rupee</option>
                                      <option>AUD - Australian Dollars</option>
                                    <option>BRL - Brazilian Reais</option>
                                    <option>GBP - British Pounds</option>
                                    <option>HKD - Hong Kong Dollars</option>
                                    <option>HUF - Hungarian Forints</option>
                                    <option>INR - Indian Rupee</option>
                                    <option>ILS - Israeli New Shekels</option>
                                    <option>JPY - Japanese Yen</option>
                                    <option>MYR - Malaysian Ringgit</option>
                                </select>
                              </div>
                        </form>
                    </div>
                    <div class="pay-group">
                        <div class="form-group mb-0">
                              <label class="head-label mb-0">How much do you want to donate?</label>
                          </div>
                        <div class="form-check float-left">
                              <input class="form-check-input" type="radio" name="Radio" id="Radio1">
                              <label class="form-check-label" for="Radio1">$20</label>
                          </div>
                          <div class="form-check float-left">
                              <input class="form-check-input" type="radio" name="Radio" id="Radio2">
                              <label class="form-check-label" for="Radio2">$50</label>
                          </div>
                          <div class="form-check float-left">
                              <input class="form-check-input" type="radio" name="Radio" id="Radio3">
                              <label class="form-check-label" for="Radio3">$100</label>
                          </div>
                          <div class="form-check float-left">
                              <input class="form-check-input" type="radio" name="Radio" id="Radio4">
                              <label class="form-check-label" for="Radio4">$200</label>
                          </div>
                          <div class="form-check float-left">
                              <input class="form-check-input" type="radio" name="Radio" id="Radio5">
                              <label class="form-check-label" for="Radio5">$500</label>
                          </div>
                          <div class="form-check float-left">
                              <input class="form-check-input" type="radio" name="Radio" id="Radio6">
                              <label class="form-check-label" for="Radio6">Other Amount</label>
                        </div>
                    </div>
                    <a href="{{ url("#") }}" class="payment-done">DONATE NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>