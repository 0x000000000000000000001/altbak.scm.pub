<?php

namespace Data\Newtype;

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
      case 'Data_Newtype_newtypeMultiplicative': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeLast': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeFirst': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeEndo': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeDual': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeDisj': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeConj': $v = (object)["Coercible0" => function($dollar__unused) {
  $__num = \func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Newtype_newtypeAdditive': $v = (object)["Coercible0" => function($dollar__unused) {
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


require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup.First/index.php';
require_once __DIR__ . '/../Data.Semigroup.Last/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

// Data_Newtype_coerce
function majData_majNewtype_coerce($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_coerce';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_coerce'] = __NAMESPACE__ . '\\majData_majNewtype_coerce';

// Data_Newtype_Newtype$Dict
function majData_majNewtype_majNewtypedollarmajDict($x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_majNewtypedollarmajDict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_NewtypedollarDict'] = __NAMESPACE__ . '\\majData_majNewtype_majNewtypedollarmajDict';

// Data_Newtype_wrap
function majData_majNewtype_wrap($dollar__unused) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_wrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_wrap'] = __NAMESPACE__ . '\\majData_majNewtype_wrap';

// Data_Newtype_wrap1
function majData_majNewtype_wrap1($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_wrap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_wrap1'] = __NAMESPACE__ . '\\majData_majNewtype_wrap1';

// Data_Newtype_unwrap
function majData_majNewtype_unwrap($dollar__unused) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_unwrap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_unwrap'] = __NAMESPACE__ . '\\majData_majNewtype_unwrap';

// Data_Newtype_unwrap1
function majData_majNewtype_unwrap1($__x) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_unwrap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 1);
  }
  $__res = $__x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Newtype_unwrap1'] = __NAMESPACE__ . '\\majData_majNewtype_unwrap1';

// Data_Newtype_underF2
function majData_majNewtype_undermajF2($dollar__unused___, $dollar__unused__ = null, $dollar__unused_ = null, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_undermajF2';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_underF2'] = __NAMESPACE__ . '\\majData_majNewtype_undermajF2';

// Data_Newtype_underF
function majData_majNewtype_undermajF($dollar__unused___, $dollar__unused__ = null, $dollar__unused_ = null, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_undermajF';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_underF'] = __NAMESPACE__ . '\\majData_majNewtype_undermajF';

// Data_Newtype_under2
function majData_majNewtype_under2($dollar__unused_, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_under2';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_under2'] = __NAMESPACE__ . '\\majData_majNewtype_under2';

// Data_Newtype_under
function majData_majNewtype_under($dollar__unused_, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_under';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_under'] = __NAMESPACE__ . '\\majData_majNewtype_under';

// Data_Newtype_un
function majData_majNewtype_un($dollar__unused, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_un';
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__global_Data_Newtype_unwrap1 = ($GLOBALS['Data_Newtype_unwrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap1'));
  $__res = $__global_Data_Newtype_unwrap1;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Newtype_un'] = __NAMESPACE__ . '\\majData_majNewtype_un';

// Data_Newtype_traverse
function majData_majNewtype_traverse($dollar__unused_, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_traverse';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_traverse'] = __NAMESPACE__ . '\\majData_majNewtype_traverse';

// Data_Newtype_overF2
function majData_majNewtype_overmajF2($dollar__unused___, $dollar__unused__ = null, $dollar__unused_ = null, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_overmajF2';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_overF2'] = __NAMESPACE__ . '\\majData_majNewtype_overmajF2';

// Data_Newtype_overF
function majData_majNewtype_overmajF($dollar__unused___, $dollar__unused__ = null, $dollar__unused_ = null, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_overmajF';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_overF'] = __NAMESPACE__ . '\\majData_majNewtype_overmajF';

// Data_Newtype_over2
function majData_majNewtype_over2($dollar__unused_, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_over2';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_over2'] = __NAMESPACE__ . '\\majData_majNewtype_over2';

// Data_Newtype_over
function majData_majNewtype_over($dollar__unused_, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_over';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_over'] = __NAMESPACE__ . '\\majData_majNewtype_over';









// Data_Newtype_modify
function majData_majNewtype_modify($dollar__unused, $fn = null, $t = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_modify';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Newtype_wrap1 = ($GLOBALS['Data_Newtype_wrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_wrap1'));
  $__global_Data_Newtype_unwrap1 = ($GLOBALS['Data_Newtype_unwrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_unwrap1'));
  $__res = ($__global_Data_Newtype_wrap1)(($fn)(($__global_Data_Newtype_unwrap1)($t)));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_modify'] = __NAMESPACE__ . '\\majData_majNewtype_modify';

// Data_Newtype_collect
function majData_majNewtype_collect($dollar__unused_, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_collect';
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Newtype_collect'] = __NAMESPACE__ . '\\majData_majNewtype_collect';

// Data_Newtype_alaF
function majData_majNewtype_alamajF($dollar__unused___, $dollar__unused__ = null, $dollar__unused_ = null, $dollar__unused = null, $v = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_alamajF';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__res = $__global_Data_Newtype_coerce;
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_alaF'] = __NAMESPACE__ . '\\majData_majNewtype_alamajF';

// Data_Newtype_ala
function majData_majNewtype_ala($dollar__unused__, $dollar__unused_ = null, $dollar__unused = null, $v = null, $f = null) {
  $__num = \func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'majData_majNewtype_ala';
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__global_Data_Newtype_coerce = ($GLOBALS['Data_Newtype_coerce'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_coerce'));
  $__global_Data_Newtype_wrap1 = ($GLOBALS['Data_Newtype_wrap1'] ?? \Data\Newtype\phpurs_eval_thunk('Data_Newtype_wrap1'));
  $__res = ($__global_Data_Newtype_coerce)(($f)($__global_Data_Newtype_wrap1));
  goto __end;;
  __end:
  return 5 < $__num ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
}
$GLOBALS['Data_Newtype_ala'] = __NAMESPACE__ . '\\majData_majNewtype_ala';

