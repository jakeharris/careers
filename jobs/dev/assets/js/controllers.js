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
home.directive('dynamoAtom', function ($compile, $sce, $timeout) {
    
    var imageTemplate =  '<div class="atom-image">'
                        +   '<h2>&nbsp;</h2>'
                        +   '<div class="atom-img">'
                        +       '<span>'
                        +           '<a href="{{rootDirectory}}{{content.data}}">'
                        +               '<img ng-src="{{rootDirectory}}{{content.data}}" alt="entry photo">'
                        +           '</a>'
                        +       '</span>'
                        +   '</div>'
                        +   '<div class="image-details">'
                        +       '<div class="image-title">{{content.title}}</div>'
                        +       '<div class="image-body">{{content.description}}</div>'
                        +   '</div>'
                        +'</div>'
    var videoTemplate =  '<div class="atom-video">'
                        +   '<h3>&nbsp;</h3>'
                        +   '<div class="atom-vid">'
                        +       '<iframe ng-src="{{content.url}}" width="280" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
                        +   '</div>'
                        +   '<div class="video-details">'
                        +       '<div class="video-title">{{content.title}}</div>'
                        +       '<div class="video-body">{{content.description}}</div>'
                        +   '</div>'
                        +'</div>'
    var textTemplate =   '<div class="atom-text">'
                        +   '<h2 class="text-header">{{content.title}}</h2>'
                        +   '<div class="text-body">{{content.body}}</div>'
                        +'</div>'
    var sectionTemplate= '<section class="atom-section">'
                        +   '<h2>{{content.title}}</h2>'
                        +   '<dynamo-atom ng-repeat="c in content.body" content="c"></dynamo-atom>'
                        +'</section>'
    var pdfTemplate =    '<div class="atom-pdf">'
                        +   '<h2>{{content.title}}</h2>'
                        +   '<canvas id="{{content.title}}" data-url="{{content.url}}" data-drawn="false"></canvas>'
                        +   '<script defer="defer">'
                
                        +   '</script>'
                        +   '<div class="pdf-details">'
                        +       '<div class="pdf-body">{{content.body}}</div>'
                        +   '</div>'
                        +'</div>'
    var linkTemplate =   '<a class="atom-link" href="{{content.url}}">{{content.title}}</a>'
    var portalTemplate = '<div class="atom-portal">'
                        +   '<h2>{{content.title}}</h2>'
                        +   '<div class="portal-text">{{content.body}}</div>'
                        +   '<a class="btn" href="{{content.url}}">{{content["button-text"]}}</button>'
                        +'</div>'
    var hasRenderedPDFs = false
    
    var getTemplate = function (type, opts) {
        var template = ''
        switch(type) {
            case 'video':
                return template = videoTemplate
            case 'image':
                return template = imageTemplate
            case 'text':
                return template = textTemplate
            case 'section':
                return template = sectionTemplate
            case 'pdf':
                return template = pdfTemplate
            case 'link':
                return template = linkTemplate
            case 'login-portal':
                return template = portalTemplate
            default:
                return template = textTemplate
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
            if(scope.content.url) scope.content.url = $sce.trustAsResourceUrl(scope.content.url)
            $(elem).html(getTemplate(scope.content['content-type'], { 'url' : scope.content.url })).show()
            $compile(elem.contents())(scope)
            if(!hasRenderedPDFs) {
                $timeout(function () {
                    console.log('==== STARTING RUN ====')
                    console.log($("canvas[data-drawn=false]"))
                    var c = $("canvas[data-drawn=false]").length
                    for(var i = c; i > 0; i--) {
                        PDFJS.disableWorker = true
                        var url = $($("canvas[data-drawn=false]")[c - i]).attr("data-url")
                        PDFJS.getDocument(url).then(function getPdfHelloWorld(pdf) {
                            pdf.getPage(1).then(function getPageHelloWorld(page) {
                                var scale = 1,
                                    viewport = page.getViewport(scale),
                                    canvas = $("canvas[data-url=" + url + "]")[0],
                                    context = canvas.getContext("2d")
                                canvas.height = viewport.height
                                canvas.width = viewport.width
                                $(canvas).attr('data-drawn', 'true')
                                page.render({canvasContext: context, viewport: viewport})
                            })
                        })
                    }
                }, 2000)
                hasRenderedPDFs = true;
            }
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