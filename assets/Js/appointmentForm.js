// appointmentForm.js
document
  .getElementById("appointment-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const data = {
      userId: "user_id_here", // This should be dynamically set
      date: document.getElementById("date").value,
      time: document.getElementById("time").value,
      description: document.getElementById("description").value,
    };
    //This is a sample domain
    fetch("http://localhost:3000/appointments/book", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((response) => response.text())
      .then((data) => {
        alert(data);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
