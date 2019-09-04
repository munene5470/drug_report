<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drug Reporting portal</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-desc">
                <div class="signup-desc-content">
                    <h2>Drug<span> Report </span></h2>
                    <p class="title">County Daily Drug Report. </p>
                    <p class="desc">
                        Fill in all details with zeros where no information was collected.
                    </p>
                    <img style="margin-top:-50%" src="images/signup-img.jpg" alt="" class="">
                </div>
            </div>

            <div style="margin-top:0%" class="signup-form-conent">
                <form action="get.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 1 / 8</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">County</span>
                            <select id="county" name="selectname1"style="font-weight:700; color:#888;font-size:18px;width:100%; margin-top:10%; padding:10px 10px 10px 10px">
                                <option value='Select'>Select County</option>
                                <option value='Baringo'>Baringo</option>
                                <option value='Bomet'>Bomet</option>
                                <option value='Bungoma'>Bungoma</option>
                                <option value='Busia'>Busia</option>
                                <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                                <option value='Embu'>Embu</option>
                                <option value='Garissa'>Garissa</option>
                                <option value='Homa Bay'>Homa Bay</option>
                                <option value='Isiolo'>Isiolo</option>
                                <option value='Kajiado'>Kajiado</option>
                                <option value='Kakamega'>Kakamega</option>
                                <option value='Kericho'>Kericho</option>
                                <option value='Kiambu'>Kiambu</option>
                                <option value='Kilifi'>Kilifi</option>
                                <option value='Kirinyaga'>Kirinyaga</option>
                                <option value='Kisii'>Kisii</option>
                                <option value='Kisumu'>Kisumu</option>
                                <option value='Kitui'>Kitui</option>
                                <option value='Kwale'>Kwale</option>
                                <option value='Laikipia'>Laikipia</option>
                                <option value='Lamu'>Lamu</option>
                                <option value='Machakos'>Machakos</option>
                                <option value='Makueni'>Makueni</option>
                                <option value='Mandera'>Mandera</option>
                                <option value='Marsabit'>Marsabit</option>
                                <option value='Meru'>Meru</option>
                                <option value='Migori'>Migori</option>
                                <option value='Mombasa'>Mombasa</option>
                                <option value='Murang'a'>Murang'a</option>
                                <option value='Nairobi City'>Nairobi City</option>
                                <option value='Nakuru'>Nakuru</option>
                                <option value='Nandi'>Nandi</option>
                                <option value='Narok'>Narok</option>
                                <option value='Nyamira'>Nyamira</option>
                                <option value='Nyandarua'>Nyandarua</option>
                                <option value='Nyeri'>Nyeri</option>
                                <option value='Samburu'>Samburu</option>
                                <option value='Siaya'>Siaya</option>
                                <option value='Taita-Taveta'>Taita-Taveta</option>
                                <option value='Tana River'>Tana River</option>
                                <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                                <option value='Trans Nzoia'>Trans Nzoia</option>
                                <option value='Turkana'>Turkana</option>
                                <option value='Uasin Gishu'>Uasin Gishu</option>
                                <option value='Vihiga'>Vihiga</option>
                                <option value='West Pokot'>West Pokot</option>
                                <option value='wajir'>wajir</option>
                            </select>
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Dates 2 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Report collection  date</span>
                            <input type="date" id="start_date">


                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Alcoholic Drinks 3 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Chang'aa in (Ltrs)</span>
                            <input type="number" id="changaa" placeholder="eg,1000">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">kangara in (Ltrs)</span>
                            <input type="number" id="kangara" placeholder="eg,1000">

                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Alcoholic Drinks 4 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Other Traditional Drinks in (Ltrs)</span>
                            <input type="number" id="t_drinks" placeholder="eg,1000">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Illegal neutral spirits in (Ltrs)</span>
                            <input type="number" id="spirits" placeholder="eg,1000">
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Bhang 4 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Counterfeit/Unaccustomed Drinks in (Ltrs)</span>
                            <input type="number" id="counterfeit" placeholder="eg,1000">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Bhang rolls</span>
                            <input type="number" id="rolls" placeholder="eg,10" >
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Bhang 5 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Bhang Plants</span>
                            <input type="number" id="plants" placeholder="eg,100">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Bhang Brooms</span>
                            <input type="number" id="brooms" placeholder="eg,100">
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Bhang 6 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Bhang Stones</span>
                            <input type="number" id="stones" placeholder="eg,1000">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Bhang Kgs</span>
                            <input type="number" id="kgs" placeholder="eg,100">
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Others 7 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <input type="number" id="heroin" placeholder="Cocaine,Heroin and Others (Sachets)">
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Fines & arrests 8 / 9</span>
                        <div style="margin-top:-20%" class="form-group">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Total fines (Kshs)</span>
                            <input type="number" id="fines" placeholder="eg100,000">
                            <span style="position:absolute; font-size:16px; font-weight:700; color:#888">Number of arrest</span>
                            <input type="number" id="arrests" placeholder="10">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div style="display:none">

</div> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.16.3/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="vendor/jquery/jquery.min.js" type="6b6825c0d26fda4be87006a1-text/javascript"></script>
<script src="vendor/jquery-validation/dist/jquery.validate.min.js" type="6b6825c0d26fda4be87006a1-text/javascript"></script>
<script src="vendor/jquery-validation/dist/additional-methods.min.js" type="6b6825c0d26fda4be87006a1-text/javascript"></script>
<script src="vendor/jquery-steps/jquery.steps.js" type="6b6825c0d26fda4be87006a1-text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/main.js" type="6b6825c0d26fda4be87006a1-text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="6b6825c0d26fda4be87006a1-text/javascript"></script>
<script type="6b6825c0d26fda4be87006a1-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="6b6825c0d26fda4be87006a1-|49" defer=""></script></body>
</html>
