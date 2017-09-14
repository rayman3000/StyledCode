var	bodyParser = require('body-parser');

module.exports = function(app) {
    app.use(bodyParser.urlencoded({
        extended : true
    }));
    app.use(bodyParser.json());

    app.get('/', (req, res) => {
        res.render('index.html');
    });

    app.post('/room/', (req, res) => {
        var username = req.body.username;

        res.render('room.html', { user : username });
    });

    app.get('/calendar/', (req, res) => {
        res.render('calendar.html');
    });
}