<?php

namespace Data\Foldable;

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
      case 'Data_Foldable_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Foldable_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Foldable_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Foldable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Foldable_eq1': $v = (($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering')))->eq; break;
      case 'Data_Foldable_monoidEndo': $v = \Data\Monoid\Endo\majData_majMonoid_majEndo_monoidmajEndo(($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'))); break;
      case 'Data_Foldable_alaF': $v = \Data\Newtype\majData_majNewtype_alamajF(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Foldable_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Foldable_Empty': $v = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")); break;
      case 'Data_Foldable_semigroupFreeMonoidTree': $v = (object)["append" => (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Append", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_monoidFreeMonoidTree': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")), "Semigroup0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Foldable_semigroupFreeMonoidTree = ($GLOBALS['Data_Foldable_semigroupFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_semigroupFreeMonoidTree'));
  $__res = $__global_Data_Foldable_semigroupFreeMonoidTree;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldableTuple': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($x))($z1);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
if (($__match_1 === false)) {
if (true) {
$__res = (($f1)($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
goto __end;;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableMultiplicative': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($x))($z1);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = (($f1)($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableMaybe': $v = (object)["foldr" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_2)->tag) {
case "Nothing":
$z = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = $z;
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
switch (($__case_2)->tag) {
case "Just":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = (($f)($x))($z);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  $__match_1 = false;
  if (($__match_1 === false)) {
switch (($__case_2)->tag) {
case "Nothing":
$z = $__case_1;
if (($__match_1 === false)) {
if (true) {
$__res = $z;
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
switch (($__case_2)->tag) {
case "Just":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
if (($__match_1 === false)) {
if (true) {
$__res = (($f)($z))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $mempty = ($dictMonoid)->mempty;
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_2 = false;
  if (($__match_2 === false)) {
switch (($__case_1)->tag) {
case "Nothing":
if (($__match_2 === false)) {
if (true) {
$__res = $mempty;
goto __end;;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_2 === false)) {
switch (($__case_1)->tag) {
case "Just":
$f = $__case_0;
$x = ($__case_1)->v0;
if (($__match_2 === false)) {
if (true) {
$__res = ($f)($x);
goto __end;;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldr1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldr; break;
      case 'Data_Foldable_foldl1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldl; break;
      case 'Data_Foldable_foldableIdentity': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($x))($z1);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = (($f1)($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableEither': $v = (object)["foldr" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_2)->tag) {
case "Left":
$z = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = $z;
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
switch (($__case_2)->tag) {
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
if (($__match_0 === false)) {
if (true) {
$__res = (($f)($x))($z);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  $__match_1 = false;
  if (($__match_1 === false)) {
switch (($__case_2)->tag) {
case "Left":
$z = $__case_1;
if (($__match_1 === false)) {
if (true) {
$__res = $z;
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
switch (($__case_2)->tag) {
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
if (($__match_1 === false)) {
if (true) {
$__res = (($f)($z))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $mempty = ($dictMonoid)->mempty;
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_2 = false;
  if (($__match_2 === false)) {
switch (($__case_1)->tag) {
case "Left":
if (($__match_2 === false)) {
if (true) {
$__res = $mempty;
goto __end;;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_2 === false)) {
switch (($__case_1)->tag) {
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
if (($__match_2 === false)) {
if (true) {
$__res = ($f)($x);
goto __end;;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableDual': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($x))($z1);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = (($f1)($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableDisj': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($x))($z1);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = (($f1)($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableConst': $v = (object)["foldr" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = $z;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = $z;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $mempty = ($dictMonoid)->mempty;
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableConj': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($x))($z1);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = (($f1)($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableAdditive': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($x))($z1);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = (($f1)($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = ($f1)($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableArray': $v = (object)["foldr" => ($GLOBALS['Data_Foldable_foldrArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrArray')), "foldl" => ($GLOBALS['Data_Foldable_foldlArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldlArray')), "foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $__global_Data_Foldable_foldMapDefaultR = ($GLOBALS['Data_Foldable_foldMapDefaultR'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultR'));
  $__global_Data_Foldable_foldableArray = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__res = (($__global_Data_Foldable_foldMapDefaultR)($__global_Data_Foldable_foldableArray))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldableFreeMonoidTree': $v = (object)["foldl" => (function() {
  $__fn = function($fn, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = (function() use (&$go, $fn) {
  $__fn = function($acc, $lhs = null, $rhs = null) use (&$go, $fn, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  while (true) {
$__case_0 = $lhs;
$__match_0 = false;
if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Node":
$a = ($__case_0)->v0;
if (($__match_0 === false)) {
if (true) {
$__tco_tmp_0 = (($fn)($acc))($a);
$__tco_tmp_1 = $rhs;
$__tco_tmp_2 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
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
switch (($__case_0)->tag) {
case "Append":
$xs = ($__case_0)->v0;
$ys = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__case_0 = $ys;
$__match_1 = false;
if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_1 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $rhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 3;
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
$__case_0 = $rhs;
$__match_2 = false;
if (($__match_2 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_2 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 3;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_2 === false)) {
if (true) {
if (($__match_2 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = new Phpurs_Data2("Append", $ys, $rhs);
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
$__match_2 = true;
};
};
};
};
if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
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
break;
default:
;
break;
};
};
if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_0 === false)) {
if (true) {
$__case_0 = $rhs;
$__match_3 = false;
if (($__match_3 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_3 === false)) {
if (true) {
$__res = $acc;
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
if (true) {
if (($__match_3 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $rhs;
$__tco_tmp_2 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
$__match_3 = true;
};
};
};
};
if (($__match_3 === false)) {
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
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ((($go)($a))($b))(($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($fn, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = (function() use (&$go, $fn) {
  $__fn = function($acc, $lhs = null, $rhs = null) use (&$go, $fn, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  while (true) {
$__case_0 = $rhs;
$__match_4 = false;
if (($__match_4 === false)) {
switch (($__case_0)->tag) {
case "Node":
$a = ($__case_0)->v0;
if (($__match_4 === false)) {
if (true) {
$__tco_tmp_0 = (($fn)($a))($acc);
$__tco_tmp_1 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$__tco_tmp_2 = $lhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
$__match_4 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_4 === false)) {
switch (($__case_0)->tag) {
case "Append":
$xs = ($__case_0)->v0;
$ys = ($__case_0)->v1;
if (($__match_4 === false)) {
if (true) {
$__case_0 = $xs;
$__match_5 = false;
if (($__match_5 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_5 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $lhs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 3;
$__match_5 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_5 === false)) {
if (true) {
if (($__match_5 === false)) {
if (true) {
$__case_0 = $lhs;
$__match_6 = false;
if (($__match_6 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_6 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 3;
$__match_6 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_6 === false)) {
if (true) {
if (($__match_6 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = new Phpurs_Data2("Append", $lhs, $xs);
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
$__match_6 = true;
};
};
};
};
if (($__match_6 === false)) {
throw new \Exception("Pattern match failure");
};
$__match_5 = true;
};
};
};
};
if (($__match_5 === false)) {
throw new \Exception("Pattern match failure");
};
$__match_4 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_4 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_4 === false)) {
if (true) {
$__case_0 = $lhs;
$__match_7 = false;
if (($__match_7 === false)) {
switch (($__case_0)->tag) {
case "Empty":
if (($__match_7 === false)) {
if (true) {
$__res = $acc;
goto __end;;
$__match_7 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_7 === false)) {
if (true) {
if (($__match_7 === false)) {
if (true) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$__tco_tmp_2 = $lhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue 2;
$__match_7 = true;
};
};
};
};
if (($__match_7 === false)) {
throw new \Exception("Pattern match failure");
};
$__match_4 = true;
};
};
break;
default:
;
break;
};
};
if (($__match_4 === false)) {
throw new \Exception("Pattern match failure");
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ((($go)($a))(($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"))))($b);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $__global_Data_Foldable_foldMapDefaultR = ($GLOBALS['Data_Foldable_foldMapDefaultR'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultR'));
  $__global_Data_Foldable_foldableFreeMonoidTree = ($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree'));
  $__res = (($__global_Data_Foldable_foldMapDefaultR)($__global_Data_Foldable_foldableFreeMonoidTree))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldl2': $v = (($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree')))->foldl; break;
      case 'Data_Foldable_foldr2': $v = (($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree')))->foldr; break;
      case 'Data_Foldable_foldMap1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldMap; break;
      case 'Data_Foldable_foldableFirst': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_foldr1 = ($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = ((($__global_Data_Foldable_foldr1)($f1))($z1))($x);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_foldl1 = ($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = ((($__global_Data_Foldable_foldl1)($f1))($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_foldMap1 = ($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1'));
  $foldMap2 = ($__global_Data_Foldable_foldMap1)($dictMonoid);
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = (($foldMap2)($f1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableLast': $v = (object)["foldr" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_foldr1 = ($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = ((($__global_Data_Foldable_foldr1)($f1))($z1))($x);
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
})(), "foldl" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_foldl1 = ($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = ((($__global_Data_Foldable_foldl1)($f1))($z1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_foldMap1 = ($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1'));
  $foldMap2 = ($__global_Data_Foldable_foldMap1)($dictMonoid);
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = (($foldMap2)($f1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
$ffi_Data_Foldable = \call_user_func(function() {
  $exports = [];
$foldrArray = function($f, $init = null, $xs = null) use (&$foldrArray) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$foldrArray) {
            return $foldrArray(...\array_merge($__args, $more));
        };
    }
    
    $acc = $init;
    for ($i = \count($xs) - 1; $i >= 0; $i--) {
        $f1 = $f($xs[$i]);
        $acc = $f1($acc);
    }
    return $acc;
};
$exports['foldrArray'] = $foldrArray;

$foldlArray = function($f, $init = null, $xs = null) use (&$foldlArray) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$foldlArray) {
            return $foldlArray(...\array_merge($__args, $more));
        };
    }
    
    $acc = $init;
    for ($i = 0, $len = \count($xs); $i < $len; $i++) {
        $f1 = $f($acc);
        $acc = $f1($xs[$i]);
    }
    return $acc;
};
$exports['foldlArray'] = $foldlArray;

return $exports;
  return $exports;
});
$GLOBALS['Data_Foldable_foldrArray'] = $ffi_Data_Foldable['foldrArray'] ?? null;
$GLOBALS['Data_Foldable_foldlArray'] = $ffi_Data_Foldable['foldlArray'] ?? null;


require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';






// Data_Foldable_unwrap
function majData_majFoldable_unwrap($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_unwrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_unwrap'] = __NAMESPACE__ . '\\majData_majFoldable_unwrap';





// Data_Foldable_Node
function majData_majFoldable_majNode($value0) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_majNode';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Node", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_Node'] = __NAMESPACE__ . '\\majData_majFoldable_majNode';

// Data_Foldable_Append
function majData_majFoldable_majAppend($value0, $value1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_majAppend';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Append", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_Append'] = __NAMESPACE__ . '\\majData_majFoldable_majAppend';

// Data_Foldable_Foldable$Dict
function majData_majFoldable_majFoldabledollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_majFoldabledollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_FoldabledollarDict'] = __NAMESPACE__ . '\\majData_majFoldable_majFoldabledollarmajDict';



// Data_Foldable_foldr
function majData_majFoldable_foldr($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $dict;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($v)->foldr;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldr'] = __NAMESPACE__ . '\\majData_majFoldable_foldr';

// Data_Foldable_indexr
function majData_majFoldable_indexr($dictFoldable, $idx = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_indexr';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_eq = ($GLOBALS['Data_Foldable_eq'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq'));
  $__global_Data_Foldable_add = ($GLOBALS['Data_Foldable_add'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_add'));
  $foldr3 = ($dictFoldable)->foldr;
  $go = (function() use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add) {
  $__fn = function($a, $cursor = null) use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = ($cursor)->elem;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Just":
if (($__match_0 === false)) {
if (true) {
$__res = $cursor;
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
if (true) {
if (($__match_0 === false)) {
if (true) {
$__case_0 = (($__global_Data_Foldable_eq)(($cursor)->pos))($idx);
$__match_1 = false;
if (($__match_1 === false)) {
if (($__case_0 === true)) {
if (($__match_1 === false)) {
if (true) {
$__res = (object)["elem" => new Phpurs_Data1("Just", $a), "pos" => ($cursor)->pos];
goto __end;;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__res = (object)["pos" => (($__global_Data_Foldable_add)(($cursor)->pos))(1), "elem" => ($cursor)->elem];
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
})();
  $__res = function($__x) use ($foldr3, $go) {
  $__num = \func_num_args();
  $__res = (function($v) {
  $__num = \func_num_args();
  $__res = ($v)->elem;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})(((($foldr3)($go))((object)["elem" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "pos" => 0]))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_indexr'] = __NAMESPACE__ . '\\majData_majFoldable_indexr';

// Data_Foldable_null
function majData_majFoldable_null($dictFoldable) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_null';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ((($dictFoldable)->foldr)((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = false;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(true);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_null'] = __NAMESPACE__ . '\\majData_majFoldable_null';

// Data_Foldable_oneOf
function majData_majFoldable_onemajOf($dictFoldable, $dictPlus = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_onemajOf';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldr3 = ($dictFoldable)->foldr;
  $__res = (($foldr3)(((($dictPlus)->Alt0)($__global_Prim_undefined))->alt))(($dictPlus)->empty);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_oneOf'] = __NAMESPACE__ . '\\majData_majFoldable_onemajOf';

// Data_Foldable_oneOfMap
function majData_majFoldable_onemajOfmajMap($dictFoldable, $dictPlus = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_onemajOfmajMap';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldr3 = ($dictFoldable)->foldr;
  $alt = ((($dictPlus)->Alt0)($__global_Prim_undefined))->alt;
  $empty = ($dictPlus)->empty;
  $__res = (($foldr3)(function($__x) use ($alt, $f) {
  $__num = \func_num_args();
  $__res = ($alt)(($f)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($empty);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Foldable_oneOfMap'] = __NAMESPACE__ . '\\majData_majFoldable_onemajOfmajMap';

// Data_Foldable_traverse_
function majData_majFoldable_traverse_($dictApplicative, $dictFoldable = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_traverse_';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Control_Apply_applySecond = ($GLOBALS['Control_Apply_applySecond'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applySecond'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $applySecond = ($__global_Control_Apply_applySecond)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $pure = ($dictApplicative)->pure;
  $foldr3 = ($dictFoldable)->foldr;
  $__res = (($foldr3)(function($__x) use ($applySecond, $f) {
  $__num = \func_num_args();
  $__res = ($applySecond)(($f)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($pure)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Foldable_traverse_'] = __NAMESPACE__ . '\\majData_majFoldable_traverse_';

// Data_Foldable_for_
function majData_majFoldable_for_($dictApplicative, $dictFoldable = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_for_';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_traverse_ = ($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_'));
  $traverse_1 = ($__global_Data_Foldable_traverse_)($dictApplicative);
  $__res = \Data\Function\majData_majFunction_flip(($traverse_1)($dictFoldable));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_for_'] = __NAMESPACE__ . '\\majData_majFoldable_for_';

// Data_Foldable_sequence_
function majData_majFoldable_sequence_($dictApplicative, $dictFoldable = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_sequence_';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_traverse_ = ($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $traverse_1 = ($__global_Data_Foldable_traverse_)($dictApplicative);
  $__res = (($traverse_1)($dictFoldable))($__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_sequence_'] = __NAMESPACE__ . '\\majData_majFoldable_sequence_';

// Data_Foldable_foldl
function majData_majFoldable_foldl($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $dict;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($v)->foldl;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldl'] = __NAMESPACE__ . '\\majData_majFoldable_foldl';

// Data_Foldable_indexl
function majData_majFoldable_indexl($dictFoldable, $idx = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_indexl';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_eq = ($GLOBALS['Data_Foldable_eq'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq'));
  $__global_Data_Foldable_add = ($GLOBALS['Data_Foldable_add'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_add'));
  $foldl3 = ($dictFoldable)->foldl;
  $go = (function() use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add) {
  $__fn = function($cursor, $a = null) use ($__global_Data_Foldable_eq, $idx, $__global_Data_Foldable_add, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = ($cursor)->elem;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Just":
if (($__match_0 === false)) {
if (true) {
$__res = $cursor;
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
if (true) {
if (($__match_0 === false)) {
if (true) {
$__case_0 = (($__global_Data_Foldable_eq)(($cursor)->pos))($idx);
$__match_1 = false;
if (($__match_1 === false)) {
if (($__case_0 === true)) {
if (($__match_1 === false)) {
if (true) {
$__res = (object)["elem" => new Phpurs_Data1("Just", $a), "pos" => ($cursor)->pos];
goto __end;;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__res = (object)["pos" => (($__global_Data_Foldable_add)(($cursor)->pos))(1), "elem" => ($cursor)->elem];
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
})();
  $__res = function($__x) use ($foldl3, $go) {
  $__num = \func_num_args();
  $__res = (function($v) {
  $__num = \func_num_args();
  $__res = ($v)->elem;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})(((($foldl3)($go))((object)["elem" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "pos" => 0]))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_indexl'] = __NAMESPACE__ . '\\majData_majFoldable_indexl';

// Data_Foldable_intercalate
function majData_majFoldable_intercalate($dictFoldable, $dictMonoid = null, $sep = null, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_intercalate';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldl3 = ($dictFoldable)->foldl;
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $go = (function() use ($append, $sep) {
  $__fn = function($v, $v1 = null) use ($append, $sep, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if ((is_object($__case_0) && (($__case_0)->init === true))) {
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (object)["init" => false, "acc" => $x];
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (is_object($__case_0)) {
$acc = ($__case_0)->acc;
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (object)["init" => false, "acc" => (($append)($acc))((($append)($sep))($x))];
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
})();
  $__res = (((($foldl3)($go))((object)["init" => true, "acc" => $mempty]))($xs))->acc;
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Foldable_intercalate'] = __NAMESPACE__ . '\\majData_majFoldable_intercalate';

// Data_Foldable_length
function majData_majFoldable_length($dictFoldable, $dictSemiring = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_length';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $add1 = ($dictSemiring)->add;
  $one = ($dictSemiring)->one;
  $__res = (($foldl3)((function() use ($add1, $one) {
  $__fn = function($c, $v = null) use ($add1, $one, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($add1)($one))($c);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(($dictSemiring)->zero);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_length'] = __NAMESPACE__ . '\\majData_majFoldable_length';

// Data_Foldable_maximumBy
function majData_majFoldable_maximummajBy($dictFoldable, $cmp = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_maximummajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
  $foldl3 = ($dictFoldable)->foldl;
  $max__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp) {
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Just", $x);
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
switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__case_0 = (($__global_Data_Foldable_eq1)((($cmp)($x))($y)))(($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
$__case_res_1 = null;
$__match_1 = false;
if (($__match_1 === false)) {
if (($__case_0 === true)) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = $x;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = $y;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
$__res = new Phpurs_Data1("Just", $__case_res_1);
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
})();
  $__res = (($foldl3)($max__prime__))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_maximumBy'] = __NAMESPACE__ . '\\majData_majFoldable_maximummajBy';

// Data_Foldable_maximum
function majData_majFoldable_maximum($dictOrd, $dictFoldable = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_maximum';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_maximumBy = ($GLOBALS['Data_Foldable_maximumBy'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_maximumBy'));
  $compare = ($dictOrd)->compare;
  $__res = (($__global_Data_Foldable_maximumBy)($dictFoldable))($compare);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_maximum'] = __NAMESPACE__ . '\\majData_majFoldable_maximum';

// Data_Foldable_minimumBy
function majData_majFoldable_minimummajBy($dictFoldable, $cmp = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_minimummajBy';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
  $foldl3 = ($dictFoldable)->foldl;
  $min__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp) {
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Just", $x);
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
switch (($__case_0)->tag) {
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__case_0 = (($__global_Data_Foldable_eq1)((($cmp)($x))($y)))(($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
$__case_res_1 = null;
$__match_1 = false;
if (($__match_1 === false)) {
if (($__case_0 === true)) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = $x;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = $y;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
$__res = new Phpurs_Data1("Just", $__case_res_1);
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
})();
  $__res = (($foldl3)($min__prime__))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_minimumBy'] = __NAMESPACE__ . '\\majData_majFoldable_minimummajBy';

// Data_Foldable_minimum
function majData_majFoldable_minimum($dictOrd, $dictFoldable = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_minimum';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_minimumBy = ($GLOBALS['Data_Foldable_minimumBy'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_minimumBy'));
  $compare = ($dictOrd)->compare;
  $__res = (($__global_Data_Foldable_minimumBy)($dictFoldable))($compare);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_minimum'] = __NAMESPACE__ . '\\majData_majFoldable_minimum';

// Data_Foldable_product
function majData_majFoldable_product($dictFoldable, $dictSemiring = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_product';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $__res = (($foldl3)(($dictSemiring)->mul))(($dictSemiring)->one);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_product'] = __NAMESPACE__ . '\\majData_majFoldable_product';

// Data_Foldable_sum
function majData_majFoldable_sum($dictFoldable, $dictSemiring = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_sum';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $__res = (($foldl3)(($dictSemiring)->add))(($dictSemiring)->zero);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_sum'] = __NAMESPACE__ . '\\majData_majFoldable_sum';













// Data_Foldable_foldMapDefaultR
function majData_majFoldable_foldmajMapmajDefaultmajR($dictFoldable, $dictMonoid = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldmajMapmajDefaultmajR';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldr3 = ($dictFoldable)->foldr;
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = (($foldr3)((function() use ($append, $f) {
  $__fn = function($x, $acc = null) use ($append, $f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($append)(($f)($x)))($acc);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($mempty);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Foldable_foldMapDefaultR'] = __NAMESPACE__ . '\\majData_majFoldable_foldmajMapmajDefaultmajR';





// Data_Foldable_foldMapDefaultL
function majData_majFoldable_foldmajMapmajDefaultmajL($dictFoldable, $dictMonoid = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldmajMapmajDefaultmajL';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldl3 = ($dictFoldable)->foldl;
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = (($foldl3)((function() use ($append, $f) {
  $__fn = function($acc, $x = null) use ($append, $f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($append)($acc))(($f)($x));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($mempty);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Foldable_foldMapDefaultL'] = __NAMESPACE__ . '\\majData_majFoldable_foldmajMapmajDefaultmajL';

// Data_Foldable_foldMap
function majData_majFoldable_foldmajMap($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldmajMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__case_0 = $dict;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$v = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = ($v)->foldMap;
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
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldMap'] = __NAMESPACE__ . '\\majData_majFoldable_foldmajMap';


// Data_Foldable_foldableApp
function majData_majFoldable_foldablemajApp($dictFoldable) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldablemajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = (object)["foldr" => (function() use ($foldr3) {
  $__fn = function($f, $i = null, $v = null) use ($foldr3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = ((($foldr3)($f1))($i1))($x);
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
})(), "foldl" => (function() use ($foldl3) {
  $__fn = function($f, $i = null, $v = null) use ($foldl3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = ((($foldl3)($f1))($i1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2) {
  $__fn = function($dictMonoid, $f = null, $v = null) use ($foldMap2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $foldMap3 = ($foldMap2)($dictMonoid);
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$x = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = (($foldMap3)($f1))($x);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldableApp'] = __NAMESPACE__ . '\\majData_majFoldable_foldablemajApp';

// Data_Foldable_foldableCompose
function majData_majFoldable_foldablemajCompose($dictFoldable, $dictFoldable1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldablemajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $foldr4 = ($dictFoldable1)->foldr;
  $foldl4 = ($dictFoldable1)->foldl;
  $foldMap3 = ($dictFoldable1)->foldMap;
  $__res = (object)["foldr" => (function() use ($foldr3, $foldr4) {
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $foldr4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = ((($foldr3)(\Data\Function\majData_majFunction_flip(($foldr4)($f1))))($i1))($fga);
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
})(), "foldl" => (function() use ($foldl3, $foldl4) {
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $foldl4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
if (($__match_1 === false)) {
if (true) {
$__res = ((($foldl3)(($foldl4)($f1)))($i1))($fga);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3) {
  $__fn = function($dictMonoid, $f = null, $v = null) use ($foldMap2, $foldMap3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $foldMap4 = ($foldMap2)($dictMonoid);
  $foldMap5 = ($foldMap3)($dictMonoid);
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
if (true) {
$f1 = $__case_0;
$fga = $__case_1;
if (($__match_2 === false)) {
if (true) {
$__res = (($foldMap4)(($foldMap5)($f1)))($fga);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_foldableCompose'] = __NAMESPACE__ . '\\majData_majFoldable_foldablemajCompose';

// Data_Foldable_foldableCoproduct
function majData_majFoldable_foldablemajCoproduct($dictFoldable, $dictFoldable1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldablemajCoproduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $foldr4 = ($dictFoldable1)->foldr;
  $foldl4 = ($dictFoldable1)->foldl;
  $foldMap3 = ($dictFoldable1)->foldMap;
  $__res = (object)["foldr" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__global_Data_Functor_Coproduct_coproduct)((($foldr3)($f))($z)))((($foldr4)($f))($z));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__global_Data_Functor_Coproduct_coproduct)((($foldl3)($f))($z)))((($foldl4)($f))($z));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct) {
  $__fn = function($dictMonoid, $f = null) use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldMap4 = ($foldMap2)($dictMonoid);
  $foldMap5 = ($foldMap3)($dictMonoid);
  $__res = (($__global_Data_Functor_Coproduct_coproduct)(($foldMap4)($f)))(($foldMap5)($f));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_foldableCoproduct'] = __NAMESPACE__ . '\\majData_majFoldable_foldablemajCoproduct';



// Data_Foldable_foldableProduct
function majData_majFoldable_foldablemajProduct($dictFoldable, $dictFoldable1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldablemajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $foldr4 = ($dictFoldable1)->foldr;
  $foldl4 = ($dictFoldable1)->foldl;
  $foldMap3 = ($dictFoldable1)->foldMap;
  $__res = (object)["foldr" => (function() use ($foldr3, $foldr4) {
  $__fn = function($f, $z = null, $v = null) use ($foldr3, $foldr4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = ((($foldr3)($f1))(((($foldr4)($f1))($z1))($ga)))($fa);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl4, $foldl3) {
  $__fn = function($f, $z = null, $v = null) use ($foldl4, $foldl3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  $__match_1 = false;
  if (($__match_1 === false)) {
switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
if (($__match_1 === false)) {
if (true) {
$__res = ((($foldl4)($f1))(((($foldl3)($f1))($z1))($fa)))($ga);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($__global_Prim_undefined, $foldMap2, $foldMap3) {
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__global_Prim_undefined, $foldMap2, $foldMap3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $foldMap4 = ($foldMap2)($dictMonoid);
  $foldMap5 = ($foldMap3)($dictMonoid);
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_2 = false;
  if (($__match_2 === false)) {
switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
if (($__match_2 === false)) {
if (true) {
$__res = (($append)((($foldMap4)($f1))($fa)))((($foldMap5)($f1))($ga));
goto __end;;
$__match_2 = true;
};
};
break;
default:
;
break;
};
};
  if (($__match_2 === false)) {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_foldableProduct'] = __NAMESPACE__ . '\\majData_majFoldable_foldablemajProduct';

// Data_Foldable_foldlDefault
function majData_majFoldable_foldlmajDefault($dictFoldable, $c = null, $u = null, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldlmajDefault';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Data_Foldable_monoidFreeMonoidTree = ($GLOBALS['Data_Foldable_monoidFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidFreeMonoidTree'));
  $__global_Data_Foldable_foldl2 = ($GLOBALS['Data_Foldable_foldl2'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl2'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Foldable_monoidFreeMonoidTree);
  $__res = ((($__global_Data_Foldable_foldl2)($c))($u))((($foldMap2)(function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Node", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Foldable_foldlDefault'] = __NAMESPACE__ . '\\majData_majFoldable_foldlmajDefault';

// Data_Foldable_foldrDefault
function majData_majFoldable_foldrmajDefault($dictFoldable, $c = null, $u = null, $xs = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldrmajDefault';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Data_Foldable_monoidFreeMonoidTree = ($GLOBALS['Data_Foldable_monoidFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidFreeMonoidTree'));
  $__global_Data_Foldable_foldr2 = ($GLOBALS['Data_Foldable_foldr2'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr2'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Foldable_monoidFreeMonoidTree);
  $__res = ((($__global_Data_Foldable_foldr2)($c))($u))((($foldMap2)(function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Node", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Foldable_foldrDefault'] = __NAMESPACE__ . '\\majData_majFoldable_foldrmajDefault';

// Data_Foldable_lookup
function majData_majFoldable_lookup($dictFoldable, $dictEq = null, $a = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_lookup';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Maybe_First_monoidFirst = ($GLOBALS['Data_Maybe_First_monoidFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_monoidFirst'));
  $__global_Data_Foldable_unwrap = ($GLOBALS['Data_Foldable_unwrap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_unwrap'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Maybe_First_monoidFirst);
  $eq2 = ($dictEq)->eq;
  $__res = function($__x) use ($__global_Data_Foldable_unwrap, $foldMap2, $eq2, $a) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Foldable_unwrap)((($foldMap2)(function($v) use ($eq2, $a) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$b = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__case_0 = (($eq2)($a))($a__prime__);
$__match_1 = false;
if (($__match_1 === false)) {
if (($__case_0 === true)) {
if (($__match_1 === false)) {
if (true) {
$__res = new Phpurs_Data1("Just", $b);
goto __end;;
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
}))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Foldable_lookup'] = __NAMESPACE__ . '\\majData_majFoldable_lookup';

// Data_Foldable_surroundMap
function majData_majFoldable_surroundmajMap($dictFoldable, $dictSemigroup = null, $d = null, $t = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_surroundmajMap';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Foldable_monoidEndo = ($GLOBALS['Data_Foldable_monoidEndo'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidEndo'));
  $__global_Data_Foldable_unwrap = ($GLOBALS['Data_Foldable_unwrap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_unwrap'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Foldable_monoidEndo);
  $append = ($dictSemigroup)->append;
  $joined = (function() use ($append, $d, $t) {
  $__fn = function($a, $m = null) use ($append, $d, $t, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($append)($d))((($append)(($t)($a)))($m));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (($__global_Data_Foldable_unwrap)((($foldMap2)($joined))($f)))($d);
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Foldable_surroundMap'] = __NAMESPACE__ . '\\majData_majFoldable_surroundmajMap';

// Data_Foldable_surround
function majData_majFoldable_surround($dictFoldable, $dictSemigroup = null, $d = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_surround';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_surroundMap = ($GLOBALS['Data_Foldable_surroundMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_surroundMap'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $surroundMap1 = ($__global_Data_Foldable_surroundMap)($dictFoldable);
  $surroundMap2 = ($surroundMap1)($dictSemigroup);
  $__res = (($surroundMap2)($d))($__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Foldable_surround'] = __NAMESPACE__ . '\\majData_majFoldable_surround';

// Data_Foldable_foldM
function majData_majFoldable_foldmajM($dictFoldable, $dictMonad = null, $f = null, $b0 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_foldmajM';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldl3 = ($dictFoldable)->foldl;
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (($foldl3)((function() use ($bind, $f) {
  $__fn = function($b, $a = null) use ($bind, $f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($bind)($b))(\Data\Function\majData_majFunction_flip($f, $a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(($pure)($b0));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Foldable_foldM'] = __NAMESPACE__ . '\\majData_majFoldable_foldmajM';

// Data_Foldable_fold
function majData_majFoldable_fold($dictFoldable, $dictMonoid = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_fold';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = (($foldMap2)($dictMonoid))($__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_fold'] = __NAMESPACE__ . '\\majData_majFoldable_fold';

// Data_Foldable_findMap
function majData_majFoldable_findmajMap($dictFoldable, $p = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_findmajMap';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $go = (function() use ($p) {
  $__fn = function($v, $v1 = null) use ($p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ($p)($x);
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
if (true) {
$r = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $r;
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
})();
  $__res = (($foldl3)($go))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_findMap'] = __NAMESPACE__ . '\\majData_majFoldable_findmajMap';

// Data_Foldable_find
function majData_majFoldable_find($dictFoldable, $p = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_find';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $go = (function() use ($p) {
  $__fn = function($v, $v1 = null) use ($p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
if (($__match_0 === false)) {
if (($p)($x)) {
$__res = new Phpurs_Data1("Just", $x);
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
if (true) {
$r = $__case_0;
if (($__match_0 === false)) {
if (true) {
$__res = $r;
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
})();
  $__res = (($foldl3)($go))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_find'] = __NAMESPACE__ . '\\majData_majFoldable_find';

// Data_Foldable_any
function majData_majFoldable_any($dictFoldable, $dictHeytingAlgebra = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_any';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
  $__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
  $__global_Data_Monoid_Disj_monoidDisj = ($GLOBALS['Data_Monoid_Disj_monoidDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_monoidDisj'));
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = (($__global_Data_Foldable_alaF)($__global_Data_Monoid_Disj_Disj))(($foldMap2)(($__global_Data_Monoid_Disj_monoidDisj)($dictHeytingAlgebra)));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_any'] = __NAMESPACE__ . '\\majData_majFoldable_any';

// Data_Foldable_elem
function majData_majFoldable_elem($dictFoldable, $dictEq = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_elem';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_any = ($GLOBALS['Data_Foldable_any'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_any'));
  $__global_Data_HeytingAlgebra_heytingAlgebraBoolean = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $any1 = (($__global_Data_Foldable_any)($dictFoldable))($__global_Data_HeytingAlgebra_heytingAlgebraBoolean);
  $__res = function($__x) use ($any1, $dictEq) {
  $__num = \func_num_args();
  $__res = ($any1)((($dictEq)->eq)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_elem'] = __NAMESPACE__ . '\\majData_majFoldable_elem';

// Data_Foldable_notElem
function majData_majFoldable_notmajElem($dictFoldable, $dictEq = null, $x = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_notmajElem';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Foldable_elem = ($GLOBALS['Data_Foldable_elem'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_elem'));
  $__global_Data_Foldable_not = ($GLOBALS['Data_Foldable_not'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_not'));
  $elem1 = ($__global_Data_Foldable_elem)($dictFoldable);
  $elem2 = ($elem1)($dictEq);
  $__res = function($__x) use ($__global_Data_Foldable_not, $elem2, $x) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Foldable_not)((($elem2)($x))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Foldable_notElem'] = __NAMESPACE__ . '\\majData_majFoldable_notmajElem';

// Data_Foldable_or
function majData_majFoldable_or($dictFoldable, $dictHeytingAlgebra = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_or';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_any = ($GLOBALS['Data_Foldable_any'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_any'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $any1 = ($__global_Data_Foldable_any)($dictFoldable);
  $__res = (($any1)($dictHeytingAlgebra))($__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_or'] = __NAMESPACE__ . '\\majData_majFoldable_or';

// Data_Foldable_all
function majData_majFoldable_all($dictFoldable, $dictHeytingAlgebra = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_all';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
  $__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
  $__global_Data_Monoid_Conj_monoidConj = ($GLOBALS['Data_Monoid_Conj_monoidConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_monoidConj'));
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = (($__global_Data_Foldable_alaF)($__global_Data_Monoid_Conj_Conj))(($foldMap2)(($__global_Data_Monoid_Conj_monoidConj)($dictHeytingAlgebra)));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_all'] = __NAMESPACE__ . '\\majData_majFoldable_all';

// Data_Foldable_and
function majData_majFoldable_and($dictFoldable, $dictHeytingAlgebra = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFoldable_and';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Foldable_all = ($GLOBALS['Data_Foldable_all'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_all'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $all1 = ($__global_Data_Foldable_all)($dictFoldable);
  $__res = (($all1)($dictHeytingAlgebra))($__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_and'] = __NAMESPACE__ . '\\majData_majFoldable_and';

