module.exports = function(grunt){
  "use strict";
  grunt.initConfig({
    sass:{
      options:{
        style:"expanded"
      },
      dist:{
        files:{
          "style.css":"development/sass/style.scss"
        }
      }
    },
    uglify:{
      my_target:{
        files:{
          "assets/js/script.min.js":"development/js/script.js"
        }
      }
    },
    watch:{
      options:{
        livereload:460
      },
      sass:{
        files:"development/sass/*.scss",
        tasks:"sass",
        reload:false
      },
      css:{
        files:"*.css",
        reload:true
      },
      js:{
        files:"development/js/*.js",
        tasks:"uglify",
        reload:false
      },
      js_min:{
        files:"assets/js/script.min.js",
        reload:true
      },
      php:{
        files:"*.php",
        reload:true
      }
    }
  });
  grunt.loadNpmTasks("grunt-contrib-sass");
  grunt.loadNpmTasks("grunt-contrib-uglify");
  grunt.loadNpmTasks("grunt-contrib-watch");

  grunt.registerTask("default",["watch"]);
}