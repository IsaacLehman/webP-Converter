<?php

echo exec("sh directory-to-webp .. > temp.txt &");
exec("rm temp.txt");