<!DOCTYPE html>
<html>

<head>
    <title>COVID-19 Online Assessment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            padding: 50px 0;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="/">Home</a>
                <h2>COVID-19 Risk Self-assessment Program</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm">
                <h4>Please answer the following question correctly to accurately assess your condition.</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <form class="was-validated">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group" id="nameform">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" placeholder="Enter your full name here"
                                    id="name" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group" id="ageform">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" placeholder="Enter your age here" id="age"
                                    required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="selectsex">
                        <div class="col-sm">
                            <label for="sex">Sex:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optsex" id="sexm" value="m" required>
                                <label class="form-check-label" for="sexm">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optsex" id="sexf" value="f" required>
                                <label class="form-check-label" for="sexf">Female</label>
                                <div class="invalid-feedback" style="margin-left: 1em">Please choose an option.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="" id="marriage">Are you married?
                        </label>
                    </div>
                    <hr>
                    <div class="row" id="q1">
                        <div class="col-sm">
                            <label for="q2">1. Have you recently traveled to an area with known local spread of
                                COVID-19?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq1" id="optq1y" value=true
                                    required>
                                <label class="form-check-label" for="optq1y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq1" id="optq1n" value=false
                                    required>
                                <label class="form-check-label" for="optq1n">No</label>
                                <div class="invalid-feedback" style="margin-left: 1em">Please choose an option.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q2">
                        <div class="col-sm">
                            <label for="q2">2. Have you come into close contact (within 6 feet) with someone who has a
                                laboratory confirmed COVID-19 diagnosis in the past 14 days?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq2" id="optq2y" value=true
                                    required>
                                <label class="form-check-label" for="optq2y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq2" id="optq2n" value=false
                                    required>
                                <label class="form-check-label" for="optq12n">No</label>
                                <div class="invalid-feedback" style="margin-left: 1em">Please choose an option.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q3">
                        <div class="col-sm">
                            <label for="q3">3. Do you have a fever (greater than 100.4?? F or 38.0?? C) OR symptoms of
                                lower
                                respiratory illness such as cough, shortness of breath, difficulty breathing or sore
                                throat?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq3" id="optq3y" value=true
                                    required>
                                <label class="form-check-label" for="optq3y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq3" id="optq3n" value=false
                                    required>
                                <label class="form-check-label" for="optq3n">No</label>
                                <div class="invalid-feedback" style="margin-left: 1em">Please choose an option.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row" id="q4">
                        <div class="col-sm">
                            <label for="q4">4. Are you a first responder, healthcare worker, or employee or attendee of
                                a child or adult care facility?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq4" id="optq4y" value=true
                                    required>
                                <label class="form-check-label" for="optq4y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq4" id="optq4n" value=false
                                    required>
                                <label class="form-check-label" for="optq4n">No</label>
                                <div class="invalid-feedback" style="margin-left: 1em">Please choose an option.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <form class="was-validated">
                        <div class="form-check">
                            <label class="form-check-label" id="truthcheck">
                                <input type="checkbox" class="form-check-input" value="" id="truth" required>I have
                                answered these question correctly.
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                            </label>
                        </div>
                    </form>
                    <br>
                    <button type="submit" class="btn btn-primary" id="btnsubmit">Submit</button>
                    <script>
                        $(document).ready(function() {
                            $(".invalid-feedback").hide();
                            $("#btnsubmit").click(function() {
                                var name = $("#name").val();
                                var age = $("#age").val();
                                var sex = $("#selectsex input:radio:checked").val();
                                var marriage = $("#marriage").is(":checked");
                                var truecheck = $("#truth").is(":checked");
                                var spc = name.indexOf(" ");
                                var lname = name.substring(spc, name.length);
                                $("#lname").text(lname);
                                const ansList = [];
                                var q1 = $("#q1 input:radio:checked").val();
                                ansList.push(q1);
                                var q2 = $("#q2 input:radio:checked").val();
                                ansList.push(q2);
                                var q3 = $("#q3 input:radio:checked").val();
                                ansList.push(q3);
                                var q4 = $("#q4 input:radio:checked").val();
                                ansList.push(q4);
                                var score = 0;
                                ansList.forEach(x => {
                                    if (x == "true") {
                                        score++
                                    }
                                });
                                if (sex == "m" && age > 25) {
                                    $("#sal").text("Mr.");
                                } else if (sex == "f" && age > 25 && marriage == false) {
                                    $("#sal").text("Miss");
                                } else if (sex == "f" && age > 25 && marriage == true) {
                                    $("#sal").text("Mrs.");
                                } else {
                                    $("#sal").text("");
                                }
                                if (score >= 3) {
                                    $("#rec").text("You may need COVID-19 testing.");
                                } else if (score == 2) {
                                    if (ansList[2] == "true") {
                                        $("#rec").text("You may need COVID-19 testing.");
                                    } else if (ansList[0] == "true" && ansList[1] == "true") {
                                        $("#rec").text("Self-quarantine at home.");
                                    } else {
                                        $("#rec").text("Your symptoms may or may not be related to COVID-19.");
                                    }
                                } else if (score == 1) {
                                    if (ansList[0] == "true" && ansList[1] == "true") {
                                        $("#rec").text("Self-quarantine at home.");
                                    } else if (ansList[2] == "true") {
                                        $("#rec").text("Your symptoms may or may not be related to COVID-19.");
                                    } else {
                                        $("#rec").text("Practice social distancing and watch for symptoms.");
                                    }
                                } else {
                                    $("#rec").text("Practice social distancing and watch for symptoms.");
                                }
                                if (name != "" && age != "" && sex != null && truecheck != false && q1 != null && q2 !=
                                    null && q3 != null && q4 != null) {
                                    $("html, body").animate({
                                        scrollTop: $("html, body").get(0).scrollHeight
                                    }, 10);
                                    $("#ans").slideDown();
                                }
                                if (name == "") {
                                    $("#nameform .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                                if (age == "") {
                                    $("#ageform .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                                if (sex == null) {
                                    $("#selectsex .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                                if (truecheck == false) {
                                    $("#truthcheck .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                                if (q1 == null) {
                                    $("#q1 .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                                if (q2 == null) {
                                    $("#q2 .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                                if (q3 == null) {
                                    $("#q3 .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                                if (q4 == null) {
                                    $("#q4 .invalid-feedback").show();
                                    $("#ans").hide();
                                }
                            });
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="ans">
        <div class="row">
            <script>
                $(document).ready(function() {
                    $("#ans").hide();
                });
            </script>
            <div class="col-sm">
                <hr>
                <h4>Dear <span id="sal"></span> <span id="lname"></span>,</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h5>Our recommendation is:</h5>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <h4 id="rec"></h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <h7>Be safe!</h7>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h7>Thank you.</h7>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <small>For more info about COVID-19, click <a
                        href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/question-and-answers-hub/q-a-detail/coronavirus-disease-covid-19">here</a></small>
                <br>
                <a href="/">Home</a>
            </div>
        </div>
    </div>
</body>

</html>
