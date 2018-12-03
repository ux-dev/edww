'use strict';

var PATHS = {
    js: './js',
	sass: './_sass', 
    css: './css'
};

module.exports = function (grunt) {
    require('load-grunt-tasks')(grunt);

    // grunt.loadTasks('grunt-custom-includes');
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
       
        //step 0
        sass: { 
            options: {
                sourceMap: false,
            },

            main: {
                files:[{
                    cwd: PATHS.sass,
                    src: ['*.scss'],
                    dest: PATHS.css,
                    expand: true,
                    ext: '.css',
                    // sourceComments: true    
                }] 
            },

            // font_awesome: {
               
            // },

            // bootstrap: {

            // }
        },

        //step 3
        concat: {
            js: {
                dest: PATHS.js + '/main.compiled.js',
                src: PATHS.js 
            },
            css: {
                dest: PATHS.css + '/main.compiled.css',
                src: [
                    PATHS.css + '/main.min.css',
                    // PATHS.css + '/vendor/bootstrap.css',	
                    // PATHS.css + '/vendor/font-awesome.css'
               ]
            }
        },

        // //step 2
        // uglify: {
        //     default: {
        //         options: {
        //             compress: true,
        //             mangle: false,
        //             beautify: true //set to false to minify files
        //         },
        //         files: {
        //             src: PATHS.js + '/main.compiled.js',
        //             dest: PATHS.js + '/main.min.js'
        //         }  
        //     }
        // },
        
        //step 2
        cssmin: {
            main: {
                options: {
                    rebase: false,
                    level: { 1: { specialComments: 'none' } }
                },
                files: [{
                    src: PATHS.css + '/main.css',
                    dest: PATHS.css + '/main.min.css'
                }]
            }
        }
    });
     
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    
    // Register the grunt build tasks
    grunt.registerTask('default', ['build-css']);
    grunt.registerTask('build-css', ['sass:main', 'cssmin:main']); 
    // grunt.registerTask('build-css', ['sass:main', 'cssmin:main', 'concat: main']); 
    // grunt.registerTask('build-js', ['concat:js', 'uglify:js']); 

};
