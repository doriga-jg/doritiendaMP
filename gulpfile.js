// Load Gulp
const { src, dest, task, watch, series, parallel } = require('gulp');

// CSS related plugins
var sass         = require( 'gulp-sass' );
var autoprefixer = require( 'gulp-autoprefixer' );

// Utility plugins
var rename       = require( 'gulp-rename' );
var sourcemaps   = require( 'gulp-sourcemaps' );
var notify       = require( 'gulp-notify' );
var plumber      = require( 'gulp-plumber' );
var options      = require( 'gulp-options' );
var gulpif       = require( 'gulp-if' );

// Browers related plugins
var browserSync  = require( 'browser-sync' ).create();

// Project related variables
var styleSRC     = './public/dev_assets/scss/_base/_base.scss'
var styleURL     = './dist/css/';
var mapURL       = './';

var phpSRC     = './app/Views/**/*.php'
var phpURL     = './dist/';

var phpWatch     = './app/Views/**/*.php'
var styleWatch   = './public/dev_assets/scss/**/*.scss';


// Tasks
function browser_sync() {
	browserSync.init({
		proxy:"localhost/doritienda/public",
        port: 8080
    });
}

function reload(done) {
	browserSync.reload();
	done();
}

function css(done) {
	src( [ styleSRC ] )
		.pipe( sourcemaps.init() )
		.pipe( sass({
			errLogToConsole: true,
			outputStyle: 'compressed'
		}) )
		.on( 'error', console.error.bind( console ) )
		.pipe( autoprefixer({ browsers: [ 'last 2 versions', '> 5%', 'Firefox ESR' ] }) )
		.pipe( rename( { suffix: '.min' } ) )
		.pipe( sourcemaps.write( mapURL ) )
		.pipe( dest( styleURL ) )
		.pipe( browserSync.stream() );
	done();
};


function triggerPlumber( src_file, dest_file ) {
	return src( src_file )
		.pipe( plumber() )
		.pipe( dest( dest_file ) );
}

function php() {
	return triggerPlumber( phpSRC, phpURL );
};

function watch_files() {
	watch(styleWatch, series(css, reload));
	watch(phpWatch, series(php, reload));
}

task("css", css);
task("php", php);
task("default", parallel(css, php));
task("watch", parallel(browser_sync, watch_files));