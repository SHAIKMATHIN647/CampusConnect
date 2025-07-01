// Placeholder for future interactive scripts
console.log('CampusConnect JS Loaded');
// Placeholder for future interactive scripts
document.addEventListener('DOMContentLoaded', () => {
  console.log('CampusConnect JS Loaded');
});
document.addEventListener('DOMContentLoaded', () => {
  fetch('php/fetch-events.php')
    .then(res => res.json())
    .then(data => {
      let output = '';
      data.forEach(e => {
        output += `<div class="event-card">
                    <h4>${e.title}</h4>
                    <p>${e.description}</p>
                    <small>${e.event_date} at ${e.location}</small>
                   </div>`;
      });
      const adminDiv = document.getElementById('event-list');
      const studentDiv = document.getElementById('student-events');
      if (adminDiv) adminDiv.innerHTML = output;
      if (studentDiv) studentDiv.innerHTML = output;
    });
});