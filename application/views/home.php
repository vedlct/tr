<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>


</style>


<link href="<?php echo base_url(); ?>css/date-picker.css" rel="stylesheet" >

<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>js/script.js"></script>

<link href="<?php echo base_url(); ?>css/menustyle.css" rel="stylesheet" >
<body >



<h2 style="margin-left: 60px; margin-bottom: 20px">Welcome <?= $this->session->userdata('name') ?></h2>



<div class="container-fluid" >
    <div class="row">

        <?php $this->load->view('menu.php')?>

        <div class="col-lg-7">
    <form class="form-horizontal well" action="insertdata" method="post">
        <fieldset>



            <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Purpose</label>
                <div class="col-lg-10">
                    <select class="form-control" id="dropdown" onchange="myfunc()" name="type">
                        <option>selec a purpose</option>
                        <option value="Facebook">Facebook</option>
                        <option value="SMS">SMS</option>
                        <option value="DomainHosting">Domain & Hosting</option>
                    </select>
                </div>
            </div>


            <div class="form-group" id="cmf" style="display: none">
                <label class="col-lg-2 control-label">Company Name</label>
                <div class="col-lg-10">


                    
                    <select class="form-control"  name="companyname" id="dropdown" >

                                      <option value="" selected disabled>Select Company</option>

                                       <?php
                        foreach ($fbcm as $fc) {
                            echo "<option value=".$fc->clientname.">".$fc->clientname."</option>";
                        }

                        ?>
                                  </select>
                    
                    
                    
                </div>
            </div>

            <div class="form-group" id="cms" style="display: none">
                <label class="col-lg-2 control-label">Company Name</label>
                <div class="col-lg-10">
                    <select class="form-control" id="dropdown" onchange="myfunc()" name="companyname1">
                        <option>selec Company</option>

                        <?php
                        foreach ($smscm as $fc1) {
                            echo "<option value='".$fc1->clientname."'>".$fc1->clientname."</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group" id="cmd" style="display: none">
                <label class="col-lg-2 control-label">Company Name</label>
                <div class="col-lg-10">
                    <select class="form-control" id="dropdown" onchange="myfunc()" name="companyname2">
                        <option>selec Company</option>

                        <?php
                        foreach ($dhcm as $fc2) {
                            echo "<option value='".$fc2->clientname."'>".$fc2->clientname."</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>
            <br>

            <div class="form-group" id="date">
                <label  class="col-lg-2 control-label">Date</label>
                 <div class="col-lg-10">
                <input class="form-control" type="text" placeholder="Select a date" value="" name="date" id="datepicker" />
                </div>
            </div>
            <br>


            <br>

            <div class="form-group" style="display: none" id="div1">
                <label class="col-lg-2 control-label">Amount</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="dollar" name="amountindollarfb">
                </div>
            </div>


            <div class="form-group" style="display: none" id="div2">
                <div class="col-lg-9">
                    <label class="col-lg-3 control-label"></label>
                <input type="checkbox" name="checkbox[]" value="Page Boosting">&nbsp Page Boosting &nbsp&nbsp&nbsp;
                <input type="checkbox" name="checkbox[]" value="Post Boosting">&nbsp Post Boosting
            </div>
            </div>


            <div class="form-group" style="display: none" id="div3">
                <label class="col-lg-2 control-label">Amount</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="Taka" name="amountintaka">
                </div>
            </div>




            <div class="form-group" style="display: none" id="div5">
                <label class="col-lg-2 control-label">Amount</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="dollar" name="amountindollardh">
                </div>
            </div>

            <div class="form-group" style="display: none" id="div4">
                <div class="col-lg-9">
                    <label class="col-lg-3 control-label"></label>
                    <input type="checkbox" name="checkbox[]" value="Domain">&nbsp Domaing  &nbsp&nbsp&nbsp;
                    <input type="checkbox" name="checkbox[]" value="Hosting">&nbsp Hosting
                </div>

            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>

        </fieldset>
        <div style="float: right">Devloped by <b>Tech Cloud Ltd.</b></div>
        <br>
    </form>
        </div>
    </div>


  </div>


</body>

<script>

    function myfunc() {
       var x= document.getElementById("dropdown").value;
        //alert(x);

        switch (x){

            case "Facebook":
                document.getElementById("div3").style.display='none'
                document.getElementById("div4").style.display='none'
                document.getElementById("div5").style.display='none'
                document.getElementById("cms").style.display='none'
                document.getElementById("cmd").style.display='none'


                //alert("fb");
                document.getElementById("div1").style.display='block'
                document.getElementById("div2").style.display='block'
                document.getElementById("cmf").style.display='block'
                break;
            case "SMS":
                document.getElementById("div1").style.display='none'
                document.getElementById("div2").style.display='none'
                document.getElementById("div4").style.display='none'
                document.getElementById("div5").style.display='none'
                document.getElementById("cmf").style.display='none'
                document.getElementById("cmd").style.display='none'

                //alert("sms");
                document.getElementById("div3").style.display='block'
                document.getElementById("cms").style.display='block'
                break;
            case "DomainHosting":
                //alert("domain");

                document.getElementById("div1").style.display='none'
                document.getElementById("div2").style.display='none'
                document.getElementById("div3").style.display='none'
                document.getElementById("cmf").style.display='none'
                document.getElementById("cms").style.display='none'



                document.getElementById("div4").style.display='block'
                document.getElementById("div5").style.display='block'
                document.getElementById("cmd").style.display='block'
                break;
        }
    }
</script>
</html>
