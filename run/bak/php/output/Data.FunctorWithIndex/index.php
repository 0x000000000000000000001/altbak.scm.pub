<?php

namespace Data\FunctorWithIndex;

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
      case 'Data_FunctorWithIndex_map': $v = (($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple')))->map; break;
      case 'Data_FunctorWithIndex_bimap': $v = (($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple')))->bimap; break;
      case 'Data_FunctorWithIndex_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_FunctorWithIndex_map1': $v = (($GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_functorMultiplicative')))->map; break;
      case 'Data_FunctorWithIndex_map2': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_FunctorWithIndex_map3': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_FunctorWithIndex_map4': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_FunctorWithIndex_map5': $v = (($GLOBALS['Data_Either_functorEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_functorEither')))->map; break;
      case 'Data_FunctorWithIndex_map6': $v = (($GLOBALS['Data_Monoid_Dual_functorDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_functorDual')))->map; break;
      case 'Data_FunctorWithIndex_map7': $v = (($GLOBALS['Data_Monoid_Disj_functorDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_functorDisj')))->map; break;
      case 'Data_FunctorWithIndex_bimap1': $v = (($GLOBALS['Data_Bifunctor_bifunctorEither'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorEither')))->bimap; break;
      case 'Data_FunctorWithIndex_map8': $v = (($GLOBALS['Data_Monoid_Conj_functorConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_functorConj')))->map; break;
      case 'Data_FunctorWithIndex_map9': $v = (($GLOBALS['Data_Monoid_Additive_functorAdditive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_functorAdditive')))->map; break;
      case 'Data_FunctorWithIndex_functorWithIndexTuple': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map = ($GLOBALS['Data_FunctorWithIndex_map'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Tuple_functorTuple = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  $__res = $__global_Data_Tuple_functorTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexMultiplicative': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map1 = ($GLOBALS['Data_FunctorWithIndex_map1'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map1'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map1)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Multiplicative_functorMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_functorMultiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_functorMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexMaybe': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map2 = ($GLOBALS['Data_FunctorWithIndex_map2'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map2'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map2)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexLast': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map3 = ($GLOBALS['Data_FunctorWithIndex_map3'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map3'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map3)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexIdentity': $v = (object)["mapWithIndex" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__case_0 = $f;
  $__case_1 = $v;
  $__match_0 = false;
  if (($__match_0 === false)) {
if (true) {
$f1 = $__case_0;
$a = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($f1)($__global_Data_Unit_unit))($a);
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
  $__global_Data_Identity_functorIdentity = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  $__res = $__global_Data_Identity_functorIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexFirst': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map4 = ($GLOBALS['Data_FunctorWithIndex_map4'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map4'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map4)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexEither': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map5 = ($GLOBALS['Data_FunctorWithIndex_map5'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map5'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map5)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Either_functorEither = ($GLOBALS['Data_Either_functorEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_functorEither'));
  $__res = $__global_Data_Either_functorEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexDual': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map6 = ($GLOBALS['Data_FunctorWithIndex_map6'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map6'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map6)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Dual_functorDual = ($GLOBALS['Data_Monoid_Dual_functorDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_functorDual'));
  $__res = $__global_Data_Monoid_Dual_functorDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexDisj': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map7 = ($GLOBALS['Data_FunctorWithIndex_map7'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map7'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map7)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Disj_functorDisj = ($GLOBALS['Data_Monoid_Disj_functorDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_functorDisj'));
  $__res = $__global_Data_Monoid_Disj_functorDisj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexConst': $v = (object)["mapWithIndex" => (function() {
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
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = $x;
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
  $__global_Data_Const_functorConst = ($GLOBALS['Data_Const_functorConst'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_functorConst'));
  $__res = $__global_Data_Const_functorConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexConj': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map8 = ($GLOBALS['Data_FunctorWithIndex_map8'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map8'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Conj_functorConj = ($GLOBALS['Data_Monoid_Conj_functorConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_functorConj'));
  $__res = $__global_Data_Monoid_Conj_functorConj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexArray': $v = (object)["mapWithIndex" => ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_mapWithIndexArray')), "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Functor_functorArray = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
  $__res = $__global_Data_Functor_functorArray;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_FunctorWithIndex_functorWithIndexAdditive': $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__global_Data_FunctorWithIndex_map9 = ($GLOBALS['Data_FunctorWithIndex_map9'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_map9'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_FunctorWithIndex_map9)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Data_Monoid_Additive_functorAdditive = ($GLOBALS['Data_Monoid_Additive_functorAdditive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_functorAdditive'));
  $__res = $__global_Data_Monoid_Additive_functorAdditive;
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
$ffi_Data_FunctorWithIndex = \call_user_func(function() {
  $exports = [];
$mapWithIndexArray = function($f, $xs = null) use (&$mapWithIndexArray) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$mapWithIndexArray) {
            return $mapWithIndexArray(...\array_merge($__args, $more));
        };
    }
    
    $len = \count($xs);
    $result = array_fill(0, $len, null);
    for ($i = 0; $i < $len; $i++) {
        $f1 = $f($i);
        $result[$i] = $f1($xs[$i]);
    }
    return $result;
};

$exports['mapWithIndexArray'] = $mapWithIndexArray;

return $exports;
  return $exports;
});
$GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] = $ffi_Data_FunctorWithIndex['mapWithIndexArray'] ?? null;


require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';














// Data_FunctorWithIndex_FunctorWithIndex$Dict
function majData_majFunctormajWithmajIndex_majFunctormajWithmajIndexdollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctormajWithmajIndex_majFunctormajWithmajIndexdollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_FunctorWithIndexdollarDict'] = __NAMESPACE__ . '\\majData_majFunctormajWithmajIndex_majFunctormajWithmajIndexdollarmajDict';

// Data_FunctorWithIndex_mapWithIndex
function majData_majFunctormajWithmajIndex_mapmajWithmajIndex($dict) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctormajWithmajIndex_mapmajWithmajIndex';
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
$__res = ($v)->mapWithIndex;
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
$GLOBALS['Data_FunctorWithIndex_mapWithIndex'] = __NAMESPACE__ . '\\majData_majFunctormajWithmajIndex_mapmajWithmajIndex';

// Data_FunctorWithIndex_mapDefault
function majData_majFunctormajWithmajIndex_mapmajDefault($dictFunctorWithIndex, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctormajWithmajIndex_mapmajDefault';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $mapWithIndex1 = ($dictFunctorWithIndex)->mapWithIndex;
  $__res = ($mapWithIndex1)(\Data\Function\majData_majFunction_const($f));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_mapDefault'] = __NAMESPACE__ . '\\majData_majFunctormajWithmajIndex_mapmajDefault';


// Data_FunctorWithIndex_functorWithIndexProduct
function majData_majFunctormajWithmajIndex_functormajWithmajIndexmajProduct($dictFunctorWithIndex, $dictFunctorWithIndex1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctormajWithmajIndex_functormajWithmajIndexmajProduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Product_functorProduct = ($GLOBALS['Data_Functor_Product_functorProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_functorProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_FunctorWithIndex_bimap = ($GLOBALS['Data_FunctorWithIndex_bimap'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_bimap'));
  $mapWithIndex1 = ($dictFunctorWithIndex)->mapWithIndex;
  $functorProduct = ($__global_Data_Functor_Product_functorProduct)((($dictFunctorWithIndex)->Functor0)($__global_Prim_undefined));
  $mapWithIndex2 = ($dictFunctorWithIndex1)->mapWithIndex;
  $functorProduct1 = ($functorProduct)((($dictFunctorWithIndex1)->Functor0)($__global_Prim_undefined));
  $__res = (object)["mapWithIndex" => (function() use ($__global_Data_FunctorWithIndex_bimap, $mapWithIndex1, $mapWithIndex2) {
  $__fn = function($f, $v = null) use ($__global_Data_FunctorWithIndex_bimap, $mapWithIndex1, $mapWithIndex2, &$__fn) {
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
$__res = ((($__global_Data_FunctorWithIndex_bimap)(($mapWithIndex1)(function($__x) use ($f1) {
  $__num = \func_num_args();
  $__res = ($f1)((function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($mapWithIndex2)(function($__x) use ($f1) {
  $__num = \func_num_args();
  $__res = ($f1)((function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($fga);
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
})(), "Functor0" => function($dollar__unused) use ($functorProduct1) {
  $__num = \func_num_args();
  $__res = $functorProduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexProduct'] = __NAMESPACE__ . '\\majData_majFunctormajWithmajIndex_functormajWithmajIndexmajProduct';









// Data_FunctorWithIndex_functorWithIndexCoproduct
function majData_majFunctormajWithmajIndex_functormajWithmajIndexmajCoproduct($dictFunctorWithIndex, $dictFunctorWithIndex1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctormajWithmajIndex_functormajWithmajIndexmajCoproduct';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Coproduct_functorCoproduct = ($GLOBALS['Data_Functor_Coproduct_functorCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_functorCoproduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_FunctorWithIndex_bimap1 = ($GLOBALS['Data_FunctorWithIndex_bimap1'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_bimap1'));
  $mapWithIndex1 = ($dictFunctorWithIndex)->mapWithIndex;
  $functorCoproduct = ($__global_Data_Functor_Coproduct_functorCoproduct)((($dictFunctorWithIndex)->Functor0)($__global_Prim_undefined));
  $mapWithIndex2 = ($dictFunctorWithIndex1)->mapWithIndex;
  $functorCoproduct1 = ($functorCoproduct)((($dictFunctorWithIndex1)->Functor0)($__global_Prim_undefined));
  $__res = (object)["mapWithIndex" => (function() use ($__global_Data_FunctorWithIndex_bimap1, $mapWithIndex1, $mapWithIndex2) {
  $__fn = function($f, $v = null) use ($__global_Data_FunctorWithIndex_bimap1, $mapWithIndex1, $mapWithIndex2, &$__fn) {
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
$e = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = ((($__global_Data_FunctorWithIndex_bimap1)(($mapWithIndex1)(function($__x) use ($f1) {
  $__num = \func_num_args();
  $__res = ($f1)((function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($mapWithIndex2)(function($__x) use ($f1) {
  $__num = \func_num_args();
  $__res = ($f1)((function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($e);
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
})(), "Functor0" => function($dollar__unused) use ($functorCoproduct1) {
  $__num = \func_num_args();
  $__res = $functorCoproduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexCoproduct'] = __NAMESPACE__ . '\\majData_majFunctormajWithmajIndex_functormajWithmajIndexmajCoproduct';



// Data_FunctorWithIndex_functorWithIndexCompose
function majData_majFunctormajWithmajIndex_functormajWithmajIndexmajCompose($dictFunctorWithIndex, $dictFunctorWithIndex1 = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctormajWithmajIndex_functormajWithmajIndexmajCompose';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Functor_Compose_functorCompose = ($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Tuple_curry = ($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry'));
  $mapWithIndex1 = ($dictFunctorWithIndex)->mapWithIndex;
  $functorCompose = ($__global_Data_Functor_Compose_functorCompose)((($dictFunctorWithIndex)->Functor0)($__global_Prim_undefined));
  $mapWithIndex2 = ($dictFunctorWithIndex1)->mapWithIndex;
  $functorCompose1 = ($functorCompose)((($dictFunctorWithIndex1)->Functor0)($__global_Prim_undefined));
  $__res = (object)["mapWithIndex" => (function() use ($mapWithIndex1, $mapWithIndex2, $__global_Data_Tuple_curry) {
  $__fn = function($f, $v = null) use ($mapWithIndex1, $mapWithIndex2, $__global_Data_Tuple_curry, &$__fn) {
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
$__res = (($mapWithIndex1)(function($__x) use ($mapWithIndex2, $__global_Data_Tuple_curry, $f1) {
  $__num = \func_num_args();
  $__res = ($mapWithIndex2)((($__global_Data_Tuple_curry)($f1))($__x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($fga);
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
})(), "Functor0" => function($dollar__unused) use ($functorCompose1) {
  $__num = \func_num_args();
  $__res = $functorCompose1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexCompose'] = __NAMESPACE__ . '\\majData_majFunctormajWithmajIndex_functormajWithmajIndexmajCompose';


// Data_FunctorWithIndex_functorWithIndexApp
function majData_majFunctormajWithmajIndex_functormajWithmajIndexmajApp($dictFunctorWithIndex) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majFunctormajWithmajIndex_functormajWithmajIndexmajApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mapWithIndex1 = ($dictFunctorWithIndex)->mapWithIndex;
  $functorApp = (($dictFunctorWithIndex)->Functor0)($__global_Prim_undefined);
  $__res = (object)["mapWithIndex" => (function() use ($mapWithIndex1) {
  $__fn = function($f, $v = null) use ($mapWithIndex1, &$__fn) {
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
$x = $__case_1;
if (($__match_0 === false)) {
if (true) {
$__res = (($mapWithIndex1)($f1))($x);
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
})(), "Functor0" => function($dollar__unused) use ($functorApp) {
  $__num = \func_num_args();
  $__res = $functorApp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_FunctorWithIndex_functorWithIndexApp'] = __NAMESPACE__ . '\\majData_majFunctormajWithmajIndex_functormajWithmajIndexmajApp';


