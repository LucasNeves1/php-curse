<div class="titulo">Desafio String</div>

<?php

// !AbcaBcabc = retornar 1.

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc');