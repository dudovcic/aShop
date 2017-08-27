const express    = require("express"),
    app        = express(),
    parser     = require("body-parser");

app.use(express.static('public'))    
app.use(parser.urlencoded({extended: true}));
app.set("view engine", "ejs");

app.get("/", (req, res) => {
	res.render("index.ejs");
});

app.listen(3000);