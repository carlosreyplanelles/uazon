// All the plugins we need
var gulp = require('gulp'),
    browserSync = require('browser-sync').create(),
    cssnano = require('gulp-cssnano'),
    concat = require('gulp-concat'),
    image = require('gulp-image'),
    postcss = require('gulp-postcss'),
    postcssCssnext = require('postcss-cssnext'),
    postcssImport = require('postcss-import'),
    postcssMixins = require('postcss-mixins'),
    postcssNested = require('postcss-nested'),
    postcssHexrgba = require('postcss-hexrgba'),
    postcssPxToRem = require('postcss-pxtorem'),
    runSequence = require('run-sequence'),
    uglify = require('gulp-uglify');

// PxToRem Configuration
var pxToRemConf = {
    rootValue: 18,
    unitPrecision: 6,
    propList: ['font', 'font-size', 'letter-spacing', 'margin', 'padding', 'width', 'height']
};

// Files configuration
var publicAssets = 'public/assets',
    sourceAssets = 'resources/assets';


// Default
// --------------------------------------------------------------------------------------------
gulp.task('default', function() {
    runSequence(['images', 'fonts', 'styles', 'scripts-third', 'scripts']);
});


// Watch
// --------------------------------------------------------------------------------------------
gulp.task('watch', function() {

    // Browser Sync Configuration
    browserSync.init({
         notify: false,
         proxy: {
             target: 'http://proweb.local',
             proxyReq: [
                 function (proxyRes, req, res) {

                 }
             ]
         },
         browser: ["google chrome"]
    });

    // Watch for styles
    gulp.watch(sourceAssets + '/styles/**/*.css', ['styles']).on('change', browserSync.reload);

    // Watch for Javascript
    gulp.watch(sourceAssets + '/scripts/**/*.js', ['scripts']).on('change', browserSync.reload);

    // Watch for images
    gulp.watch(sourceAssets + '/images/**/*', ['images']).on('change', browserSync.reload);

});


// Fonts
// --------------------------------------------------------------------------------------------
gulp.task('fonts', function() {
    return  gulp.src(sourceAssets + '/fonts/**/*')
                .pipe(gulp.dest(publicAssets + '/fonts'));
});


// Styles
// --------------------------------------------------------------------------------------------
gulp.task('styles', function() {
   return   gulp.src(sourceAssets + '/styles/*.css')
                .pipe(postcss([postcssImport, postcssMixins, postcssNested, postcssCssnext, postcssPxToRem(pxToRemConf), postcssHexrgba]))
                .pipe(cssnano())
                .pipe(gulp.dest(publicAssets + '/styles'));
});


// Images
// --------------------------------------------------------------------------------------------
gulp.task('images', function() {
    return  gulp.src(sourceAssets + '/images/**/*')
                .pipe(image())
                .pipe(gulp.dest(publicAssets + '/images'));
});


// Javascript third party
// --------------------------------------------------------------------------------------------
gulp.task('scripts-third', function() {
    return  gulp.src(['node_modules/jquery/dist/jquery.min.js'])
                .pipe(concat('scripts-third.js'))
                .pipe(uglify())
                .pipe(gulp.dest(publicAssets + '/scripts'));

});


// Scripts
// --------------------------------------------------------------------------------------------
gulp.task('scripts', function() {
    return  gulp.src(sourceAssets + '/scripts/**/*')
                .pipe(concat('scripts.js'))
                .pipe(uglify())
                .pipe(gulp.dest(publicAssets + '/scripts'));

});
