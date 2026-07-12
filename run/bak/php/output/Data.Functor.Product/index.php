<?php

namespace Data\Functor\Product;

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
      case 'Data_Functor_Product_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Product_bimap': $v = (($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple')))->bimap; break;
      case 'Data_Functor_Product_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Functor_Product_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Functor_Product_newtypeProduct': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
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
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Prelude/index.php';





// Data_Functor_Product_unwrap
function majData_majFunctor_majProduct_unwrap($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_unwrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_unwrap'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_unwrap';

// Data_Functor_Product_Product
function majData_majFunctor_majProduct_majProduct($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_majProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Product_Product'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_majProduct';

// Data_Functor_Product_showProduct
function majData_majFunctor_majProduct_showmajProduct($dictShow, $dictShow1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_showmajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_append = ($GLOBALS['Data_Functor_Product_append'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_append'));
  $show = ($dictShow)->show;
  $show1 = ($dictShow1)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Functor_Product_append, $show, $show1) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$fa = ($__case_0)->v0;
$ga = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Functor_Product_append)("(product "))((($__global_Data_Functor_Product_append)(($show)($fa)))((($__global_Data_Functor_Product_append)(" "))((($__global_Data_Functor_Product_append)(($show1)($ga)))(")"))));
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
$GLOBALS['Data_Functor_Product_showProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_showmajProduct';

// Data_Functor_Product_product
function majData_majFunctor_majProduct_product($fa, $ga = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_product';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $fa, $ga);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_product'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_product';


// Data_Functor_Product_functorProduct
function majData_majFunctor_majProduct_functormajProduct($dictFunctor, $dictFunctor1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_functormajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_bimap = ($GLOBALS['Data_Functor_Product_bimap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bimap'));
  $map = ($dictFunctor)->map;
  $map1 = ($dictFunctor1)->map;
  $__res = (object)["map" => (function() use ($__global_Data_Functor_Product_bimap, $map, $map1) {
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Product_bimap, $map, $map1, &$__fn) {
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
$fga = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ((($__global_Data_Functor_Product_bimap)(($map)($f1)))(($map1)($f1)))($fga);
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
$GLOBALS['Data_Functor_Product_functorProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_functormajProduct';

// Data_Functor_Product_eq1Product
function majData_majFunctor_majProduct_eq1majProduct($dictEq1, $dictEq11 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_eq1majProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_conj = ($GLOBALS['Data_Functor_Product_conj'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_conj'));
  $eq1 = ($dictEq1)->eq1;
  $eq11 = ($dictEq11)->eq1;
  $__res = (object)["eq1" => (function() use ($eq1, $eq11, $__global_Data_Functor_Product_conj) {
  $__fn = function($dictEq, $v = null, $v1 = null) use ($eq1, $eq11, $__global_Data_Functor_Product_conj, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $eq12 = ($eq1)($dictEq);
  $eq13 = ($eq11)($dictEq);
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->v0;
$r1 = ($__case_0)->v1;
$l2 = ($__case_1)->v0;
$r2 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Functor_Product_conj)((($eq12)($l1))($l2)))((($eq13)($r1))($r2));
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
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_eq1Product'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_eq1majProduct';

// Data_Functor_Product_eqProduct
function majData_majFunctor_majProduct_eqmajProduct($dictEq1, $dictEq11 = null, $dictEq = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_eqmajProduct';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Functor_Product_eq1Product = ($GLOBALS['Data_Functor_Product_eq1Product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_eq1Product'));
  $eq1Product1 = ($__global_Data_Functor_Product_eq1Product)($dictEq1);
  $eq1 = (($eq1Product1)($dictEq11))->eq1;
  $__res = (object)["eq" => ($eq1)($dictEq)];
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Product_eqProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_eqmajProduct';

// Data_Functor_Product_ord1Product
function majData_majFunctor_majProduct_ord1majProduct($dictOrd1, $dictOrd11 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_ord1majProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_eq1Product = ($GLOBALS['Data_Functor_Product_eq1Product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_eq1Product'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare1 = ($dictOrd1)->compare1;
  $eq1Product1 = ($__global_Data_Functor_Product_eq1Product)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $compare11 = ($dictOrd11)->compare1;
  $eq1Product2 = ($eq1Product1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $__res = (object)["compare1" => (function() use ($compare1, $compare11) {
  $__fn = function($dictOrd, $v = null, $v1 = null) use ($compare1, $compare11, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $compare12 = ($compare1)($dictOrd);
  $compare13 = ($compare11)($dictOrd);
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->v0;
$r1 = ($__case_0)->v1;
$l2 = ($__case_1)->v0;
$r2 = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$v2 = (($compare12)($l1))($l2);
$__case_0 = $v2;
$__match_1 = false;
if (($__match_1 === false)) {
switch (($__case_0)->tag) {
case "EQ":
if (($__match_1 === false)) {
if (true) {
$__res = (($compare13)($r1))($r2);
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
$o = $__case_0;
if (($__match_1 === false)) {
if (true) {
$__res = $o;
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Eq10" => function($dollar__unused) use ($eq1Product2) {
  $__num = \func_num_args();
  $__res = $eq1Product2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_ord1Product'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_ord1majProduct';

// Data_Functor_Product_ordProduct
function majData_majFunctor_majProduct_ordmajProduct($dictOrd1, $dictOrd11 = null, $dictOrd = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_ordmajProduct';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Functor_Product_ord1Product = ($GLOBALS['Data_Functor_Product_ord1Product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_ord1Product'));
  $__global_Data_Functor_Product_eqProduct = ($GLOBALS['Data_Functor_Product_eqProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_eqProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ord1Product1 = ($__global_Data_Functor_Product_ord1Product)($dictOrd1);
  $eqProduct1 = ($__global_Data_Functor_Product_eqProduct)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $compare1 = (($ord1Product1)($dictOrd11))->compare1;
  $eqProduct2 = ($eqProduct1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $eqProduct3 = ($eqProduct2)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => ($compare1)($dictOrd), "Eq0" => function($dollar__unused) use ($eqProduct3) {
  $__num = \func_num_args();
  $__res = $eqProduct3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Product_ordProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_ordmajProduct';

// Data_Functor_Product_bihoistProduct
function majData_majFunctor_majProduct_bihoistmajProduct($natF, $natG = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_bihoistmajProduct';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Functor_Product_bimap = ($GLOBALS['Data_Functor_Product_bimap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bimap'));
  $__case_0 = $natF;
  $__case_1 = $natG;
  $__case_2 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
if (($__match_0 === false)) {
if (true) {
$__res = ((($__global_Data_Functor_Product_bimap)($natF1))($natG1))($e);
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
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Product_bihoistProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_bihoistmajProduct';

// Data_Functor_Product_applyProduct
function majData_majFunctor_majProduct_applymajProduct($dictApply, $dictApply1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_applymajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_functorProduct = ($GLOBALS['Data_Functor_Product_functorProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_functorProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $apply = ($dictApply)->apply;
  $functorProduct1 = ($__global_Data_Functor_Product_functorProduct)((($dictApply)->Functor0)($__global_Prim_undefined));
  $apply1 = ($dictApply1)->apply;
  $functorProduct2 = ($functorProduct1)((($dictApply1)->Functor0)($__global_Prim_undefined));
  $__res = (object)["apply" => (function() use ($__global_Data_Functor_Product_product, $apply, $apply1) {
  $__fn = function($v, $v1 = null) use ($__global_Data_Functor_Product_product, $apply, $apply1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$f = ($__case_0)->v0;
$g = ($__case_0)->v1;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Functor_Product_product)((($apply)($f))($a)))((($apply1)($g))($b));
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
})(), "Functor0" => function($dollar__unused) use ($functorProduct2) {
  $__num = \func_num_args();
  $__res = $functorProduct2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_applyProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_applymajProduct';

// Data_Functor_Product_bindProduct
function majData_majFunctor_majProduct_bindmajProduct($dictBind, $dictBind1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_bindmajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_applyProduct = ($GLOBALS['Data_Functor_Product_applyProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_applyProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $__global_Data_Functor_Product_unwrap = ($GLOBALS['Data_Functor_Product_unwrap'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_unwrap'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $bind = ($dictBind)->bind;
  $applyProduct1 = ($__global_Data_Functor_Product_applyProduct)((($dictBind)->Apply0)($__global_Prim_undefined));
  $bind1 = ($dictBind1)->bind;
  $applyProduct2 = ($applyProduct1)((($dictBind1)->Apply0)($__global_Prim_undefined));
  $__res = (object)["bind" => (function() use ($__global_Data_Functor_Product_product, $bind, $__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $bind1, $__global_Data_Tuple_snd) {
  $__fn = function($v, $f = null) use ($__global_Data_Functor_Product_product, $bind, $__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $bind1, $__global_Data_Tuple_snd, &$__fn) {
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
$fa = ($__case_0)->v0;
$ga = ($__case_0)->v1;
$f1 = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Functor_Product_product)((($bind)($fa))(function($__x) use ($__global_Data_Tuple_fst, $__global_Data_Functor_Product_unwrap, $f1) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Tuple_fst)((function($__x) use ($__global_Data_Functor_Product_unwrap, $f1) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Functor_Product_unwrap)(($f1)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($bind1)($ga))(function($__x) use ($__global_Data_Tuple_snd, $__global_Data_Functor_Product_unwrap, $f1) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Tuple_snd)((function($__x) use ($__global_Data_Functor_Product_unwrap, $f1) {
  $__num = \func_num_args();
  $__res = ($__global_Data_Functor_Product_unwrap)(($f1)($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
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
})(), "Apply0" => function($dollar__unused) use ($applyProduct2) {
  $__num = \func_num_args();
  $__res = $applyProduct2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_bindProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_bindmajProduct';

// Data_Functor_Product_applicativeProduct
function majData_majFunctor_majProduct_applicativemajProduct($dictApplicative, $dictApplicative1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_applicativemajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_applyProduct = ($GLOBALS['Data_Functor_Product_applyProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_applyProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $pure = ($dictApplicative)->pure;
  $applyProduct1 = ($__global_Data_Functor_Product_applyProduct)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $pure1 = ($dictApplicative1)->pure;
  $applyProduct2 = ($applyProduct1)((($dictApplicative1)->Apply0)($__global_Prim_undefined));
  $__res = (object)["pure" => function($a) use ($__global_Data_Functor_Product_product, $pure, $pure1) {
  $__num = \func_num_args();
  $__res = (($__global_Data_Functor_Product_product)(($pure)($a)))(($pure1)($a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused) use ($applyProduct2) {
  $__num = \func_num_args();
  $__res = $applyProduct2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_applicativeProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_applicativemajProduct';

// Data_Functor_Product_monadProduct
function majData_majFunctor_majProduct_monadmajProduct($dictMonad, $dictMonad1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctor_majProduct_monadmajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_applicativeProduct = ($GLOBALS['Data_Functor_Product_applicativeProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_applicativeProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Product_bindProduct = ($GLOBALS['Data_Functor_Product_bindProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_bindProduct'));
  $applicativeProduct1 = ($__global_Data_Functor_Product_applicativeProduct)((($dictMonad)->Applicative0)($__global_Prim_undefined));
  $bindProduct1 = ($__global_Data_Functor_Product_bindProduct)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $applicativeProduct2 = ($applicativeProduct1)((($dictMonad1)->Applicative0)($__global_Prim_undefined));
  $bindProduct2 = ($bindProduct1)((($dictMonad1)->Bind1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($dollar__unused) use ($applicativeProduct2) {
  $__num = \func_num_args();
  $__res = $applicativeProduct2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused) use ($bindProduct2) {
  $__num = \func_num_args();
  $__res = $bindProduct2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Product_monadProduct'] = __NAMESPACE__ . '\\majData_majFunctor_majProduct_monadmajProduct';

