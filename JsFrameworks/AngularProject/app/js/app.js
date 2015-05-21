var app = angular.module('FirstDemoApp', []);

app.value('visitors', {
    count: 4,
    names: ['GeiSBradichka', 'Petya', 'Alex', 'Drakula']
});

app.constant('HOME_SITE', {
    'url': 'http://softuni.bg',
    'port': 8888
})
