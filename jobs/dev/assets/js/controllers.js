var home = angular.module('career-center-jobs', ['ngCookies'])

home.controller('calendar-ctrl', function ($scope, $http) {
    $http.get('./events.json')
         .then(function (res) {
            $scope.events = res.data.slice(0, 2)
         })
})

home.controller('dynamo-ctrl', function ($scope, $http, $cookieStore) {
    $http.get('./types.json')
         .then(function (res) {
            $scope.types = res.data[0]
         })
    
    $scope.currentType = $cookieStore.get('displayType') || "Job Prep"
    
    $http.get('./content.json')
         .then(function (res) {
            $scope.content = res.data 
         })

    
})

home.directive('ngRepeatComplete', function () {
    return {
        restrict: 'A',
        link: function (scope, elem, attrs) {
            scope.$emit(attrs['ngRepeatComplete'] || 'repeat-complete', elem)   
        }
    }
})
/* YOU NEED THIS ARTICLE http://onehungrymind.com/angularjs-dynamic-templates/ */
home.directive('dynamoContent', function () {
    return {
        restrict: 'E',
        replace: 'true',
        templateUrl: './assets/templates/dynamo-content.html',
        link: function (scope, elem, attrs) {   
            $scope.$watch('currentType', function (n, o) {
                
            })
        }
    }
})

home.directive('dynamo', function ($cookieStore) {
    return {
        restrict: 'E',
        replace: 'true',
        templateUrl: './assets/templates/dynamo.html',
        link: function (scope, elem, attrs) {  
            
            scope.$on('major-done', function (event, melem) {
                $(melem).bind('click', function () {
                    var e = $(this).html()

                    $(elem.find('.dynamo-header')).html(e)
                    $cookieStore.put('type', $(this).attr('data-type'))
                    $cookieStore.put('displayType', e)
                    scope.$apply(function () {
                        scope.currentType = e
                    })
                })
            })
            scope.$on('global-done', function (event, gelem) {
                $(gelem).bind('click', function () {
                    var e = $(this).html()

                    $(elem.find('.dynamo-header')).html(e)
                    $cookieStore.put('type', $(this).attr('data-type'))
                    $cookieStore.put('displayType', e)
                    scope.$apply(function () {
                        scope.currentType = e
                    })
                })
            })
        }
    };
})