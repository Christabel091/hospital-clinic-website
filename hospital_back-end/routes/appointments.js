const express = require("express");
const router = express.Router();
const Appointment = require("../Models/Appointment");

// Book appointment
router.post("/book", async (req, res) => {
  const { userId, date, time, description } = req.body;
  const appointment = new Appointment({ userId, date, time, description });
  await appointment.save();
  res.send("Appointment booked successfully");
});

module.exports = router;

//sample code
