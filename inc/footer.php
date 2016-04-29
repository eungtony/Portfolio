</body>
<script type="text/javascript" src="js/fileinput.js"></script>
<script type="text/javascript" src="js/fileinput_locale_fr.js"></script>
<script>
$(document).on('ready', function() {
    $("#input-20").fileinput({
        browseClass: "btn btn-primary btn-block",
        showCaption: false,
        showRemove: false,
        showUpload: false
    });
});
</script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
$(function(){
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd'
  });
});
</script>
</html>
