// # Directory structure
// We have a dev environment and a live environment.
// The dev environment should always live within the
// live environment in a folder called dev.
// All assets (javascript, images, fonts, stylesheets)
// for a page/project should be in /assets, at the
// same height as the post-compilation index.html.

// In a perfect world it'd be like:
// index.html
// ... (other post-compilation views)
// bower.json
// Gruntfile.js
// /assets/
//   /data/
//     events.json (or whatever)
//   /fonts/
//     icomoon.eot
//     icomoon.woff
//     ... (etc.)
//   /images/
//     HomepageTile.png
//   /scripts/
//     controllers.js
//   /styles/
//     page.scss
// /views/
//   /layouts/
//     default.hbs
//   /partials/
//     header.hbs
//     footer.hbs


module.exports = function (grunt) {
  'use strict';
  // # time-grunt
  // Times how long tasks take. Handy for identifying bottlenecks.
  require('time-grunt')(grunt)
  
  // # jit-grunt
  // Load grunt plugins without using a .loadNpmTasks block at the end of the Gruntfile.
  require('jit-grunt')(grunt, {
    useminPrepare: 'grunt-usemin',
    bower: 'grunt-bower-task'
  })
  
  grunt.initConfig({
    
    // # Project settings
    config: {
      assets: 'assets',
      views: 'views',
      master: 'views/layouts/default.hbs',
      partials: 'views/partials/*.hbs'
    },
    
    // # watch
    // Watch for changes in the specified files and run the associated tasks.
    watch: {
      assemble: {
        files: [],
        tasks: []
      },
      bower: {
        files: ['bower.json'],
        tasks: ['wiredep']
      },
      concat: {
        files: [],
        tasks: []
      },
      gruntfile: {
        files: ['Gruntfile.js'] 
      },
      js: {
        // Do I not need to run 'uglify'? Clay's code doesn't. Why not?
        files: ['<%= config.assets %>/scripts/{,*/}*.js'],
        tasks: ['jshint'],
        options: { livereload: true }
      },
      sass: {
        files: ['<%= config.assets %>/styles/{,*/}*.{scss,sass}'],
        tasks: ['sass', 'autoprefixer']
      },
      styles: {
        files: ['<%= config.assets %>/styles/{,*/}*.css'],
        tasks: ['newer:copy:styles', 'autoprefixer']
      }
    },
    
    // # connect
    // Grunt live server.
    connect: {
      options: {
        port: 9000,
        open: true,
        livereload: 35729,
        hostname: 'localhost',
        base: ''
      },
      livereload: {
        //options: {
          //middleware: function (connect) {
            //return [
              // TODO: consider whether we need this pattern
              //connect.static('.tmp'),
              //connect().use('/bower_components', connect.static('./bower_components')),
              //connect.static('<%= config.dist %>')
            //]
          //}
        //}
      },
      dist: {
        options: {
          base: '',
          livereload: false
        }
      }
    },
    
    // # clean
    // Empty out folders.
    clean: {
      dist: {
        files: [{
          dot: true,
          src: [
            '.tmp'
          ]
        }]
      },
      server: '.tmp'
    },
    
    // # jshint
    // Ensure js is up-to-snuff. (Does not do heavy validation, just coding style and basic syntax.)
    jshint: {
      options: {
        jshintrc: '.jshintrc',
        reporter: require('jshint-stylish')
      },
      all: [
        'Gruntfile.js',
        '<%= config.assets %>/scripts/{,*/}*.js'
      ]
    },
    
    // # sass
    // Compiles Sass to CSS. 
    sass: {
      options: {
        loadPath: 'bower_components'
      },
      dist: {
        files: [{
          expand: true,
          cwd: '<%= config.assets %>/styles',
          src: ['*.{scss,sass}'],
          dest: '.tmp/styles',
          ext: '.css'
        }]
      }
    },
    
    // # autoprefixer
    // Automagically adds vendor-prefixed rules to match non-prefixed rules
    // we use that we might've forgotten about!
    // e.g. 
    // `display: flex;`
    // becomes
    // `display: flex;
    //  ms-display: flex-box;
    //  display: -webkit-flex;`
    autoprefixer: {
      options: {
        browsers: ['> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1'] 
      },
      dist: {
        files: [{
          expand: true,
          cwd: '.tmp/styles',
          src: '{,*/}*.css',
          dest: '.tmp/styles'
        }]
      }
    },
    
    // # wiredep
    // Inject Bower components into our master page.
    wiredep: {
      app: {
        // POTENTIAL ISSUE with ignorePath
        ignorePath: /^\/|\.\.\//,
        src: ['<%= config.master %>']
      },
      sass: {
        ignorePath: /(\.\.\/){1,2}bower_components\//,
        src: ['<%= config.assets %>/styles/']
      }
    },
    
    // # rev
    // Rename files to bust browser caches.
    rev: {
      dist: {
        files: {
          src: [
            '<%= config.assets %>/scripts/{,*/}*.js',
            '<%= config.assets %>/styles/{,*/}*.css',
            '<%= config.assets %>/images/{,*/}*.*',
            '<%= config.assets %>/styles/fonts/{,*/}*.*',
            '<%= config.assets %>/*.{ico,png}'
          ]
        }
      }
    },
    
    // # useminPrepare (depends on usemin)
    // Reads HTML for usemin blocks to enable smart builds that automatically
    // concat, minify and revision files. Creates configurations in memory so
    // additional tasks can operate on them
    useminPrepare: {
      options: {
        dest: '<%= config.dist %>'
      },
      html: '<%= config.dist %>/{,*/}*.html'
    },

    // # usemin
    // Performs rewrites based on rev and the useminPrepare configuration
    usemin: {
        options: {
            assetsDirs: ['<%= config.dist %>', '<%= config.dist %>/images', '<%= config.dist %>/fonts'],
            patterns: {
                js: [
                    [/(images\/.*?\.(?:gif|jpeg|jpg|png|webp|svg))/gm, 'Update the JS to reference our revved images']
                ]
            }
        },
        html: ['<%= config.dist %>/{,*/}*.html'],
        css: ['<%= config.dist %>/styles/{,*/}*.css'],
        js: ['<%= config.dist %>/scripts/{,*/}*.js']
    },

    // # *-min
    // The following *-min tasks produce minified files in the dist folder
    
    imagemin: {
      dist: {
        files: [{
          expand: true,
          cwd: '<%= config.app %>/images',
          src: '{,*/}*.{gif,jpeg,jpg,png}',
          dest: '<%= config.dist %>/images'
        }]
      }
    },

    svgmin: {
      dist: {
        files: [{
          expand: true,
          cwd: '<%= config.app %>/images',
          src: '{,*/}*.svg',
          dest: '<%= config.dist %>/images'
        }]
      }
    },

    htmlmin: {
      dist: {
        options: {
          collapseBooleanAttributes: true,
          collapseWhitespace: true,
          conservativeCollapse: true,
          removeAttributeQuotes: true,
          removeCommentsFromCDATA: true,
          removeEmptyAttributes: true,
          removeOptionalTags: true,
          removeRedundantAttributes: true,
          useShortDoctype: true
        },
        files: [{
          expand: true,
          cwd: '<%= config.dist %>',
          src: '{,*/}*.html',
          dest: '<%= config.dist %>'
        }]
      }
    },
    
    // # copy
    // Copies remaining files to places other tasks can use
    // let's not worry about this one yet until I 
    // understand why I'd use it
    
    // # concurrent
    // Runs specified tasks in parallel to speed up builds.
    concurrent: {
      server: [
        'sass',
        //'copy:styles'
      ],
      dist: [
        'sass',
        //'copy:styles',
        'imagemin',
        'svgmin'
      ]
    },
    
    // # assemble
    // Compiles Handlebars layouts, partials, and pages
    // into servable HTML.
    assemble: {
      pages: {
        options: {
          flatten: true,
          layout: '<%= config.master %>',
          data: '<%= config.assets %>/data/*.{json,yml}',
          partials: '<%= config.partials %>',
          helpers: [
            'handlebars-helpers',
            '<%= config.assets %>/scripts/handlebars-helpers/*'
          ]
        },
        files: {
          './': ['<%= config.views %>/*.hbs'] 
        }
      }
    },
    
    // # ftp-deploy
    // Pushes files over ftp for you.
    'ftp-deploy': {
      dev: {
        auth: {
          host: '',
          port: '',
          authKey: ''
        },
        src: '',
        dest: ''
      }      
    }
    
  });
  
  // # grunt serve (--allow-remote)
  // Build the project and then launch a local webserver.
  grunt.registerTask('serve', 'start the server and preview your app, --allow-remote for remote access', function (target) {
    if (grunt.option('allow-remote')) {
      grunt.config.set('connect.options.hostname', '0.0.0.0');
    }
    if (target === 'dist') {
      return grunt.task.run(['build', 'connect:dist:keepalive']);
    }

    grunt.task.run([
      'clean:server',
      'assemble',
      'wiredep',
      'concurrent:server',
      'autoprefixer',
      'connect:livereload',
      'watch'
    ]);
  });
  
  // # grunt build
  // Build the project completely, but don't serve it.
  grunt.registerTask('build', [
    'clean:dist',
    'assemble',
    'wiredep',
    'useminPrepare',
    'concurrent:dist',
    'autoprefixer',
    'concat',
    'cssmin',
    'uglify',
    //'copy:dist',
    'rev',
    'usemin',
    'htmlmin'
  ]);
  
  // # grunt (default)
  // Build the project. (Same as `grunt build`.)
  grunt.registerTask('default', [ 'build' ]);
  
  grunt.registerTask('publish', 'commit work, push to github, and deploy on server; requires target [valid: dev, prod]', function (target) {
    if (target !== 'dev' && target !== 'prod') {
      grunt.log.error('Invalid target `' + target + '`. [valid: dev, prod]');
      return false;
    }
    
    grunt.task.run([
      'build',
      //'commit',
      //'push',
      //'ftp-deploy:' + target
    ])
  });
}