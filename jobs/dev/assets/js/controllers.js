var home = angular.module('career-center-jobs', ['ngCookies'])

home.controller('calendar-ctrl', function ($scope, $http) {
    $http.get('./events.json')
         .then(function (res) {
            $scope.events = res.data.slice(0, 2)
         })
})

home.controller('dynamo-ctrl', function ($scope, $http, $cookieStore) {
    console.log('Loading types.json')
    $http.get('./types.json')
         .then(function (res) {
            console.log('Loaded. Assigning types to scope')
            $scope.types = res.data[0]
            console.log($scope.types)
         })
    
    $scope.currentType = $cookieStore.get('type') || "Job prep"
    
    console.log('Loading content.json')
    $http.get('./content.json')
         .then(function (res) {
            console.log('Loaded. Assigning content to scope')
            $scope.content = res.data 
            console.log($scope.content) 
         })
    
})