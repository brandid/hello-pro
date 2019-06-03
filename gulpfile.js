/**
 * Gulp tasks for automating our compile and build process.
 *
 * @package    Hello Pro 3
 * @author     The brandiD
 * @link       https://thebrandiD.com
 * @license    GPL-2.0+
 * @version    3.0
 */

'use strict';

var gulp = require('gulp'),

    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    del = require('del'),
    pxtorem = require('postcss-pxtorem'),

    // Utilities
    rename = require('gulp-rename'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    gutil = require('gulp-util'),
    zip = require('gulp-zip'),
    wpPot = require('gulp-wp-pot');


/*************
 * Utilities
 ************/

/**
 * Error handling
 *
 * @function
 */
function handleErrors() {

    var args = Array.prototype.slice.call(arguments);

    notify.onError({
        title: 'Task Failed [<%= error.message %>',
        message: 'See console.',
        sound: 'Sosumi' // See: https://github.com/mikaelbr/node-notifier#all-notification-options-with-their-defaults
    }).apply(this, args);

    gutil.beep(); // Beep 'sosumi' again

    // Prevent the 'watch' task from stopping
    this.emit('end');

}

/*************
 * CSS Tasks
 ************/

/**
 * PostCSS Task Handler
 */
gulp.task('postcss', ['clean'], function() {

    return gulp.src(['./src/**/*.css'])
    // Error handling
    .pipe(plumber({
        errorHandler: handleErrors
    }))
    // Wrap tasks in a sourcemap
    // .pipe(sourcemaps.init())
    //
    // .pipe(sass({
    //   includePaths: [],
    //   errLogToConsole: true,
    //   outputStyle: 'expanded' // Options: nested, expanded, compact, compressed
    // }))
    .pipe(postcss([

        // postcssSVG({
        //   paths: ['./images']
        // }),
        pxtorem({
            replace: false,
            propList: ['font-size'],
            mediaQuery: false,
            rootValue: 10
        }),
        autoprefixer({
            browsers: ['last 2 versions']
        })

    ]))
    // .pipe(sourcemaps.write())
    .pipe(gulp.dest('.'))
    // .pipe(browserSync.stream())
    .pipe(notify({
        message: 'PostCSS is done.'
    }));

});

// gulp.task('csssvg', function() {
//   return gulp.src('style.css').pipe(
//     postcss([
//       require('postcss-svg-fragments')({ /* options */ })
//     ])
//   ).pipe(
//     gulp.dest('.')
//   ).pipe(notify({
//     message: 'Postcss SVG fragments are built.'
//   }))
//
//
// });

// gulp.task('css:minify', ['postcss'], function() {
//   return gulp.src('style.css')
//     // Error handling
//     .pipe(plumber({
//       errorHandler: handleErrors
//     }))
//     .pipe(cssMinify({
//       safe: true
//     }))
//     .pipe(rename('style.min.css'))
//     .pipe(gulp.dest('./develop/css'))
//     //  .pipe(browserSync.stream())
//     .pipe(notify({
//       message: 'Styles are built.'
//     }))
// });
//
// gulp.task('sass:lint', ['css:minify'], function() {
//   gulp.src([
//       'develop/scss/style.scss'
//     ])
//     .pipe(sassLint())
//     .pipe(sassLint.format())
//     .pipe(sassLint.failOnError())
// });

/********************
 * Production Tasks
 *******************/

gulp.task('compress', function() {
    gulp.src(['js/customizer-controls.js',
        'js/customizer-scripts.js',
        'js/global.js',
        'js/home.js',
        'js/responsive-menus.js'
    ])
    .pipe(jsMinify())
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest('js'))
})


gulp.task('zip', ['pot'], () =>
    gulp.src(['config/**/*',
        'js/**/*',
        'languages/*',
        'lib/**/*',
        'page-templates/**/*',
        '*.php',
        'CHANGELOG.md',
        'LICENSE.md',
        'README.txt',
        'screenshot.png',
        '*.css'
    ], {
        base: '.'
    })
    .pipe(zip('hello-pro-3.zip'))
    .pipe(gulp.dest('distribution'))
);


gulp.task('pot', ['postcss'], function() {
    return gulp.src(['./**/*.php'])
    .pipe(wpPot({
        domain: 'hello-pro',
        package: 'Hello Pro'
    }))
    .pipe(gulp.dest('languages/hello-pro-3.pot'));
});

/********************
 * All Tasks Listeners
 *******************/

gulp.task('watch', function() {

    gulp.watch('./src/**/*.css', ['styles']);

});

/**
 * Individual tasks.
 */
// gulp.task('scripts', [''])
gulp.task('styles', ['clean', 'postcss']);

gulp.task('build', ['clean-build', 'styles', 'pot', 'zip']);

gulp.task('clean', function() {
    return del(['*.css']);
});

gulp.task('clean-build', function() {
    return del(['distribution', 'languages']);
});
