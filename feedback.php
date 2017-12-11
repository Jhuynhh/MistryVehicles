<!--Feedback Form HTML START -->
<style>
    #mrova-feedback {
        background-color: black;
    }
</style>
<div id="mrova-feedback" style="z-index: 2; right: -420px;">
    <div id="mrova-form">
        <form id="mrova-contactform" action="FeedbackSaveAndDisplay.php" method="post">
            <div class="row">
                <div class="col-11">
                    <div class="form-group">
                        <label>Your Name*</label>
                        <input type="text" name="mrova-name" class="required form-control" id="mrova-name" value="">
                    </div>
                    <div class="form-group">
                        <label>Enter a score*</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" ID="SCORE" name="rating" value="5" checked> 5
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" ID="SCORE" name="rating" value="4"> 4
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" ID="SCORE" name="rating" value="3"> 3
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" ID="SCORE" name="rating" value="2"> 2
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" ID="SCORE" name="rating" value="1"> 1
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Select a Product*</label>
                        <select class="form-control" name="carlist">
                            <option value="volvo">2018 Toyota Supra</option>
                            <option value="saab">2018 Lexus IS</option>
                            <option value="opel">2018 Audi</option>
                            <option value="audi">2018 BMW</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter your age*</label>
                        <input type="number" name="age" class="required form-control" value="" min="18">
                        <p>MUST BE 18 OR OLDER TO SUBMIT</p>
                    </div>
                    <div class="form-group">
                        <label>Message*</label>
                        <textarea class="form-control required" id="mrova-message" name="mrova-message" rows="2" cols="30"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="mrova-img-control"></div>
</div>
