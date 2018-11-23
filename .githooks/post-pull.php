<?php
shell_exec('composer update 2>&1');
shell_exec('npm install 2>&1');
shell_exec('npm run prod 2>&1');
