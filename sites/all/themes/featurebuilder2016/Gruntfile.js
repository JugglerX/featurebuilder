
  module.exports = function(grunt) {
  require('load-grunt-tasks')(grunt);
  require('time-grunt')(grunt);

  // array of javascript libraries to include.
  var jsLibs = [
    
  ];

  // array of foundation javascript components to include.
  var jsFoundation = [
    'js/foundation/foundation.js',
    'js/foundation/foundation.abide.js',
    'js/foundation/foundation.accordion.js',
    'js/foundation/foundation.alert.js',
    'js/foundation/foundation.clearing.js',
    'js/foundation/foundation.dropdown.js',
    'js/foundation/foundation.equalizer.js',
    'js/foundation/foundation.interchange.js',
    'js/foundation/foundation.joyride.js',
    'js/foundation/foundation.magellan.js',
    'js/foundation/foundation.offcanvas.js',
    'js/foundation/foundation.orbit.js',
    'js/foundation/foundation.reveal.js',
    'js/foundation/foundation.slider.js',
    'js/foundation/foundation.tab.js',
    'js/foundation/foundation.tooltip.js',
    'js/foundation/foundation.topbar.js'
  ];

  // array of custom javascript files to include.
  var jsApp = [
    'js/scripts.js',
  ];

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
          outputStyle: 'expanded',
          sourceComments: true,
          sourceMap: false,
      },
      dist: {
        files: { 'css/style.css': 'css/style.scss'}
      },
    },

    jshint: {
      options: {
        // jshintrc: '.jshintrc',
        force: true
      },
      all: [
        'Gruntfile.js',
        jsApp
      ]
    },

    uglify: {
      options: {
        sourceMap: false,
        compress: false,
        beautify: false,
        preserveComments: 'all',
        mangle: false
      },
      dist: {
        files: {
          'js/libs.min.js': [jsLibs],
          'js/foundation.min.js': [jsFoundation],
          'js/scripts.min.js': [jsApp]
        }
      }
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },
      js: {
        files: [
          jsLibs,
          jsFoundation,
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify']
      },
      scss: {
        files: 'css/**/*.scss',
        tasks: ['sass:dist'],
      },
      css: {
        files: 'css/*.css',
        options: {
          livereload: true
        }
      }
    }
    
  });

  grunt.registerTask('build', ['sass','jshint','uglify']);
  grunt.registerTask('default', ['build']);

};
