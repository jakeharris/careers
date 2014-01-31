// This is a manifest file that'll be compiled into application.js, which will include all the files
// listed below.
//
// Any JavaScript/Coffee file within this directory, lib/assets/javascripts, vendor/assets/javascripts,
// can be referenced here using a relative path.
//
// It's not advisable to add code directly here, but if you do, it'll appear in whatever order it 
// gets included (e.g. say you have require_tree . then the code will appear after all the directories 
// but before any files alphabetically greater than 'application.js' 
//
// The available directives right now are require, require_directory, and require_tree
//
//= require jquery
//= require twitter-text
//= require_self

/*jshint browser: true, devel: true */
/*globals twttr */

//
// FRAMEWORK
//

function Framework() {
    this.data = {
        twitter: "TEST."
    };
}

Framework.prototype.update = function(key) {
    if (this.data.hasOwnProperty(key)) {
        var elem = document.querySelector('[data-' + key + ']');
        elem.innerHTML = this.data[key];
    }
};

Framework.prototype.update_all = function() {
    for (var key in this.data) {
        this.update(key);
    }
};

var frame = new Framework();
frame.update_all();

//
// TWITTER
//

frame.data.twitter = twttr.txt.autoLink("Applications due TODAY 1/27 for Applications Engineer (ME) position w/ SKF USA, Inc. | TRL http://jobs.auburn.edu #hireAuburn");
frame.update("twitter");