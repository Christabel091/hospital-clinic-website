require("dotenv").config(); // Load environment variables from .env file

const express = require("express");
const mongoose = require("mongoose");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.json());

mongoose
  .connect(process.env.MONGO_URI, {
    useNewUrlParser: true,
    useUnifiedTopology: true,
  })
  .then(() => console.log("MongoDB connected"))
  .catch((err) => console.log(err));

const userRoutes = require("./routes/users");
const appointmentRoutes = require("./routes/appointments");
const inquiryRoutes = require("./routes/inquiries");

app.use("/users", userRoutes);
app.use("/appointments", appointmentRoutes);
app.use("/inquiries", inquiryRoutes);

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});

//sample code
