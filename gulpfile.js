var gulp = require('gulp'),
    notify = require('gulp-notify'),
    phpspec = require('gulp-phpspec'),
    _ = require('lodash');

function testNotification(status, pluginName, override) {
    var options = {
        sound: false,
        title: (status == 'pass') ? 'Tests Passed' : 'Tests Failed',
        message: (status == 'pass') ? '\n\nAll tests have passed!\n\n' : '\n\nOne or more tests failed...\n\n',
        icon: __dirname + '/node_modules/gulp-' + pluginName + '/assets/test-' + status + '.png'
    };
    options = _.merge(options, override);
    return options;
}

gulp.task('phpspec', function() {
    var options = {
        debug: true,
        clear: true,
        notify: true
    };
    gulp.src('spec/**/*.php')
        .pipe(phpspec('', options))
        .on('error', notify.onError(testNotification('fail', 'phpspec')))
        .pipe(notify(testNotification('pass', 'phpspec')));
});

// set watch task to look for changes in test files
gulp.task('watch', function() {
    gulp.watch('spec/**/*.php', ['phpspec']);
    gulp.watch('src/**/*.php', ['phpspec']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['phpspec', 'watch']);
