//https://fullcalendar.io/docs
//Link da documentação do fullcalendar
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      initialView: 'dayGridMonth',
      //Api com alguns eventos
      //events: 'https://fullcalendar.io/api/demo-feeds/events.json',
      //Posicionamento dos botões de cabeçalho
      headerToolbar:
      {
        start: 'prev, next, today', 
        center: 'title',
        end: 'dayGridMonth, timeGridWeek, timeGridDay' 
      },
      locale:'pt-br',
      buttonText:
      {
        today:    'Hoje',
        month:    'Mês',
        week:     'Semana',
        day:      'Dia',
      },
      dateClick: function(info) 
      {
        alert('Clicked on: ' + info.dateStr);
        alert('Current view: ' + info.view.type);
        //Aqui muda a cor da data que foi clicada
        info.dayEl.style.backgroundColor = 'red';
      },
      events: [
        { // this object will be "parsed" into an Event Object
          title: 'Chama na bota papai', // a property!
          start: '2022-11-04', // a property!
          end: '2022-11-10' // a property! ** see important note below about 'end' **
        },
        { // this object will be "parsed" into an Event Object
          title: 'IFPE 2022', // a property!
          start: '2022-11-15', // a property!
          end: '2022-11-17' // a property! ** see important note below about 'end' **
        }
      ],
      editable: true,
      selectable: true
    });
    calendar.render();
});