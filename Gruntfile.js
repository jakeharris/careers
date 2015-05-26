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

  var VIEW_MAPPING = {
    './index.html':    ['<%= config.views %>/home.hbs'],
    'jobs/index.html': ['<%= config.views %>/jobs.hbs'],
    'events/index.html': ['<%= config.views %>/events.hbs'],
    'students/events/': [
      '<%= config.views %>/events-pages/am.hbs',
      '<%= config.views %>/events-pages/eid.hbs',
      '<%= config.views %>/events-pages/iptjf.hbs',
      '<%= config.views %>/events-pages/tech.hbs',
      '<%= config.views %>/events-pages/cmcd.hbs',
      '<%= config.views %>/events-pages/your-major.hbs'
    ],
    'assessments/index.html': ['<%= config.views %>/assessments.hbs'],
    'aboutus/liaisons.html': ['<%= config.views %>/liaison-hours.hbs'],
    'resume/index.html': ['<%= config.views %>/resume.hbs'],
    'pathways/index.html': ['<%= config.views %>/pathways.hbs'],
    'aboutus/index.html': ['<%= config.views %>/about-us.hbs'],
    'aboutus/': [
      '<%= config.views %>/plan-your-visit.hbs',
      '<%= config.views %>/campus-partners.hbs',
      '<%= config.views %>/staff.hbs'
    ],
    'faculty/presentations.html': ['<%= config.views %>/presentations.hbs'],
    'faculty/submission.php': ['<%= config.views %>/presentation-submission.hbs'],
    'students/index.html': ['<%= config.views %>/students/current.hbs'],
    'students/': ['<%= config.views %>/students/*.hbs'],
    'parents/index.html': ['<%= config.views %>/families.hbs'],
    'faculty/index.html': ['<%= config.views %>/faculty.hbs']
  }
  
  grunt.initConfig({

    // # Project settings
    config: {
      assets: 'assets',
      views: 'views',
      layouts: 'views/layouts',
      master: 'views/layouts/default.hbs',
      jobsmaster: 'views/layouts/jobs.hbs',
      nosocial: 'views/layouts/no-social.hbs',
      partials: 'views/partials/*.hbs',
      dist: 'dist'
    },

    // # Tasks I'd like to run, but I am not yet:
    // ## ftp-deploy
    //    Pushes files over ftp for you.

    // # Tasks I might like to run if they prove useful enough:
    // ## concat
    //    Concatenates multiple static assets into one file.
    //    Useful when pages load multiple disparate stylesheets or scripts.
    //    Not as useful for us, because each page already loads only one stylesheet
    //    from the server (all others come from external CDNs, if necessary).
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
        files: ['<%= config.views %>/{,*/}*.{md,hbs,yml}', '<%= config.assets %>/data/staff.json', '<%= config.assets %>/data/pathways.json'],
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
          src: ['dist/']
        }]
      },
      styles: {
        files: [{
          dot: true,
          src: [
            'assets/styles/*.css*'
          ]
        }]
      },
      scripts: {
        files: [{
          dot: true,
          src: [
            'assets/scripts/*.js*'
          ]
        }]
      },
      post: {
        files: [{
          dot: true,
          src: [
            'assets/styles/*.css*',
            '!assets/styles/*.min.*.css',
            'assets/scripts/*.js*',
            '!assets/scripts/*.min.*.js',
            '.tmp',
            'dist/assets/styles/*.css',
            '!dist/assets/styles/*.min.*.css'
          ]
        }]
      }
    },
    
    // # copy
    // Move files around.
    copy: {
      components: {
        cwd: 'assets/styles/',
        src:  ['components/*.css*'],
        dest: '.',
        flatten: true
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
          cwd: '<%= config.assets %>/styles/sass',
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
        helpers: ['*-helper.js'],
        prod: 'false',
        layouts: '<%= config.layouts %>',
        partials: '<%= config.partials %>',
        data: '<%= config.assets %>/data/*',
        flatten: true
      },
      dev: {
        files: VIEW_MAPPING
      },
      prod: {
        files: VIEW_MAPPING,
        src: ['<%= config.views %>/{,*/}*.hbs', '!<%= config.views %>/layouts/*', '!<%= config.views %>/partials/*'],
        dest: 'dist/'
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
    // (usemin, htmlmin, cssmin, imagemin, svgmin, uglify)
    // Minify our files.
    
    // ### useminPrepare
    // Prepare files for serving based on usemin blocks found in HTML.
    useminPrepare: {
      html: [
        'aboutus/*.html',
        'assessments/index.html',
        'events/index.html', 
        'faculty/*.html',
        'jobs/index.html',
        'parents/index.html',
        'pathways/index.html',
        'resume/index.html',
        'students/*.html',
        'students/events/*.html',
        'index.html'
      ],
      options: {
        root: '.',
        dest: 'dist'
      }
    },

    // ### concat
    // Combines and moves around files. Relatively necessary for
    // getting usemin to work properly.
    concat: {
      
    },
    
    // ### cssmin
    // Minify our CSS.
    cssmin: {

    },

    // ### uglify
    // Minify our JS.
    uglify: {

    },

    // ## filerev
    // Rename files to bust browser caches.
    filerev: {
      css: {
        src: '<%= config.dist %>/assets/styles/{,*/}*.min.css',
        dest: '<%= config.dist %>/<%= config.assets %>/styles'
      },
      js: {
        src: '<%= config.dist %>/assets/scripts/{,*/}*.min.js' ,
        dest: '<%= config.dist %>/<%= config.assets %>/scripts'
      }
    },


    // ## usemin
    // Change blocks of local CSS and JS references
    // into singular, cache-busting downloads n
    // your production HTML!
    usemin: {
      html: 'dist/*.html'
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
  grunt.registerTask('compile', 'Compile the project. Generate CSS and HTML from Sass and Handlebars.', function (target) {
    if(target !== 'dev' && target !== 'prod') {
      grunt.log.error('Invalid target `' + target + '`. [valid: dev, prod]');
      return false;
    }
    grunt.task.run([
      'sass',
      'autoprefixer',
      'assemble:' + target
    ]);
  });

  // # grunt enhance
  // Improve upon the compiled project. Minify files, cache bust.
  grunt.registerTask('enhance', [
    'useminPrepare',
    'concat:generated',
    'cssmin:generated',
    'uglify:generated',
    'filerev',
    'usemin',
    'clean:post'
  ]);

  // # grunt build
  // Build the project. Don't serve it. Crafted from scratch.
  grunt.registerTask('build', [
    'clean',
    'validate',
    'compile:dev'
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
  
  grunt.registerTask('deploy', [
    'clean',
    'validate',
    'compile:prod',
    'enhance'
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
