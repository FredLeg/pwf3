/* global require, module */

// https://github.com/twbs/bootstrap/blob/master/Gruntfile.js?pr=%2Ficebergthemes%2Fbootstrap%2Fpull%2F1

'use strict';

module.exports = function (grunt) {

  console.log( '--------------------------------------------------\n' )
  console.log( 'Gruntfile.js module.exports: '+grunt.toString() )

  // show elapsed time at the end
  require('time-grunt')(grunt);

  var path = require('path');

  function loadConfig (path) {
    var glob = require('glob');
    var object = {};
    var key;

    glob.sync('*', {cwd: path}).forEach(function (option) {
      console.log( 'Gruntfile.js forEach: '+option )
      key = option.replace(/\.js$/,'');
      var req;
      try {
        req = require(path + option);
        console.log( 'Gruntfile.js req: '+ path + option )
        object[key] = 'function' === typeof req ? req(grunt) : req;
      }
      catch (e) {}
    });

    return object;
  }

  // configurable paths
  var config = {
    config: {
      app: 'app',
      tmp: '.tmp',
      dist: 'dist',
      host: '',
      port: '',
    }
  };

  grunt.util._.extend(config, loadConfig('./tasks/options/'));

  grunt.initConfig(config);

  require('load-grunt-config')(grunt, {
    configPath: path.join(process.cwd(), 'tasks'),
    init: false,
    config: config,
    jitGrunt: {
      staticMappings: {
        useminPrepare: 'grunt-usemin'
      }
    }
  });

};
