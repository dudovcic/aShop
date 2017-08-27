var express    = require("express"),
    app        = express(),
    parser     = require("body-parser");

app.use(express.static('public'))    
app.use(bodyParser.urlencoded({extended: true}));
app.set("view engine", "ejs");

app.listen(3000);