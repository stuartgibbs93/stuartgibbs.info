const { series, src, dest, watch } = require('gulp'),
    sass = require('gulp-sass'),
    babel = require('gulp-babel'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    livereload = require('gulp-livereload'),
    sourcemaps = require('gulp-sourcemaps'),
    chokidar = require('chokidar');
//gulp task for compiling compressed sass
function compileSass() {
    return src('./sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        //where's this styling actually happening? can now see exact scss file in inspector
        .pipe(rename('style.min.css'))
        .pipe(sourcemaps.write('../maps'))
        .pipe(dest('./css/'))
}
//minifies single .js file & reloads
function compileJs() {
    return src(['./js/src/*.js'])
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['@babel/env']
            })
        )
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(rename('scripts.min.js'))
        .pipe(sourcemaps.write('../maps'))
        .pipe(livereload())
        .pipe(dest('./js/'));
}
//watched all php files, but only reloads the current changed one
function phpWatch() {
    chokidar.watch('**/*.php', {
        ignored: /(^|[\/\\])\../,
        persistent: true
    }).on('change', path => livereload.changed(path))
};
function reloadCSS() {
    return src('./css/style.min.css')
        .pipe(livereload())
}
//sets gulp watch task
function watchFiles() {
    livereload.listen(35729);
    phpWatch()
    watch('./sass/*.scss', { delay: 500 }, compileSass)
    watch('./css/style.min.css', reloadCSS)
    watch('./js/src/*.js', { delay: 500 }, compileJs);
};
//sets default gulp task
exports.default = series(compileSass, compileJs, watchFiles, phpWatch);