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
    'students/events/am.html': ['<%= config.views %>/events-pages/am.hbs'],
    'students/events/eid.html': ['<%= config.views %>/events-pages/eid.hbs'],
    'students/events/iptjf.html': ['<%= config.views %>/events-pages/iptjf.hbs'],
    'students/events/tech.html': ['<%= config.views %>/events-pages/tech.hbs'],
    'students/events/cmcd.html': ['<%= config.views %>/events-pages/cmcd.hbs'],
    'students/events/your-major.html': ['<%= config.views %>/events-pages/your-major.hbs'],
    'students/events/gpsf.html': ['<%= config.views %>/events-pages/gpsf.hbs'],
    'students/events/seoty.html': ['<%= config.views %>/events-pages/seoty.hbs'],
    'students/events/pca.html': ['<%= config.views %>/events-pages/pca.hbs'],
    'assessments/index.html': ['<%= config.views %>/assessments.hbs'],
    'aboutus/liaisons.html': ['<%= config.views %>/liaison-hours.hbs'],
    'resume/index.html': ['<%= config.views %>/resume.hbs'],
    'resume/samples/index.html': ['<%= config.views %>/sample-docs.hbs'],
    'resume/submission.php': ['<%= config.views %>/eresume.hbs'],
    'interviews/index.html': ['<%= config.views %>/interviews.hbs'],
    'pathways/index.html': ['<%= config.views %>/pathways.hbs'],
    'aboutus/index.html': ['<%= config.views %>/about-us.hbs'],
    'aboutus/plan-your-visit.html': ['<%= config.views %>/plan-your-visit.hbs'],
    'aboutus/campus-partners.html': ['<%= config.views %>/campus-partners.hbs'],
    'aboutus/staff.html': ['<%= config.views %>/staff.hbs'],
    'faculty/presentations.html': ['<%= config.views %>/presentations.hbs'],
    'faculty/submission.php': ['<%= config.views %>/presentation-submission.hbs'],
    'students/index.html': ['<%= config.views %>/students/current.hbs'],
    'students/alumni.html': ['<%= config.views %>/students/alumni.hbs'],
    'students/current.html': ['<%= config.views %>/students/current.hbs'],
    'students/graduate.html': ['<%= config.views %>/students/graduate.hbs'],
    'students/prospective.html': ['<%= config.views %>/students/prospective.hbs'],
    'students/specialized.html': ['<%= config.views %>/students/specialized.hbs'],
    'parents/index.html': ['<%= config.views %>/families.hbs'],
    'faculty/index.html': ['<%= config.views %>/faculty.hbs'],
    'employers/index.html': ['<%= config.views %>/hire.hbs'],
    'employers/events/index.html': ['<%= config.views %>/employer-events/events.hbs'],
    'employers/events/tech.html': ['<%= config.views %>/employer-events/tech.hbs'],
    'employers/events/am.html': ['<%= config.views %>/employer-events/am.hbs'],
    'employers/events/eid.html': ['<%= config.views %>/employer-events/eid.hbs'],
    'employers/events/iptjf.html': ['<%= config.views %>/employer-events/iptjf.hbs'],
    'employers/events/gpsf.html': ['<%= config.views %>/employer-events/gpsf.hbs'],
    'employers/events/seoty.html': ['<%= config.views %>/employer-events/seoty.hbs'],
    'employers/aboutus/index.html': ['<%= config.views %>/employer-about-us/about-us.hbs'],
    'employers/aboutus/campus-partners.html': ['<%= config.views %>/employer-about-us/campus-partners.hbs'],
    'employers/aboutus/plan-your-visit.html': ['<%= config.views %>/employer-about-us/plan-your-visit.hbs'],
    'employers/aboutus/staff.html': ['<%= config.views %>/employer-about-us/staff.hbs'],
    'employers/student-employment/off-campus.html': ['<%= config.views %>/off-campus-employment.hbs'],
    'employers/student-employment/on-campus.html': ['<%= config.views %>/on-campus-employment.hbs'],
    'employers/oci.html': ['<%= config.views %>/oci.hbs'],
    'employers/job-postings.html': ['<%= config.views %>/job-postings.hbs'],
    'experience/index.html': ['<%= config.views %>/experience.hbs'],
    'experience/internships.html': ['<%= config.views %>/internships.hbs'],
    'experience/dept-contacts.html': ['<%= config.views %>/dept-contacts.hbs'],
    'experience/housing.html': ['<%= config.views %>/housing.hbs']
  },
  VIEW_MAPPING_PROD = {
    'dist/index.html':    ['<%= config.views %>/home.hbs'],
    'dist/jobs/index.html': ['<%= config.views %>/jobs.hbs'],
    'dist/events/index.html': ['<%= config.views %>/events.hbs'],
    'dist/students/events/am.html': ['<%= config.views %>/events-pages/am.hbs'],
    'dist/students/events/eid.html': ['<%= config.views %>/events-pages/eid.hbs'],
    'dist/students/events/iptjf.html': ['<%= config.views %>/events-pages/iptjf.hbs'],
    'dist/students/events/tech.html': ['<%= config.views %>/events-pages/tech.hbs'],
    'dist/students/events/cmcd.html': ['<%= config.views %>/events-pages/cmcd.hbs'],
    'dist/students/events/your-major.html': ['<%= config.views %>/events-pages/your-major.hbs'],
    'dist/students/events/gpsf.html': ['<%= config.views %>/events-pages/gpsf.hbs'],
    'dist/students/events/seoty.html': ['<%= config.views %>/events-pages/seoty.hbs'],
    'dist/students/events/pca.html': ['<%= config.views %>/events-pages/pca.hbs'],
    'dist/assessments/index.html': ['<%= config.views %>/assessments.hbs'],
    'dist/aboutus/liaisons.html': ['<%= config.views %>/liaison-hours.hbs'],
    'dist/resume/index.html': ['<%= config.views %>/resume.hbs'],
    'dist/resume/samples/index.html': ['<%= config.views %>/sample-docs.hbs'],
    'dist/resume/submission.php': ['<%= config.views %>/eresume.hbs'],
    'dist/interviews/index.html': ['<%= config.views %>/interviews.hbs'],
    'dist/pathways/index.html': ['<%= config.views %>/pathways.hbs'],
    'dist/aboutus/index.html': ['<%= config.views %>/about-us.hbs'],
    'dist/aboutus/plan-your-visit.html': ['<%= config.views %>/plan-your-visit.hbs'],
    'dist/aboutus/campus-partners.html': ['<%= config.views %>/campus-partners.hbs'],
    'dist/aboutus/staff.html': ['<%= config.views %>/staff.hbs'],
    'dist/faculty/presentations.html': ['<%= config.views %>/presentations.hbs'],
    'dist/faculty/submission.php': ['<%= config.views %>/presentation-submission.hbs'],
    'dist/students/index.html': ['<%= config.views %>/students/current.hbs'],
    'dist/students/alumni.html': ['<%= config.views %>/students/alumni.hbs'],
    'dist/students/current.html': ['<%= config.views %>/students/current.hbs'],
    'dist/students/graduate.html': ['<%= config.views %>/students/graduate.hbs'],
    'dist/students/prospective.html': ['<%= config.views %>/students/prospective.hbs'],
    'dist/students/specialized.html': ['<%= config.views %>/students/specialized.hbs'],
    'dist/parents/index.html': ['<%= config.views %>/families.hbs'],
    'dist/faculty/index.html': ['<%= config.views %>/faculty.hbs'],
    'dist/employers/index.html': ['<%= config.views %>/hire.hbs'],
    'dist/employers/events/index.html': ['<%= config.views %>/employer-events/events.hbs'],
    'dist/employers/events/tech.html': ['<%= config.views %>/employer-events/tech.hbs'],
    'dist/employers/events/am.html': ['<%= config.views %>/employer-events/am.hbs'],
    'dist/employers/events/eid.html': ['<%= config.views %>/employer-events/eid.hbs'],
    'dist/employers/events/iptjf.html': ['<%= config.views %>/employer-events/iptjf.hbs'],
    'dist/employers/events/gpsf.html': ['<%= config.views %>/employer-events/gpsf.hbs'],
    'dist/employers/events/seoty.html': ['<%= config.views %>/employer-events/seoty.hbs'],
    'dist/employers/aboutus/index.html': ['<%= config.views %>/employer-about-us/about-us.hbs'],
    'dist/employers/aboutus/campus-partners.html': ['<%= config.views %>/employer-about-us/campus-partners.hbs'],
    'dist/employers/aboutus/plan-your-visit.html': ['<%= config.views %>/employer-about-us/plan-your-visit.hbs'],
    'dist/employers/aboutus/staff.html': ['<%= config.views %>/employer-about-us/staff.hbs'],
    'dist/employers/student-employment/off-campus.html': ['<%= config.views %>/off-campus-employment.hbs'],
    'dist/employers/student-employment/on-campus.html': ['<%= config.views %>/on-campus-employment.hbs'],
    'dist/employers/oci.html': ['<%= config.views %>/oci.hbs'],
    'dist/employers/job-postings.html': ['<%= config.views %>/job-postings.hbs'],
    'dist/experience/index.html': ['<%= config.views %>/experience.hbs'],
    'dist/experience/internships.html': ['<%= config.views %>/internships.hbs'],
    'dist/experience/dept-contacts.html': ['<%= config.views %>/dept-contacts.hbs'],
    'dist/experience/housing.html': ['<%= config.views %>/housing.hbs']
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
      options: {
        forever: false
      },
      assemble: {
        files: ['<%= config.views %>/{,*/}*.{md,hbs,yml}', '<%= config.assets %>/data/{,*/}*.json'],
        tasks: ['assemble:dev'] //tasks: ['assemble', 'processhtml']
      },
      gruntfile: {
        files: ['Gruntfile.js'],
        tasks: ['default']
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
      post: {
        files: [{
          dot: true,
          src: [
            'assets/styles/*.css*',
            '!assets/styles/*.min.*.css',
            '.tmp',
            'dist/assets/styles/*.css',
            '!dist/assets/styles/*.min.*.css',
            'dist/assets/scripts/*.js',
            '!dist/assets/scripts/*.min.*.js'
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
        data: '<%= config.assets %>/data/*'
      },
      dev: {
        files: VIEW_MAPPING
      },
      prod: {
        files: VIEW_MAPPING_PROD
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
        browsers: '> 5%, ie >= 8'
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
        'dist/**/*.html'
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
        src: '<%= config.dist %>/assets/scripts/{,*/}*.min.js',
        dest: '<%= config.dist %>/<%= config.assets %>/scripts'
      }
    },


    // ## usemin
    // Change blocks of local CSS and JS references
    // into singular, cache-busting downloads n
    // your production HTML!
    usemin: {
      html: 'dist/**/*.html',
      options: {
        assetsDirs: ['dist']
      }
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
    if (target !== 'dev' && target !== 'prod') {
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
};
