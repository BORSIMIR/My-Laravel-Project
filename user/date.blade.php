<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.event a {
    background-color: #5FBA7D !important;
    color: #ffffff !important;
}
	</style>

	<title>AWS</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>


<script>
    $(document).ready(function(){

   var isLondon;

$(".zip-input").on("input", function() {
    var text = $(".zip-input").val();
    var firstLetter = text[0].toLowerCase();
    var currentIsLondon = (firstLetter === "a");
    if (isLondon !== currentIsLondon) {
        isLondon = currentIsLondon;
        $("#TstDiv").html(isLondon ? "London" : "uk").css('color','green').fadeIn(100);
        $("#datepicker2").datepicker("destroy");
        $("#datepicker2").datepicker({
            minDate: isLondon ? 0 : 1,
            constrainInput: true,
            beforeShowDay: function(date) {
                var day = date.getDay();
                return [day != 0 && day != 2, ""];
            }
        });
    }
});

    var isuk;

$(".zip-input").on("input", function() {
    var text = $(".zip-input").val();
    var firstLetter = text[0].toLowerCase();
    var currentIsuk = (firstLetter === "s");
    if (isuk !== currentIsuk) {
        isuk = currentIsuk;
        $("#TstDiv").html(isuk ? "uk" : "London").css('color','green').fadeIn(100);
        $("#datepicker2").datepicker("destroy");
        $("#datepicker2").datepicker({
            minDate: isuk ? 0 : 1,
            constrainInput: true,
            beforeShowDay: function(date) {
                var day = date.getDay();
                return [day != 5 && day != 6, ""];
            }
        });
    }
});
















});
        </script>

<script>
    $(function() {
    $( "#datepicker1" ).datepicker(
    {
        beforeShowDay: function(d) {
            var day = d.getDay();
            return [(day != 0 && day != 3)];
        }
    });
  });
        </script>
<script>
  $( function() {
    // An array of dates
    var eventDates = {};
    eventDates[ new Date( '1/02/2023' )] = new Date( '1/02/2023' );
    eventDates[ new Date( '1/09/2023' )] = new Date( '1/09/2023' );
    eventDates[ new Date( '1/16/2023' )] = new Date( '1/16/2023' );
    eventDates[ new Date( '1/23/2023' )] = new Date( '1/23/2023' );
    eventDates[ new Date( '1/30/2023' )] = new Date( '1/30/2023' );
    eventDates[ new Date( '1/04/2023' )] = new Date( '1/04/2023' );
    eventDates[ new Date( '1/11/2023' )] = new Date( '1/11/2023' );
    eventDates[ new Date( '1/18/2023' )] = new Date( '1/18/2023' );
    eventDates[ new Date( '1/25/2023' )] = new Date( '1/25/2023' );
    eventDates[ new Date( '1/06/2023' )] = new Date( '1/06/2023' );

    // datepicker
    $('#datepickers').datepicker({
        beforeShowDay: function( date ) {
            var highlight = eventDates[date];
            if( highlight ) {
                 return [true, "event", 'Tooltip text'];
            } else {
                 return [true, '', ''];
            }
        }

    });



});
</script>

<script>
    $(document).ready(function(){

    function disableHoliday(date) {
    var string = $.datepicker.formatDate('yy-mm-dd', date);
          
    var filterDate = new Date(string);

    var day = filterDate.getDay();

    return [day != 1 && day != 2 && day != 4 && day !=6]

 }
        
 $( "#datepicker" ).datepicker({
    beforeShowDay: disableHoliday


 });
});
        </script>

        <script language="javascript">
    $(document).ready(function () {
        
        $("#txtdate").datepicker({
            minDate: 0
        });
    });
</script>

</head>
<body>

    <span id="TstDiv"></span>
<input type="text" id="autocomplete" maxlength="8" class="zip-input"  placeholder="Enter pincode" />
<input id="datepicker2" placeholder="Select Delivery Date dd/mm/yyyy">
<div id="datepicker"></div>
<div id="txtdate"></div>
<div id="datepickers"></div>
<div id="datepicker1"></div>

</body>
</html>