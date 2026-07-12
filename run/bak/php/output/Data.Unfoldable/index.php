<?php

namespace Data\Unfoldable;

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
      case 'Data_Unfoldable_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_Unfoldable_fromJust': $v = \Data\Maybe\majData_majMaybe_frommajJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Unfoldable_lessThanOrEq': $v = \Data\Ord\majData_majOrd_lessmajThanmajOrmajEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Unfoldable_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Unfoldable_unfoldableMaybe': $v = (object)["unfoldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Unfoldable_map = ($GLOBALS['Data_Unfoldable_map'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_map'));
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $__res = (($__global_Data_Unfoldable_map)($__global_Data_Tuple_fst))(($f)($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Unfoldable1_unfoldable1Maybe = ($GLOBALS['Data_Unfoldable1_unfoldable1Maybe'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Maybe'));
  $__res = $__global_Data_Unfoldable1_unfoldable1Maybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Unfoldable_unfoldableArray': $v = (object)["unfoldr" => ((((($GLOBALS['Data_Unfoldable_unfoldrArrayImpl'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldrArrayImpl')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'))))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))(function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Unfoldable_fromJust = ($GLOBALS['Data_Unfoldable_fromJust'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_fromJust'));
  $__res = $__global_Data_Unfoldable_fromJust;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))("\\Data\\Tuple\\majData_majTuple_fst"))("\\Data\\Tuple\\majData_majTuple_snd"), "Unfoldable10" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Unfoldable1_unfoldable1Array = ($GLOBALS['Data_Unfoldable1_unfoldable1Array'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Array'));
  $__res = $__global_Data_Unfoldable1_unfoldable1Array;
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


require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';





// Data_Unfoldable_Unfoldable$Dict
function majData_majUnfoldable_majUnfoldabledollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable_majUnfoldabledollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_UnfoldabledollarDict'] = __NAMESPACE__ . '\\majData_majUnfoldable_majUnfoldabledollarmajDict';

// Data_Unfoldable_unfoldr
function majData_majUnfoldable_unfoldr($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable_unfoldr';
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
$__res = ($v)->unfoldr;
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
$GLOBALS['Data_Unfoldable_unfoldr'] = __NAMESPACE__ . '\\majData_majUnfoldable_unfoldr';



// Data_Unfoldable_replicate
function majData_majUnfoldable_replicate($dictUnfoldable, $n = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable_replicate';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Unfoldable_lessThanOrEq = ($GLOBALS['Data_Unfoldable_lessThanOrEq'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_lessThanOrEq'));
  $__global_Data_Unfoldable_sub = ($GLOBALS['Data_Unfoldable_sub'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_sub'));
  $unfoldr1 = ($dictUnfoldable)->unfoldr;
  $step = function($i) use ($__global_Data_Unfoldable_lessThanOrEq, $v, $__global_Data_Unfoldable_sub) {
  $__num = \func_num_args();
  $__case_0 = (($__global_Data_Unfoldable_lessThanOrEq)($i))(0);
  $__match_0 = false;
  if (($__match_0 === false)) {
if (($__case_0 === true)) {
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
if (true) {
if (($__match_0 === false)) {
if (true) {
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $v, (($__global_Data_Unfoldable_sub)($i))(1)));
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
  $__res = (($unfoldr1)($step))($n);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Unfoldable_replicate'] = __NAMESPACE__ . '\\majData_majUnfoldable_replicate';

// Data_Unfoldable_replicateA
function majData_majUnfoldable_replicatemajA($dictApplicative, $dictUnfoldable = null, $dictTraversable = null, $n = null, $m = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable_replicatemajA';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Unfoldable_replicate = ($GLOBALS['Data_Unfoldable_replicate'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_replicate'));
  $replicate1 = ($__global_Data_Unfoldable_replicate)($dictUnfoldable);
  $sequence = (($dictTraversable)->sequence)($dictApplicative);
  $__res = ($sequence)((($replicate1)($n))($m));
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Unfoldable_replicateA'] = __NAMESPACE__ . '\\majData_majUnfoldable_replicatemajA';

// Data_Unfoldable_none
function majData_majUnfoldable_none($dictUnfoldable) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable_none';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ((($dictUnfoldable)->unfoldr)(\Data\Function\majData_majFunction_const(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))))($__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_none'] = __NAMESPACE__ . '\\majData_majUnfoldable_none';

// Data_Unfoldable_fromMaybe
function majData_majUnfoldable_frommajMaybe($dictUnfoldable) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majUnfoldable_frommajMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Unfoldable_map = ($GLOBALS['Data_Unfoldable_map'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_map'));
  $__res = (($dictUnfoldable)->unfoldr)(function($b) use ($__global_Data_Unfoldable_map) {
  $__num = \func_num_args();
  $__res = (($__global_Data_Unfoldable_map)(\Data\Function\majData_majFunction_flip((function() {
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
})(), ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")))))($b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Unfoldable_fromMaybe'] = __NAMESPACE__ . '\\majData_majUnfoldable_frommajMaybe';

