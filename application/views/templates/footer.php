      <!-- <aside class="footer" style="margin-top: 17%; background: #F7F7F7;">
        <footer>
          <div class="pull-right">
            &copy 2018 Sistem Pakar Penyakit Ginjal
          </div>
          <div class="clearfix"></div>
        </footer>
      </aside> -->
        <!-- /footer content -->

    <!-- javascripts -->
    <script src="<?php echo base_url()?>templates/niceadmin/js/jquery.js"></script>
	 <script src="<?php echo base_url()?>templates/niceadmin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url()?>templates/niceadmin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>templates/niceadmin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url()?>templates/niceadmin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url()?>templates/niceadmin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>templates/niceadmin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url()?>templates/niceadmin/assets/jquery-knob/<?php echo base_url()?>templates/niceadmin/js/jquery.knob.js"></script>
    <script src="<?php echo base_url()?>templates/niceadmin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>templates/niceadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url()?>templates/niceadmin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?php echo base_url()?>templates/niceadmin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo base_url()?>templates/niceadmin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url()?>templates/niceadmin/js/calendar-custom.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url()?>templates/niceadmin/js/jquery.customSelect.min.js" ></script>
	<script src="<?php echo base_url()?>templates/niceadmin/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url()?>templates/niceadmin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url()?>templates/niceadmin/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url()?>templates/niceadmin/js/easy-pie-chart.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/xcharts.min.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/jquery.autosize.min.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/jquery.placeholder.min.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/gdp-data.js"></script>	
	<script src="<?php echo base_url()?>templates/niceadmin/js/morris.min.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/sparklines.js"></script>	
	<script src="<?php echo base_url()?>templates/niceadmin/js/charts.js"></script>
	<script src="<?php echo base_url()?>templates/niceadmin/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  <!--Footer-->
    <!-- <footer id="footer" class="footer">
      <div class="container text-center">
        ©2018 Sistem Pakar Penyakit Ginjal. All rights reserved

        <div class="credits">
           
            Designed by <a href="https://bootstrapmade.com/">Mentor Theme</a>
        </div>
      </div>      
    </footer> -->
    <!--/ Footer