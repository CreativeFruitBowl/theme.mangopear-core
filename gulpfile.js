/**
 * Compile & compress our CSS and JS
 *
 * @package   mangopear-framework
 * @author    Andi North <andi@mangopear.co.uk>
 * @copyright 2020 Mangopear creative
 * @license   GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @version   1.6.0
 * @since     1.0.0
 */


/**
 * Contents
 *
 * [1]	Load plugins
 * [2]	Set up variables
 * [3]	Compile our SASS
 * [4]	Watch SASS files and process on change
 * [5]	Run our Gulp tasks
 */


/**
 * [1]	Load plugins
 *
 * 		@since 1.6.0
 *
 * 		[a]	Load Gulp as various named vars
 * 		[b]	Allow Gulp to create notifications to inform when files are updated
 * 		[c]	Post processing CSS
 * 		[d]	Auto-prefix CSS3 values
 * 		[e]	Minify our CSS
 * 		[f]	Create source maps for easier editing
 * 		[g]	Load gulp-sass to power the entire process
 */

const { series, parallel, src, dest, watch } = require('gulp');		// [a]

var notify       = require('gulp-notify'),							// [b]
	postcss      = require('gulp-postcss'),							// [c]
	autoprefixer = require("autoprefixer"),							// [d]
	cssnano      = require("cssnano"),								// [e]
	sourcemaps   = require("gulp-sourcemaps"),						// [f]
	sass         = require('gulp-sass'),							// [g]
	uglify       = require('gulp-uglify'),
	concat       = require('gulp-concat'),
	rename       = require('gulp-rename');





/**
 * [2]	Set up variables
 *
 * 		@since 1.6.0
 *
 * 		[a]	Store paths from our plugin/theme
 * 		[b]	SASS & CSS paths
 */

var paths = {														// [a]
	styles: {														// [b]
		src:  'resources/css/sass/**/*.scss',							// [b]
		dest: 'resources/css/compiled'									// [b]
	},																// [b]
	vendorJS: {														// [c]
		src:  'resources/js/vendor/**/*.js',							// [c]
		dest: 'resources/js/compiled'									// [c]
	},																// [c]
	customJS: {														// [d]
		src:  'resources/js/source/**/*.js',							// [d]
		dest: 'resources/js/compiled'									// [d]
	}																// [d]
};																	// [a]





/**
 * [3]	Compile our SASS
 *
 * 		@since 1.6.0
 *
 * 		[a]	Wrap in function for proper usage
 * 		[b]	Find SASS files and loop through
 * 		[c]	Setup source maps
 * 		[d]	Run SASS plugin
 * 		[e]	Log errors, to prevent Gulp from dead failing
 * 		[f]	Post-process CSS
 * 		[g]	Push updated CSS files to directory
 * 		[h]	Notify Gulp for UX
 */

function sassCompile() {											// [a]
	return src(paths.styles.src)									// [b]
		.pipe(sourcemaps.init())									// [c]
		.pipe(sass())												// [d]
		.on('error', sass.logError)									// [e]
		.pipe(postcss([autoprefixer(), cssnano()]))					// [f]
		.pipe(sourcemaps.write())									// [c]
		.pipe(dest(paths.styles.dest))								// [g]
		.pipe(notify('CSS compiled successfully'));					// [h]
}																	// [a]





/**
 * [x]	Compile our vendor JavaScript
 *
 * 		@since 1.6.0
 *
 * 		[a]	Wrap in function for proper usage
 * 		[b]	Find SASS files and loop through
 * 		[c]	Setup source maps
 * 		[d]	Run SASS plugin
 * 		[e]	Log errors, to prevent Gulp from dead failing
 * 		[f]	Post-process CSS
 * 		[g]	Push updated CSS files to directory
 * 		[h]	Notify Gulp for UX
 */

function vendorJS() {												// [a]
	return src(paths.vendorJS.src)									// [b]
		.pipe(concat('plugins.js'))
		.pipe(dest(paths.vendorJS.dest))							// [g]
		.pipe(rename({
			basename: 'plugins',
			suffix: '.min'
		}))
		.pipe(uglify())
		.pipe(dest(paths.vendorJS.dest))							// [g]
		.pipe(notify('Vendor JS compiled successfully'));			// [h]
}																	// [a]





/**
 * [x]	Compile our custom JavaScript
 *
 * 		@since 1.6.0
 *
 * 		[a]	Wrap in function for proper usage
 * 		[b]	Find SASS files and loop through
 * 		[c]	Setup source maps
 * 		[d]	Run SASS plugin
 * 		[e]	Log errors, to prevent Gulp from dead failing
 * 		[f]	Post-process CSS
 * 		[g]	Push updated CSS files to directory
 * 		[h]	Notify Gulp for UX
 */

function customJS() {												// [a]
	return src(paths.customJS.src)									// [b]
		.pipe(concat('global.js'))
		.pipe(dest(paths.customJS.dest))							// [g]
		.pipe(rename({
			basename: 'global',
			suffix: '.min'
		}))
		.pipe(uglify())
		.pipe(dest(paths.customJS.dest))							// [g]
		.pipe(notify('Custom JS compiled successfully'));			// [h]
}																	// [a]





/**
 * [4]	Watch SASS files and process on change
 *
 * 		@since 1.6.0
 *
 * 		[a]	Wrap in function for proper queueing
 * 		[b]	Use built in watch functions
 * 		[c]	Find SASS files
 * 		[d]	Re-use our SASS compilation code
 */

function watchAssets() {											// [a]
	watch(															// [b]
		[paths.styles.src],											// [c]
		parallel(sassCompile)										// [d]
	);																// [b]

	watch(															// [b]
		[paths.vendorJS.src],											// [c]
		parallel(vendorJS)										// [d]
	);																// [b]

	watch(															// [b]
		[paths.customJS.src],											// [c]
		parallel(customJS)										// [d]
	);																// [b]
}																	// [a]





/**
 * [5]	Run our Gulp tasks
 *
 * 		@since 1.6.0
 *
 * 		[a]	Use "default" to allow us to simply run `gulp`
 * 		[b]	Compile SASS on load
 * 		[c]	Watch static assets to ensure they're updated
 */

exports.default = series(											// [a]
	parallel(sassCompile, vendorJS, customJS), 											// [b]
	watchAssets														// [c]
);																	// [a]