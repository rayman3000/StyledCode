var	express = require('express');
var	app = express();
var router = require('./router/router')(app);

var	config = require('./config.json');
var	bodyParser = require('body-parser');
var fs = require('fs');
var options = {
    key: fs.readFileSync('./key/private.pem'),
    cert: fs.readFileSync('./key/public.pem')
};

// for socket server
var	http = require('http').Server(app);
var	io = require('socket.io')(http);
var port = process.env.PORT || config.webserver.port;

app.set('views', __dirname + '/views');
app.set('view engine','ejs');
app.engine('html', require('ejs').renderFile);
app.use(express.static(__dirname + '/public'));
app.use(bodyParser.urlencoded({
    extended : true
}));
app.use(bodyParser.json());

app.listen(port, function() {
	console.log(`VTalk is listening on port ${port}!`);
});