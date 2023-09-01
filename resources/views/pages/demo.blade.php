<div class="col-lg-4 order-lg-2 order-1">
    <div class="invest-cal-wrapper">
        <h4 class="title"><i class="fa fa-calculator"></i> Investment Calculator</h4>

        <div class="calculate-form">
            <div class="mb-4">
                <input type="hidden" name="id" value="7">
                <label>Investment</label>

                <div class="icon-field ">
                    <input type="text" name="amount" class="form-control amount is-valid" placeholder="Enter Amount" id="amount">
                    <i class="bi bi-currency-dollar"></i>
                </div>



                <small class="text-secondary"><i class="bi bi-info-circle"></i>
                    Min Investment

                    <span>
                                                5,000.00 EUR</span>


                </small>
            </div>

            <div class="cal-details-list" id="profit"><table id="profit-table" class="table w-100">
                    <tbody><tr>
                        <td>Property</td>
                        <td>One-bedroom Apartment Close To A Mountain</td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td>5000 EUR</td>
                    </tr>
                    <tr>
                        <td>Payout Period</td>
                        <td>

                            Every Year For 3
                            Year

                        </td>
                    </tr>
                    <tr>
                        <td>Expected Rental Income</td>
                        <td>250 EUR</td>
                    </tr>
                    <tr>
                        <td>Capital Back</td>
                        <td>
                            YES
                        </td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>
                            750 + 5000
                            EUR

                        </td>


                    </tr>
                    </tbody></table></div>

            <div class="mt-3">
                <a href="{{ route('user.projectDetail', $property->id) }}" class="cmn-btn">Invest Now</a>
            </div>

        </div>

    </div>
</div>
