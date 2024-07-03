const express = require("express");
const router = express.Router();
const Inquiry = require("../Models/Inquiry");

// Submit inquiry
router.post("/submit", async (req, res) => {
  const { userId, message } = req.body;
  const inquiry = new Inquiry({ userId, message });
  await inquiry.save();
  res.send("Inquiry submitted successfully");
});

module.exports = router;
