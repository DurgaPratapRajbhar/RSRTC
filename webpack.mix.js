const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
.combine([
    'public/css/bootstrap.min.css', 
    'public/css/components-md.css',
    'public/css/custom.css',
     'public/css/datepicker.css',
      'public/css/default.css',
       'public/css/font-awesome.min.css',
        'public/css/jqvmap.css',
         'public/css/layout.css',
          'public/css/login.css',
           'public/css/login2.css',
            'public/css/morris.css',
             'public/css/plugins-md.css',
             'public/css/select2.css',
             'public/css/simple-line-icons.min.css',
             'public/css/tasks.css',
              'public/css/uniform.default.css'
], 'public/css/app.css')
.combine([
    'public/js/jquery.min.js',
     'public/js/bootstrap.min.js',
     'public/js/jquery-ui.min.js',
     'public/js/jquery-migrate.min.js',
     'public/js/bootstrap-hover-dropdown.min.js',
     'public/js/jquery.slimscroll.min.js',
      'public/js/jquery.validate.min.js',
      'public/js/additional-methods.min.js',
      'public/js/metronic.js',
      'public/js/layout.js',
      'public/js/select2.min.js',
      'public/js/jquery.bootstrap.wizard.min.js',
      'public/js/form-wizard.js',
      'public/js/bootstrap-datepicker.js',
], 'public/js/app.js');



//     mix.combine([
//     'resources/sass/bootstrap.css',
// ], 'public/css/app.css');
