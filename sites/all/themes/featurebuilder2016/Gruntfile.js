module.exports = function (grunt) {
  require('load-grunt-tasks')(grunt);
  require('time-grunt')(grunt);

  var jsApp = [
    "js/scripts.js"
  ];

  var jsLibs = [
    "js/vendor/owl.carousel.min.js",
    "js/vendor/custom.modernizr.js",
    "js/vendor/detectizr.min.js"
  ];

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        sourceComments: false,
        sourceMap: true,
        outputStyle: 'expanded'
      },
      style: {
        files: {
          'css/style.css': 'scss/style.scss'
        }
      }
    },

    jshint: {
      all: [
        'Gruntfile.js',
        jsApp
      ]
    },

    uglify: {
      dist: {
        options: {
          sourceMap: true,
          preserveComments: 'none'
        },
        files: {
          'js/libs.min.js': [jsLibs], 
          'js/app.min.js': [jsApp], 
        }
      }
    },

    watch: {
      js: {
        files: [
          jsLibs,
          'Gruntfile.js'
        ],
        tasks: ['uglify']
      },
      scss: {
        files: 'scss/**/*.scss',
        tasks: ['sass:style']
      }
    },

    autoprefixer: {
      options: {
        browsers: ['Last 2 versions', 'IE 10', 'IE 11'],
        cascade: false,
        remove: false,
        map: false
      },
      css: {
        src: 'css/autodesk.css'
      }
    },

    bless: {
      css: {
        options: {},
        files: {
          'blessed/autodesk.css': 'css/autodesk.css'
        }
      }
    },

    cssmetrics: {
      dev: {
        src: [
          'css/style.css'
        ]
      }
    },

    removescsscomments: {
      your_target: {
        options: {
          singleline: true,
          multiline: true
        },
        src: ['scss/**/*.scss']
      }
    },

    scsslint: {
      allFiles: [
        'scss/*.scss',
      ],
      options: {
        bundleExec: false,
        config: '.scss-lint.yml',
        reporterOutput: 'scss-lint-report.xml',
        colorizeOutput: true
      },
    },

    sassFormat: {
      options: {
        indentChar: '\t',
        indentStep: 1,
        indent: true,
        blankLine: {
          property: true,
          close: true
        },
        whiteSpace: {
          selector: true,
          property: true
        },
        order: true,
        lang: 'en',
        debug: false
      },
      files: {
        src: ['path/to/target/files']
      }
    }

  });

  grunt.registerTask('build', ['sass', 'autoprefixer', 'jshint', 'uglify']);
  grunt.registerTask('default', ['build']);

};
