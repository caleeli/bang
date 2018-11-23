#!/usr/bin/env php
<?php
echo "composer update\n";
shell_exec('composer update 2>&1');
echo "npm install\n";
shell_exec('npm install 2>&1');
echo "npm run prod\n";
shell_exec('npm run prod 2>&1');
