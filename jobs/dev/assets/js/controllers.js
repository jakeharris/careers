var home = angular.module('career-center-jobs', ['ngCookies'])

home.controller('calendar-ctrl', function ($scope, $http) {
    $http.get('./events.json')
         .then(function (res) {
            $scope.events = res.data.slice(0, 2)
         })
})

home.controller('dynamo-ctrl', function ($scope, $http, $cookieStore) {
    $http.get('./categories.json')
         .then(function (res) {
            $scope.categories = res.data[0]
            $scope.currentCategory = $cookieStore.get('category') || 'job-prep'
            for(var mc in $scope.categories['major-categories']) 
                if ($scope.categories['major-categories'][mc]['category'] == $scope.currentCategory)
                    $scope.currentDisplayCategory = $scope.categories['major-categories'][mc]['display-category']
            for(var mc in $scope.categories['globals']) 
                if ($scope.categories['globals'][mc]['category'] == $scope.currentCategory)
                    $scope.currentDisplayCategory = $scope.categories['globals'][mc]['display-category']
            if ($scope.currentDisplayCategory === undefined) $score.currentDisplayCategory = 'ERR: Couldn\'t read display category.'
         })
    
    
    $http.get('./content.json')
         .then(function (res) {
            $scope.content = res.data
            $scope.currentContent = $scope.getCurrentContent()
         })

    $scope.getCurrentContent = function () {
        var cc = []
        for(var con in $scope.content) {
            for (var cat in $scope.content[con].categories) {
                if($scope.content[con].categories[cat] == $scope.currentCategory) cc.push($scope.content[con])
            }
        }
        return cc
    }
    
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
home.directive('dynamoAtom', function ($compile) {
    
    var imageTemplate =  '<div class="entry-photo">'
                        +   '<h2>&nbsp;</h2>'
                        +   '<div class="entry-img">'
                        +       '<span>'
                        +           '<a href="{{rootDirectory}}{{content.data}}">'
                        +               '<img ng-src="{{rootDirectory}}{{content.data}}" alt="entry photo">'
                        +           '</a>'
                        +       '</span>'
                        +   '</div>'
                        +   '<div class="entry-text">'
                        +       '<div class="entry-title">{{content.title}}</div>'
                        +       '<div class="entry-copy">{{content.description}}</div>'
                        +   '</div>'
                        +'</div>'
    var videoTemplate =  '<div class="entry-video">'
                        +   '<h2>&nbsp;</h2>'
                        +   '<div class="entry-vid">'
                        +       '<iframe ng-src="{{content.data}}" width="280" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
                        +   '</div>'
                        +   '<div class="entry-text">'
                        +       '<div class="entry-title">{{content.title}}</div>'
                        +       '<div class="entry-copy">{{content.description}}</div>'
                        +   '</div>'
                        +'</div>'
    var noteTemplate =   '<div class="entry-note">'
                        +   '<h2>&nbsp;</h2>'
                        +   '<div class="entry-text">'
                        +       '<div class="entry-title">{{content.title}}</div>'
                        +       '<div class="entry-copy">{{content.body}}</div>'
                        +   '</div>'
                        +'</div>'
    
    var getTemplate = function (type) {
        var template = ''
        switch(type) {
            case 'video':
                return template = videoTemplate
            case 'image':
                return template = imageTemplate
            case 'text':
                return template = noteTemplate
            default:
                return template = noteTemplate
        }
    }
    
    return {
        restrict: 'E',
        replace: 'true',
        scope: {
            content: '='
        },
        link: function (scope, elem, attrs) { 
            scope.rootDirectory = 'assets/images'
            console.log('==== LINKING DYNAMO-CONTENT ITEM ====')
            console.log('elem: ')
            console.log(elem)
            console.log('scope: ')
            console.log(scope)
            console.log('scope.content: ')
            console.log(scope.content)
            console.log()
            $(elem).html(getTemplate(scope.content['content-type'])).show()
            console.log('element html: ')
            console.log($(elem).html())
            $compile(elem.contents())(scope)
        }
    }
})

home.directive('dynamo', function ($cookieStore) {
    
    return {
        restrict: 'E',
        replace: 'true',
        templateUrl: './assets/templates/dynamo.html',
        link: function (scope, elem, attrs) {  
            scope.$on('major-done', function (event, ele) {
                                        $(ele).bind('click', function () {
                                            var e = $(this).html()

                                            $(elem.find('.dynamo-header')).html(e)
                                            $cookieStore.put('category', $(ele).data('category'))
                                            $cookieStore.put('display-category', e)
                                            scope.$apply(function () {
                                                scope.currentCategory = $(ele).data('category')
                                                scope.currentDisplayCategory = e
                                                scope.currentContent = scope.getCurrentContent()
                                            })
                                        })
                                    }
                     )
            scope.$on('global-done', function (event, ele) {
                                        $(ele).bind('click', function () {
                                            var e = $(this).html()

                                            $(elem.find('.dynamo-header')).html(e)
                                            $cookieStore.put('category', $(ele).data('category'))
                                            $cookieStore.put('display-category', e)
                                            scope.$apply(function () {
                                                scope.currentCategory = $(ele).data('category')
                                                scope.currentDisplayCategory = e
                                                scope.currentContent = scope.getCurrentContent()
                                            })
                                        })
                                    }
                     )
        }
    }
})