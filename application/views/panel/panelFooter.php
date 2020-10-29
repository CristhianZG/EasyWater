</div>
</div>
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jsMB/mdb.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/sensorJs.js"></script>
</body>

</html>
<!---FUNCION DEL MENU PARA PODER OCULTAR LA BARRA LATERAL--->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<!----
<script>
    $(document).ready(function() {
        $("#tableSearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>