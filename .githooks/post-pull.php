<?php
//Run in parallel composer and npm
run('composer update --no-dev');
run('nvm install 10; npm rebuild node-sass; npm install; npm run prod');
