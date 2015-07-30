module.exports = {
  options: {
    browsers: ['> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1']
  },
  dist: {
    files: [{
      expand: true,
      cwd: 'app/css/',
      src: '{,*/}*.css',
      dest: '../app/public/statics/css/',
    }]
  }
};
