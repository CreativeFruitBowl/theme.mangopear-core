const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const StyleLintPlugin = require('stylelint-webpack-plugin');
const FriendlyErrorsPlugin = require('friendly-errors-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const TerserPlugin = require('terser-webpack-plugin');
const LiveReloadPlugin = require('webpack-livereload-plugin');
const globImporter = require('node-sass-glob-importer');
const devMode = process.env.NODE_ENV === 'development';


module.exports = {
	mode: process.env.NODE_ENV,

	entry: {
		'themes/my-project/assets/js/header': './assets/js/header.js',
		'themes/my-project/assets/js/footer': './assets/js/footer.js',
		'themes/my-project/assets/js/admin': './assets/js/admin.js',
		'themes/my-project/assets/js/customizer': './assets/js/customizer.js',
	},

	output: {
		path: path.resolve(__dirname, 'build/wp-content/'),
		filename: '[name].js',
	},

	devtool: devMode ? 'cheap-eval-source-map' : 'source-map',

	performance: {
		maxAssetSize: 1000000,
	},

	optimization: {
		minimizer: [new TerserPlugin()],
	},

	stats: {
		assets: !devMode,
		builtAt: !devMode,
		children: false,
		chunks: false,
		colors: true,
		entrypoints: !devMode,
		env: false,
		errors: !devMode,
		errorDetails: false,
		hash: false,
		maxModules: 20,
		modules: false,
		performance: !devMode,
		publicPath: false,
		reasons: false,
		source: false,
		timings: !devMode,
		version: false,
		warnings: !devMode,
	},

	module: {
		rules: [
			{
				enforce: 'pre',
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				use: [
					{
						loader: 'eslint-loader',
						options: {
							fix: true,
							emitWarning: true,
						},
					},
				],
			},
			{
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				use: [
					{
						loader: 'babel-loader',
					},
				],
			},
			{
				test: /\.s?css$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							sourceMap: true,
						},
					},
					{
						loader: 'postcss-loader',
						options: {
							sourceMap: true,
						},
					},
					{
						loader: 'sass-loader',
						options: {
							sourceMap: true,
							importer: globImporter(),
						},
					},
				],
			},
			{
				test: /\.(png|jpg|gif)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							outputPath: 'themes/my-project/assets/images',
							name: '[name].[ext]',
						},
					},
				],
			},
			{
				test: /\.(woff(2)?|ttf|eot)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							outputPath: 'themes/my-project/assets/fonts',
							name: '[name].[ext]',
						},
					},
				],
			},
			{
				test: /\.(svg)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							outputPath: 'themes/my-project/assets/svgs',
							name: '[name].[ext]',
						},
					},
					{
						loader: 'svgo-loader',
						options: {
							plugins: [
								{ removeTitle: true },
								{ convertColors: { shorthex: false } },
								{ convertPathData: false },
							],
						},
					},
				],
			},
		],
	},
	plugins: [
		devMode &&
			new FriendlyErrorsPlugin({
				clearConsole: false,
			}),
		!devMode &&
			new CleanWebpackPlugin(['assets', 'style.css', 'style.css.map'], {
				root: path.resolve(__dirname, 'build/wp-content/themes/my-project'),
				verbose: !devMode,
			}),
		new StyleLintPlugin({
			files: 'assets/scss/**/*.s?(a|c)ss',
			fix: true,
			failOnError: false,
			syntax: 'scss',
		}),
		new MiniCssExtractPlugin({
			filename: 'themes/my-project/style.css',
		}),
		!devMode &&
			new ImageminPlugin({
				test: /\.(jpe?g|png|gif)$/i,
				cacheFolder: './imgcache',
			}),
		devMode && new LiveReloadPlugin(),
	].filter(Boolean),
};