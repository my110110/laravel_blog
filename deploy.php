<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'wft');

// Project repository
set('repository', 'git@github.com:my110110/laravel_blog.git');

set('composer_options', '{{composer_action}} --verbose --prefer-dist --no-progress --no-interaction --optimize-autoloader --no-suggest');

set('writable_mode','chown');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);
set('writable_mode', 'chown');
// Writable dirs by web server 
add('writable_dirs', []);

// Hosts

host('106.13.103.43')
    ->user('root')
    ->port(22)
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '/var/www/{{application}}');
    
// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});


// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

