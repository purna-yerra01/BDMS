<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="container">
        <form id="contact" action="reg.php" method="post">
            <div class="row">
                <div class="col-12 md-6">

                    <h1>Registration Form</h1>
                    <h3>Fill the form below and press the submit button!</h3>
                    <div class="form-group">
                        <label for="text"><b>UserName </b></label>
                        <input id="username" name="username" placeholder="username" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input name="password" type="password" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="phonenumber">Mobile number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <input id="phone" name="phone" placeholder="enter ur phone number" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select">Blood Group</label>
                        <div>
                            <select id="blood" name="blood" required="required" class="custom-select">
                                <option value="none">enter blood group</option>
                                <option value="anegitive">A-</option>
                                <option value="bpositive">B+</option>
                                <option value="bnegitive">B-</option>
                                <option value="opositive">O+</option>
                                <option value="onegitive">O-</option>
                                <option value="abpositive">AB+</option>
                                <option value="abnegitive">AB-</option>
                                <option value="apositive">A+</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age">AGE</label>
                        <input id="age" name="age" placeholder="age" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" name="address" placeholder="enter ur address" type="text" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="male">
                                <label for="radio_0" class="custom-control-label">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="female">
                                <label for="radio_1" class="custom-control-label">Female</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="radio_2" type="radio" class="custom-control-input" value="other">
                                <label for="radio_2" class="custom-control-label">prefer not say</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Availability</label>
                        <div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="donoravail" id="donoravail_0" type="radio" required="required" class="custom-control-input" value="avail">
                                <label for="donoravail_0" class="custom-control-label">available</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="donoravail" id="donoravail_1" type="radio" required="required" class="custom-control-input" value="notavail">
                                <label for="donoravail_1" class="custom-control-label">not available</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>


        </form>

    </div>

    </div>

    </div>

    </div>
    <style>
        /* import google font family */
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,600&display=swap');

        /* selecting everything */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif, helvetica, Arial;
            font-weight: 400;
            font-size: 14px;
            color: black;
            /* body background image */
            background-image: linear-gradient(to bottom, rgba(128, 128, 128, 0.541), #73c515e6), url(image.jpg);
            background-attachment: fixed;
            background-size: cover;

        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
        }

        #contact {
            background-color: rgba(220, 255, 66, 0.7);
            padding: 20px;
            margin: 50px 0;
        }

        #contact input,
        button {
            font: 400 15px 'Open Sans', sans-serif, helvetica, Arial;
        }

        #contact h1 {
            font-size: 35px;
            font-weight: bold;
            text-align: center;
            color: black;
        }

        #contact h3 {
            font-size: medium;
            margin: 5px 0px 15px;
            text-align: center;
            color: black;
        }

        .row {
            display: flex;
            width: 100% !important;
            padding: 20px 0px;
        }

        .row .col {
            margin: 0px 20px;
            width: 50%;
        }

        .form-group {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            width: 100%;
        }

        #contact input {
            width: 100%;
            border: 1px solid rgb(150, 150, 150);
            background-color: white;
            padding: 10px;
            margin: 5px 0;
        }

        input[type="radio"] {
            width: 10% !important;
        }

        #contact .row .radio {
            border: 1px solid rgb(150, 150, 150);
            background-color: white;
            margin: 7px 0 10px;
            padding: 5px;
        }

        #contact .row #phone {
            max-width: 100% !important;
            padding-right: 80px;
        }

        #contact input:hover {
            transition: border-color 0.3s ease-in-out;
            border: 1px solid rgb(68, 68, 68);
        }

        #contact button {
            outline: none;
            border: none;
            background-color: blue;
            color: white;
            margin: 0 0 5px 40%;
            padding: 10px;
            font-size: 17px;
            width: 150px;
        }

        #contact button:hover {
            background-color: rgba(0, 0, 255, 0.8);
        }

        #contact input:focus {
            outline: 0;
            border: 1px solid red;
        }

        /* mobile responsive mode */
        @media screen and (max-width: 580px) {
            .row {
                flex-direction: column;
            }

            .row .column {
                width: 90% !important;
            }

            #contact .row #phone {
                padding-right: 180px;
            }
        }
    </style>

</body>

</html>