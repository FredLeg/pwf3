module.exports = function (grunt) {
  'use strict';

  grunt.registerTask('serve', 'start the server and preview your app', function (target) {

    console.log('serve.js: hello');
    console.log('serve.js target: '+target);

    grunt.task.run([
      'clean:css',
      'sass',
      'watch'
    ]);

  });
};
