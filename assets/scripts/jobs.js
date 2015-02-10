
var home = angular.module('career-center-jobs', ['ngCookies'])

home.config(function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
});

home.controller('calendar-ctrl', function ($scope, $http) {
  'use strict';
  $http.get('http://auburn.edu/career/events.json')
  .then(function (res) {
    $scope.events = res.data.filter(function (el) {
      return !('external-event' in el)
    }).sort(function (a, b) {
      if(a.date['numerical-month'] == b.date['numerical-month']) return a.date.day - b.date.day
      return a.date['numerical-month'] - b.date['numerical-month']
    }).slice(0, 2)
  })
})

home.controller('dynamo-ctrl', function ($scope, $http, $cookieStore) {
  'use strict';
  $http.get('./categories.json')
  .then(function (res) {
    $scope.categories = res.data[0]
    $scope.currentCategory = $cookieStore.get('category') || 'job-prep'
    for(var mc in $scope.categories['major-categories']) 
      if ($scope.categories['major-categories'][mc].category == $scope.currentCategory)
        $scope.currentDisplayCategory = $scope.categories['major-categories'][mc]['display-category']

        for(var mc in $scope.categories.globals) //jshint ignore:line
          if ($scope.categories.globals[mc].category == $scope.currentCategory)
            $scope.currentDisplayCategory = $scope.categories.globals[mc]['display-category']
            if ($scope.currentDisplayCategory === undefined) $scope.currentDisplayCategory = 'ERR: Couldn\'t read display category.'
              })


  $http.get('./content.json')
  .then(function (res) {
    $scope.content = res.data
    $scope.currentContent = $scope.getCurrentContent()
  })

  $scope.getCurrentContent = function () {
    var cc = []
    for(var con in $scope.content)
      if($scope.content.hasOwnProperty(con))

        for (var cat in $scope.content[con].categories) 
          if($scope.content[con].categories.hasOwnProperty(cat)) 

            if($scope.content[con].categories[cat] == $scope.currentCategory) 
              cc.push($scope.content[con])

              return cc
  }

})

home.directive('ngRepeatComplete', function () {
  'use strict';
  return {
    restrict: 'A',
    link: function (scope, elem, attrs) {
      scope.$emit(attrs.ngRepeatComplete || 'repeat-complete', elem)   
    }
  }
})
/* YOU NEED THIS ARTICLE http://onehungrymind.com/angularjs-dynamic-templates/ */
home.directive('dynamoAtom', function ($compile, $sce, $timeout) {
  'use strict';

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
  +       '<iframe src="{{content.ur}}" height="100%" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
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
  var specialTextTemplate='<div class="atom-text--special">'
  +   '<h2 class="text-header">{{content.title}}</h2>'
  +   '<div class="text-body">'
  +       '<span class="text-body--special">'
  +           '{{content["first-word"]}}'
  +       '</span>'
  +       '{{content.body}}'
  +   '</div>'
  +'</div>'
  var sectionTemplate= '<section class="atom-section">'
  +   '<h2>{{content.title}}</h2>'
  +   '<dynamo-atom ng-repeat="c in content.body" content="c"></dynamo-atom>'
  +'</section>'
  var headlessSectionTemplate =   '<section class="atom-section">'
  +               '<dynamo-atom ng-repeat="c in content.body" content="c"></dynamo-atom>'
  +           '</section>'
  var pdfTemplate =    '<div class="atom-pdf">'
  +   '<a href="{{content.url}}">'
  +       '<i class="fa fa-file-pdf-o"></i>'
  +       '<div class="pdf-details--wrapper">'
  +           '<div class="pdf-details">'
  +               '<h3 class="pdf-title">{{content.title}}</h3>'
  +               '<div class="pdf-body">{{content.body}}</div>'
  +           '</div>'
  +       '</div>'
  +   '</a>'
  +'</div>'
  var linkTemplate =   '<a class="atom-link" href="{{content.url}}" target="_blank">'
  +   '<i class="fa fa-external-link"></i>'
  +   '<div class="link-details--wrapper">'
  +       '<div class="link-details">'
  +           '<h3 class="link-title">{{content.title}}</h3>'
  +           '<div class="link-body">{{content.body}}</div>'
  +       '</div>'
  +   '</div>'
  +'</a>'
  var portalTemplate = '<div class="atom-portal">'
  +   '<h2>{{content.title}}</h2>'
  +   '<div class="portal-text">{{content.body}}</div>'
  +   '<div class="portal-note">{{content.note}}</div>'
  +   '<a class="btn btn-default btn-md login-button login-button--active" href="{{content.url}}">{{content["button-text"]}}</a>'
  +'</div>'

  var getTemplate = function (type, opts) {
    var template = ''
    switch(type) {
      case 'video':
        return (template = videoTemplate)
        case 'image':
        return (template = imageTemplate)
        case 'text':
        return (template = textTemplate)
        case 'special-text':
        return (template = specialTextTemplate)
        case 'section':
        return (template = sectionTemplate)
        case 'headless-section':
        return (template = headlessSectionTemplate)
        case 'pdf':
        return (template = pdfTemplate)
        case 'link':
        return (template = linkTemplate)
        case 'login-portal':
        return (template = portalTemplate)
        default:
        return (template = textTemplate)
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
    }
  }
})

home.directive('dynamo', function ($cookieStore) {
  'use strict';
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