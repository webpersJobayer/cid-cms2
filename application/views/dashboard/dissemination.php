<!DOCTYPE html>
<html>
    <head>
        <title>Dissemination</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="../css/style.css"/>
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img height="50px" width="50px" style="margin-top: -16px; margin-right: 102px;" src="<?= base_url() ?>images/NBR-customs-logo.png" ></a>
                </div>
                  
                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <?php cid_cms_tab(); ?>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href="">Database : Custom Intelligence Database(CID)</a></li>
                    </ul>
                        
                    <ul class="nav navbar-nav navbar-right">                          
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp</span>Hi, <?= $user->first_name." ".$user->last_name ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp</span>Change password</a></li>                              
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>logout/"><span class="glyphicon glyphicon-off" aria-hidden="true">&nbsp</span>Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid">
            <div class="col-md-2">
                <ul class="list-group">
                    <li  class="list-group-item"><a href="<?php echo base_url(); ?>initials/"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp&nbspInitials</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>subjects/"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp&nbspSubjects</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>text/"><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span>&nbsp&nbspText</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>handlingcode/"><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>&nbsp&nbspHandling code</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>protectivemark/"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>&nbsp&nbspProtective</a></li>
                    <!-- <li class="list-group-item"><a href="#"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span>&nbsp&nbspMarking</a></li>-->
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>review/"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp&nbspReview</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>dissemination/"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>&nbsp&nbspDissemination</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>search/"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp&nbspSearch</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>viewlog/"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp&nbspView log</a></li>
                </ul>
            </div>

            <div class="col-md-10">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="#">INITIALS&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">SUBJECT&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">TEXT&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">HANDLING CODE&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" href="#">PROTECTIVE MARKING&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a>
                    <a class="breadcrumb-item" id="remaining" href="#">REVIEW&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span></a></a>
                    <a class="breadcrumb-item active" href="#">DISSEMINATION <?= $remaining_text ?>/<?= $total_text ?></a>
                </nav>
            </div>

            <div  class="col-md-10">                    
                <div class="well">
                    <b>Warning:</b> It is your responsibility to ensure appropriate permission is in place for this information to be lawfully shared prior to authorising any part of it for dissemination. If you are unsure, you must seek advice.
                </div>
                <div class="col-md-9" id="pm-heading">
                    <h4 style="color: red">THE FOLLOWING PROTECTIVE MARKING HAS BEEN APPLIED TO THIS RECORD:</h4>
                </div>
                <div class="col-md-1" id="pm-title" style="width: 301px !important">
                    <b><?= $info->name ?></b>
                </div>
                <div class="col-md-9 handling-heading">
                    <h4>SUMMARY OF RECORD:</h4>
                </div>
                <div class="col-md-1 grade-title">                       
                </div>
                <div id="container_handling_code">
                    <div id="text_area" class="col-md-8">
                        <textarea id="summary" name="summary" rows="5" style="width:100%" disabled><?= $info->summary ?></textarea>
                    </div>
                    <input type="hidden" name="handlingcodeID" value="">
                    <div id="grading" class="col-md-2">
                        <h4>GRADING</h4>
                        <table  class="table grade-table table-bordered">
                            <tbody id="grading-body">
                                <tr>
                                    <td id="src_eval"><?= $info->src_eval ?></td>
                                    <td id="inf_int_eval"><?= $info->inf_int_eval ?></td>
                                    <td id="code"><?= $info->code ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-9 handling-heading">
                    <h4>DETAILED HANDLING INSTRUCTIONS:</h4>
                </div>
                <div id="container_handling_code">
                    <div id="text_area" class="col-md-11">
                        <textarea id="instruction" name="instruction" rows="5" style="width:100%" disabled><?= $info->instruction ?></textarea>
                    </div>
                </div>
                <div class="col-md-10 handling-heading" style="margin-right: -57px; margin-top: 7px;">
                    <h4>CAN THIS INFORMATION BE DISSEMINATED IN LINE WITH THE HANDLING CODE APPLIED:</h4>
                </div>
                <div class="col-md-2 decission1" style="padding-left: 24px">
                    <?php
                    if( isset($info->check1) && $info->check1 == 1 ){
                    ?>
                    <h4>YES</h4>
                    <?php
                    }else{
                    ?>
                    <button type="button" id="handling_code_ok" class="btn btn-default"><span class="glyphicon glyphicon-ok" style="color: green;"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" style="color: red;"></span></button>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-10 handling-heading" style="margin-right: -57px; margin-top: 7px;">
                    <h4>ARE ADDITIONAL DETAILED HANDLING INSTRUCTIONS REQUIRED:</h4>
                </div>
                <div class="col-md-2 decission2" style="padding-left: 24px">
                    <?php
                    if( isset($info->check2) && $info->check2 == 1 ){
                    ?>
                    <h4>NO</h4>
                    <?php
                    }else{
                    ?>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-ok" style="color: green;"></span></button>
                    <button type="button" id="handling_instruction_ok" class="btn btn-default"><span class="glyphicon glyphicon-remove" style="color: red;"></span></button>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-10 handling-heading" style="margin-right: -57px; margin-top: 7px;">
                    <h4>CAN THIS INFORMATION BE DISSEMINATED IN LINE WITH THE PROTECTIVE MARKING APPLIED:</h4>
                </div>
                <div class="col-md-2 decission3" style="padding-left: 24px">
                    <?php
                    if( isset($info->check3) && $info->check3 == 1 ){
                    ?>
                    <h4>YES</h4>
                    <?php
                    }else{
                    ?>
                    <button type="button" id="pro_mark_ok" class="btn btn-default"><span class="glyphicon glyphicon-ok" style="color: green;"></span></button>
                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" style="color: red;"></span></button>
                    <?php
                    }
                    ?>
                </div>
                <input type="hidden" name="tid" value="<?= $info->txtID ?>">
            </div>
        </div>
    </body>
    <div class="loader"></div>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>js/dissemination.js" type="text/javascript"></script>