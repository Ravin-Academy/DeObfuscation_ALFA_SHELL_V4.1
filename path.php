<?php


echo str_replace('\\','/',trim(preg_replace('!\(\d+\)\s.*!', '', __FILE__)));
