#!/usr/bin/env php
<?php
echo "composer update\n";
passthru('composer update 2>&1');
echo "npm install\n";
passthru('npm install 2>&1');
echo "npm run prod\n";
passthru('npm run prod 2>&1');
