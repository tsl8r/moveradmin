<!DOCTYPE html>
<?php include_once "global.php";?>

<html class="no-js">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="Flat, Clean, Responsive, admin template built with bootstrap 3" name="description">
    <meta content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1" name="viewport">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>MoverAdmin | Simple Crew Management</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- /bootstrap -->

    <title>MoverAdmin | Simple Crew Management</title><!-- bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"><!-- /bootstrap -->
    <!-- core styles -->
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
    <link href="/css/skins/palette.css" id="skin" rel="stylesheet">
    <link href="/css/fonts/style.1.css" id="font" rel="stylesheet">
    <link href="/plugins/datepicker/css/datepicker.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/vendor/offline/theme.css" rel="stylesheet">
    <link href="/css/chosen.min.css" rel="stylesheet"><!-- /core styles -->

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/vendor/offline/theme.css">
    <link rel="stylesheet" href="/css/chosen.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- load modernizer -->

    <script src="/vendor/modernizr.js"></script>
    <style type="text/css">
.searchResults{
        position: absolute;
        background-color: white;
        z-index: 1;
        display: none;
        top: 50px;
    }
    .searchResult{
        cursor: pointer;
        border-top: solid 1px rgb(180, 180, 180);
        line-height: 70px;
    }
    .searchResult:hover{
        background-color: #EEEEEE;
    }
    .searchResult>div>img{
        width: 50px;
        -webkit-border-radius: 25px; 
        -moz-border-radius: 25px; 
        border-radius: 25px; 
    }
    .searchResult>.title{
        font-size: 20px;
    }
    .chosen-select{
        width: 100%;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text]{
        height: auto;
    }

    </style>



    <style type="text/css">
        .bootstrap-timepicker-hour, .bootstrap-timepicker-minute, .bootstrap-timepicker-meridian{
            border: none;
        }
    </style>
</head><!-- body -->

<body>
   <?php include 'includes/header.php'; ?>

            <!-- main content -->
            <section class="main-content">
                <style type="text/css">

                </style>
                
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="col-md-12">
                        <h1 class="no-mg-t">New Job</h1>
                    </div>
                   

                                    <!-- EDIT :datepicker this box -->
                                <div class="col-sm-4 ">
                                <div class="form-group ">
                                    <label for="startDate">Job Start Date</label>
                                    <input type="text" id="startDate" class="form-control" placeholder="05-15-2014">
                                </div>
                             </div>
                             <div class="col-sm-4 ">
                                <div class="form-group ">
                                    <label for="endDate">End Date</label>
                                    <input type="text" id="endDate" class="form-control" placeholder="05-15-2014">
                                </div>
                             </div>
                             <div class="col-sm-4 ">
                                <div class="form-group">
                                <label for="startTime">Job Start time</label>
                                <input type="text" id="startTime" class="form-control" placeholder="h:mm PM">
                                </div>
                             </div>
                            <div class="col-sm-4 ">
                                <div class="form-group ">
                                <label for="onsiteTime">On-site time</label>
                                    <input type="text" id="onsiteTime" class="form-control" placeholder="h:mm PM">
                                </div>
                            </div>


                    

                        <div class="col-sm-12 ">
                          <label for="moveType">Move Type</label>                         
                          <select id="moveType" multiple class="form-control chosen-select">
                            <option>HHG-Atlas</option>
                            <option>HHG-Intra</option>
                            <option>HHG-Local</option>
                            <option>O&I-Local</option>
                            <option>O&I-Intra</option>
                            <option>O&I-Interstate</option>
                            <option>O&I-Move on Premises</option>
                            <option>SP</option>
                            <option>SmartMove</option>
                            <option>Crate/Frgt</option>
                            <option>INTL</option>
                            <option>Other-See Driver/Crew/Scope Notes</option>
                          </select>
                        </div>
                        <div class="col-sm-12 ">
                          <label for="serviceType">Service Type</label>                         
                          <select id="serviceType" multiple class="form-control chosen-select">
                            <option>Pack</option>
                            <option>Crate/Freight</option>
                            <option>Export Wrap</option>
                            <option>Unpack</option>
                            <option>Load</option>
                            <option>Deliver</option>
                            <option>Early Out</option>
                            <option>Release</option>
                            <option>Shuttle</option>
                            <option>DOS</option>
                            <option>SIT</option>
                            <option>APU</option>
                            <option>DPU</option>
                            <option>Mat'l Del</option>
                            <option>Mat'l P/U</option>
                            <option>Spot Trailer</option>
                            <option>Orig Svs</option>
                            <option>Dest Svs</option>
                            <option>Smart Move</option>
                            <option>Air</option>
                            <option>Surface</option>
                            <option>Military/GSA</option>
                            <option>Install (AMS)</option>
                            <option>Install (3P)</option>
                            <option>Rigging (3P)</option>
                            <option>PC Dis/Rec (3P)</option>
                            <option>Storage In</option>
                            <option>Storage Perm</option>
                            <option>Stage & Store</option>
                            <option>Day 1 of 2</option>
                            <option>Day 2 of 2</option>
                            <option>Day 1 of 3</option>
                            <option>Day 2 of 3</option>
                            <option>Day 3 of 3</option>
                            <option>Day 1 of 4</option>
                            <option>Day 2 of 4</option>
                            <option>Day 3 of 4</option>
                            <option>Day 4 of 4</option>
                            <option>Other-See Driver/Crew/Scope Notes</option>
                          </select>
                        </div>

                    

                                <div class="col-sm-12 ">
                            <div class="form-group ">
                                <label for="otherDriverNotes">Other Driver Notes</label>
                                <input type="text" id="otherDriverNotes" class="form-control" placeholder="Other Driver Notes">
                            </div>
                        </div>

                    

                                <div class="col-sm-4 ">
                            <div class="form-group ">
                                <label for="regNumber">Reg Number</label>
                                <input type="text" id="regNumber" class="form-control" placeholder="Reg Number">
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="form-group ">
                                <label for="shipper">Shipper</label>
                                <input type="text" id="shipper" class="form-control" placeholder="Shipper">
                            </div>
                        </div>
                        <div class="col-sm-4 ">
                            <div class="form-group ">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" class="form-control" placeholder="###-###-####">                          
                            </div>
                        </div>

                    
                            <div class="col-sm-12 ">
                                <div class="form-group ">
                               <label for="originAddr">Origin</label>
                               <input type="text" id="originAddr" class="form-control" placeholder="Address">
                            </div>
                        </div>

                    

                            <div class="col-sm-12 ">
                                <div class="form-group">
                             <label for="originSpecial">Origin Special Instructions</label>
                                <input type="text" id="originSpecial" class="form-control" placeholder="Special Instructions">
                            </div>
                        </div>

                    

                            <div class="col-sm-12 ">
                                <div class="form-group ">
                               <label for="destination">Destination</label>
                               <input type="text" id="destination" class="form-control" placeholder="Address">
                            </div>
                        </div>

                    

                            <div class="col-sm-12 ">
                                <div class="form-group">
                             <label for="destinationSpecial">Destination Special Instructions</label>
                                <input type="text" id="destinationSpecial" class="form-control" placeholder="Special Instructions">
                            </div>
                        </div>
                    

                                <div class="col-sm-6 ">
                            <div class="form-group">
                                <label for="weight">Weight</label>
                                <input type="text" id="weight" class="form-control" placeholder="####">
                            </div>

                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <label for="weightType">Weight Type</label>
                                <select multiple id="weightType" class="form-control chosen-select">
                                    <option>Pounds</option>
                                    <option>Grams</option>
                                    <option>Ounces</option>
                                    <option>Tons</option>
                                </select>
                            </div>
                        </div>

                    

                            <div class="col-sm-12 ">
                                <div class="form-group">
                             <label for="vault">Vault/Pack Order</label>
                                <input type="text" id="vault" class="form-control" placeholder="Type something">
                            </div>
                        </div>

                    
                    <div class="col-md-12">
                        <h1 class="no-mg-t">Crew</h1>
                    </div>            
                          <div class="row">                    
                    <div class="col-sm-12 ">  
                     <div class="form-group">
                        <div class="col-sm-12 ">
                          <label for="drivers">Driver(s)</label>                         
                            <?php
                                $query="SELECT * FROM moverAdmin.employees WHERE (CDL>0 OR license>0);";
                                $drivers=query($query);
                            ?>
                          <select multiple id="drivers" class="form-control chosen-select">
                            <?php
                                foreach($drivers as $key=>$driver){
                                    echo '<option>'.$driver['first'].' '.$driver['last'].'</option>';
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    </div>
                    

                     <div class="form-group">
                        <div class="col-sm-12 ">
                                  <label for="laborers">Laborer(s)</label>                         
                            <?php
                                $query="SELECT * FROM moverAdmin.employees;";
                                $laborers=query($query);
                            ?>
                          <select multiple id="laborers" class="form-control chosen-select">
                            <?php
                                foreach($laborers as $key=>$laborer){
                                    echo '<option>'.$laborer['first'].' '.$laborer['last'].'</option>';
                                }
                            ?>
                          </select>
                        </div>
                      </div>

                    

                            <div class="col-sm-12 ">
                                <div class="form-group">
                               <label for="driverNotes">Driver Notes</label>
                               <input type="text" id="driverNotes" class="form-control" placeholder="Notes">
                            </div>
                        </div>

                    
                    
                    
                    <div class="col-md-12">
                        <h1 class="no-mg-t">Equipment</h1>
                    </div>

                     <div class="form-group">
                                    <div class="col-sm-12 ">                        
                                        <label for="equipment">Equipment</label>                         
                                <select multiple id="equipment" class="form-control chosen-select">
                                    <option>Hammer</option>
                                    <option>Cotton Candy Machine</option>
                                    <option>Walrus</option>
                                   <option>Cheese Cutter</option>
                             </select>
                           </div>
                      </div>

                    

                                <div class="col-sm-6 ">
                            <div class="form-group">
                                <label for="truckNo">Shuttle Truck Number</label>
                                <input type="text" id="truckNo" class="form-control" placeholder="##">
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <label for="insurance">Do daily insurance rates apply?</label>
                                    <br><input id="insuranceYes" name="insurance" type="radio" value="yes" checked>
                                            <label for="insuranceYes" onclick="">Yes</label>
                                            <input id="insuranceNo" name="insurance" type="radio" value="no">
                                            <label for="insuranceNo" onclick="">No</label>
                            </div>
                        </div>


                            <div class="col-sm-4 "></div>
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                        <button type="submit" class="btn btn-default" id="submit">Add Job</button>
                                </div>
                            </div>

                    
                    
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->

            <div class="col-sm-4"></div>
        </div><!-- /content wrapper -->
    </section><!-- /main content -->
    <!-- core scripts -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 

    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <script src="/js/chosen.jquery.min.js"></script> <!-- /core scripts -->
    <!-- theme scripts -->
    <script src="/js/global.js"></script> 
    <script src="/js/off-canvas.js"></script> 
    <script src="/vendor/jquery.placeholder.js"></script> 
    <script src="/vendor/offline/offline.min.js"></script> 
    <script src="/vendor/pace/pace.min.js"></script> 
    <script src="/js/main.js"></script> 
    <script src="/plugins/datepicker/js/bootstrap-datepicker.js"></script> 
    <link href="http://jdewit.github.io/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet">
    <script src="/plugins/timepicker/timepicker.js"></script> 
     <!-- /theme scripts -->
     <script type="text/javascript">
        $("#phone").keyup(function(){
            var text = $("#phone").val(); 
            text = text.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
            $("#phone").val(text)
        });


        $('#startDate').datepicker({
            todayBtn: "linked"
        });
        $('#endDate').datepicker({
            todayBtn: "linked"
        });

        $( "#startDate" ).change(function() {
          if($('#endDate').val() == ''){
            $('#endDate').val($('#startDate').val());
          }
        });


        $('#startTime').click(function(){
            console.log('this');
            //Convert bootstrap 2 timpicker to 3
            if ( $(this).hasClass('icon-chevron-up') ) {
                $(this).removeClass('icon-chevron-up').addClass('glyphicon glyphicon-chevron-up');
            }
            if ( $(this).hasClass('icon-chevron-down') ) {
                $(this).removeClass('icon-chevron-down').addClass('glyphicon glyphicon-chevron-down');
            }
        });

        $('#startTime').timepicker();
        $('#onsiteTime').timepicker();
        $(".chosen-select").chosen();

        $('#submit').click(function() {
            var formData = new FormData();

            var formData = {
                date           :$('input[id=date]').val(),
                start          :$('input[id=startTime]').val(),
                onsite         :$('input[id=onsiteTime]').val(),
                moveType       :$('#moveType').val(), //this posts an array
                otherNotes     :$('input[id=otherDriverNotes]').val(),
                regNo          :$('input[id=regNumber]').val(),
                shipper        :$('input[id=shipper]').val(),
                phone          :$('input[id=phone]').val(),
                oAddr          :$('input[id=originAddr]').val(),
                oSpec          :$('input[id=originSpecial]').val(),
                dest           :$('input[id=destination]').val(),
                destSpec       :$('input[id=destinationSpecial]').val(),
                weight         :$('input[id=weight]').val(),
                weightType     :$('#weightType').val(), //this posts an array
                vault          :$('input[id=vault]').val(),
                drivers        :$('#drivers').val(), //this posts an array
                laborers       :$('#laborers').val(), //this posts an array
                driverNotes    :$('input[id=driverNotes]').val(),
                equipment      :$('#equipment').val(),
                truckNo        :$('input[id=truckNo]').val(),
                insurance      :$('input[name=insurance]:checked').val()
            };

            $.ajax({
                type: 'POST',
                url: 'jobAdd.php',
                data: formData,
                dataType: 'json',
                encode: true
            });
        });
    </script><!-- /body -->
    <script src="/vendor/jquery-1.11.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/chosen.jquery.min.js"></script>
    <!-- /core scripts -->

    <!-- page level scripts -->
    <!-- /page level scripts -->
</body>
</html>
