@extends('layouts/master-admin')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/fullcalendar/css/fullcalendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/fullcalendar/css/fullcalendar.print.css')}}" media='print'>
    
@endsection

@section('header')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-layout bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Agendar cita con especialista</h4>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad debitis praesentium nulla ex facere aliquam sed ipsa, dolore sit, consequatur quae! Deserunt fugit provident totam ipsam neque facilis blanditiis veritatis!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
        <h5>Full Calender</h5>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-xl-2 col-md-12">
                <div id="external-events">
                    <h6 class="m-b-30 m-t-20">Events</h6>
                    <div class="fc-event ui-draggable ui-draggable-handle">Cita 1</div>
                    <div class="fc-event ui-draggable ui-draggable-handle">Cita 2</div>
                    <div class="fc-event ui-draggable ui-draggable-handle">Cita 3</div>
                    <div class="fc-event ui-draggable ui-draggable-handle">Cita 4</div>
                    <div class="fc-event ui-draggable ui-draggable-handle">Cita 5</div>
                </div>
            </div>
            <div class="col-xl-10 col-md-12">
                <div id='citas'></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{asset('admin/bower_components/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/bower_components/fullcalendar/js/fullcalendar.min.js')}}"></script>

<script>
$('#citas').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listMonth'
    },
    monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
    dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
    defaultDate: '2020-12-12',
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    editable: true,
    //droppable: true, // this allows things to be dropped onto the calendar
    events: [{
            title: 'Business Lunch',
            start: '2020-12-03T13:00:00',
            constraint: 'businessHours',
            borderColor: '#FC6180',
            backgroundColor: '#FC6180',
            textColor: '#fff'
        }, {
            title: 'Meeting',
            start: '2020-12-13T11:00:00',
            constraint: 'availableForMeeting',
            editable: true,
            borderColor: '#4680ff',
            backgroundColor: '#4680ff',
            textColor: '#fff'
        }, {
            title: 'Conference',
            start: '2020-12-18',
            end: '2020-12-20',
            borderColor: '#93BE52',
            backgroundColor: '#93BE52',
            textColor: '#fff'
        }, {
            title: 'Party',
            start: '2020-12-29T20:00:00',
            borderColor: '#FFB64D',
            backgroundColor: '#FFB64D',
            textColor: '#fff'
        },

        // areas where "Meeting" must be dropped
        {
            id: 'availableForMeeting',
            start: '2020-12-11T10:00:00',
            end: '2020-12-11T16:00:00',
            rendering: 'background',
            borderColor: '#ab7967',
            backgroundColor: '#ab7967',
            textColor: '#fff'
        }, {
            id: 'availableForMeeting',
            start: '2020-12-13T10:00:00',
            end: '2020-12-13T16:00:00',
            rendering: 'background',
            borderColor: '#39ADB5',
            backgroundColor: '#39ADB5',
            textColor: '#fff'
        },

        // red areas where no events can be dropped
        {
            start: '2020-12-24',
            end: '2020-12-28',
            overlap: false,
            rendering: 'background',
            borderColor: '#FFB64D',
            backgroundColor: '#FFB64D',
            color: '#d8d6d6'
        }, {
            start: '2020-12-06',
            end: '2020-12-08',
            overlap: false,
            rendering: 'background',
            borderColor: '#ab7967',
            backgroundColor: '#ab7967',
            color: '#d8d6d6'
        }
    ]
});
</script>
@endsection