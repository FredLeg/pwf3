module.exports = {

  options: {
    sourceMap: true,
    includePaths: ['app/vendors/bootstrap-sass-3.3.5/assets/stylesheets']
  },

  build: {
    files: [{
      expand: true,
      cwd: 'app/sass',
      src: ['**/*.{scss,sass}'],
      dest: 'app/css',
      ext: '.css'
    }]
  }

};
