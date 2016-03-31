 <script src="<?=base_url()?>html/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>html/js/icheck/icheck.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/wizard/jquery.smartWizard.js"></script>
        <script src="<?=base_url()?>html/js/dropzone/dropzone.js"></script>
        <script src="<?=base_url()?>html/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?=base_url()?>html/js/datatables/tools/js/dataTables.tableTools.js"></script>
         <script type="text/javascript" src="<?=base_url()?>html/js/moment/moment.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/datepicker/daterangepicker.js"></script>        
        <!--<script type="text/javascript" src="html/js/gauge/gauge.min.js"></script>
        <script type="text/javascript" src="html/js/gauge/gauge_demo.js"></script> -->
        <script src="<?=base_url()?>html/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?=base_url()?>html/js/nicescroll/jquery.nicescroll.min.js"></script>       
        <script type="text/javascript" src="<?=base_url()?>html/js/moment/moment.min.js"></script>
        <script src="<?=base_url()?>html/js/custom.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/jquery.flot.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/jquery.flot.orderBars.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/jquery.flot.time.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/date.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/jquery.flot.stack.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/curvedLines.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/flot/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/maps/gdp-data.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="<?=base_url()?>html/js/maps/jquery-jvectormap-us-aea-en.js"></script>
        <script src="<?=base_url()?>html/js/pace/pace.min.js"></script>
        <script src="<?=base_url()?>html/js/skycons/skycons.min.js"></script>
        <script src="<?=base_url()?>html/js/emerge.js"></script>
        <script>
            NProgress.done();
        </script>     
        
        <script type="text/javascript">
            $(document).ready(function () {
                // Smart Wizard
                $('#wizard').smartWizard();

                function onFinishCallback() {
                    $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                    //alert('Finish Clicked');
                }
            });

            $(document).ready(function () {
                // Smart Wizard
                $('#wizard_verticle').smartWizard({
                    transitionEffect: 'slide'
                });

            });
        </script>
    
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
                    ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>