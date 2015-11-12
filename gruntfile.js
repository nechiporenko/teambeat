module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			sass: {
				files: ['src/sass/app.scss','src/sass/**/*.scss'],
				tasks: ['sass:dist']
			},
			livereload: {
				files: ['dist/*.html', 'dist/*.php', 'dist/js/*.{js,json}', 'dist/css/*.css','dist/img/**/*.{png,jpg,jpeg,gif,webp,svg}'],
				options: {
					livereload: true
				}
			},
			scripts: {
				files: ['src/js/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					spawn: false,
				},
			},
		},
		sass: {
			options: {
				sourceMap: false,
				outputStyle: 'compressed'
			},
			dist: {
				files: {
					'dist/css/app.css': 'src/sass/app.scss'
				}
			}
		},
		concat: {
			dist: {
				src: [
					'src/js/plugins.js',
					'src/js/main.js'
				],
				dest: 'dist/js/app.js',
			}
		},
		uglify: {
			build: {
				src: 'dist/js/app.js',
				dest: 'dist/js/app.min.js'
			}
		}
	});
	grunt.registerTask('default', ['sass:dist', 'watch', 'concat', 'uglify']);
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
};
