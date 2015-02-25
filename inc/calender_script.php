<script type='text/javascript'>
$(document).ready(function() {

	$('.navbar-nav').on('click', 'li', function(){
    $('.nav li').removeClass('active');
    $(this).addClass('active');
});

    $('#calendar_belegung').fullCalendar({
	    defaultView: 'agendaWeek',
        googleCalendarApiKey: 'AIzaSyBWKAx866joOLm7bHJBpGondtVSuhbq19k',
        eventSources: [
        	{
            googleCalendarId: 'dh50mnnquhrhb4gv7kqa4s257o@group.calendar.google.com',
        	},
        	{
            googleCalendarId: 'l5gbvtt3a6vq0155518kr3u8kk@group.calendar.google.com',
            className: 'gym_cal'
        	},
        	{
            googleCalendarId: 'ltp9vm0s0jgfavsnpnh9bf4tfk@group.calendar.google.com',
            className: 'musik_cal'
        	}
        ]

    });


    $('#calendar_forum').fullCalendar({
        googleCalendarApiKey: 'AIzaSyBWKAx866joOLm7bHJBpGondtVSuhbq19k',
        events: {
            googleCalendarId: '08pniadu6p5s0s93h6cek7h0kg@group.calendar.google.com'
        }
    });
});

</script>