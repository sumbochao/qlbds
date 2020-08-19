const mix = require('laravel-mix');
const WebpackRTLPlugin = require('webpack-rtl-plugin');

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

mix.sass('resources/assets/sass/frontend/app.scss', 'public/css/frontend.css')
    .sass('resources/assets/sass/backend/app.scss', 'public/css/backend.css')
    .styles([
        'public/css/plugin/datatables/jquery.dataTables.min.css',
        'public/css/backend/plugin/datatables/dataTables.bootstrap.min.css',
        'public/css/plugin/datatables/buttons.dataTables.min.css',
        'public/js/select2/select2.css',
        'public/css/bootstrap.min.css',
        'public/css/custom-style.css',
        'public/css/custom.css',
        'public/assets/node_modules/morrisjs/morris.css',
        'public/assets/node_modules/vectormap/jquery-jvectormap-2.0.2.css',
        'public/dist/css/pages/easy-pie-chart.css',
        'public/dist/css/style.min.css',
        'public/dist/css/pages/dashboard2.css',
        'public/css/loader.css',
        'public/css/bootstrap-datetimepicker.min.css',
        'client/build/client-modules.min.css',
    ], 'public/css/backend-custom.css')
    .js([
        'resources/assets/js/frontend/app.js',
        'resources/assets/js/plugin/sweetalert/sweetalert.min.js',
        'resources/assets/js/plugins.js',
        'client/build/client-modules.min.js',
    ], 'public/js/frontend.js')
    .js([
        'resources/assets/js/backend/app.js',
        'resources/assets/js/plugin/sweetalert/sweetalert.min.js',
        'resources/assets/js/plugins.js'
    ], 'public/js/backend.js')
    //Copying all directories of tinymce to public folder
    .copyDirectory('node_modules/tinymce/plugins', 'public/js/plugins')
    .copyDirectory('node_modules/tinymce/skins', 'public/js/skins')
    .copyDirectory('node_modules/tinymce/themes', 'public/js/themes')
    .scripts([
        "node_modules/moment/moment.js",
        "node_modules/select2/dist/js/select2.full.js",
        "public/js/bootstrap-datetimepicker.min.js",
        "public/js/backend/custom-file-input.js",
        "public/js/backend/notification.js",
        "public/assets/node_modules/jquery/jquery-3.2.1.min.js",
        "public/assets/node_modules/popper/popper.min.js",
        "public/assets/node_modules/bootstrap/js/bootstrap.min.js",
        "public/dist/js/perfect-scrollbar.jquery.min.js",
        "public/dist/js/waves.js",
        "public/dist/js/sidebarmenu.js",
        "public/assets/node_modules/raphael/raphael.min.js",
        "public/assets/node_modules/morrisjs/morris.min.js",
        "public/assets/node_modules/sparkline/jquery.sparkline.min.js",
        "public/assets/node_modules/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js",
        "public/assets/node_modules/jquery.easy-pie-chart/easy-pie-chart.init.js",
        "public/assets/node_modules/vectormap/jquery-jvectormap-2.0.2.min.js",
        "public/assets/node_modules/vectormap/jquery-jvectormap-world-mill-en.js",
        "public/dist/js/dashboard2.js",
        "public/dist/js/custom.min.js",
        "public/js/backend/admin.js",
    ], 'public/js/backend-custom.js')
    //Datatable js
    .scripts([
        'node_modules/datatables.net/js/jquery.dataTables.js',
        'public/js/plugin/datatables/dataTables.bootstrap.min.js',
        'node_modules/datatables.net-buttons/js/dataTables.buttons.js',
        'node_modules/datatables.net-buttons/js/buttons.flash.js',
        'public/js/plugin/datatables/jszip.min.js',
        'public/js/plugin/datatables/pdfmake.min.js',
        'public/js/plugin/datatables/vfs_fonts.js',
        'node_modules/datatables.net-buttons/js/buttons.html5.js',
        'node_modules/datatables.net-buttons/js/buttons.print.js',
    ], 'public/js/dataTable.js')
    .webpackConfig({
        plugins: [
            new WebpackRTLPlugin('/css/[name].rtl.css')
        ]
    })
    .version();