<?php

namespace Data\Tuple;

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
      case 'Data_Tuple_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Tuple_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Tuple_semigroupoidTuple': $v = (object)["compose" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$c = ($__case_0)->v1;
$a = ($__case_1)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", $a, $c);
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
      case 'Data_Tuple_genericTuple': $v = (object)["to" => function($x) {
  $__num = \func_num_args();
  $__case_0 = $x;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Product":
$arg = ($__case_0)->v0;
$arg1 = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", $arg, $arg1);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "from" => function($x) {
  $__num = \func_num_args();
  $__case_0 = $x;
  $__match_1 = false;
  if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$arg = ($__case_0)->v0;
$arg1 = ($__case_0)->v1;
if (($__match_1 === false)) {
if (true) {
$__res = new Phpurs_Data2("Product", $arg, $arg1);
goto __end;;
$__match_1 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Tuple_functorTuple': $v = (object)["map" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $m;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", $v, ($f)($v1));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
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
      case 'Data_Tuple_invariantTuple': $v = (object)["imap" => \Data\Functor\Invariant\majData_majFunctor_majInvariant_imapmajF(($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple')))]; break;
      case 'Data_Tuple_extendTuple': $v = (object)["extend" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$t = $__case_1;
$a = ($__case_1)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", $a, ($f1)($t));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
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
  $__global_Data_Tuple_functorTuple = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  $__res = $__global_Data_Tuple_functorTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Tuple_comonadTuple': $v = (object)["extract" => "\\Data\\Tuple\\majData_majTuple_snd", "Extend0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Tuple_extendTuple = ($GLOBALS['Data_Tuple_extendTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_extendTuple'));
  $__res = $__global_Data_Tuple_extendTuple;
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
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';



// Data_Tuple_Tuple
function majData_majTuple_majTuple($value0, $value1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_majTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_Tuple'] = __NAMESPACE__ . '\\majData_majTuple_majTuple';

// Data_Tuple_uncurry
function majData_majTuple_uncurry($f, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_uncurry';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($a))($b);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_uncurry'] = __NAMESPACE__ . '\\majData_majTuple_uncurry';

// Data_Tuple_swap
function majData_majTuple_swap($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_swap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", $b, $a);
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_swap'] = __NAMESPACE__ . '\\majData_majTuple_swap';

// Data_Tuple_snd
function majData_majTuple_snd($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_snd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$b = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = $b;
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_snd'] = __NAMESPACE__ . '\\majData_majTuple_snd';

// Data_Tuple_showTuple
function majData_majTuple_showmajTuple($dictShow, $dictShow1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_showmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_append = ($GLOBALS['Data_Tuple_append'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_append'));
  $show = ($dictShow)->show;
  $show1 = ($dictShow1)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Tuple_append, $show, $show1) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Tuple_append)("(Tuple "))((($__global_Data_Tuple_append)(($show)($a)))((($__global_Data_Tuple_append)(" "))((($__global_Data_Tuple_append)(($show1)($b)))(")"))));
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_showTuple'] = __NAMESPACE__ . '\\majData_majTuple_showmajTuple';

// Data_Tuple_semiringTuple
function majData_majTuple_semiringmajTuple($dictSemiring, $dictSemiring1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_semiringmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $add = ($dictSemiring)->add;
  $one = ($dictSemiring)->one;
  $mul = ($dictSemiring)->mul;
  $zero = ($dictSemiring)->zero;
  $add1 = ($dictSemiring1)->add;
  $mul1 = ($dictSemiring1)->mul;
  $__res = (object)["add" => (function() use ($add, $add1) {
  $__fn = function($v, $v1 = null) use ($add, $add1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($add)($x1))($x2), (($add1)($y1))($y2));
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
})(), "one" => new Phpurs_Data2("Tuple", $one, ($dictSemiring1)->one), "mul" => (function() use ($mul, $mul1) {
  $__fn = function($v, $v1 = null) use ($mul, $mul1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
if (($__match_1 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($mul)($x1))($x2), (($mul1)($y1))($y2));
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => new Phpurs_Data2("Tuple", $zero, ($dictSemiring1)->zero)];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_semiringTuple'] = __NAMESPACE__ . '\\majData_majTuple_semiringmajTuple';


// Data_Tuple_semigroupTuple
function majData_majTuple_semigroupmajTuple($dictSemigroup, $dictSemigroup1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_semigroupmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $append1 = ($dictSemigroup)->append;
  $append2 = ($dictSemigroup1)->append;
  $__res = (object)["append" => (function() use ($append1, $append2) {
  $__fn = function($v, $v1 = null) use ($append1, $append2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($append1)($a1))($a2), (($append2)($b1))($b2));
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
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_semigroupTuple'] = __NAMESPACE__ . '\\majData_majTuple_semigroupmajTuple';

// Data_Tuple_ringTuple
function majData_majTuple_ringmajTuple($dictRing, $dictRing1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_ringmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_semiringTuple = ($GLOBALS['Data_Tuple_semiringTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_semiringTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $sub = ($dictRing)->sub;
  $semiringTuple1 = ($__global_Data_Tuple_semiringTuple)((($dictRing)->Semiring0)($__global_Prim_undefined));
  $sub1 = ($dictRing1)->sub;
  $semiringTuple2 = ($semiringTuple1)((($dictRing1)->Semiring0)($__global_Prim_undefined));
  $__res = (object)["sub" => (function() use ($sub, $sub1) {
  $__fn = function($v, $v1 = null) use ($sub, $sub1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($sub)($x1))($x2), (($sub1)($y1))($y2));
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
})(), "Semiring0" => function($dollar__unused) use ($semiringTuple2) {
  $__num = \func_num_args();
  $__res = $semiringTuple2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_ringTuple'] = __NAMESPACE__ . '\\majData_majTuple_ringmajTuple';

// Data_Tuple_monoidTuple
function majData_majTuple_monoidmajTuple($dictMonoid, $dictMonoid1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_monoidmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_semigroupTuple = ($GLOBALS['Data_Tuple_semigroupTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_semigroupTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mempty = ($dictMonoid)->mempty;
  $semigroupTuple1 = ($__global_Data_Tuple_semigroupTuple)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $semigroupTuple2 = ($semigroupTuple1)((($dictMonoid1)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => new Phpurs_Data2("Tuple", $mempty, ($dictMonoid1)->mempty), "Semigroup0" => function($dollar__unused) use ($semigroupTuple2) {
  $__num = \func_num_args();
  $__res = $semigroupTuple2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_monoidTuple'] = __NAMESPACE__ . '\\majData_majTuple_monoidmajTuple';

// Data_Tuple_heytingAlgebraTuple
function majData_majTuple_heytingmajAlgebramajTuple($dictHeytingAlgebra, $dictHeytingAlgebra1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_heytingmajAlgebramajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $tt = ($dictHeytingAlgebra)->tt;
  $ff = ($dictHeytingAlgebra)->ff;
  $implies = ($dictHeytingAlgebra)->implies;
  $conj1 = ($dictHeytingAlgebra)->conj;
  $disj = ($dictHeytingAlgebra)->disj;
  $not = ($dictHeytingAlgebra)->not;
  $implies1 = ($dictHeytingAlgebra1)->implies;
  $conj2 = ($dictHeytingAlgebra1)->conj;
  $disj1 = ($dictHeytingAlgebra1)->disj;
  $not1 = ($dictHeytingAlgebra1)->not;
  $__res = (object)["tt" => new Phpurs_Data2("Tuple", $tt, ($dictHeytingAlgebra1)->tt), "ff" => new Phpurs_Data2("Tuple", $ff, ($dictHeytingAlgebra1)->ff), "implies" => (function() use ($implies, $implies1) {
  $__fn = function($v, $v1 = null) use ($implies, $implies1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($implies)($x1))($x2), (($implies1)($y1))($y2));
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
})(), "conj" => (function() use ($conj1, $conj2) {
  $__fn = function($v, $v1 = null) use ($conj1, $conj2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
if (($__match_1 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($conj1)($x1))($x2), (($conj2)($y1))($y2));
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($disj, $disj1) {
  $__fn = function($v, $v1 = null) use ($disj, $disj1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->v0;
$y1 = ($__case_0)->v1;
$x2 = ($__case_1)->v0;
$y2 = ($__case_1)->v1;
if (($__match_2 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($disj)($x1))($x2), (($disj1)($y1))($y2));
goto __end;;
$__match_2 = true;
};
};
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => function($v) use ($not, $not1) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_3 = false;
  if (($__match_3 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
if (($__match_3 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", ($not)($x), ($not1)($y));
goto __end;;
$__match_3 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_3 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_heytingAlgebraTuple'] = __NAMESPACE__ . '\\majData_majTuple_heytingmajAlgebramajTuple';




// Data_Tuple_fst
function majData_majTuple_fst($v) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_fst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = $a;
goto __end;;
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_fst'] = __NAMESPACE__ . '\\majData_majTuple_fst';

// Data_Tuple_lazyTuple
function majData_majTuple_lazymajTuple($dictLazy, $dictLazy1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_lazymajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $defer = ($dictLazy)->defer;
  $defer1 = ($dictLazy1)->defer;
  $__res = (object)["defer" => function($f) use ($defer, $__global_Data_Tuple_fst, $__global_Data_Unit_unit, $defer1, $__global_Data_Tuple_snd) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($defer)(function($v) use ($__global_Data_Tuple_fst, $f, $__global_Data_Unit_unit) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Tuple_fst)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), ($defer1)(function($v) use ($__global_Data_Tuple_snd, $f, $__global_Data_Unit_unit) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Tuple_snd)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_lazyTuple'] = __NAMESPACE__ . '\\majData_majTuple_lazymajTuple';


// Data_Tuple_eqTuple
function majData_majTuple_eqmajTuple($dictEq, $dictEq1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_eqmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_conj = ($GLOBALS['Data_Tuple_conj'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_conj'));
  $eq = ($dictEq)->eq;
  $eq1 = ($dictEq1)->eq;
  $__res = (object)["eq" => (function() use ($__global_Data_Tuple_conj, $eq, $eq1) {
  $__fn = function($x, $y = null) use ($__global_Data_Tuple_conj, $eq, $eq1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Tuple_conj)((($eq)($l))($r)))((($eq1)($l1))($r1));
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
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_eqTuple'] = __NAMESPACE__ . '\\majData_majTuple_eqmajTuple';

// Data_Tuple_ordTuple
function majData_majTuple_ordmajTuple($dictOrd, $dictOrd1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_ordmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_eqTuple = ($GLOBALS['Data_Tuple_eqTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_eqTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare = ($dictOrd)->compare;
  $eqTuple1 = ($__global_Data_Tuple_eqTuple)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $compare1 = ($dictOrd1)->compare;
  $eqTuple2 = ($eqTuple1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare, $compare1) {
  $__fn = function($x, $y = null) use ($compare, $compare1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$v = (($compare)($l))($r);
$__case_0 = $v;
$__match_1 = false;
if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "LT":
if (($__match_1 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
$__match_1 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "GT":
if (($__match_1 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
$__match_1 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__res = (($compare1)($l1))($r1);
goto __end;;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
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
})(), "Eq0" => function($dollar__unused) use ($eqTuple2) {
  $__num = \func_num_args();
  $__res = $eqTuple2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_ordTuple'] = __NAMESPACE__ . '\\majData_majTuple_ordmajTuple';

// Data_Tuple_eq1Tuple
function majData_majTuple_eq1majTuple($dictEq) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_eq1majTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Tuple_eqTuple = ($GLOBALS['Data_Tuple_eqTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_eqTuple'));
  $eqTuple1 = ($__global_Data_Tuple_eqTuple)($dictEq);
  $__res = (object)["eq1" => function($dictEq1) use ($eqTuple1) {
  $__num = \func_num_args();
  $__res = (($eqTuple1)($dictEq1))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_eq1Tuple'] = __NAMESPACE__ . '\\majData_majTuple_eq1majTuple';

// Data_Tuple_ord1Tuple
function majData_majTuple_ord1majTuple($dictOrd) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_ord1majTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Tuple_ordTuple = ($GLOBALS['Data_Tuple_ordTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_ordTuple'));
  $__global_Data_Tuple_eq1Tuple = ($GLOBALS['Data_Tuple_eq1Tuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_eq1Tuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ordTuple1 = ($__global_Data_Tuple_ordTuple)($dictOrd);
  $eq1Tuple1 = ($__global_Data_Tuple_eq1Tuple)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd1) use ($ordTuple1) {
  $__num = \func_num_args();
  $__res = (($ordTuple1)($dictOrd1))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused) use ($eq1Tuple1) {
  $__num = \func_num_args();
  $__res = $eq1Tuple1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_ord1Tuple'] = __NAMESPACE__ . '\\majData_majTuple_ord1majTuple';

// Data_Tuple_curry
function majData_majTuple_curry($f, $a = null, $b = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_curry';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $b));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Tuple_curry'] = __NAMESPACE__ . '\\majData_majTuple_curry';


// Data_Tuple_commutativeRingTuple
function majData_majTuple_commutativemajRingmajTuple($dictCommutativeRing, $dictCommutativeRing1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_commutativemajRingmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_ringTuple = ($GLOBALS['Data_Tuple_ringTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_ringTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ringTuple1 = ($__global_Data_Tuple_ringTuple)((($dictCommutativeRing)->Ring0)($__global_Prim_undefined));
  $ringTuple2 = ($ringTuple1)((($dictCommutativeRing1)->Ring0)($__global_Prim_undefined));
  $__res = (object)["Ring0" => function($dollar__unused) use ($ringTuple2) {
  $__num = \func_num_args();
  $__res = $ringTuple2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_commutativeRingTuple'] = __NAMESPACE__ . '\\majData_majTuple_commutativemajRingmajTuple';

// Data_Tuple_boundedTuple
function majData_majTuple_boundedmajTuple($dictBounded, $dictBounded1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_boundedmajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_ordTuple = ($GLOBALS['Data_Tuple_ordTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_ordTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $top = ($dictBounded)->top;
  $bottom = ($dictBounded)->bottom;
  $ordTuple1 = ($__global_Data_Tuple_ordTuple)((($dictBounded)->Ord0)($__global_Prim_undefined));
  $ordTuple2 = ($ordTuple1)((($dictBounded1)->Ord0)($__global_Prim_undefined));
  $__res = (object)["top" => new Phpurs_Data2("Tuple", $top, ($dictBounded1)->top), "bottom" => new Phpurs_Data2("Tuple", $bottom, ($dictBounded1)->bottom), "Ord0" => function($dollar__unused) use ($ordTuple2) {
  $__num = \func_num_args();
  $__res = $ordTuple2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_boundedTuple'] = __NAMESPACE__ . '\\majData_majTuple_boundedmajTuple';

// Data_Tuple_booleanAlgebraTuple
function majData_majTuple_booleanmajAlgebramajTuple($dictBooleanAlgebra, $dictBooleanAlgebra1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_booleanmajAlgebramajTuple';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_heytingAlgebraTuple = ($GLOBALS['Data_Tuple_heytingAlgebraTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_heytingAlgebraTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $heytingAlgebraTuple1 = ($__global_Data_Tuple_heytingAlgebraTuple)((($dictBooleanAlgebra)->HeytingAlgebra0)($__global_Prim_undefined));
  $heytingAlgebraTuple2 = ($heytingAlgebraTuple1)((($dictBooleanAlgebra1)->HeytingAlgebra0)($__global_Prim_undefined));
  $__res = (object)["HeytingAlgebra0" => function($dollar__unused) use ($heytingAlgebraTuple2) {
  $__num = \func_num_args();
  $__res = $heytingAlgebraTuple2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Tuple_booleanAlgebraTuple'] = __NAMESPACE__ . '\\majData_majTuple_booleanmajAlgebramajTuple';

// Data_Tuple_applyTuple
function majData_majTuple_applymajTuple($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_applymajTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Tuple_functorTuple = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  $append1 = ($dictSemigroup)->append;
  $__res = (object)["apply" => (function() use ($append1) {
  $__fn = function($v, $v1 = null) use ($append1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->v0;
$f = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$x = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($append1)($a1))($a2), ($f)($x));
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
})(), "Functor0" => function($dollar__unused) use ($__global_Data_Tuple_functorTuple) {
  $__num = \func_num_args();
  $__res = $__global_Data_Tuple_functorTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_applyTuple'] = __NAMESPACE__ . '\\majData_majTuple_applymajTuple';

// Data_Tuple_bindTuple
function majData_majTuple_bindmajTuple($dictSemigroup) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_bindmajTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Tuple_applyTuple = ($GLOBALS['Data_Tuple_applyTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_applyTuple'));
  $append1 = ($dictSemigroup)->append;
  $applyTuple1 = ($__global_Data_Tuple_applyTuple)($dictSemigroup);
  $__res = (object)["bind" => (function() use ($append1) {
  $__fn = function($v, $f = null) use ($append1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $f;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$a1 = ($__case_0)->v0;
$b = ($__case_0)->v1;
$f1 = $__case_1;
if (($__match_0 === false)) {
if (true) {
$v1 = ($f1)($b);
$__case_0 = $v1;
$__match_1 = false;
if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$a2 = ($__case_0)->v0;
$c = ($__case_0)->v1;
if (($__match_1 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", (($append1)($a1))($a2), $c);
goto __end;;
$__match_1 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
$__match_0 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused) use ($applyTuple1) {
  $__num = \func_num_args();
  $__res = $applyTuple1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_bindTuple'] = __NAMESPACE__ . '\\majData_majTuple_bindmajTuple';

// Data_Tuple_applicativeTuple
function majData_majTuple_applicativemajTuple($dictMonoid) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_applicativemajTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Tuple_applyTuple = ($GLOBALS['Data_Tuple_applyTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_applyTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applyTuple1 = ($__global_Data_Tuple_applyTuple)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["pure" => ((function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())(($dictMonoid)->mempty), "Apply0" => function($dollar__unused) use ($applyTuple1) {
  $__num = \func_num_args();
  $__res = $applyTuple1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_applicativeTuple'] = __NAMESPACE__ . '\\majData_majTuple_applicativemajTuple';

// Data_Tuple_monadTuple
function majData_majTuple_monadmajTuple($dictMonoid) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majTuple_monadmajTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Tuple_applicativeTuple = ($GLOBALS['Data_Tuple_applicativeTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_applicativeTuple'));
  $__global_Data_Tuple_bindTuple = ($GLOBALS['Data_Tuple_bindTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_bindTuple'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applicativeTuple1 = ($__global_Data_Tuple_applicativeTuple)($dictMonoid);
  $bindTuple1 = ($__global_Data_Tuple_bindTuple)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($dollar__unused) use ($applicativeTuple1) {
  $__num = \func_num_args();
  $__res = $applicativeTuple1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused) use ($bindTuple1) {
  $__num = \func_num_args();
  $__res = $bindTuple1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Tuple_monadTuple'] = __NAMESPACE__ . '\\majData_majTuple_monadmajTuple';

