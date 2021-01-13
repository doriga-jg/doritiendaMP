var gulp        = require('gulp');
const minifyCss = require('gulp-clean-css');
//var coffe          = require('gulp-coffee');
var sass        = require('gulp-sass');
var notify      = require('gulp-notify');
var browserSync = require('browser-sync');
const { parallel } = require('gulp');
var reload      = browserSync.reload;

var paths = {
    php:'app/Views/**/*.php',
    css:'app/public/dev_assets/scss/**/*.scss',
    script:'app/public/dev_assets/js/**/*.js'
};

// css task

gulp.task('mincss', function(){

    return gulp.src(paths.css)

        .pipe(sass().on('error', sass.logError))

        .pipe(minifyCss())

        .pipe(gulp.dest('main'))

        .pipe(reload({stream:true}));

});

// ////////////////////////////////////////////////
// HTML task
// ///////////////////////////////////////////////

gulp.task('php', function(){
    gulp.src(paths.php)
    .pipe(reload({stream:true}));
});


// Javascrit task

gulp.task('scripts', function(){

    return gulp.src(paths.script)

        .pipe(coffee())

        .pipe(gulp.dest('js'))

        .pipe(reload({stream:true}));

});

// ////////////////////////////////////////////////
// Browser-Sync Tasks
// // /////////////////////////////////////////////

gulp.task('browserSync', function() {
    browserSync({
        server: {
            baseDir: "./"
        },
        port: 8080,
        open: true,
        notify: false
    });
});

/*gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }, 
        port: 8080,
        open:true,
        notify: false
    }); 
});*/

// BrowserSync Reload
/*function browserSyncReload(done) {
    browsersync.reload();
    done();
}*/

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

gulp.task('watcher',function(){

    gulp.watch(paths.css, gulp.series('mincss'));
    gulp.watch(paths.script, gulp.series('scripts'));
    gulp.watch(paths.php, gulp.series('php'/*, browserSyncReload*/));

});

gulp.task('default', gulp.parallel('browserSync', 'watcher'));