module.exports = function(grunt) {
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		concat: {
			options: {
				separator: ';',
			},
			dist: {
				src: ['assets/scripts/app/*.js'],
				dest: 'dist/assets/js/app.min.js',
			},
		},
		compass: {
			dist: {
				options: {
					sassDir: 'assets/sass',
					cssDir: 'dist/assets/css',
					outputStyle: 'compressed'
				}
			}
		},
		copy: {
			main: {
				files: [
					// html
					{
						expand: true,
						cwd: 'assets/html/',
						src: ['*.html'],
						dest: 'dist/',
						filter: 'isFile'
					},

					// js
					{
						expand: true,
						cwd: 'assets/scripts/lib/',
						src: ['*'],
						dest: 'dist/assets/js/',
						filter: 'isFile'
					},

					// fonts
					{
						expand: true,
						cwd: 'assets/fonts/',
						src: ['**/*'],
						dest: 'dist/assets/fonts/',
						filter: 'isFile'
					},

					// img
					{
						expand: true,
						cwd: 'assets/img/',
						src: ['**/*'],
						dest: 'dist/assets/img/',
						filter: 'isFile'
					}
				]	
			}
		},
		uglify: {
			options: {
				mangle: true
			},
			my_target: {
				files: {
					'dist/js/app.min.js': ['js/app.js']
				}
			}
		},
		watch: {
			html: {
				files: 'assets/html/*.html',
				tasks: ['copy']
			},

			css: {
				files: 'assets/sass/*.scss',
				tasks: ['compass']
			},

			js: {
				files: 'assets/scripts/**.*'
			},

			img: {
				files: 'assets/img/**.*',
				tasks: ['copy']
			},

			fonts: {
				files: 'assets/fonts/*',
				tasks: ['copy']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',[
		'concat',
		'compass',
		'copy',
		'uglify',
		'watch'
	]);
}