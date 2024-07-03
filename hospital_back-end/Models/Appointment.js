const mongoose = require("mongoose");

const appointmentSchema = new mongoose.Schema({
  userId: { type: mongoose.Schema.Types.ObjectId, ref: "User" },
  date: Date,
  time: String,
  description: String,
});

module.exports = mongoose.model("Appointment", appointmentSchema);

//sample code
