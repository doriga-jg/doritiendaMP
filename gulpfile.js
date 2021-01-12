var gulp       = require('gulp'),
    gutil      = require('gulp-util'),
    rename     = require('gulp-rename'),
    //uglify     = require('gulp-uglify'),
   // changed    = require('gulp-changed'),
    browserSync= require('browser-sync').create(),
    //reload     = browserSync.reload,
    autoprefix = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    concat     = require('gulp-concat'),
    sass       = require('gulp-sass')
;

var watch = {
    js : 'public/dev_assets/js/**/*.js',
    sass   : 'public/dev_assets/scss/**/*.scss',
    php    : 'app/views/../*.php'
};

var src  = {
    js : 'public/dev_assets/js/**/*.js',
    sass   : 'public/dev_assets/scss/tienda.scss',
    php    : 'app/views/../*.php'
};

var compiled = {
    js : 'public/dev_assets/js/',
    sass   : 'public/dev_assets/css/'
};

var distribution = {
    js  : './distribution/src/',
    css : './distribution/src/',
    php : './distribution/'
}

function browser_sync(done){
    browserSync.init({
        proxy:"localhost/",
        port: 8080
    });
    done();
}

gulp.task('sass', function(done){
    gulp.src(src.sass)
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                errorLogToConsole : true,
                outputStyle   : 'compressed'
            })
        )
        .on('error', console.error.bind( console ) )
        .pipe(
            autoprefix({
                browsers: ['last 2 versions'],
                cascade: false
            })
        )
        .pipe( rename( {suffix:'.min'} ) )
        .pipe( sourcemaps.write('./') )
        .pipe( gulp.dest( compiled.sass) )
        .pipe( browserSync.stream());
    done();
})

gulp.task('js', function(done) {
    gulp.src(src.js)
        .pipe(sourcemaps.init())
        .pipe(concat('app.js'))
        .pipe(
            js( { bare: true } )
                .on('error', gutil.log)
        )
        .pipe( gulp.dest(compiled.js) )
        .pipe( browserSync.stream() );
    done();
});


function watch_files(){
    gulp.watch(watch.sass   ,gulp.series('sass'));
    gulp.watch(watch.js ,gulp.series('js'));
}

gulp.task("start", gulp.parallel(watch_files, browser_sync));
