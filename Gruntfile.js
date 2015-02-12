// # Directory structure

// ## TODO: Determine how to develop via Github, and how that
//    incorporates the live/dev directory structure.

// ## If we have a dev environment and a live environment:
//    The dev environment should always live within the
//    live environment in a folder called dev.
//    All assets (javascript, images, fonts, stylesheets)
//    for a page/project should be in /assets, at the
//    same height as the post-compilation index.html.

// ## We have a dev environment if:
//    We need to keep the existing site/page and be able
//    to make meaningful edits to it, but we also want
//    to be able to demo the new site/page.

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
  require('time-grunt')(grunt);

  // # jit-grunt
  // Load grunt plugins without using a .loadNpmTasks block at the end of the Gruntfile.
  require('jit-grunt')(grunt);

  grunt.initConfig({

    // # Project settings
    config: {
      assets: 'assets',
      views: 'views',
      master: 'views/layouts/default.hbs',
      jobsmaster: 'views/layouts/jobs.hbs',
      nosocial: 'views/layouts/no-social.hbs',
      partials: 'views/partials/*.hbs',
      dist: '.'
    },

    // # Tasks I'd like to run, but I am not yet:
    // ## rev
    //    Rename files to bust browser caches.
    // ## *-min
    //    (htmlmin, cssmin, imagemin, svgmin, uglify)
    //    Minify our files.
    // ## ftp-deploy
    //    Pushes files over ftp for you.

    // # Tasks I might like to run if they prove useful enough:
    // ## wiredep
    //    Inject Bower components into our master page.
    // ## concurrent
    //    Runs specified tasks in parallel to speed up builds.




    // # watch
    // Watch for changes in the specified files and run the
    // associated tasks.
    watch: {
      assemble: {
        files: ['<%= config.views %>/{,*/}*.{md,hbs,yml}'],
        tasks: ['assemble'] //tasks: ['assemble', 'processhtml']
      },
      gruntfile: {
        files: ['Gruntfile.js']
      },
      sass: {
        files: ['<%= config.assets %>/styles/{,*/}*.{scss,sass}'],
        tasks: ['sass', 'autoprefixer'] //tasks: ['sass', 'uncss', 'autoprefixer']
      },
      js: {
        files: ['<%= config.assets %>/scripts/{,*/}*.js'],
        tasks: ['jshint:all']
      },
      livereload: {
        options: {
          livereload: '<%= connect.options.livereload %>'
        },
        files: [
          '<%= config.dist %>/{,*/}*.html',
          '<%= config.assets %>/styles/{,*/}*.css',
          '<%= config.assets %>/scripts/{,*/}*.js'
        ]
      }
    },

    connect: {
      options: {
        port: 1107,
        open: true,
        livereload: 35729,
        hostname: 'localhost'
      },
      livereload: {

      }
    },

    // # clean
    // Empty out folders.
    clean: {
      dist: {
        files: [{
          dot: true,
          src: [
            '.tmp',
            'dist/*'
          ]
        }]
      }
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
          dest: '<%= config.assets %>/styles',
          ext: '.css'
        }]
      }
    },

    // # assemble
    // Compiles Handlebars layouts, partials, and pages
    // into servable HTML.
    assemble: {
      options: {
        helpers: ['*-helper.js']
      },
      home: {
        options: {
          flatten: true,
          layout: '<%= config.master %>',
          partials: '<%= config.partials %>'
        },
        files: {
          './index.html':    ['<%= config.views %>/home.hbs'],
          'jobs/index.html': ['<%= config.views %>/jobs.hbs'] 
        }
      },
      events: {
        options: {
          flatten: true,
          layout: '<%= config.nosocial %>',
          partials: '<%= config.partials %>'
        },
        files: {
          'events/index.html': ['<%= config.views %>/events.hbs'],
          'events/': [
            '<%= config.views %>/am.hbs',
            '<%= config.views %>/eid.hbs',
            '<%= config.views %>/iptjf.hbs',
            '<%= config.views %>/tech.hbs',
            '<%= config.views %>/cmcd.hbs'
          ] 
        }
      }
    },

    // # jshint
    // Ensure js is up-to-snuff. (Does not do heavy
    // validation, just coding style and basic syntax.)
    jshint: {
      options: {
        reporter: require('jshint-stylish'),
        asi: true,
        laxbreak: true
      },
      all: ['<%= config.assets %>/scripts/{,*/}*.js']
    },
    
    // ## uncss
    //    Concatenates all CSS files used on a page, then removes
    //    all unnecessary selectors (and affiliated rules). Massive
    //    performance difference!
    uncss: {
      options: {
        ignore: [/nav-collapse.*/, 'closed', 'nav-toggle', 'font-family', 'header-navbar'] 
      },
      index: {
        options: { 
          report: 'min'
        },
        files: {
          'assets/styles/index.css': ['index.html']
        }
      },
      eventpages: {
        options: { report: 'min' },
        files: {
          'assets/styles/event-pages.css': ['am.html', 'eid.html', 'iptjf.html', 'cmcd.html', 'tech.html']
        }
      }
    },
    
    // ## processhtml
    //    Merges all css references onto a page into the one that uncss generates.
    processhtml: {
      dist: {
        files: {
          'index.html': ['index.html'] 
        }
      }
    },
    
    // ## autoprefixer
    //    Automagically adds vendor-prefixed rules to match non-prefixed rules
    //    we use that we might've forgotten about!
    //    e.g.
    //    `display: flex;`
    //    becomes
    //    `display: flex;
    //     ms-display: flex-box;
    //     display: -webkit-flex;`
    autoprefixer: {
      options: {
        browsers: ['>5%', 'ie >= 8']
      },
      all: {
        src: ['<%= config.assets %>/styles/{,*/}*.css']
      }
    },

    // # express
    // Launch an express server.
    express: {
      options: {
        livereload: true,
        bases: '.'
      }
    }

  });

  // # grunt build
  // Build the project. Don't serve it. Crafted from scratch.
  grunt.registerTask('build', [
    'clean',
    'sass',
    'jshint',
    'assemble',
    'autoprefixer'
  ]);

  // # grunt auto
  // Build the project, then wait for updates and rebuild selectively.
  grunt.registerTask('auto', [
    'build',
    'watch'
  ]);

  // # grunt (default)
  // Build the project. (Same as `grunt build`.)
  grunt.registerTask('default', [ 'auto' ]);

  // # grunt serve
  // Build, watch, and livereload on an express server.
  grunt.registerTask('serve', [
    'build',
    'connect:livereload',
    'watch'
  ]);

  /*grunt.registerTask('publish', 'commit work, push to github, and deploy on server; requires target [valid: dev, prod]', function (target) {
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
  });*/
}
