<script type='text/javascript'>
/*
*	++++++++++++++++++++
*	calender Sporthalle
*	++++++++++++++++++++
*/
$(document).ready(function() {

	$('.navbar-nav').on('click', 'li', function(){
    $('.nav li').removeClass('active');
    $(this).addClass('active');
});

    $('#calendar_sporthalle').fullCalendar({
	    defaultView: 'agendaWeek',
        googleCalendarApiKey: 'AIzaSyCdAlsjXCCNYWTLSsgSVAKfPlNEoWFmK60',
        events: {
            googleCalendarId: 'vp8tq6uv960suir03acdrq6vf8@group.calendar.google.com',
        }
    });
    $('#calendar_gymnastikraum').fullCalendar({
	    defaultView: 'agendaWeek',
        googleCalendarApiKey: 'AIzaSyCdAlsjXCCNYWTLSsgSVAKfPlNEoWFmK60',
        events: {
            googleCalendarId: 'd418hc9ggth952emc615si5elc@group.calendar.google.com',
        }
    });
    $('#calendar_musikraum').fullCalendar({
	    defaultView: 'agendaWeek',
        googleCalendarApiKey: 'AIzaSyCdAlsjXCCNYWTLSsgSVAKfPlNEoWFmK60',
        events: {
            googleCalendarId: '51dliec51pvjt4680df8l4dr58@group.calendar.google.com',
        }
    });
    $('#calendar_forum').fullCalendar({
        googleCalendarApiKey: 'AIzaSyCdAlsjXCCNYWTLSsgSVAKfPlNEoWFmK60',
        events: {
            googleCalendarId: 'j6g3kemkccq9kh78icrcfrpf5k@group.calendar.google.com'
        }
    });
});
/*
*	++++++++++++++++++++
*	calender Forum
*	++++++++++++++++++++
*/

</script>