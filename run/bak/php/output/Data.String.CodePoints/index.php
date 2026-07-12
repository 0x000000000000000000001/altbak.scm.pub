<?php

namespace Data\String\CodePoints;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.String.CodePoints/index.php';
require_once __DIR__ . '/../Data.String.CodeUnits/index.php';
require_once __DIR__ . '/../Data.String.Common/index.php';
require_once __DIR__ . '/../Data.String.Pattern/index.php';
require_once __DIR__ . '/../Data.String.Unsafe/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_String_CodePoints_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_String_CodePoints_mul': $v = ($GLOBALS['Data_Semiring_intMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intMul')); break;
      case 'Data_String_CodePoints_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_String_CodePoints_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_String_CodePoints_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_String_CodePoints_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_String_CodePoints_fromEnum': $v = ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')); break;
      case 'Data_String_CodePoints_compose': $v = ($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_composeImpl')); break;
      case 'Data_String_CodePoints_div': $v = ($GLOBALS['Data_EuclideanRing_intDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intDiv')); break;
      case 'Data_String_CodePoints_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Data_String_CodePoints_fromCharCode': $v = (($GLOBALS['Data_String_CodePoints_compose'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_compose')))(($GLOBALS['Data_String_CodeUnits_singleton'] ?? \Data\String\CodeUnits\phpurs_eval_thunk('Data_String_CodeUnits_singleton')), \Data\Enum\Data_Enum_toEnumWithDefaults(($GLOBALS['Data_Enum_boundedEnumChar'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_boundedEnumChar')), ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar')), ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar')))); break;
      case 'Data_String_CodePoints_singleton': $v = (($GLOBALS['Data_String_CodePoints__singleton'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints__singleton')))("\\Data\\String\\CodePoints\\Data_String_CodePoints_singletonFallback"); break;
      case 'Data_String_CodePoints_take': $v = (($GLOBALS['Data_String_CodePoints__take'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints__take')))("\\Data\\String\\CodePoints\\Data_String_CodePoints_takeFallback"); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
$ffi_Data_String_CodePoints = \call_user_func(function() {
if (!\function_exists('Data_String_CodePoints_utf8_ord')) {
    function Data_String_CodePoints_utf8_ord($char) {
        if ($char === '') return 0;
        $c0 = ord($char[0]);
        if ($c0 < 0x80) {
            return $c0;
        } elseif ($c0 < 0xE0) {
            return (($c0 & 0x1F) << 6) | (ord($char[1]) & 0x3F);
        } elseif ($c0 < 0xF0) {
            return (($c0 & 0x0F) << 12) | ((ord($char[1]) & 0x3F) << 6) | (ord($char[2]) & 0x3F);
        } else {
            return (($c0 & 0x07) << 18) | ((ord($char[1]) & 0x3F) << 12) | ((ord($char[2]) & 0x3F) << 6) | (ord($char[3]) & 0x3F);
        }
    }
}

if (!\function_exists('Data_String_CodePoints_utf8_chr')) {
    function Data_String_CodePoints_utf8_chr($code) {
        if ($code < 0x80) {
            return chr($code);
        } elseif ($code < 0x800) {
            return chr(0xC0 | ($code >> 6)) . chr(0x80 | ($code & 0x3F));
        } elseif ($code < 0x10000) {
            return chr(0xE0 | ($code >> 12)) . chr(0x80 | (($code >> 6) & 0x3F)) . chr(0x80 | ($code & 0x3F));
        } else {
            return chr(0xF0 | ($code >> 18)) . chr(0x80 | (($code >> 12) & 0x3F)) . chr(0x80 | (($code >> 6) & 0x3F)) . chr(0x80 | ($code & 0x3F));
        }
    }
}

$_unsafeCodePointAt0 = function($fallback, $str = null) use (&$_unsafeCodePointAt0) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_unsafeCodePointAt0) {

            return $_unsafeCodePointAt0(...\array_merge($__args, $more));
        };
    }
    return Data_String_CodePoints_utf8_ord(iconv_substr($str, 0, 1, 'UTF-8'));
};

$_codePointAt = function($fallback, $just = null, $nothing = null, $unsafeCodePointAt0 = null, $index = null, $str = null) use (&$_codePointAt) {
    if (\func_num_args() < 6) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_codePointAt) {

            return $_codePointAt(...\array_merge($__args, $more));
        };
    }
    $len = iconv_strlen($str, 'UTF-8');
    if ($index < 0 || $index >= $len) return $nothing;
    return $just($unsafeCodePointAt0(iconv_substr($str, $index, 1, 'UTF-8')));
};

$_countPrefix = function($fallback, $unsafeCodePointAt0 = null, $pred = null, $str = null) use (&$_countPrefix) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_countPrefix) {

            return $_countPrefix(...\array_merge($__args, $more));
        };
    }
    $len = iconv_strlen($str, 'UTF-8');
    for ($i = 0; $i < $len; $i++) {
        $char = iconv_substr($str, $i, 1, 'UTF-8');
        $cp = $unsafeCodePointAt0($char);
        if (!$pred($cp)) return $i;
    }
    return $len;
};

$_fromCodePointArray = function($singleton, $cps = null) use (&$_fromCodePointArray) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_fromCodePointArray) {

            return $_fromCodePointArray(...\array_merge($__args, $more));
        };
    }
    $result = "";
    foreach ($cps as $cp) {
        $result .= Data_String_CodePoints_utf8_chr($cp);
    }
    return $result;
};

$_singleton = function($fallback, $cp = null) use (&$_singleton) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_singleton) {

            return $_singleton(...\array_merge($__args, $more));
        };
    }
    return Data_String_CodePoints_utf8_chr($cp);
};

$_take = function($fallback, $n = null, $str = null) use (&$_take) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_take) {

            return $_take(...\array_merge($__args, $more));
        };
    }
    return iconv_substr($str, 0, $n, 'UTF-8');
};

$_toCodePointArray = function($fallback, $unsafeCodePointAt0 = null, $str = null) use (&$_toCodePointArray) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_toCodePointArray) {

            return $_toCodePointArray(...\array_merge($__args, $more));
        };
    }
    $len = iconv_strlen($str, 'UTF-8');
    $arr = [];
    for ($i = 0; $i < $len; $i++) {
        $arr[] = $unsafeCodePointAt0(iconv_substr($str, $i, 1, 'UTF-8'));
    }
    return $arr;
};

$exports['_unsafeCodePointAt0'] = $_unsafeCodePointAt0;
$exports['_codePointAt'] = $_codePointAt;
$exports['_countPrefix'] = $_countPrefix;
$exports['_fromCodePointArray'] = $_fromCodePointArray;
$exports['_singleton'] = $_singleton;
$exports['_take'] = $_take;
$exports['_toCodePointArray'] = $_toCodePointArray;
return $exports;
});
$GLOBALS['Data_String_CodePoints__singleton'] = $ffi_Data_String_CodePoints['_singleton'] ?? null;
$GLOBALS['Data_String_CodePoints__fromCodePointArray'] = $ffi_Data_String_CodePoints['_fromCodePointArray'] ?? null;
$GLOBALS['Data_String_CodePoints__toCodePointArray'] = $ffi_Data_String_CodePoints['_toCodePointArray'] ?? null;
$GLOBALS['Data_String_CodePoints__codePointAt'] = $ffi_Data_String_CodePoints['_codePointAt'] ?? null;
$GLOBALS['Data_String_CodePoints__countPrefix'] = $ffi_Data_String_CodePoints['_countPrefix'] ?? null;
$GLOBALS['Data_String_CodePoints__take'] = $ffi_Data_String_CodePoints['_take'] ?? null;
$GLOBALS['Data_String_CodePoints__unsafeCodePointAt0'] = $ffi_Data_String_CodePoints['_unsafeCodePointAt0'] ?? null;












// Data_String_CodePoints_CodePoint
function Data_String_CodePoints_CodePoint($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_CodePoints_CodePoint';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_CodePoints_CodePoint'] = __NAMESPACE__ . '\\Data_String_CodePoints_CodePoint';

// Data_String_CodePoints_unsurrogate
function Data_String_CodePoints_unsurrogate($lead, $trail = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_CodePoints_unsurrogate';
  if ($__num < 2) {
    if ($__num === 1) return function($trail) use ($lead, $__fn) { return $__fn($lead, $trail); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_CodePoints_add = ($GLOBALS['Data_String_CodePoints_add'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_add'));
  $__global_Data_String_CodePoints_mul = ($GLOBALS['Data_String_CodePoints_mul'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_mul'));
  $__global_Data_String_CodePoints_sub = ($GLOBALS['Data_String_CodePoints_sub'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_sub'));
  $__res = ($__global_Data_String_CodePoints_add)(($__global_Data_String_CodePoints_add)(($__global_Data_String_CodePoints_mul)(($__global_Data_String_CodePoints_sub)($lead, 55296), 1024), ($__global_Data_String_CodePoints_sub)($trail, 56320)), 65536);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_CodePoints_unsurrogate'] = __NAMESPACE__ . '\\Data_String_CodePoints_unsurrogate';

// Data_String_CodePoints_isTrail
function Data_String_CodePoints_isTrail($cu) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_CodePoints_isTrail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_CodePoints_conj = ($GLOBALS['Data_String_CodePoints_conj'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_conj'));
  $__global_Data_String_CodePoints_lessThanOrEq = ($GLOBALS['Data_String_CodePoints_lessThanOrEq'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_lessThanOrEq'));
  $__res = ($__global_Data_String_CodePoints_conj)(($__global_Data_String_CodePoints_lessThanOrEq)(56320, $cu), ($__global_Data_String_CodePoints_lessThanOrEq)($cu, 57343));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_CodePoints_isTrail'] = __NAMESPACE__ . '\\Data_String_CodePoints_isTrail';

// Data_String_CodePoints_isLead
function Data_String_CodePoints_isLead($cu) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_CodePoints_isLead';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_CodePoints_conj = ($GLOBALS['Data_String_CodePoints_conj'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_conj'));
  $__global_Data_String_CodePoints_lessThanOrEq = ($GLOBALS['Data_String_CodePoints_lessThanOrEq'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_lessThanOrEq'));
  $__res = ($__global_Data_String_CodePoints_conj)(($__global_Data_String_CodePoints_lessThanOrEq)(55296, $cu), ($__global_Data_String_CodePoints_lessThanOrEq)($cu, 56319));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_CodePoints_isLead'] = __NAMESPACE__ . '\\Data_String_CodePoints_isLead';

// Data_String_CodePoints_uncons
function Data_String_CodePoints_uncons($s) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_CodePoints_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_CodeUnits_length = ($GLOBALS['Data_String_CodeUnits_length'] ?? \Data\String\CodeUnits\phpurs_eval_thunk('Data_String_CodeUnits_length'));
  $__global_Data_String_CodePoints_fromEnum = ($GLOBALS['Data_String_CodePoints_fromEnum'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_fromEnum'));
  $__global_Data_String_Unsafe_charAt = ($GLOBALS['Data_String_Unsafe_charAt'] ?? \Data\String\Unsafe\phpurs_eval_thunk('Data_String_Unsafe_charAt'));
  $__global_Data_String_CodePoints_conj = ($GLOBALS['Data_String_CodePoints_conj'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_conj'));
  $__global_Data_String_CodePoints_isLead = ($GLOBALS['Data_String_CodePoints_isLead'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_isLead'));
  $__global_Data_String_CodePoints_isTrail = ($GLOBALS['Data_String_CodePoints_isTrail'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_isTrail'));
  $__global_Data_String_CodePoints_unsurrogate = ($GLOBALS['Data_String_CodePoints_unsurrogate'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_unsurrogate'));
  $__global_Data_String_CodeUnits_drop = ($GLOBALS['Data_String_CodeUnits_drop'] ?? \Data\String\CodeUnits\phpurs_eval_thunk('Data_String_CodeUnits_drop'));
  $v = ($__global_Data_String_CodeUnits_length)($s);
  $__case_0 = $v;
  switch ($__case_0) {
case 0:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case 1:
$__res = new Phpurs_Data1("Just", (object)["head" => ($__global_Data_String_CodePoints_fromEnum)(($__global_Data_String_Unsafe_charAt)(0, $s)), "tail" => ""]);
goto __end;;
break;
default:
$cu1 = ($__global_Data_String_CodePoints_fromEnum)(($__global_Data_String_Unsafe_charAt)(1, $s));
$cu0 = ($__global_Data_String_CodePoints_fromEnum)(($__global_Data_String_Unsafe_charAt)(0, $s));
$__case_0 = ($__global_Data_String_CodePoints_conj)(($__global_Data_String_CodePoints_isLead)($cu0), ($__global_Data_String_CodePoints_isTrail)($cu1));
switch ($__case_0) {
case true:
$__res = new Phpurs_Data1("Just", (object)["head" => ($__global_Data_String_CodePoints_unsurrogate)($cu0, $cu1), "tail" => ($__global_Data_String_CodeUnits_drop)(2, $s)]);
goto __end;;
break;
default:
$__res = new Phpurs_Data1("Just", (object)["head" => $cu0, "tail" => ($__global_Data_String_CodeUnits_drop)(1, $s)]);
goto __end;;
break;
};
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_CodePoints_uncons'] = __NAMESPACE__ . '\\Data_String_CodePoints_uncons';


// Data_String_CodePoints_singletonFallback
function Data_String_CodePoints_singletonFallback($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_CodePoints_singletonFallback';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_String_CodePoints_add = ($GLOBALS['Data_String_CodePoints_add'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_add'));
  $__global_Data_String_CodePoints_div = ($GLOBALS['Data_String_CodePoints_div'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_div'));
  $__global_Data_String_CodePoints_sub = ($GLOBALS['Data_String_CodePoints_sub'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_sub'));
  $__global_Data_String_CodePoints_mod = ($GLOBALS['Data_String_CodePoints_mod'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_mod'));
  $__global_Data_String_CodePoints_append = ($GLOBALS['Data_String_CodePoints_append'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_append'));
  $__global_Data_String_CodePoints_fromCharCode = ($GLOBALS['Data_String_CodePoints_fromCharCode'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_fromCharCode'));
  $__case_0 = $v;
  if (true) {
$cp = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if (true) {
$cp = $__case_0;
$lead = ($__global_Data_String_CodePoints_add)(($__global_Data_String_CodePoints_div)(($__global_Data_String_CodePoints_sub)($cp, 65536), 1024), 55296);
$trail = ($__global_Data_String_CodePoints_add)(($__global_Data_String_CodePoints_mod)(($__global_Data_String_CodePoints_sub)($cp, 65536), 1024), 56320);
$__res = ($__global_Data_String_CodePoints_append)(($__global_Data_String_CodePoints_fromCharCode)($lead), ($__global_Data_String_CodePoints_fromCharCode)($trail));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_CodePoints_singletonFallback'] = __NAMESPACE__ . '\\Data_String_CodePoints_singletonFallback';


// Data_String_CodePoints_takeFallback
function Data_String_CodePoints_takeFallback($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_CodePoints_takeFallback';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_CodePoints_uncons = ($GLOBALS['Data_String_CodePoints_uncons'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_uncons'));
  $__global_Data_String_CodePoints_append = ($GLOBALS['Data_String_CodePoints_append'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_append'));
  $__global_Data_String_CodePoints_singleton = ($GLOBALS['Data_String_CodePoints_singleton'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_singleton'));
  $__global_Data_String_CodePoints_sub = ($GLOBALS['Data_String_CodePoints_sub'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_sub'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (true) {
$n = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if (true) {
$n = $__case_0;
$s = $__case_1;
$v2 = ($__global_Data_String_CodePoints_uncons)($s);
$__case_0 = $v2;
if (((($__case_0)->tag === "Just") && is_object(($__case_0)->v0))) {
$head = (($__case_0)->v0)->head;
$tail = (($__case_0)->v0)->tail;
$__res = ($__global_Data_String_CodePoints_append)(($__global_Data_String_CodePoints_singleton)($head), \Data\String\CodePoints\Data_String_CodePoints_takeFallback(($__global_Data_String_CodePoints_sub)($n, 1), $tail));
goto __end;;
} else {
if (true) {
$__res = $s;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_String_CodePoints_takeFallback'] = __NAMESPACE__ . '\\Data_String_CodePoints_takeFallback';


