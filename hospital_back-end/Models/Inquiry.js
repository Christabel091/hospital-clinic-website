const mongoose = require("mongoose");

const inquirySchema = new mongoose.Schema({
  userId: { type: mongoose.Schema.Types.ObjectId, ref: "User" },
  message: String,
  date: { type: Date, default: Date.now },
});

module.exports = mongoose.model("Inquiry", inquirySchema);

//sample code
