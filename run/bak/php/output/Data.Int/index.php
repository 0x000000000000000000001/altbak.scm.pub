<?php

namespace Data\Int;

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
      case 'Data_Int_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Int_greaterThanOrEq': $v = \Data\Ord\majData_majOrd_greatermajThanmajOrmajEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Int_lessThanOrEq': $v = \Data\Ord\majData_majOrd_lessmajThanmajOrmajEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Int_notEq': $v = \Data\Eq\majData_majEq_notmajEq(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'))); break;
      case 'Data_Int_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Int_greaterThanOrEq1': $v = \Data\Ord\majData_majOrd_greatermajThanmajOrmajEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Int_top': $v = ($GLOBALS['Data_Bounded_topInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topInt')); break;
      case 'Data_Int_lessThanOrEq1': $v = \Data\Ord\majData_majOrd_lessmajThanmajOrmajEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Int_bottom': $v = ($GLOBALS['Data_Bounded_bottomInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomInt')); break;
      case 'Data_Int_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_Int_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Int_Even': $v = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even")); break;
      case 'Data_Int_Odd': $v = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd")); break;
      case 'Data_Int_showParity': $v = (object)["show" => function($v) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Even":
if (($__match_0 === false)) {
if (true) {
$__res = "Even";
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
case "Odd":
if (($__match_0 === false)) {
if (true) {
$__res = "Odd";
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
}]; break;
      case 'Data_Int_octal': $v = 8; break;
      case 'Data_Int_hexadecimal': $v = 16; break;
      case 'Data_Int_fromStringAs': $v = ((($GLOBALS['Data_Int_fromStringAsImpl'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromStringAsImpl')))(function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Int_fromString': $v = (($GLOBALS['Data_Int_fromStringAs'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromStringAs')))(10); break;
      case 'Data_Int_fromNumber': $v = ((($GLOBALS['Data_Int_fromNumberImpl'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromNumberImpl')))(function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Int_eqParity': $v = (object)["eq" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
if (($__match_0 === false)) {
if (true) {
$__res = true;
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
if (($__match_0 === false)) {
if (true) {
$__res = true;
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (true) {
if (($__match_0 === false)) {
if (true) {
$__res = false;
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
      case 'Data_Int_eq1': $v = (($GLOBALS['Data_Int_eqParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eqParity')))->eq; break;
      case 'Data_Int_ordParity': $v = (object)["compare" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Even":
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
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
switch (($__case_1)->tag) {
case "Even":
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
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
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
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
})(), "Eq0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Int_eqParity = ($GLOBALS['Data_Int_eqParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eqParity'));
  $__res = $__global_Data_Int_eqParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_semiringParity': $v = (object)["zero" => ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even")), "add" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Int_eq1 = ($GLOBALS['Data_Int_eq1'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eq1'));
  $__case_0 = (($__global_Data_Int_eq1)($x))($y);
  $__match_0 = false;
  if (($__match_0 === false)) {
if (($__case_0 === true)) {
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (true) {
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd"));
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
})(), "one" => ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd")), "mul" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
if (($__match_1 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd"));
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
$__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
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
})()]; break;
      case 'Data_Int_ringParity': $v = (object)["sub" => (($GLOBALS['Data_Int_semiringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_semiringParity')))->add, "Semiring0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Int_semiringParity = ($GLOBALS['Data_Int_semiringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_semiringParity'));
  $__res = $__global_Data_Int_semiringParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_divisionRingParity': $v = (object)["recip" => (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity, "Ring0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Int_ringParity = ($GLOBALS['Data_Int_ringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ringParity'));
  $__res = $__global_Data_Int_ringParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_decimal': $v = 10; break;
      case 'Data_Int_commutativeRingParity': $v = (object)["Ring0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Int_ringParity = ($GLOBALS['Data_Int_ringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ringParity'));
  $__res = $__global_Data_Int_ringParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_euclideanRingParity': $v = (object)["degree" => function($v) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Even":
if (($__match_0 === false)) {
if (true) {
$__res = 0;
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
case "Odd":
if (($__match_0 === false)) {
if (true) {
$__res = 1;
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
}, "div" => (function() {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mod" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Int_commutativeRingParity = ($GLOBALS['Data_Int_commutativeRingParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_commutativeRingParity'));
  $__res = $__global_Data_Int_commutativeRingParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_boundedParity': $v = (object)["bottom" => ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even")), "top" => ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd")), "Ord0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Int_ordParity = ($GLOBALS['Data_Int_ordParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ordParity'));
  $__res = $__global_Data_Int_ordParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_binary': $v = 2; break;
      case 'Data_Int_base36': $v = 36; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Int.Bits/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Prelude/index.php';












// Data_Int_Radix
function majData_majInt_majRadix($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_majRadix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_Radix'] = __NAMESPACE__ . '\\majData_majInt_majRadix';




// Data_Int_radix
function majData_majInt_radix($n) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_radix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Int_conj = ($GLOBALS['Data_Int_conj'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_conj'));
  $__global_Data_Int_greaterThanOrEq = ($GLOBALS['Data_Int_greaterThanOrEq'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_greaterThanOrEq'));
  $__global_Data_Int_lessThanOrEq = ($GLOBALS['Data_Int_lessThanOrEq'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_lessThanOrEq'));
  $__case_0 = $n;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$n1 = $__case_0;
if (($__match_0 === false)) {
if ((($__global_Data_Int_conj)((($__global_Data_Int_greaterThanOrEq)($n1))(2)))((($__global_Data_Int_lessThanOrEq)($n1))(36))) {
$__res = new Phpurs_Data1("Just", $n1);
goto __end;;
$__match_0 = true;
};
};
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
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
$GLOBALS['Data_Int_radix'] = __NAMESPACE__ . '\\majData_majInt_radix';

// Data_Int_odd
function majData_majInt_odd($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_odd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Int_notEq = ($GLOBALS['Data_Int_notEq'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_notEq'));
  $__global_Data_Int_Bits_and = ($GLOBALS['Data_Int_Bits_and'] ?? \Data\Int\Bits\phpurs_eval_thunk('Data_Int_Bits_and'));
  $__res = (($__global_Data_Int_notEq)((($__global_Data_Int_Bits_and)($x))(1)))(0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_odd'] = __NAMESPACE__ . '\\majData_majInt_odd';






// Data_Int_unsafeClamp
function majData_majInt_unsafemajClamp($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_unsafemajClamp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Int_not = ($GLOBALS['Data_Int_not'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_not'));
  $__global_Data_Number_isFinite = ($GLOBALS['Data_Number_isFinite'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_isFinite'));
  $__global_Data_Int_greaterThanOrEq1 = ($GLOBALS['Data_Int_greaterThanOrEq1'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_greaterThanOrEq1'));
  $__global_Data_Int_toNumber = ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'));
  $__global_Data_Int_top = ($GLOBALS['Data_Int_top'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_top'));
  $__global_Data_Int_lessThanOrEq1 = ($GLOBALS['Data_Int_lessThanOrEq1'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_lessThanOrEq1'));
  $__global_Data_Int_bottom = ($GLOBALS['Data_Int_bottom'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_bottom'));
  $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
  $__global_Data_Int_fromNumber = ($GLOBALS['Data_Int_fromNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromNumber'));
  $__case_0 = $x;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$x1 = $__case_0;
if (($__match_0 === false)) {
if (($__global_Data_Int_not)(($__global_Data_Number_isFinite)($x1))) {
$__res = 0;
goto __end;;
$__match_0 = true;
};
};
if (($__match_0 === false)) {
if ((($__global_Data_Int_greaterThanOrEq1)($x1))(($__global_Data_Int_toNumber)($__global_Data_Int_top))) {
$__res = $__global_Data_Int_top;
goto __end;;
$__match_0 = true;
};
};
if (($__match_0 === false)) {
if ((($__global_Data_Int_lessThanOrEq1)($x1))(($__global_Data_Int_toNumber)($__global_Data_Int_bottom))) {
$__res = $__global_Data_Int_bottom;
goto __end;;
$__match_0 = true;
};
};
if (($__match_0 === false)) {
if (true) {
$__res = (($__global_Data_Maybe_fromMaybe)(0))(($__global_Data_Int_fromNumber)($x1));
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
$GLOBALS['Data_Int_unsafeClamp'] = __NAMESPACE__ . '\\majData_majInt_unsafemajClamp';

// Data_Int_round
function majData_majInt_round($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_round';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ("\\Data\\Int\\majData_majInt_unsafemajClamp")((($GLOBALS['Data_Number_round'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_round')))($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_round'] = __NAMESPACE__ . '\\majData_majInt_round';

// Data_Int_trunc
function majData_majInt_trunc($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_trunc';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ("\\Data\\Int\\majData_majInt_unsafemajClamp")((($GLOBALS['Data_Number_trunc'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_trunc')))($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_trunc'] = __NAMESPACE__ . '\\majData_majInt_trunc';

// Data_Int_floor
function majData_majInt_floor($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_floor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ("\\Data\\Int\\majData_majInt_unsafemajClamp")((($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor')))($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_floor'] = __NAMESPACE__ . '\\majData_majInt_floor';

// Data_Int_even
function majData_majInt_even($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_even';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Int_eq = ($GLOBALS['Data_Int_eq'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eq'));
  $__global_Data_Int_Bits_and = ($GLOBALS['Data_Int_Bits_and'] ?? \Data\Int\Bits\phpurs_eval_thunk('Data_Int_Bits_and'));
  $__res = (($__global_Data_Int_eq)((($__global_Data_Int_Bits_and)($x))(1)))(0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_even'] = __NAMESPACE__ . '\\majData_majInt_even';

// Data_Int_parity
function majData_majInt_parity($n) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_parity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Int_even = ($GLOBALS['Data_Int_even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_even'));
  $__case_0 = ($__global_Data_Int_even)($n);
  $__match_0 = false;
  if (($__match_0 === false)) {
if (($__case_0 === true)) {
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
goto __end;;
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (true) {
if (($__match_0 === false)) {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd"));
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
$GLOBALS['Data_Int_parity'] = __NAMESPACE__ . '\\majData_majInt_parity';










// Data_Int_ceil
function majData_majInt_ceil($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majInt_ceil';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = ("\\Data\\Int\\majData_majInt_unsafemajClamp")((($GLOBALS['Data_Number_ceil'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_ceil')))($__x));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_ceil'] = __NAMESPACE__ . '\\majData_majInt_ceil';




