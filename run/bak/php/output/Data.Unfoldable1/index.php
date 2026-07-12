<?php

namespace Data\Unfoldable1;

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
      case 'Data_Unfoldable1_fromJust': $v = \Data\Maybe\majData_majMaybe_frommajJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Unfoldable1_lessThanOrEq': $v = \Data\Ord\majData_majOrd_lessmajThanmajOrmajEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable1_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Unfoldable1_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Unfoldable1_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Unfoldable1_greaterThanOrEq': $v = \Data\Ord\majData_majOrd_greatermajThanmajOrmajEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable1_negate': $v = \Data\Ring\majData_majRing_negate(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_Unfoldable1_greaterThan': $v = \Data\Ord\majData_majOrd_greatermajThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable1_unfoldable1Maybe': $v = (object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $__res = new Phpurs_Data1("Just", ($__global_Data_Tuple_fst)(($f)($b)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Unfoldable1_unfoldable1Array': $v = (object)["unfoldr1" => ((((($GLOBALS['Data_Unfoldable1_unfoldr1ArrayImpl'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldr1ArrayImpl')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'))))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))(function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Unfoldable1_fromJust = ($GLOBALS['Data_Unfoldable1_fromJust'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_fromJust'));
  $__res = $__global_Data_Unfoldable1_fromJust;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))("\\Data\\Tuple\\majData_majTuple_fst"))("\\Data\\Tuple\\majData_majTuple_snd")]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';









// Data_Unfoldable1_Unfoldable1$Dict
function majData_majUnfoldable1_majUnfoldable1dollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable1_majUnfoldable1dollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_Unfoldable1dollarDict'] = __NAMESPACE__ . '\\majData_majUnfoldable1_majUnfoldable1dollarmajDict';

// Data_Unfoldable1_unfoldr1
function majData_majUnfoldable1_unfoldr1($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable1_unfoldr1';
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
$__res = ($v)->unfoldr1;
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
$GLOBALS['Data_Unfoldable1_unfoldr1'] = __NAMESPACE__ . '\\majData_majUnfoldable1_unfoldr1';



// Data_Unfoldable1_replicate1
function majData_majUnfoldable1_replicate1($dictUnfoldable1, $n = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable1_replicate1';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Unfoldable1_lessThanOrEq = ($GLOBALS['Data_Unfoldable1_lessThanOrEq'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_lessThanOrEq'));
  $__global_Data_Unfoldable1_sub = ($GLOBALS['Data_Unfoldable1_sub'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_sub'));
  $unfoldr11 = ($dictUnfoldable1)->unfoldr1;
  $step = function($i) use ($__global_Data_Unfoldable1_lessThanOrEq, $v, $__global_Data_Unfoldable1_sub) {
  $__num = \func_num_args();
  $__case_0 = $i;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$i1 = $__case_0;
if (($__match_0 === false)) {
if ((($__global_Data_Unfoldable1_lessThanOrEq)($i1))(0)) {
$__res = new Phpurs_Data2("Tuple", $v, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
goto __end;;
$__match_0 = true;
};
};
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data2("Tuple", $v, new Phpurs_Data1("Just", (($__global_Data_Unfoldable1_sub)($i1))(1)));
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
};
  $__res = (($unfoldr11)($step))((($__global_Data_Unfoldable1_sub)($n))(1));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Unfoldable1_replicate1'] = __NAMESPACE__ . '\\majData_majUnfoldable1_replicate1';

// Data_Unfoldable1_replicate1A
function majData_majUnfoldable1_replicate1majA($dictApply, $dictUnfoldable1 = null, $dictTraversable1 = null, $n = null, $m = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable1_replicate1majA';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Unfoldable1_replicate1 = ($GLOBALS['Data_Unfoldable1_replicate1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_replicate1'));
  $replicate11 = ($__global_Data_Unfoldable1_replicate1)($dictUnfoldable1);
  $sequence1 = (($dictTraversable1)->sequence1)($dictApply);
  $__res = ($sequence1)((($replicate11)($n))($m));
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Unfoldable1_replicate1A'] = __NAMESPACE__ . '\\majData_majUnfoldable1_replicate1majA';

// Data_Unfoldable1_singleton
function majData_majUnfoldable1_singleton($dictUnfoldable1) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable1_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Unfoldable1_replicate1 = ($GLOBALS['Data_Unfoldable1_replicate1'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_replicate1'));
  $__res = (($__global_Data_Unfoldable1_replicate1)($dictUnfoldable1))(1);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable1_singleton'] = __NAMESPACE__ . '\\majData_majUnfoldable1_singleton';

// Data_Unfoldable1_range
function majData_majUnfoldable1_range($dictUnfoldable1, $start = null, $end = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable1_range';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Unfoldable1_add = ($GLOBALS['Data_Unfoldable1_add'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_add'));
  $__global_Data_Unfoldable1_eq = ($GLOBALS['Data_Unfoldable1_eq'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_eq'));
  $__global_Data_Unfoldable1_greaterThanOrEq = ($GLOBALS['Data_Unfoldable1_greaterThanOrEq'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_greaterThanOrEq'));
  $__global_Data_Unfoldable1_negate = ($GLOBALS['Data_Unfoldable1_negate'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_negate'));
  $unfoldr11 = ($dictUnfoldable1)->unfoldr1;
  $go = (function() use ($__global_Data_Unfoldable1_add, $__global_Data_Unfoldable1_eq, $end) {
  $__fn = function($delta, $i = null) use ($__global_Data_Unfoldable1_add, $__global_Data_Unfoldable1_eq, $end, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $i__prime__ = (($__global_Data_Unfoldable1_add)($i))($delta);
  $__case_0 = (($__global_Data_Unfoldable1_eq)($i))($end);
  $__case_res_0 = null;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (($__case_0 === true)) {
if (($__match_0 === false)) {
if (true) {
$__case_res_0 = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
if (true) {
if (($__match_0 === false)) {
if (true) {
$__case_res_0 = new Phpurs_Data1("Just", $i__prime__);
$__match_0 = true;
};
};
};
};
  if (($__match_0 === false)) {
throw new \Exception("Pattern match failure");
};
  $__res = new Phpurs_Data2("Tuple", $i, $__case_res_0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__case_0 = (($__global_Data_Unfoldable1_greaterThanOrEq)($end))($start);
  $__case_res_1 = null;
  $__match_1 = false;
  if (($__match_1 === false)) {
if (($__case_0 === true)) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = 1;
$__match_1 = true;
};
};
};
};
  if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = ($__global_Data_Unfoldable1_negate)(1);
$__match_1 = true;
};
};
};
};
  if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
  $delta = $__case_res_1;
  $__res = (($unfoldr11)(($go)($delta)))($start);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Unfoldable1_range'] = __NAMESPACE__ . '\\majData_majUnfoldable1_range';

// Data_Unfoldable1_iterateN
function majData_majUnfoldable1_iteratemajN($dictUnfoldable1, $n = null, $f = null, $s = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable1_iteratemajN';
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__global_Data_Unfoldable1_greaterThan = ($GLOBALS['Data_Unfoldable1_greaterThan'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_greaterThan'));
  $__global_Data_Unfoldable1_sub = ($GLOBALS['Data_Unfoldable1_sub'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_sub'));
  $unfoldr11 = ($dictUnfoldable1)->unfoldr1;
  $go = function($v) use ($__global_Data_Unfoldable1_greaterThan, $f, $__global_Data_Unfoldable1_sub) {
  $__num = \func_num_args();
  $__case_0 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$n__prime__ = ($__case_0)->v1;
if (($__match_0 === false)) {
if (true) {
$__case_0 = (($__global_Data_Unfoldable1_greaterThan)($n__prime__))(0);
$__case_res_1 = null;
$__match_1 = false;
if (($__match_1 === false)) {
if (($__case_0 === true)) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($f)($x), (($__global_Data_Unfoldable1_sub)($n__prime__))(1)));
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
if (true) {
if (($__match_1 === false)) {
if (true) {
$__case_res_1 = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
$__match_1 = true;
};
};
};
};
if (($__match_1 === false)) {
throw new \Exception("Pattern match failure");
};
$__res = new Phpurs_Data2("Tuple", $x, $__case_res_1);
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
};
  $__res = (($unfoldr11)($go))(new Phpurs_Data2("Tuple", $s, (($__global_Data_Unfoldable1_sub)($n))(1)));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Unfoldable1_iterateN'] = __NAMESPACE__ . '\\majData_majUnfoldable1_iteratemajN';

