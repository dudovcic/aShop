const express    = require("express"),
    app        = express(),
    parser     = require("body-parser");

app.use("/static", express.static('public'))    
app.use(parser.urlencoded({extended: true}));
app.set("view engine", "ejs");

app.get("/", (req, res) => {
	res.render("index");
});

app.listen(3000);