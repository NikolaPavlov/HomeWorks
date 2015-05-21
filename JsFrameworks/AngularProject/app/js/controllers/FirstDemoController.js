app.controller('FirstDemoController', function($scope){
    var people = {
        malchi_gei: {
            name: "Angel",
            town: "Gusto Maina"
        },
        gei: {
            name: "Nakov",
            town: "Sofia"
        },
        gogo: {
            name: "Kec",
            town: "Sofia"
        },
        drinker: {
            name: "Vielicata",
            town: "Pernik"
        }
    }

    $scope.msg = "Gei s bradichka !!!"
    $scope.people = people;
})

app.controller('SecondDemoController', function ($scope, visitors) {
    $scope.names = ['gei1', 'gei2', 'gei3'];

    for(visitor in visitors.names){
        $scope.names.push(visitors.names[visitor])
    }
})
