@include('header')
<div class="container" style="margin-top: 100px">
    <div class="row bg-primary text-white text-center pt-2 pb-2 mb-3">
        <div class="col">
            <h1>Search Property Buyers</h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-6">
            <div class="card p-3">
                <form action="">
                    <div class="form-group mt-2">
                        <label for=""><strong>Property for </strong></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Buy</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Rent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                value="option3">
                            <label class="form-check-label" for="inlineRadio3">PG</label>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for=""><strong>Property Type</strong></label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mt-2">
                                <label for=""><strong>Budget</strong></label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mt-2">
                                <label for=""><strong>City</strong></label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group mt-2">
                        <h1><strong>Contact Details</strong></h1>
                        <hr>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">I am</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Agent</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Builder</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                value="option3">
                            <label class="form-check-label" for="inlineRadio3">Owner</label>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for=""><strong>Email</strong></label>
                        <input type="email" name="" id="" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mt-2">
                                <label for=""><strong>Name</strong></label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mt-2">
                                <label for=""><strong>Mobile No.</strong></label>
                                <input type="number" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="form-group mt-2">
                        <div>
                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value=""
                                aria-label="..."> <span> Yes I agree to the <b>Terms & Conditions</b></span>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-dark form-control">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card p-2">
                <h1>Why Search Property Buyers ?</h1>
                <p> We help you to find the Property buyers</p>
                <p> Get Genuine Property Buyers</p>
                <p> Select Property Buyers city wise</p>
                <p> Save Your Money & Time</p>
            </div>
        </div>
    </div>
</div>
@include('footer')
