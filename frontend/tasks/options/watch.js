/*global module*/
'use strict';

module.exports = {
  sass: {
    files: [
      'app/sass/{,*/}*.{scss,sass}',
    ],
    tasks: ['sass:build', 'autoprefixer'],
    options: {
      livereload: true
    }
  },
};
