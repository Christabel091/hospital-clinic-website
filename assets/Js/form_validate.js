const form = document.getElementById("form");
const username = document.getElementById("nameInput");
const email = document.getElementById("emailInput");
const dateInput = document.getElementById("dateInput");
const time = document.getElementById("timeInput");
const reason = document.getElementById("reasonInput");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInput();
});

function checkInput() {
  const usernameValue = username.value.trim();
  const emailValue = email.value.trim();
  const dateValue = new Date(dateInput.value);
  const timeValue = time.value.trim();
  const reasonValue = reason.value.trim();
  const now = new Date();
  const nowDate = new Date(now.getFullYear(), now.getMonth(), now.getDate());

  // Username validation
  if (usernameValue === "") {
    setErrorFor(username, "Username cannot be blank.");
  } else if (usernameValue.length < 6) {
    setErrorFor(username, "Username must be at least six characters long.");
  } else {
    setSuccessFor(username);
  }

  // Email validation
  if (emailValue === "") {
    setErrorFor(email, "Email cannot be blank.");
  } else {
    setSuccessFor(email);
  }

  // Date validation
  const inputDateOnly = new Date(
    dateValue.getFullYear(),
    dateValue.getMonth(),
    dateValue.getDate()
  );
  if (isNaN(dateValue)) {
    setErrorFor(dateInput, "You must choose a date for the appointment.");
  } else if (inputDateOnly < nowDate) {
    setErrorFor(dateInput, "Appointment date must be in the future.");
  } else {
    setSuccessFor(dateInput);
  }

  // Time validation
  if (timeValue === "") {
    setErrorFor(time, "You must pick a time for the appointment.");
  } else if (
    inputDateOnly.getTime() === nowDate.getTime() &&
    dateValue.getTime() <= now.getTime()
  ) {
    setErrorFor(time, "Time should be in the future.");
  } else {
    setSuccessFor(time);
  }

  // Reason validation
  if (reasonValue === "") {
    setErrorFor(reason, "Reason for appointment must be stated.");
  } else if (reasonValue.length < 6) {
    setErrorFor(reason, "Please provide a more detailed reason.");
  } else {
    setSuccessFor(reason);
  }

  const allInputsValid = document.querySelectorAll(".s.success").length === 5;
  if (allInputsValid) {
    form.submit();
  }
}

function setErrorFor(input, message) {
  const s = input.parentElement;
  const small = s.querySelector("small");
  small.innerText = message;
  s.className = "s error";
}

function setSuccessFor(input) {
  const s = input.parentElement;
  s.className = "s success";
}
