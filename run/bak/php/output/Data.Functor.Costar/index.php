<?php

namespace Data\Functor\Costar;

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - \count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num > 1) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = \array_merge($args, $more);
      if (\count($merged) >= $expected) {
        $res = $fn(...\array_slice($merged, 0, $expected));
        if (\count($merged) > $expected) {
          return $res(...\array_slice($merged, $expected));
        }
        return $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (isset($cache[$id]) || array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Functor_Costar_composeFlipped': $v = \Control\Semigroupoid\majControl_majSemigroupoid_composemajFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Functor_Costar_lcmap': $v = \Data\Profunctor\majData_majProfunctor_lcmap(($GLOBALS['Data_Profunctor_profunctorFn'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_profunctorFn'))); break;
      case 'Data_Functor_Costar_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Functor_Costar_newtypeCostar': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_functorCostar': $v = (object)["map" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$g = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = function($__x) use ($f1, $g) {
  $__num = \func_num_args();
  $__res = ($f1)(($g)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Functor_Costar_invariantCostar': $v = (object)["imap" => \Data\Functor\Invariant\majData_majFunctor_majInvariant_imapmajF(($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar')))]; break;
      case 'Data_Functor_Costar_distributiveCostar': $v = (object)["distribute" => (function() {
  $__fn = function($dictFunctor, $f = null, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $map = ($dictFunctor)->map;
  $__res = (($map)(function($v) use ($a) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$g = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($g)($a);
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($f);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "collect" => (function() {
  $__fn = function($dictFunctor, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Costar_distributiveCostar = ($GLOBALS['Data_Functor_Costar_distributiveCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_distributiveCostar'));
  $map = ($dictFunctor)->map;
  $__res = function($__x) use ($__global_Data_Functor_Costar_distributiveCostar, $dictFunctor, $map, $f) {
  $__num = \func_num_args();
  $__res = ((($__global_Data_Functor_Costar_distributiveCostar)->distribute)($dictFunctor))((($map)($f))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_Costar_functorCostar = ($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar'));
  $__res = $__global_Data_Functor_Costar_functorCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_applyCostar': $v = (object)["apply" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f = $__case_0;
$g = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = function($a) use ($f, $g) {
  $__num = \func_num_args();
  $__res = (($f)($a))(($g)($a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_Costar_functorCostar = ($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar'));
  $__res = $__global_Data_Functor_Costar_functorCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_bindCostar': $v = (object)["bind" => (function() {
  $__fn = function($v, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $f;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$m = $__case_0;
$f1 = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = function($x) use ($f1, $m) {
  $__num = \func_num_args();
  $v1 = ($f1)(($m)($x));
  $__case_0 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$g = $__case_0;
if (($__match_1 === false)) {
if (true) {
$__res = ($g)($x);
goto __end;;
$__match_1 = true;
};
};
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_Costar_applyCostar = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
  $__res = $__global_Data_Functor_Costar_applyCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_applicativeCostar': $v = (object)["pure" => (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = $a;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_Costar_applyCostar = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
  $__res = $__global_Data_Functor_Costar_applyCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_monadCostar': $v = (object)["Applicative0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_Costar_applicativeCostar = ($GLOBALS['Data_Functor_Costar_applicativeCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applicativeCostar'));
  $__res = $__global_Data_Functor_Costar_applicativeCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_Costar_bindCostar = ($GLOBALS['Data_Functor_Costar_bindCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_bindCostar'));
  $__res = $__global_Data_Functor_Costar_bindCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Functor.Costar/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Closed/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';




// Data_Functor_Costar_Costar
function majData_majFunctor_majCostar_majCostar($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_majCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_Costar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_majCostar';

// Data_Functor_Costar_semigroupoidCostar
function majData_majFunctor_majCostar_semigroupoidmajCostar($dictExtend) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_semigroupoidmajCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Control_Extend_composeCoKleisliFlipped = ($GLOBALS['Control_Extend_composeCoKleisliFlipped'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_composeCoKleisliFlipped'));
  $composeCoKleisliFlipped = ($__global_Control_Extend_composeCoKleisliFlipped)($dictExtend);
  $__res = (object)["compose" => (function() use ($composeCoKleisliFlipped) {
  $__fn = function($v, $v1 = null) use ($composeCoKleisliFlipped, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f = $__case_0;
$g = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($composeCoKleisliFlipped)($f))($g);
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_semigroupoidCostar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_semigroupoidmajCostar';

// Data_Functor_Costar_profunctorCostar
function majData_majFunctor_majCostar_profunctormajCostar($dictFunctor) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_profunctormajCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = (object)["dimap" => (function() use ($map) {
  $__fn = function($f, $g = null, $v = null) use ($map, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = function($__x) use ($map, $f1, $h, $g1) {
  $__num = \func_num_args();
  $__res = (function($__x) use ($h, $g1) {
  $__num = \func_num_args();
  $__res = ($g1)(($h)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})((($map)($f1))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_profunctorCostar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_profunctormajCostar';

// Data_Functor_Costar_strongCostar
function majData_majFunctor_majCostar_strongmajCostar($dictComonad) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_strongmajCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Costar_profunctorCostar = ($GLOBALS['Data_Functor_Costar_profunctorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_profunctorCostar'));
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $Functor0 = (((($dictComonad)->Extend0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
  $map = ($Functor0)->map;
  $extract = ($dictComonad)->extract;
  $profunctorCostar1 = ($__global_Data_Functor_Costar_profunctorCostar)($Functor0);
  $__res = (object)["first" => function($v) use ($map, $__global_Data_Tuple_fst, $__global_Data_Tuple_snd, $extract) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = function($x) use ($f, $map, $__global_Data_Tuple_fst, $__global_Data_Tuple_snd, $extract) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)((($map)($__global_Data_Tuple_fst))($x)), ($__global_Data_Tuple_snd)(($extract)($x)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "second" => function($v) use ($__global_Data_Tuple_fst, $extract, $map, $__global_Data_Tuple_snd) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f = $__case_0;
if (($__match_1 === false)) {
if (true) {
$__res = function($x) use ($__global_Data_Tuple_fst, $extract, $f, $map, $__global_Data_Tuple_snd) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($__global_Data_Tuple_fst)(($extract)($x)), ($f)((($map)($__global_Data_Tuple_snd))($x)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
goto __end;;
$__match_1 = true;
};
};
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Profunctor0" => function($dollar__unused) use ($profunctorCostar1) {
  $__num = \func_num_args();
  $__res = $profunctorCostar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_strongCostar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_strongmajCostar';


// Data_Functor_Costar_hoistCostar
function majData_majFunctor_majCostar_hoistmajCostar($f, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_hoistmajCostar';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Costar_lcmap = ($GLOBALS['Data_Functor_Costar_lcmap'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_lcmap'));
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$g = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Functor_Costar_lcmap)($f1))($g);
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Costar_hoistCostar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_hoistmajCostar';




// Data_Functor_Costar_closedCostar
function majData_majFunctor_majCostar_closedmajCostar($dictFunctor) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_closedmajCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Functor_Costar_profunctorCostar = ($GLOBALS['Data_Functor_Costar_profunctorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_profunctorCostar'));
  $map = ($dictFunctor)->map;
  $profunctorCostar1 = ($__global_Data_Functor_Costar_profunctorCostar)($dictFunctor);
  $__res = (object)["closed" => function($v) use ($map) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = (function() use ($f, $map) {
  $__fn = function($g, $x = null) use ($f, $map, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)((($map)(function($v1) use ($x) {
  $__num = \func_num_args();
  $__res = ($v1)($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($g));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Profunctor0" => function($dollar__unused) use ($profunctorCostar1) {
  $__num = \func_num_args();
  $__res = $profunctorCostar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_closedCostar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_closedmajCostar';

// Data_Functor_Costar_categoryCostar
function majData_majFunctor_majCostar_categorymajCostar($dictComonad) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_categorymajCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Functor_Costar_semigroupoidCostar = ($GLOBALS['Data_Functor_Costar_semigroupoidCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_semigroupoidCostar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $semigroupoidCostar1 = ($__global_Data_Functor_Costar_semigroupoidCostar)((($dictComonad)->Extend0)($__global_Prim_undefined));
  $__res = (object)["identity" => ($dictComonad)->extract, "Semigroupoid0" => function($dollar__unused) use ($semigroupoidCostar1) {
  $__num = \func_num_args();
  $__res = $semigroupoidCostar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_categoryCostar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_categorymajCostar';

// Data_Functor_Costar_bifunctorCostar
function majData_majFunctor_majCostar_bifunctormajCostar($dictContravariant) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majCostar_bifunctormajCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $cmap = ($dictContravariant)->cmap;
  $__res = (object)["bimap" => (function() use ($cmap) {
  $__fn = function($f, $g = null, $v = null) use ($cmap, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = function($__x) use ($cmap, $f1, $h, $g1) {
  $__num = \func_num_args();
  $__res = (function($__x) use ($h, $g1) {
  $__num = \func_num_args();
  $__res = ($g1)(($h)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})((($cmap)($f1))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_bifunctorCostar'] = __NAMESPACE__ . '\\majData_majFunctor_majCostar_bifunctormajCostar';





