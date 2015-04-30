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
  require('jit-grunt')(grunt, {
    useminPrepare: 'grunt-usemin' 
  });

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
    // ## ftp-deploy
    //    Pushes files over ftp for you.

    // # Tasks I might like to run if they prove useful enough:
    // ## concat
    //    Concatenates multiple static assets into one file.
    //    Useful when pages load multiple disparate stylesheets or scripts.
    // ## wiredep
    //    Inject Bower components into our master page.
    // ## concurrent
    //    Runs specified tasks in parallel to speed up builds.

    
    /*                 */
    /*      TASKS      */
    /*                 */
    
    
    // # watch
    // Watch for changes in the specified files and run the
    // associated tasks.
    watch: {
      assemble: {
        files: ['<%= config.views %>/{,*/}*.{md,hbs,yml}', '<%= config.assets %>/data/staff.json'],
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
            'dist'
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
      },
      aboutUs: {
        options:  {
          flatten: true,
          layout: '<%= config.nosocial %>',
          partials: '<%= config.partials %>',
          data: '<%= config.assets %>/data/staff.json'
        },
        files: {
          'aboutus/index.html': ['<%= config.views %>/about-us.hbs'],
          'aboutus/': [
            '<%= config.views %>/plan-your-visit.hbs',
            '<%= config.views %>/campus-partners.hbs',
            '<%= config.views %>/staff.hbs'
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
        browsers: '> 1%, ie >= 8'
      },
      all: {
        src: ['<%= config.assets %>/styles/{,*/}*.css']
      }
    },
    
    // ## *-min
    // (htmlmin, cssmin, imagemin, svgmin, uglify)
    // Minify our files.
    
    // ### cssmin
    // Minify our CSS.
/*    cssmin: {
      generated: {
        files: [{
          expand: true,
          cwd: '<%= config.assets %>/styles',
          src: ['*.css', '!*.min.css'],
          dest: '<%= config.assets %>/styles',
          ext: '.min.css'
        }]
      }
    },*/
    
    // ### uglify
    // Minify our JS.
/*    uglify: {
      generated: {
        options: {
          sourceMap: true 
        },
        files: [{
          expand: true,
          cwd: '<%= config.assets %>/scripts',
          src: ['*.js', '!*.min.js'],
          dest: '<%= config.assets %>/scripts',
          ext: '.min.js'
        }]
      }
    },*/
    
    // ## filerev
    // Rename files to bust browser caches.
    filerev: {
      css: {
        src: 'dist/assets/styles/{,*/}*.min.css',
        dest: '<%= config.assets %>/styles'
      },
      js: {
        src: 'dist/assets/scripts/{,*/}*.min.js' ,
        dest: '<%= config.assets %>/scripts'
      }
    },
  
    
    // ## usemin
    // Change blocks of local CSS and JS references
    // into singular, cache-busting downloads n
    // your production HTML!
    usemin: {
      html: ['index.html', 'events/*.html', 'jobs/index.html'],
      css: ['<%= config.assets %>/styles/*.css']
    }

  });
  
  // # grunt validate
  // Validate project files, checking for syntax errors.
  // If we had test code, it would go here.
  grunt.registerTask('validate', [
    'jshint' 
  ]);
  
  // # grunt compile
  // Compile the project. Generate CSS and HTML from Sass and Handlebars.
  grunt.registerTask('compile', [
    'sass',
    'assemble'
  ]);
  
  // # grunt enhance
  // Improve upon the compiled project. Minify files, cache bust, and autoprefix.
  grunt.registerTask('enhance', [
    //'autoprefixer'
    /* usemin here */
  ]);
  
  // # grunt build
  // Build the project. Don't serve it. Crafted from scratch.
  grunt.registerTask('build', [
    'clean',
    'validate',
    'compile',
    'enhance'
  ]);
  

  // # grunt auto
  // Build the project, then wait for updates and rebuild selectively.
  grunt.registerTask('auto', [
    'build',
    'watch'
  ]);

  // # grunt (default)
  // Build the project. (Same as `grunt serve`.)
  grunt.registerTask('default', [ 'serve' ]);

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
