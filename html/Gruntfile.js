module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            // 2. Configuration for concatinating files goes here.
            dist: {
                src: ['resources/js/jquery-1.11.1.js','resources/js/jquery.cycle2.min.js','resources/js/jquery.mousewheel.min.js','resources/js/jquery.simplr.smoothscroll.js','resources/js/wow.min.js','resources/js/scripts.js'],
                dest: 'resources/js/build/production.js'
            }
        },
        uglify: {
            build: {
                src: 'resources/js/build/production.js',
                dest: 'resources/js/build/production.min.js'
            }
        },
        compass: {
            dist: {
                options: {
                    httpPath:'/',
                    sassDir: 'resources/sass',
                    cssDir: 'resources/css',
                    imagesDir: 'resources/images',
                    generatedImagesDir:'resources/images',
                    generatedImagesPath:'resources/images',
                    httpGeneratedImagesPath:'../../resources/images',
                    noLineComments: true,
                    outputStyle: 'compressed'
                }
            }
        },
        watch: {
            scripts: {
                files: ['resources/js/*.js'],
                tasks: ['concat'],
                options: {
                    spawn: false
                }
            },
            css: {
                files: ['resources/sass/*.scss','resources/sass/modules/*.scss'],
                tasks: ['compass'],
                options: {
                    spawn: false
                }
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat','uglify','compass','watch']);

};