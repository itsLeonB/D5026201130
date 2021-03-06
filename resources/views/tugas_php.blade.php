<!DOCTYPE html>
<html>

<head>
    <title>COVID-19 Online Assessment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            padding: 50px 0;
        }
    </style>
</head>

<body>
    <div class="container" id="questions">
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
                <form action="results" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group" id="nameform">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="John Doe"
                                    pattern="[A-Za-z/s].{1,}" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group" id="ageform">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="xx" required>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="selectsex">
                        <div class="col-sm">
                            <label for="sex">Sex:</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optsex" value="m" required>
                                <label class="form-check-label" for="sexm">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optsex" value="f" required>
                                <label class="form-check-label" for="sexf">Female</label>
                                <div class="invalid-feedback" style="margin-left: 1em">Please choose an option.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type='hidden' value=false name="marriage">
                            <input type="checkbox" class="form-check-input" value=true name="marriage" id="marriage">Are
                            you married?
                        </label>
                    </div>
                    <hr>
                    <div class="row" id="q1">
                        <div class="col-sm">
                            <label for="q2">1. Have you recently traveled to an area with known local spread of
                                COVID-19?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq1" value="1" required>
                                <label class="form-check-label" for="optq1y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq1" value="0" required>
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
                                <input class="form-check-input" type="radio" name="optq2" value="1" required>
                                <label class="form-check-label" for="optq2y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq2" value="0" required>
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
                                <input class="form-check-input" type="radio" name="optq3" value="1" required>
                                <label class="form-check-label" for="optq3y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq3" value="0" required>
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
                                <input class="form-check-input" type="radio" name="optq4" value="1" required>
                                <label class="form-check-label" for="optq4y">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="optq4" value="0" required>
                                <label class="form-check-label" for="optq4n">No</label>
                                <div class="invalid-feedback" style="margin-left: 1em">Please choose an option.</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label" id="truthcheck">
                            <input type="checkbox" class="form-check-input" value="" id="truth" required>I have
                            answered these question correctly.
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" id="btnsubmit">Submit</button>
                    <script>
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                var forms = document.getElementsByClassName('needs-validation');
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
