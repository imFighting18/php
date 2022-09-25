<?php
define("pi", "3.145623");
define("nome", "Gabriel Santos");
define("casado", true);
define("times", ['Palmeiras', 'Corinthians', "São Paulo", 'Santos']);

echo pi . "<hr>";
echo nome . "<hr>";
echo casado ? "Sou casado <hr>" : "Não sou casado <hr>";
echo times[3];