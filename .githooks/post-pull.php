#!/usr/bin/env php
<?php
run('composer update');
run('npm install');
run('npm run prod');
