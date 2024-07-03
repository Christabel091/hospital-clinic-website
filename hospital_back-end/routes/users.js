const express = require("express");
const router = express.Router();
const User = require("../Models/User");

// User registration
router.post("/register", async (req, res) => {
  const { name, email, password } = req.body;
  const user = new User({ name, email, password });
  await user.save();
  res.send("User registered successfully");
});

module.exports = router;

//sample code
