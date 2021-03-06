<!DOCTYPE html>
<html>

<head>
    <title>Praktikum 2 - Form Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            padding: 25px;
        }

        #title {
            background-color: #fffcec;
            border-style: ridge;
            border-bottom: 0;
            border-radius: 10px 10px 0 0;
        }

        .row {
            margin: 0;
        }

        #form_body {
            border-style: ridge;
            border-top: 0;
            border-radius: 0 0 10px 10px;
        }

        .col-sm {
            padding: 15px;
        }

        h4 {
            text-align: center;
        }

        small {
            color: red;
        }

        form {
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-sm-4 mx-auto">
            <div class="row" id="title">
                <div class="col-sm">
                    <h4>JavaScript Form Validation</h4>
                </div>
            </div>
            <div class="row" id="form_body">
                <div class="col-sm">
                    <small>*All fields are mandatory*</small>
                    <form action="/" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" class="form-control" pattern="[A-Za-z\s]+" required>
                            <div class="invalid-feedback">Please use alphabets only.</div>
                        </div>
                        <div class="form-group">
                            <label for="uname">Username (6-8 characters):</label>
                            <input type="text" id="uname" class="form-control" pattern=".{6,8}" required>
                            <div class="invalid-feedback">Please use 6-8 characters long.</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            <div class="invalid-feedback">Email is invalid.</div>
                        </div>
                        <div class="form-group">
                            <label for="state">State:</label>
                            <select class="form-control" id="state" required>
                                <option value="" selected>State..</option>
                                <option>East Java</option>
                                <option>Central Java</option>
                                <option>West Java</option>
                            </select>
                            <div class="invalid-feedback">Please choose your state.</div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" class="form-control" required>
                            <div class="invalid-feedback">Please input your address</div>
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Zip Code:</label>
                            <input type="text" id="zipcode" class="form-control" pattern="[0-9]{6}" required>
                            <div class="invalid-feedback">Please input 6-digits zip code.</div>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block">Submit</button>
                        <div class="modal fade">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        Your data is invalid, please re-check your input
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            // Disable form submissions if there are invalid fields
                            (function() {
                              'use strict';
                              window.addEventListener('load', function() {
                                // Get the forms we want to add validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                  form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                      $(".modal").modal();
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
    </div>
</body>

</html>
